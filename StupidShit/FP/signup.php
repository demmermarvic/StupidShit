<?php
// Start output buffering
ob_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'perfectthreads');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate password strength
    if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/', $password)) {
        die("Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, and one number.");
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Check for duplicate username or email
    $checkQuery = "SELECT * FROM users WHERE email='$email' OR username='$username'";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0) {
        die("Username or Email already exists.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($query)) {
        echo "Sign-Up Successful!";
        header("Location: index.html");
        exit();
    } else {
        die("Error: " . $conn->error . " - Please contact support.");
    }
}

$conn->close();
ob_end_flush();
?>

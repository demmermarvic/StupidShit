<?php
include 'db_connect.php';
session_start();  // Start session for handling login status

// Handle User Registration
if (isset($_POST['signUp'])) {
    $firstName = htmlspecialchars($_POST['fName']);  // Sanitize input
    $lastName = htmlspecialchars($_POST['lName']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements for security
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email Address Already Exists!";
        header("Location: index.php");
        exit();
    } else {
        // Insert user into the database
        $insertQuery = $conn->prepare("INSERT INTO users(firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        if ($insertQuery->execute()) {
            $_SESSION['success'] = "Registration successful! Please log in.";
            header("Location: index.php");  // Redirect to login page after successful registration
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $conn->error;
            header("Location: index.php");
            exit();
        }
    }
}

// Handle User Login
if (isset($_POST['signIn'])) {
    $email = htmlspecialchars($_POST['email']);  // Sanitize input
    $password = $_POST['password'];

    // Use prepared statement to retrieve user data
    $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];  // Store user email in session
            header("Location: index.php");  // Redirect to the main page
            exit();
        } else {
            $_SESSION['error'] = "Incorrect Password";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email Not Found";
        header("Location: index.php");
        exit();
    }
}
?>

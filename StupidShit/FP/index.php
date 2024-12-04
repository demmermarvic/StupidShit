<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailorFit - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="Logo.jpg" alt="TailorFit Logo" width="185">
            </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html"></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)">About Us</a>
                    <div class="dropdown-content">
                        <a href="our-story.html">Our Story</a>
                        <a href="our-tailors.html">Our Tailors</a>  
                        <a href="why-choose-perfectthreads.html">Why Choose PerfectThreads</a>
                    </div>
                </li>
                <li><a href="styles.html">Styles</a></li>
                <li><a href="fabrics.html">Fabrics</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="book-appointment.html">Book Appointment</a></li>
                <li class="notification-icon dropdown">
                    <a href="javascript:void(0)">
                        <i class="fa fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="#">.</a>
                        <a href="#">.</a>
                        <a href="#">.</a>
                    </div>
                </li>            
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="fa fa-user-circle" style="font-size: 1.5rem; color: #1A3636;"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="javascript:void(0)" onclick="openAccountModal()">My Account</a>
                        <a href="track-order.html">Track My Order</a>   
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>SINCE 1952</h1>
            <p>More than a name. A history and tradition of exceptional tailoring.</p>
            <button class="find-out-more">Find Out More</button>
        </div>
    </section>

    <!-- Account Modal -->
    <div id="accountModal" class="account-modal">
        <div class="modal-content">
            <!-- Close Button -->
            <span class="close" onclick="closeModal()">&times;</span>

            <!-- Sign-up and Sign-in Forms -->
            <div class="container" id="signup" style="display:none;">
                <h1 class="form-title">Register</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fName" id="fName" placeholder="First Name" required>
                        
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                        
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="signUpEmail" placeholder="Email" required>
                        
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="signUpPassword" placeholder="Password" required>
                        
                    </div>
                    <input type="submit" class="btn" value="Sign Up" name="signUp">
                </form>
                <p class="or">----------or--------</p>

                <div class="links">
                    <p>Already Have an Account?</p>
                    <button id="signInButton">Sign In</button>
                </div>
            </div>

            <div class="container" id="signIn" style="display:block;">
                <h1 class="form-title">Sign In</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="signInEmail" placeholder="Email" required>
                        <label for="signInEmail">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="signInPassword" placeholder="Password" required>
                        <label for="signInPassword">Password</label>
                    </div>
                    <p class="recover">
                        <a href="#">Forgot your password?</a>
                    </p>
                    <input type="submit" class="btn" value="Sign In" name="signIn">
                </form>
                <p class="or">----------or--------</p>
                <div class="links">
                    <p>Don't have an account yet?</p>
                    <button id="signUpButton">Sign Up</button> <!-- Ensure this is correctly placed -->
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <ul>
                <li><a href="about.html">Company</a></li>
                <li><a href="return-policy.html">Customer</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>

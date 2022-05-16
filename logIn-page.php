<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Radius - Signin/Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <?php session_start(); ?>
</head>

<body>
    <header class="header">

        <a href="index.php" class="logo">
            <img src="images/books.png" alt="">
        </a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="aboutPage.php">About</a>
            <a href="categoryPage.html">Books</a>
            <!-- <a href="genrePage.html">genre</a> -->
            <a href="contectPage.php">Contact</a>
            <?php
            if (!isset($_SESSION['name'])) {
            ?>
            <a href="logIn-page.php">LogIn</a>
            <?php
            } else {
            ?>
            <a href="php/user-profile.php"><?php echo $_SESSION['name']; ?></a>
            <?php
            }
            ?>
            }
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-bars" id="category-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>
    <div class="container" id="container">
        <div class="form-container sign-up-container">{}
            <form autocomplete="off" method="post" action="php/signUp.php" onSubmit="return validate(this);"
                name="form">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="name" />
                <input type="text" placeholder="Email" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form autocomplete="off" method="post" action="php/loginProcess.php" onSubmit="return validate(this);"
                name="form">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <!-- <span>or use your account</span> -->
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                <span style="color: green;">
                    <?php echo $_SESSION['status']; ?>
                </span>
                <?php unset($_SESSION['status']);
                }
                ?>
                <input type="email" placeholder="Email" name="uname" />
                <input type="password" placeholder="Password" name="pwd" />
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/JS/main.js"></script>
</body>

</html>
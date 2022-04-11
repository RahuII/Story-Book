<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/css1.css"> -->
    <link rel="stylesheet" href="css/contect.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo">
            <img src="images/books.png" alt="">
        </a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="aboutPage.php">About</a>
            <a href="booksPage.php">Books</a>
            <!-- <a href="genrePage.html">genre</a> -->
            <a href="contectPage.php">contact</a>
            <a href="logIn-page.php">LogIn</a>
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
    <div class="main">
        <h1 class="contect-us">Contact us</h1>
        <hr width="2px" color="white">
        <hr>
        <h1 class="main-left" style="padding-left: 60rem ;"> Have a doubt?</h1>
        <div style="margin-left:10% ;">

            <h3>Tell us about your vision:</h3>
            <ul>
                <li>Which challenges are you facing?</li>
                <li>What are your goals and expectations?</li>
                <li>What would success look like?</li>
                <li>How much are you planning to spend to get there?</li>
            </ul>
        </div>
        <form action="" class="form-1">
            <center>
                <legend>
                    <label for="">What can we do for you?</label><br>
                    <button>Story</button>
                    <button>Book</button>
                    <button>other</button><br>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email"><br>
                    <textarea name="" id="" cols="50" rows="5" placeholder="details"></textarea><br>
                    <a class="send" href="">

                        Send request

                    </a>
                </legend>
            </center>
        </form>
    </div>
    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">category</a>
            <!-- <a href="#">genre</a> -->
            <a href="#">contact</a>
            <a href="#">blogs</a>
        </div>
        <div class="credit">created by <span>@rahul&vishva</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>
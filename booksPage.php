<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    ?>
    <title>Category</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/category.css">
</head>


<body>
    <header class="header">

        <a href="index.php" class="logo">
            <img src="images/books.png" alt="">
        </a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="aboutPage.php">About</a>
            <a href="booksPage.php">books</a>
            <!-- <a href="genrePage.html">genre</a> -->
            <a href="contactPage.php">contact</a>
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

    <center>

        <div class="main">
            <h1 style="color: white">Top Trending</h1>

            <!--cards -->

            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kkoc70w0/book/t/u/t/the-blue-umbrella-original-imafzz5xag498yzt.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->


            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kialrww0-0/book/m/g/f/buddha-tales-original-imafy3zz2mmhjgjj.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->


            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kz5vwy80/book/b/j/s/harry-potter-and-the-philosopher-s-stone-original-imagb84gbq6ue94n.jpeg?q=70">
                </div>
                <div class="images-title">
                    <div class="title">
                        <h1>
                            Write title Here</h1>
                    </div>
                    <div class="des">
                        <p>You can Add Description Here...</p>
                        <button>Read More...</button>
                    </div>
                </div>
            </div>
            <!--cards -->


            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kxhvf680/book/e/0/g/how-i-taught-my-grand-mother-to-read-original-imag9xnaqhbsjkqy.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Harry Potter and the Order of the Phoenix</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->


            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kz5vwy80/book/t/m/9/harry-potter-and-the-order-of-the-phoenix-original-imagb84rs8xm23xy.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->

            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/ki96c280-0/book/c/l/d/50-greatest-short-stories-original-imafy373uwssa4hj.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Greatest Short Stories</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->

            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kvpklu80/book/p/n/w/the-brave-original-imag8juzv6zz6mfw.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>

                </div>
            </div>
            <!--cards -->


            <div class="card">

                <div class="image">
                    <img
                        src="https://rukminim1.flixcart.com/image/612/612/kiyw9e80-0/book/5/j/e/the-folk-of-the-air-series-boxset-original-imafymzfkfktysfz.jpeg?q=70">
                </div>
                <div class="title">
                    <h1>
                        The Folk of the Air</h1>
                </div>
                <div class="des">
                    <p>You can Add Description Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
        </div>
    </center>

    <!-- category section ends -->

    <!-- footer section starts  -->

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
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Story Book</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/css1.css"> -->
    <link rel="stylesheet" href="css/about.css">
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

    <section style="padding: 0 0 0 0; padding-top: 6%;">
        <div style="height: 280px; background-color: #13131a; ">
            <h1 align="center" style=" font-size: 100px; color: rgb(115, 105, 105); font-family: 'Eczar', serif; ">
                About Us</h1>

            <center>
                <hr style="height: 2px; background-color: #ccc;border: none; width: 20%; ;">
                <h3 style="color: white; font-size: 50px; padding-top: 10px;">Our Story</h3>
            </center>
        </div>
    </section>
    <section class="motivation" id="about">

        <div class="row">

            <div class="image">
                <img src="images/about.jpg" alt="">
            </div>

            <div class="content">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum laboriosam nesciunt in
                    labore aliquam? Ab eveniet repudiandae velit iusto explicabo, rerum est pariatur vero dolores hic
                    natus reprehenderit quo!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et error, veritatis doloribus qui neque
                    eveniet assumenda temporibus sit? Ipsum enim dolores culpa temporibus adipisci sunt animi sapiente
                    mollitia reiciendis maiores.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt debitis sapiente iure perferendis
                    ea inventore ipsam nisi ullam dolores magnam, suscipit atque assumenda praesentium. Enim vel
                    laudantium animi cumque distinctio.</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>
    <section class="motivation">

        <div class="row">

            <div class="content">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum laboriosam nesciunt in
                    labore aliquam? Ab eveniet repudiandae velit iusto explicabo, rerum est pariatur vero dolores hic
                    natus reprehenderit quo!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et error, veritatis doloribus qui neque
                    eveniet assumenda temporibus sit? Ipsum enim dolores culpa temporibus adipisci sunt animi sapiente
                    mollitia reiciendis maiores.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt debitis sapiente iure perferendis
                    ea inventore ipsam nisi ullam dolores magnam, suscipit atque assumenda praesentium. Enim vel
                    laudantium animi cumque distinctio.</p>
            </div>

        </div>
    </section>

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
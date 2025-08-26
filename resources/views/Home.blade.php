<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- header section start -->

    <section class="header">
        <a href="Home" class="logo">Lyrics</a>

        <nav class="navbar">
            <a href="Home" class="active">HOME</a>
            <a href="Songs">SONGS</a>
            <a href="About">ABOUT</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section end -->

    <!-- home section start -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(../img/cover2.jpg) no-repeat">
                    <div class="content">
                        <h3>ONE OK ROCK</h3>
                        <a href="package.php" class="btn">Discover More!</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(../img/bg1.webp) no-repeat">
                    <div class="content">
                        <h3>LUXURY DISEASE TOUR</h3>
                        <a href="package.php" class="btn">Discover More!</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(../img/bg2.png) no-repeat">
                    <div class="content">
                        <h3>Explore The Songs</h3>
                        <a href="package.php" class="btn">Discover More!</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section end -->

    <!-- home package section start -->

    <section class="home-packages">

        <h1 class="heading-title">ONE OK ROCK'S SONGS</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/song1.jpeg') }}" alt="">
                </div>
                <div class="content">
                    <h3>Dystopia</h3>
                    <a href="" class="btn">Listen Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/Ambitions.jpeg') }}" alt="">
                </div>
                <div class="content">
                    <h3>We Are</h3>
                    <a href="" class="btn">Listen Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/Jinsei×Boku=.jpeg') }}" alt="">
                </div>
                <div class="content">
                    <h3>Clock Strikes</h3>
                    <a href="" class="btn">Listen Now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="Songs" class="btn">Load More</a></div>

    </section>

    <!-- home package section end -->

    <!-- inquiries section start -->

    <section class="question">

        <h1 class="heading-title">Request a Song</h1>

        <form action="inquiries_form.php" method="post" class="question-form">

            <div class="flex">
                <div class="inputBox">
                    <input type="text" placeholder="Your Name" name="name">
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="Your Email" name="email">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Song Title" name="subject">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="The Reason" name="question">
                </div>
            </div>

            <input type="submit" value="Submit" class="btn" name="send">

        </form>

    </section>

    <!-- inquiries section end -->










    <!-- footer section start -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="Home"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="Songs"> <i class="fas fa-angle-right"></i> Songs</a>
                <a href="About"> <i class="fas fa-angle-right"></i> About</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter/<b>X</b> </a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            </div>

        </div>

        <div class="credit"> Created By <span>Dynath</span> | All Rights Reserved </div>

    </section>

    <!-- footer section end -->








    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

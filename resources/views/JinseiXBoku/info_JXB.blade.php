<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JinseiXBoku</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/albuminfo.css') }}">

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

    <div class="album-container">
        <div class="album-cover" style="background-image: url(./img/Jinsei×Boku=.jpeg);"></div>
        <div class="album-info">
            <h1>人生×僕= (Jinsei x Boku=)</h1>
            <p>ONE OK ROCK</p>
            <p>Released March 6, 2013</p>
            <div class="tracklist">
                <h2>Tracklist</h2>
                <ul>
                    <li>
                        <span class="track-title">The Beginning <a href="#"><span
                                    class="lyrics">LYRICS</span></a></span>
                        <span class="track-plays">21K</span>
                    </li>
                    <li>
                        <span class="track-title">Clock Strikes <a href="#"><span
                                    class="lyrics">LYRICS</span></a></span>
                        <span class="track-plays">84K</span>
                    </li>
                    <li>
                        <span class="track-title">Deeper Deeper <a href="#"><span
                                    class="lyrics">LYRICS</span></a></span>
                        <span class="track-plays">11.5K</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>


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
    <script src="{{ asset('js/#') }}"></script>
</body>

</html>

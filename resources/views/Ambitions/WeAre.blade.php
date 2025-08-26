<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambitions</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/lyric.css') }}">

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

    <!-- lyric section start -->

    <div class="lyric-container">
        <div class="song-cover" style="background-image: url(./img/Ambitions.jpeg);"></div>
        <div class="song-info">
            <h1>We Are Lyrics</h1>
            <p>ONE OK ROCK</p>

            <section class="lyrics">
                <h2>Lyrics</h2>
                <div class="tambah"><a href="/WeAre/Tambah"><i class="fa-solid fa-plus"></i></a></div>
                <div class="edit"><a href="/WeAre/Edit/{id}"><i class="fa-solid fa-pen"></i></a></div>
                <div class="hapus"><a href="/WeAre/Hapus/{id}"><i class="fa-solid fa-trash-can"></i></a>
                </div>

                <p>
                    [Intro]<br>
                    We are, we are<br>
                    We are, we are<br>
                    <br>
                    [Verse 1] <br>
                    They think that we're no one <br>
                    We're nothing, not sorry <br>
                    They push us <br>
                    It’s too late, it’s too late <br>
                    Not going back <br>
                    <br>
                    [Verse 2] <br>
                    They think we are made up <br>
                    Of all of our failures <br>
                    They think we are foolish <br>
                    And that’s how the story goes <br>
                    <br>
                    [Pre-Chorus] <br>
                    They stand for nothing <br>
                    They’re lifeless and cold <br>
                    Anything they say <br>
                    Will never break our hearts of gold <br>
                    <br>
                    [Chorus] <br>
                    When you’re standing on the edge <br>
                    So young and hopeless <br>
                    Got demons in your head <br>
                    We are, we are <br>
                    No ground beneath your feet <br>
                    Not here to hold you <br>
                    ‘Cause we are, we are <br>
                    The colors in the dark <br>

                </p>
            </section>
        </div>
    </div>
    <!-- lyric section end -->

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

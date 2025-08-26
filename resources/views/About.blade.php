<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file -->
    <link rel="stylesheet" href="{{asset('css/about.css')}}">

</head>
<body>

<!-- header section start -->

<section class="header">
    <a href="Home" class="logo">Lyrics</a>

    <nav class="navbar">
        <a href="Home">HOME</a>
        <a href="Songs">SONGS</a>
        <a href="About" class="active">ABOUT</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end -->
<div class="parallax intro"></div>

<!-- about section start -->

<section class="about">
    <div class="band-info-container">
        <div class="roles">
          <p>VOCAL: <span>TAKA</span></p>
          <p>GUITAR: <span>TORU</span></p>
          <p>BASS: <span>RYOTA</span></p>
          <p>DRUMS: <span>TOMOYA</span></p>
        </div>
        <div class="description">
          <p>ONE OK ROCK is a Japanese rock band formed in 2005 and debuted in 2007.</p>
          <p>ONE OK ROCK has cultivated a following among the youth for their mix of emo and rock music paired with breathtaking live performances.</p>
          <p>Debuting in 2007, the band rose to the top of musical prominence, performing on stages from live house venues and summer festivals to the renowned Nippon Budokan. Their journey continued as they conquered outdoor stadiums, arenas, and dome venues to audiences across Japan.</p>
          <p>Beyond Japan, they inked a deal with an international label, taking their music to new horizons and leading to shows in the U.S., Europe, and Asia. Last year the band released “Luxury Disease” and a successful North American tour ensued, followed with a dome tour in Japan that was a complete success. The band then joined Muse on their US and EU tour and are currently scheduled to end this year with their largest Asian arena tour to date.</p>
        </div>
      </div>

</section>












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
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
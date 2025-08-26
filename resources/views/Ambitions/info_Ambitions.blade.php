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
        <div class="album-cover" style="background-image: url(./img/Ambitions.jpeg);"></div>
        <div class="album-info">
            <h1>Ambitions</h1>
            <p>ONE OK ROCK</p>
            <p>Released January 13, 2017</p>
            <div class="tracklist">
                <h2>Tracklist <div class="tambah"><a href="/Tambah">Add Song<i class="fa-solid fa-plus"></i></a></div>
                </h2>
                <ul>
                    <?php $i = 0; ?>
                    @foreach ($ambitions_tracklist as $a)
                        <li>
                            {{-- <span class="track-number">{{ $a->song_id }}</span> --}}
                            <span class="track-number"><?php $i += 1;
                            echo $i; ?></span>
                            <span class="track-title">{{ $a->song_name }} <a href="{{ $a->link }}"><span
                                        class="lyrics">LYRICS</span></a></span>
                            <span class="track-plays">{{ $a->playtime }}</span>
                            <div class="edit"><a href="/Edit/{{ $a->song_id }}"><i class="fa-solid fa-pen"></i></a>
                            </div>
                            <div class="hapus"><a href="/Hapus/{{ $a->song_id }}"><i
                                        class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </li>
                        {{-- <li>
                            <span class="track-title">{{ $a->song_name }} <a href="#"><span
                                        class="lyrics">LYRICS</span></a></span>
                            <span class="track-plays">60.5K</span>
                        </li>
                        <li>
                            <span class="track-title">{{ $a->song_name }} <a href="#"><span
                                        class="lyrics">LYRICS</span></a></span>
                            <span class="track-plays">36.1K</span>
                        </li> --}}
                    @endforeach
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

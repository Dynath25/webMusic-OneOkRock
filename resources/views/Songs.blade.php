<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/songs.css') }}">

</head>

<body>
    <!-- header section start -->

    <section class="header">
        <a href="Home" class="logo">Lyrics</a>

        <nav class="navbar">
            <a href="Home">HOME</a>
            <a href="Songs" class="active">SONGS</a>
            <a href="About">ABOUT</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section end -->

    <div class="album-container">
        {{-- @foreach ($albums as $a) --}}
        <div class="slide">
            <div class="album" style="background-image: url(./img/Detox.png);">
                <div class="content">
                    <div class="name">Detox</div>
                    <div class="des">Expected February 21, 2025.</div>
                    <button><a href="info_Detox">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Niche_Syndrome.jpeg);">
                <div class="content">
                    <div class="name">Niche Syndrome</div>
                    <div class="des">Released June 9, 2010.</div>
                    <button><a href="info_NicheSyn">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Zankyo_Reference.jpg);">
                <div class="content">
                    <div class="name">Zankyo Reference</div>
                    <div class="des">Released October 5, 2011.</div>
                    <button><a href="info_ZanRef">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Jinsei×Boku=.jpeg);">
                <div class="content">
                    <div class="name">Jinsei×Boku=</div>
                    <div class="des">Released March 6, 2013.</div>
                    <button><a href="info_JXB">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Ambitions.jpeg);">
                <div class="content">
                    <div class="name">Ambitions</div>
                    <div class="des">Released January 13, 2017.</div>
                    <button><a href="info_Ambitions">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Eye_of_The_Storm.jpg);">
                <div class="content">
                    <div class="name">Eye Of The Storm</div>
                    <div class="des">Released February 15, 2019.</div>
                    <button><a href="info_EOTS">See More</a></button>
                </div>
            </div>
            <div class="album" style="background-image: url(./img/Luxury_Disease_cover.jpg);">
                <div class="content">
                    <div class="name">Luxury Disease</div>
                    <div class="des">Released September 9, 2022.</div>
                    <button><a href="info_LuxDis">See More</a></button>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

        <div class="button">
            <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

    </div>

    <div class="charts-container">
        <table>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="{{ asset('img/song1.jpeg') }}" alt="Dystopia"></td>
                    <td>Dystopia <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥 136</span></td>
                    <td>4.6M</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="{{ asset('img/Niche_Syndrome.jpeg') }}" alt="Wherever You Are"></td>
                    <td>Wherever You Are <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥128</span></td>
                    <td>167M</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="{{ asset('img/song5.png') }}" alt="Delusion:All"></td>
                    <td>Delusion:All <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥 105</span></td>
                    <td>18M</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="{{ asset('img/Eye_of_The_Storm.jpg') }}" alt="Stand Out Fit In"></td>
                    <td>Stand Out Fit In <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥 93</span></td>
                    <td>122M</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="{{ asset('img/Jinsei×Boku=.jpeg') }}" alt="The Beginning"></td>
                    <td>The Beginning <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥 81</span></td>
                    <td>120M</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="{{ asset('img/Ambitions.jpeg') }}" alt="We Are"></td>
                    <td>We Are <span class="lyrics">LYRICS</span></td>
                    <td><span class="fire">🔥 69</span></td>
                    <td>73M</td>
                </tr>
            </tbody>
        </table>
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
    <script src="{{ asset('js/album.js') }}"></script>
</body>

</html>

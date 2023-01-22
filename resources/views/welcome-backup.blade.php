<html lang="en">

<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://hourglassbreathless.netlify.app/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

    <title>Beta</title>
</head>

<body>

<main class="main m-0 p-0 ">


    <div class="header row  m-0 p-0">
        <!-- header_clock-lg-->
        <div class="header_clock text-center d-none d-md-block col-md-4 order-md-1">
            <div class="clock-container">
                <div id="clock"></div>
                <div id='date' class="date"></div>
                <div id="dayname" class="dayname"></div>
            </div>
        </div>

        <!-- header_weather-lg -->
        <div class="header_weather d-none d-md-block m-0 p-0  col-md-4  order-md-3  ">
            <div class="container d-flex">
                <div>
                    <img src="/images/Icons/w.jpg" alt="" srcset="">
                    <img src="/images/Icons/w.jpg" alt="" srcset="">
                    <img src="/images/Icons/w.jpg" alt="" srcset="">

                </div>
                <div>WEATHER</div>

            </div>


        </div>

        <!-- header_logo-lg -->
        <div class="header_logo p-0 m-0 col-md-4 col-12  order-md-2">
            <img src="/images/carousel-images/logo.png" alt="">
        </div>

    </div>

    <!-- carousel_lg -->
    <div class="carousel m-0 p-0 row d-none d-md-block col-md-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders->chunk(6) as $count => $item)
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="row justify-content-center">
                            <div class="imgcontainer">
                                @foreach($item as $event)
                                    <div class="whole_img">
                                        <img src="images/carousel-images/yoga-2.jpg" class="w-100" alt="..."/>
                                        <div class="top-img">9:00AM</div>
                                        <div class="bottom-img">YOGA <br>EXCEL TERRACE</div>
                                    </div>
                                @endforeach

                                <div class="whole_img">
                                    <img src="images/Flyers/paddleboard.webp" class="w-100" alt="..."/>
                                    <div class="top-img">10:00AM</div>
                                    <div class="bottom-img">PADDLE BOARD <br> BEACH AREA</div>
                                </div>

                                <div class="whole_img">
                                    <img src="images/carousel-images/spanish-lesson.jpg" class="w-100" alt="..."/>
                                    <div class="top-img">11:00AM</div>
                                    <div class="bottom-img">SPANISH LESSONS <br>BEACH CLUB</div>
                                </div>
                                <div class="whole_img">
                                    <img src="images/carousel-images/aqua-spinning-2.jpg" class="w-100" alt="..."/>
                                    <div class="top-img">12:00PM</div>
                                    <div class="bottom-img">AQUA SPPINING CLASS <br>BEACH CLUB</div>
                                </div>

                                <div class="whole_img">
                                    <img src="images/carousel-images/pool-volley-ball.jpg" class="w-100" alt="..."/>
                                    <div class="top-img">1:00PM</div>
                                    <div class="bottom-img">POOL VOLLEYBALL<br>BEACH CLUB</div>
                                </div>

                                <div class="whole_img">
                                    <img src="images/carousel-images/dj-3.jpg" class="w-100" alt="..."/>
                                    <div class="top-img">1:00PM</div>
                                    <div class="bottom-img">RESIDENT DJ ALONSO<br>BEACH CLUB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row justify-content-center">
                        <div class="imgcontainer">
                            <div class="whole_img">
                                <img src="images/carousel-images/ping-pong.jpg" class="w-100" alt="..."/>
                                <div class="top-img">2:00PM</div>
                                <div class="bottom-img">PING PONG TOURNAMENT<br>BEACH CLUB</div>
                            </div>

                            <div class="whole_img">
                                <img src="images/carousel-images/boche-ball.jpg" class="w-100" alt="..."/>
                                <div class="top-img">2:00 PM</div>
                                <div class="bottom-img">BOCCE BALL GAME<br>THE BEACH</div>
                            </div>

                            <div class="whole_img">
                                <img src="images/carousel-images/blackjack.jpg" class="w-100" alt="..."/>
                                <div class="top-img">3:00 PM</div>
                                <div class="bottom-img">BLACKJACK TOURNAMENT<br>BEACH CLUB</div>
                            </div>

                            <div class="whole_img">
                                <img src="images/carousel-images/mezcal.jpg" class="w-100" alt="..."/>
                                <div class="top-img">4:00 PM</div>
                                <div class="bottom-img">MIXOLOGY CLASS<br>BITES POOL AREA</div>
                            </div>

                            <div class="whole_img">
                                <img src="images/carousel-images/cata-wine.jpg" class="w-100" alt="..."/>
                                <div class="top-img">7:00 PM</div>
                                <div class="bottom-img">CATA<br>THE BEACH</div>
                            </div>

                            <div class="whole_img">
                                <img src="images/carousel-images/casino-night.jpg" class="w-100" alt="..."/>
                                <div class="top-img">8:00 PM</div>
                                <div class="bottom-img">CASINO NIGHT<br>EXCEL TERRACE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- carousel_small -->
    <div class="carousel_small m-0 p-0 d-md-none">
        <div class="carousel_small-tittle">OUR ACTVITIES</div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/yoga-2.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">9:00 AM</div>
                            <div class="bottom-img1">YOGA <br>SPA</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/Flyers/paddleboard.webp" class="d-block w-100" alt="...">
                            <div class="top-img1">10:00 AM</div>
                            <div class="bottom-img1">PADDLE BOARD <br> BEACH AREA</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/spanish-lesson.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">11:00 AM</div>
                            <div class="bottom-img1">SNORKELING<br>BEACH AREA</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/Flyers/dancelessons.webp" class="d-block w-100" alt="...">
                            <div class="top-img1">11:00AM</div>
                            <div class="bottom-img1">DANCE LESSONS<br>BEACH CLUB</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/lazy-game-2.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">11:00AM</div>
                            <div class="bottom-img1">BRAIN BUSTER<br>BEACH CLUB</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/spanish-lesson.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">11:00AM</div>
                            <div class="bottom-img1">SPANISH LESSONS<br>BEACH CLUB</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/aqua-aerobics-3.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">12:00PM</div>
                            <div class="bottom-img1">AQUA FIT<br>BEACH CLUB</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/pool-volley-ball.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">1:00PM</div>
                            <div class="bottom-img1">POOL VOLLEYBALL<br>BEACH CLUB</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/dj-2.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">1:00PM</div>
                            <div class="bottom-img1">RESIDENT DJ<br>BEACH CLUB</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/carousel-images/ping-pong.jpg" class="d-block w-100" alt="...">
                            <div class="top-img1">2:00PM</div>
                            <div class="bottom-img1">PING PONG TOURNAMENT<br>BEACH CLUB</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="carousel_small-container">
                        <div class="carousel_small-image">
                            <img src="images/Flyers/saxophonist.webp" class="d-block w-100" alt="...">
                            <div class="top-img1">2:00PM</div>
                            <div class="bottom-img1">SAXOPHONIST<br>BEACH CLUB</div>
                        </div>
                        <div class="carousel_small-image">
                            <img src="images/Flyers/CHESS.webp" class="d-block w-100" alt="...">
                            <div class="top-img1">3:00PM</div>
                            <div class="bottom-img1">CHESS GAME<br>BEACH CLUB</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer_inner-container  row m-0 p-0">

        <!-- dinning_lg        -->
        <div class="footer_dinnig-container d-none d-md-block m-0 p-0  col-md-4">
            <div class="footer_dinning-tittle col-12 ">DINNING RESTAURANTS</div>
            <div class="footer_dinnig-inner col-md-12">
                <div class="restaurant_container">
                    <div class="restaurant_name">BITES</div>

                    <div class="restaurants_inner col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Bites_Logo png.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">GRILL</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">SNACKS A LA CARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">11:00 PM - 6:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant_container">
                    <div class="restaurant_name">SPUMANTE</div>

                    <div class="restaurants_inner">
                        <img src="images/logos-restaurants/LOGOS PNG/Spumante_Logopng.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">ITALIAN</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">EXHALE MEMBERS</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant_container">
                    <div class="restaurant_name">SPOON</div>

                    <div class="restaurants_inner">
                        <img src="images/logos-restaurants/LOGOS PNG/Spoon_Logo (1) png.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">TYPE</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant_container">
                    <div class="restaurant_name">OCOTE</div>

                    <div class="restaurants_inner">
                        <img src="images/logos-restaurants/LOGOS PNG/ocote.svg" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">MEDITERRANEAN</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">7:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant_container">
                    <div class="restaurant_name">FISH NETS</div>

                    <div class="restaurants_inner">
                        <img src="images/logos-restaurants/LOGOS PNG/Fish-Nets_Logo pang.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">GRILL</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant_container">
                    <div class="restaurant_name">OCOTE</div>

                    <div class="restaurants_inner">
                        <img src="images/logos-restaurants/LOGOS PNG/Kibbeh_Logo png.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">MEXICANO</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">MEMBERS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dinnig_small -->
        <div class="dinnig_small m-0 p-0 d-md-none">

            <div class="footer_dinning-tittle2 m-0 p-0 col-12 ">DINNING RESTAURANTS</div>
            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">BITES</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Bites_Logo png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">TAPAS</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">FISHNETS</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Spoon_Logo (1) png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">SEAFOOD</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">SPUMANTE</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Spumante_Logopng.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">ITALIAN</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">KIBBEH</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Kibbeh_Logo png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">MEDITERRANEAN</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">OCOTE</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/ocote.svg" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">MODERN</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/icons/Members.svg" alt=""/>
                                <div class="type">EXHALE MEMBERS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- footer_breakfast-lg -->
        <div class="footer_breakfast-container d-none d-md-block m-0 p-0  col-md-2">
            <div class="footer_breakfast-tittle ">BREAKFAST & LUNCH</div>
            <div class="footer_breakfast-inner ">
                <div class="restaurant_container-bf">

                    <div class="restaurant_name">OCOTE</div>

                    <div class="restaurants_inner col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/ocote.svg" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/icons/Buffet.svg" alt=""/>
                                <div class="type">GRILL</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="restaurant_container-bf">
                    <div class="restaurant_name">SPUMANTE</div>

                    <div class="restaurants_inner col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Spumante_Logopng.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">ITALIAN</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">DINNER A LACARTE</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="restaurant_container-bf">
                    <div class="restaurant_name">BITES</div>

                    <div class="restaurants_inner col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Fish-Nets_Logo pang.png" alt=""/>
                        <div class="logo_info-container ">
                            <div class="logo-info">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">SNACKS</div>
                            </div>

                            <div class="logo-info">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">BUFFET</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">6:00 PM - 11:00 PM</div>
                            </div>
                            <div class="logo-info">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--breakfast_small-->

        <div class="breakfast_small m-0 p-0 d-md-none">

            <div class="footer_dinning-tittle2 m-0 p-0 col-12 ">BREAKFAST & LUNCH</div>
            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">BITES</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Bites_Logo png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">BREAKFAST</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">A LA CARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">7:00 AM - 11:30 AM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">SPOON</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Spoon_Logo (1) png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">BREAKFAST</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">BUFFETE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">7:00 AM - 11:30 AM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">BAREFOOT</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/BAREFOOD.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">LUNCH</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">SNACKS & LA CARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">11:00 AM - 6:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">BITES</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Bites_Logo png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">LUNCH</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">SNACKS & LA CARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">12:00 AM - 5:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_dinnig-inner2 ">
                <div class="restaurant_container2">
                    <div class="restaurant_name2">SPOON</div>

                    <div class="restaurants_inner2 col-12">
                        <img src="images/logos-restaurants/LOGOS PNG/Spoon_Logo (1) png.png" alt=""/>
                        <div class="logo_info-container2 ">
                            <div class="logo-info2">
                                <img src="images/Icons/Buffet.svg" alt=""/>
                                <div class="type">LUNCH</div>
                            </div>

                            <div class="logo-info2">
                                <img src="images/Icons/Menu.svg" alt=""/>
                                <div class="type">SNACKS & LA CARTE</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Clock.svg" alt=""/>
                                <div class="type">12:00 AM - 4:00 PM</div>
                            </div>
                            <div class="logo-info2">
                                <img src="images/Icons/Members.svg" alt=""/>
                                <div class="type">ALL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer_barsQr-lg -->
        <div class="footer_barsQr-container  d-none d-md-block  m-0 p-0  col-md-2">
            <div class="footer_barsQr-tittle col-12 ">OUR BARS</div>
            <div class="footer_barsQr-inner ">
                <div class="bars_container ">
                    <div class="bars">
                        <div class="logo-time">
                            <div class="bar_name">PURPLE</div>
                            <div class="time-bar">10:00AM - 11:00PM</div>
                        </div>
                        <img src="images/Icons/purple.svg" alt="">
                    </div>


                    <div class="bars">
                        <div class="logo-time">
                            <div class="bar_name">THE NOOK CAFE</div>
                            <div class="time-bar">10:00AM - 11:00PM</div>
                        </div>
                        <img src="images/Icons/thenookcafe.svg" alt="">
                    </div>

                    <div class="bars">
                        <div class="logo-time">
                            <div class="bar_name">WINK</div>
                            <div class="time-bar">10:00AM - 11:00PM</div>
                        </div>
                        <img src="images/Icons/wink.svg" alt="">
                    </div>

                    <div class="bars">
                        <div class="logo-time">
                            <div class="bar_name">FOAM</div>
                            <div class="time-bar">10:00AM - 11:00PM</div>
                        </div>
                        <img src="images/Icons/foam.svg" alt="">
                    </div>

                </div>
                <div class="qr_container">
                    <div class="qr-inner">
                        <div class="qr">QR</div>
                        <div class="vector_qr">
                            <img src="images/carousel-images/VECTOR QR BRCSL.png" alt="">
                            <div class="scan_me">SCAN ME</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--barsQr_small-->
        <div class="barsQr_small m-0 p-0 d-md-none">

            <div class="footer_barsQr-tittle0 m-0 p-0 col-12 ">OUR BARS</div>
            <div class="footer_barsQr-inner0 ">
                <div class="bars_container0 ">
                    <div class="bars0">
                        <div class="bar_name0">PURPLE</div>
                        <div class="logo-time0">
                            <div class="logo-bar0">
                                <img src="images/Icons/purple.svg" alt="">
                            </div>
                            <div class="time-bar0">6:00PM - 12:00AM</div>
                        </div>
                    </div>

                    <div class="bars0 m-0 p-0">
                        <div class="bar_nam0e">THE NOOK CAFE</div>
                        <div class="logo-time0">
                            <div class="logo-bar0">
                                <img src="images/Icons/thenookcafe.svg" alt="">
                            </div>
                            <div class="time-bar0">6:30AM - 11:00PM</div>
                        </div>
                    </div>
                    <div class="bars0">
                        <div class="bar_name0">WINK</div>
                        <div class="logo-time0">
                            <div class="logo-bar0">
                                <img src="images/Icons/wink.svg" alt="">
                            </div>
                            <div class="time-bar0">12:00AM - 12:00PM</div>
                        </div>
                    </div>
                    <div class="bars0">
                        <div class="bar_name0">FOAM</div>
                        <div class="logo-time0">
                            <div class="logo-bar0">
                                <img src="images/Icons/foam.svg" alt="">
                            </div>
                            <div class="time-bar0">7:00AM - 6:00PM</div>
                        </div>
                    </div>
                </div>
                <div class="qr_container0">
                    <div class="qr0">QR</div>
                    <div class="qr-inner0">

                        <div class="vector_qr0">
                            <img src="images/carousel-images/VECTOR QR BRCSL.png" alt="">
                            <div class="scan_me0">SCAN ME</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- flyer_lg -->
        <div class="footer_flyer-container d-none d-md-block m-0 p-0 order-sm-4 col-md-2">
            <div class="footer_flyer-tittle ">FLYER</div>
            <div class="flyer-inner">

                <div class="flyer ">
                    <img src="images/carousel-images/strong.png" alt="">
                </div>
            </div>

        </div>

        <!-- flyer_small -->

        <div class="flyer_small d-md-none m-0 p-0">

            <div class="footer_flyer-container1  m-0 p-0 order-sm-4 col-md-2">
                <div class="footer_flyer-tittle1 ">FLYER</div>
                <div class="carousel-item-flyer">

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item  active" data-bs-interval="6000">
                                <div class="staff_small-container">
                                    <div class="staff-image">
                                        <img src="images/Flyers/art-gallery.png" class="d-block w-100" alt="...">

                                    </div>

                                </div>
                            </div>


                            <div class="carousel-item" data-bs-interval="6000">
                                <div class="staff_small-container">
                                    <div class="staff-image">
                                        <img src="images/Flyers/fireshow.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="6000">
                                <div class="staff_small-container">
                                    <div class="staff-image">
                                        <img src="images/Flyers/jazznight.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item" data-bs-interval="6000">
                                <div class="staff_small-container">
                                    <div class="staff-image">
                                        <img src="images/Flyers/neonparty.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- footer_staff-lg -->
        <div class="footer_staff-container d-none d-md-block m-0 p-0 order-md-first col-md-2">
            <div class="footer_staff-tittle  ">E-TEAM</div>

            <div id="carouselExampleInterval m-0 p-0" class="carousel1 slide1" data-bs-ride="carousel">
                <div class="carousel-inner m-0 p-0">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <div class="staff_lg-container">
                            <div class="staff_lg-image">
                                <img src="images/staff/ALBERTO.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">ALBERTO</div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/ALONSO.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">ALONSO</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/ARELI.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">ARELI</div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/JAVIER.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">JAVIER</div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/JHANELY.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">JHANELY</div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/SANDOVAL.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">SANDOVAL</div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="staff_lg-container">

                            <div class="staff_lg-image">
                                <img src="images/staff/STEFANI.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_lg-bottom-img">STEFANI</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <!-- footer_staff-small -->

        <div class="footer_staff-small d-md-none m-0 p-0">
            <div class="staff_small-tittle  ">E-TEAM</div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="6000">
                        <div class="staff_small-container">
                            <div class="staff-image">
                                <img src="images/staff/ALONSO.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_bottom-img">ALONSO</div>
                            </div>

                        </div>
                    </div>


                    <div class="carousel-item" data-bs-interval="6000">
                        <div class="staff_small-container">
                            <div class="staff-image">
                                <img src="images/staff/JHANELY.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_bottom-img">NELLY</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="6000">
                        <div class="staff_small-container">
                            <div class="staff-image">
                                <img src="images/staff/alex.png" class="d-block w-100" alt="...">
                                <div class="staff_bottom-img">ALEX</div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item" data-bs-interval="6000">
                        <div class="staff_small-container">
                            <div class="staff-image">
                                <img src="images/staff/STEFANI.jpeg" class="d-block w-100" alt="...">
                                <div class="staff_bottom-img">STEFANI</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section>
</main>


<script src="clock.js"></script>
<script src="weather.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>
</body>

</html>

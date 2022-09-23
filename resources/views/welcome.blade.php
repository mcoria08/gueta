<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Plain - Multipurpose TailwindCSS Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/tiny-slider.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="assets/css/tailwindcss.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <style>
        .clock {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateX(-50%) translateY(-50%);
            color: rgba(116, 126, 136, var(--tw-text-opacity));
            font-size: 30px;
            font-family: Orbitron;
            letter-spacing: 7px;
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade
    your browser to improve your experience and security.</p>
<![endif]-->


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<section class="header_area">
    <div class="navbar-area bg-white">
        <div class="container relative">
            <div class="row items-center">
                <div class="w-full">
                    <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                        <a class="navbar-brand mr-5" href="index.html">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button"
                                data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div
                            class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none"
                            id="navbarOne">

                            <span style="right:166%;position:relative">{{$currentDate}}</span>
                            <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->
</section>

<!--====== HEADER PART ENDS ======-->


<!--====== SERVICES PART START ======-->
<!--====== SERVICES PART ENDS ======-->


<!--====== ABOUT PART START ======-->
<!--====== ABOUT PART ENDS ======-->

<!--====== SERVICES PART START ======-->
<!--====== SERVICES PART ENDS ======-->

<!--====== WORK PART START ======-->

@include("slider")

<!--====== WORK PART ENDS ======-->

<!--====== PRICING PLAN PART START ======-->


<!--====== PRICING PLAN PART ENDS ======-->

<!--====== TEAM PART START ======-->
<section>


    <!--====== TEAM PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-120">


        <div class="container-fluid">


            <div class="row justify-center lg:justify-start">


                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                    <div
                        class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg team_active">
                        <div class="bxslider  blog_content p-4 md:p-5">
                            <div>
                                <div class="blog_image">
                                    <img src="assets/images/blog-1.jpg" alt="blog" class="w-full">
                                </div>
                                <div class="blog_content p-4 md:p-5">
                                    <ul class="blog_meta flex justify-between">
                                        <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                                                                                class="text-body-color hover:text-theme-color">Musharof
                                                Chowdury</a></li>
                                        <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                                    </ul>
                                    <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                                </div>
                            </div>
                            <div>
                                <div class="blog_image">
                                    <img src="assets/images/blog-2.jpg" alt="blog" class="w-full">
                                </div>
                                <div class="blog_content p-4 md:p-5">
                                    <ul class="blog_meta flex justify-between">
                                        <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                                                                                class="text-body-color hover:text-theme-color">Musharof
                                                Chowdury</a></li>
                                        <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                                    </ul>
                                    <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                    <div
                        class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="assets/images/blog-1.jpg" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                                                                        class="text-body-color hover:text-theme-color">Musharof
                                        Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                        </div>
                    </div> <!-- row -->
                </div>

                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                    <div
                        class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="assets/images/blog-2.jpg" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                                                                        class="text-body-color hover:text-theme-color">Musharof
                                        Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                    <div
                        class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="assets/images/blog-3.jpg" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                                                                        class="text-body-color hover:text-theme-color">Musharof
                                        Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

</section>

<!--====== BLOG PART ENDS ======-->


<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->


<!--====== Tiny Slider js ======-->
<script src="assets/js/tiny-slider.js"></script>

<!--====== Wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

<script>
    function showTime() {
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if (h == 0) {
            h = 12;
        }

        if (h > 12) {
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();
</script>

</body>

</html>

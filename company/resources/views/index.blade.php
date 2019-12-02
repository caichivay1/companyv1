﻿<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from maskandesign.com/berg/01_16_onepage_travel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2015 03:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berg Travel - One Page</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('berg/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{asset('berg/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('berg/fonts/themify-icons.css')}}" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="{{asset('berg/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('berg/css/magnific-popup.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('berg/css/animate.css')}}">


    <!-- Theme CSS -->
    <link href="{{asset('berg/css/style.css')}}" rel="stylesheet">

    <!-- Med Icons -->
    <link href="{{asset('berg/fonts/health/flaticon.css')}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>


</head>
<body class="passp_white">


<!-- Passpartu -->
<div class="passpartu passpartu_left"></div>
<div class="passpartu passpartu_right"></div>
<div class="passpartu passpartu_top"></div>
<div class="passpartu passpartu_bottom"></div>
<!-- Passpartu End -->

<div class="page" id="page">


    <div class="head_bck" data-color="#292929"  data-opacity="0.5"></div>


    <!-- Header -->
    <header class="simple_menu">

        <!-- Logo -->
        <div class="logo pull-left">
            <a href="#"><b>Mạnh Quân</b></a>
        </div>


        <!-- Header Buttons -->
        <div class="header_btns_wrapper">

            <!-- Main Menu Btn -->
            <div class="main_menu"><i class="ti-menu"></i><i class="ti-close"></i></div>

            <!-- Sub Menu -->
            <div class="sub_menu">
                <div class="sub_cont">
                    <ul>
                        <li><a href="#head">Trang Chủ</a></li>
                        <li><a href="#about">Tổng quan</a></li>
                        <li><a href="#story">Tiện ích</a></li>
                        <li><a href="#news">Mặt bằng</a></li>
                        <li><a href="#contacts">Liên Hệ</a></li>

                        <!-- Search -->
                        <li class="right_sub no_arrow sub_min_width"><a href="#" class="parents"><i class="ti-search"></i></a>
                            <ul class="mega_menu">
                                <li class="mega_sub bask_menu">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Enter Your Keywords">
                                        <button type="submit" class="se_btn">
                                            <i class="ti-search"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- Search End-->

                    </ul>


                </div>
            </div>
            <!-- Sub Menu End -->

        </div>
        <!-- Header Buttons End -->

        <!-- Up Arrow -->
        <a href="#page" class="up_block go"><i class="fa fa-angle-up"></i></a>

    </header>
    <!-- Header End -->

    <!--Hotel-->
    {{--    intro start--}}
    @include('intro');
    <!-- Intro End -->
    <!--About Cafe-->
    @include('about');
    {{--about end--}}
    <!--News-->
  @include('new');
    <!--News End-->
    <!-- Slider Border -->
    <div class="after_slider_border"></div>

    <!-- Contacts -->
  @include('contact');
    <!-- Contacts End -->


    <!-- Footer -->
   @include('footer');
    <!-- Footer End -->


</div>
<!-- Page End -->



<!-- JQuery -->
<script src="{{asset('berg/js/jquery-1.11.3.min.js')}}"></script>
<!-- WL Carousel JS -->
<script src="{{asset('berg/js/owl.carousel.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('berg/js/bootstrap.min.js')}}"></script>
<!-- PrefixFree -->
<script src="{{asset('berg/js/prefixfree.min.js')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{asset('berg/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Textillate -->
<script src="{{asset('berg/js/jquery.lettering.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('berg/js/jquery.plugin.min.js')}}"></script>
<script src="{{asset('berg/js/jquery.countdown.min.js')}}"></script>
<!-- JQuery UI -->
<script src="{{asset('berg/js/jquery-ui.js')}}"></script>
<!-- Wow -->
<script src="{{asset('berg/js/wow.js')}}"></script>
<!-- Masonry -->
<script src="{{asset('berg/js/masonry.pkgd.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('berg/js/script.js')}}"></script>


</body>

<!-- Mirrored from maskandesign.com/berg/01_16_onepage_travel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2015 03:07:52 GMT -->
</html>

<!DOCTYPE html>
<html lang="en" class="theme-color-ff9801 theme-skin-light">

<!-- Mirrored from rscard.px-lab.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 06:54:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RScard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="{!! asset('public/assets/web') !!}/img/favicon.png"/>
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
</head>

<body class="home header-has-img">

    @include("Web::layouts.sidebar")

<div class="wrapper">

    @include('Web::layouts.header')

    <div class="content">
        <div class="container">

            @yield('content')

        </div><!-- .container -->
    </div><!-- .content -->

    @include('Web::layouts.footer')
</div><!-- .wrapper -->

<a class="btn-scroll-top" href="#"><i class="rsicon rsicon-arrow-up"></i></a>

<!-- Icon Fonts -->
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/fonts/map-icons/css/map-icons.min.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/fonts/icomoon/style.css">

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.bxslider/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.mediaelement/mediaelementplayer.min.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.fancybox/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.owlcarousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.owlcarousel/owl.theme.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/js/plugins/jquery.optionpanel/option-panel.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/style.css">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/web') !!}/colors/theme-color.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBxIKN4mTgYgTOXzxNSe67kqHr2vdDzR8"></script>

<script type="text/javascript" src="{!! asset('public/assets/web') !!}/js/site.js"></script>
</body>

<!-- Mirrored from rscard.px-lab.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 06:55:03 GMT -->
</html>
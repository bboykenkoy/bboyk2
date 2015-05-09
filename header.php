<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Demo</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto|Source+Sans+Pro&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--[if IE]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=277348715722330&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
 <script>
        new WOW().init();
    </script>
    <script src="js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
    <script language="javascript" type="text/javascript" src="js/script.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            var buttons = {
                previous: $('#jslidernews2 .button-previous'),
                next: $('#jslidernews2 .button-next')
            };
            $('#jslidernews2').lofJSidernews({
                interval: 5000,
                easing: 'easeInOutQuad',
                duration: 1200,
                auto: true,
                mainWidth: 405,
                mainHeight: 450,
                navigatorHeight: 100,
                navigatorWidth: 365,
                maxItemDisplay: 3,
                buttons: buttons
            });
        });
    </script>
    <script>
        jQuery("document").ready(function($) {

            var nav = $('.nav-container');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 195) {
                    nav.addClass("f-nav");
                } else {
                    nav.removeClass("f-nav");
                }
            });

        });
    </script>
<script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider-featured').tinycarousel({
                axis: 'x'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider-gallery').tinycarousel({
                axis: 'x'
            });
        });
    </script>
    <script src="js/classie.js"></script>
</head>
<body>
	<header>
    		<div class="center">               
            	            <h1 class="logo wow fadeInRight animated" data-wow-delay="0.8s">
                <img src="images/logo.png" style="margin-left: -50px;">
        </h1></a>
            </div>
	</header>
<nav class="menu-top">
        <div class="nav-container">
            <div class="center menu">
                <ul>
                    <li class="current"><a href="index.php" target="_parent">Trang chủ</a></li>
                    <li><a href="" target="_parent">Giới thiệu</a></li>
                    <li><a href="dongphuc.php" target="_parent">Đồng phục</a></li>
                    <li><a href="" target="_parent">Báo giá</a></li>
                    <li><a href="" target="_parent">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

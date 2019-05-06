<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/reset.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/style1.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/style.css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
</head>
<body>
<header class="cd-main-header">
    <a class="cd-logo" href="#0"><img src="{{ asset('/fonts/') }}/image/kotha.jpg" alt="Logo"></a>
    <ul class="cd-header-buttons">
        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
        <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
    </ul>
    <!-- cd-header-buttons -->
</header>
<div class="cd-overlay"></div>
<nav class="cd-nav">
    <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a href="articel-page.html">Bangladesh</a></li>
        <li><a href="#">International</a></li>
        <li><a href="#">Economy</a></li>
        <li><a href="#">Opinion</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Picture</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">North America</a></li>
        <li class="has-children"> <a href="#"><i class="fa fa-bars" aria-hidden="true"></i> All </a>
            <ul class="cd-secondary-nav is-hidden">
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="go-back">
                            <a href="#0"></a>
                        </li>
                        <li class="see-all">
                            <a href="#"></a>
                        </li>
                        <li><a href="#">Para</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Special Publish</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#">Bangladesh</a></li>
                        <li><a href="#0">Entertainment</a></li>
                        <li><a href="#0">Education</a></li>
                        <li><a href="#0">North America</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#">International</a></li>
                        <li><a href="#">Cartoon</a></li>
                        <li><a href="#">Entertainment</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="go-back">
                            <a href="#0"></a>
                        </li>
                        <li class="see-all">
                            <a href="#"> </a>
                        </li>
                        <li><a href="#">Economy</a></li>
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="go-back">
                            <a href="#0"></a>
                        </li>
                        <li class="see-all">
                            <a href="#"> </a>
                        </li>
                        <li><a href="#">Opinion</a></li>
                        <li><a href="#">Science and Technology</a></li>
                        <li><a href="#">Different</a></li>
                    </ul>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="go-back">
                            <a href="#0"></a>
                        </li>
                        <li class="see-all">
                            <a href="#"> </a>
                        </li>
                        <li><a href="#">E-Paper</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Circular</a></li>
                        <li><a href="#">Foreign Life</a></li>
                    </ul>
                </li>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="go-back">
                            <a href="#0"></a>
                        </li>
                        <li class="see-all">
                            <a href="#"></a>
                        </li>
                        <li><a href="#"><i class="fa fa-camera picture8378" aria-hidden="true"></i> <span class="pic8448-details88">Photos</span></a></li>
                        <li><a href="#"><i class="fa fa-video-camera camera885" aria-hidden="true"></i> <span class="pic8448-details88">Video</span></a></li>
                        <li><a href="#"><i class="fa fa-file-archive-o archive747" aria-hidden="true"></i> <span class="pic8448-details88">Archive</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="pic8448-details88">2221</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="pic8448-details88">ট্রাস্ট</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#"><i class="fa fa-ravelry" aria-hidden="true"></i> <span class="pic8448-details88">প্রতিচিন্তা</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> <span class="pic8448-details88">চাকরি ডটকম</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li><a href="#"><i class="fa fa-microphone" aria-hidden="true"></i> <span class="pic8448-details88">abc রেডিও</span></a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <ul class="is-hidden">
                        <li class="bondusoba8380">
                            <a href="#"><img src="{{ asset('/fonts/') }}/image/590679d8369d61d451b1076ef176926d-593e579b0f1b3.png" alt="image" /></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="line38">|</li>
        <li><a href="#">English</a></li>
        <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a></li>
    </ul>
    <!-- primary-nav -->
</nav>
<!-- cd-nav -->
<!--#####################
-----------END NAVBAR PART--------------
#####################-->
<!--#####################
-----------STARTING HAEDER ADS--------------
#####################-->
<div id="cd-search" class="cd-search">
    <form>
        <input type="search" placeholder="Search..."> </form>
</div>





<div class="container">

    <div class="col-sm-12">
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-6">
                <div class="add">
                    <a href="#"> <img src="{{ asset('/fonts/') }}/image/6433791045273430249.gif" alt="advertise"></a>
                </div>
            </div>
            <div class="col-sm-6" >
                <div class="add">
                    <a href="#"> <img src="{{ asset('/fonts/') }}/image/add2.jpg" alt="advertise"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="dateline">
                        <p><span class="fas fa-map-marker"></span> Dhaka <span class="far fa-calendar-alt" style="margin-left: 5px;"></span> Monday, 9th April, 2019     <a href="#"><span class="fas fa-clock" style="margin-left: 10px;"></span> updated 2 min ago</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="news-slide">
                    <marquee><h3>We Can Spread Love By Donate, Help The Poor People, We Can Spread Love By Donate, Help The Poor People, We Can Spread Love By Donate, Help The Poor People, We Can Spread Love By Donate, Help The Poor People,</h3></marquee>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#" style="text-decoration: none;">
                            <div class="lead-news">
                                <img src="{{ asset('/fonts/') }}/image/lead.jpg" alt="lead news">
                                <div class="text-wrapper">
                                    <h1>Brazil Won The Trophy</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/2nd_le.JPG" alt="2nd leading news">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-lead">
                                            <h3><b>BD People are in  Elections</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/Eid-shopping9.jpg" alt="2nd leading news">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-lead">
                                            <h3><b>Last moment Eid shopping at peak</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/Pohela Boishakh .jpg" alt="2nd leading news">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-lead">
                                            <h3><b>Pohela Boishakh celebration</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/bd.jpg" alt="2nd leading news">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-lead">
                                            <h3><b>Bangladesh breaks human flag record</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <abbr title="Like Our Facebook Page">
                            <a href="#">
                                <div class="fb-like-img">
                                    <img src="{{ asset('/fonts/') }}/image/Facebook_like_thumb.png" alt="Facebook Like page">
                                </div>
                            </a>
                        </abbr>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#">
                                    <div class="side-add">
                                        <img src="{{ asset('/fonts/') }}/image/kitk.jpg" alt="side-add">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#">
                                    <div class="side-add">
                                        <img src="{{ asset('/fonts/') }}/image/phone.jpg" alt="side-add">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card1">
                            <a href="#" class="link">
                                <div class="row">
                                    <div class="most-like margin-like">
                                        <div class="col-sm-6 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/Sheikh_Hasina,_Honourable_Prime_Minister_of_Bangladesh_(cropped).jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-6 content-media">
                                            <h5 class="like-text"><b>Bangladesh has been ranked the most positive country in Asia in 2017</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr style="display: block; border-top: 1px solid #cccccc;"/>
                            <a href="#" class="link">
                                <div class="row">
                                    <div class="most-like margin-like">
                                        <div class="col-sm-6 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/roberto-firmino.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-6 content-media">
                                            <h5 class="like-text"><b>Liverpool's Jurgen Klopp reacts to Naby Keita's performance against Porto</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr style="display: block; border-top: 1px solid #cccccc;"/>
                            <a href="#" class="link">
                                <div class="row">
                                    <div class="most-like margin-like">
                                        <div class="col-sm-6 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/doctor.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-6 content-media">
                                            <h5 class="like-text"><b>Ishika Khan Bangladeshi model, actress, anchor</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a href="#">
                            <div class="side-add-btm">
                                <img src="{{ asset('/fonts/') }}/image/coke.jpg" alt="side-add-btm">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card3">
                        <div class="row">
                            <div class="col-sm-6 col-md-12 img-media">
                                <img src="{{ asset('/fonts/') }}/image/eiffel.jpg" alt="International">
                            </div>
                            <div class="col-sm-6 col-md-12 content-media">
                                <div class="content-card">
                                    <h3><b>France</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card3">
                        <div class="row">
                            <div class="col-sm-6 col-md-12 img-media">
                                <img src="{{ asset('/fonts/') }}/image/trump.jpg" alt="International">
                            </div>
                            <div class="col-sm-6 col-md-12 content-media">
                                <div class="content-card">
                                    <h3><b>Foreign</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" style="text-decoration: none;">
                    <div class="card3">
                        <div class="row">
                            <div class="col-sm-6 col-md-12 img-media">
                                <img src="{{ asset('/fonts/') }}/image/pm.jpg" alt="Bangladesh">
                            </div>
                            <div class="col-sm-6 col-md-12 content-media">
                                <div class="content-card">
                                    <h3><b>Bangladesh</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/inter.jpg" alt="International">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>International</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/sports.jpg" alt="Sports">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Sports</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/entertainment.jpg" alt="entertainment">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Entertainment</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/echo.jpeg" alt="echonomic">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Economics</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/2.jpg" alt="ICT and Technology">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>ICT and Technology </b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/health.jpg" alt="Health">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Health</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/nari-bd.jpg" alt="Women">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Women</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" style="text-decoration: none;">
                            <div class="card3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 img-media">
                                        <img src="{{ asset('/fonts/') }}/image/lifestyle.jpg" alt="Lifestyle">
                                    </div>
                                    <div class="col-sm-6 col-md-12 content-media">
                                        <div class="content-card">
                                            <h3><b>Lifestyle</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row" style="margin-top: 10px;">
                            <div class="card1">
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/war.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>Trump administration is considering whether to send as many </b></h5>
                                        </div>
                                    </div>
                                </a>
                                <hr style="display: block; border-top: 1px solid #cccccc"/>
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/EMMA WATSON.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>All suited up for a night on the town! Emma Watson</b></h5>
                                        </div>
                                    </div>
                                </a>
                                <hr style="display: block; border-top: 1px solid #cccccc"/>
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/digester.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>Humans are changing the climate 170 times faster than nature</b></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row" style="margin-top: 5px;">
                            <div class="card1">
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/banner-201711030120.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>Bangladesh has been ranked the most positive country in Asia in 2017</b></h5>
                                        </div>
                                    </div>
                                </a>
                                <hr style="display: block; border-top: 1px solid #cccccc"/>
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/medium_133195.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>A controversial child marriage law in Bangladesh</b></h5>
                                        </div>
                                    </div>
                                </a>
                                <hr style="display: block; border-top: 1px solid #cccccc"/>
                                <a href="#" class="link">
                                    <div class="row most-like margin-like">
                                        <div class="col-sm-5 img-media">
                                            <img class="like-img" src="{{ asset('/fonts/') }}/image/mode.jpg" alt="like img">
                                        </div>
                                        <div class="col-sm-7 content-media">
                                            <h5 class="like-text"><b>Ishika Khan Bangladeshi model, actress, anchor</b></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12" style="background-color: whitesmoke;">
                        <div class="row">
                            <a href="#" style="text-decoration: none;">
                                <div class="news-text">
                                    <h4>Worker make stunning discovery while installing sewer</h4>
                                </div>
                            </a>
                            <hr style="border: 0.5px solid #999999"/>
                        </div>
                        <div class="row">
                            <a href="#" style="text-decoration: none;">
                                <div class="news-text">
                                    <h4>What Bernie Sanders' tax returns say about his faith in socialism</h4>
                                </div>
                            </a>
                            <hr style="border: 0.5px solid #999999"/>
                        </div>
                        <div class="row">
                            <a href="#" style="text-decoration: none;">
                                <div class="news-text">
                                    <h4>Melania gets special gift at Easter roll celebration</h4>
                                </div>
                            </a>
                            <hr style="border: 0.5px solid #999999"/>
                        </div>
                        <div class="row">
                            <a href="#" style="text-decoration: none;">
                                <div class="news-text">
                                    <h4>CNN's April Ryan calls for Sarah Sanders to lose her job</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 ">
                                <div class="e-paper">
                                    <a href="#">
                                        <img src="{{ asset('/fonts/') }}/image/e-paper1.jpg" alt="E-Paper">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="e-paper">
                                    <a href="#">
                                        <img src="{{ asset('/fonts/') }}/image/e-paper2.png" alt="E-Paper">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="e-paper">
                                    <a href="#">
                                        <img src="{{ asset('/fonts/') }}/image/e-paper3.jpg" alt="E-Paper">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Footer Start-->
<section class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-left920">
                    <a href="#"><img src="{{ asset('/fonts/') }}/image/kotha.jpg" alt="Image"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-Right">
                    <p>Amader kotha App Download </p>
                    <div class="applestore20">
                        <a href="#"><img src="{{ asset('/fonts/') }}/image/download.png" alt="Image"></a>
                    </div>
                    <div class="andriodstore20">
                        <a href="#"><img src="{{ asset('/fonts/') }}/image/androd.png" alt="Image" style="width: 100%;"></a>
                    </div>
                </div>
            </div>

        </div>



    </div>


</section>

<section class="footer9202">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#">Para</a></p>
                        <p><a href="#">opinion</a></p>


                    </div>

                </div>
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#">Bangladesh</a></p>
                        <p><a href="#">opinion</a></p>
                        <p><a href="#">Different</a></p>


                    </div>

                </div>
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#">International</a></p>
                        <p><a href="#">Feature</a></p>
                        <p><a href="#">About Us</a></p>


                    </div>

                </div>
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#">Economy</a></p>
                        <p><a href="#">Lifestyle</a></p>
                        <p><a href="#">Entertainment</a></p>


                    </div>

                </div>
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#">Sports</a></p>
                        <p><a href="#">Science and Technology</a></p>
                        <p><a href="#">Education</a></p>


                    </div>

                </div>
                <div class="col-md-2">
                    <div class="footer-menu">
                        <p><a href="#"><span class="foote-icon290"><i class="fa fa-camera" aria-hidden="true"></i></span>Photos</a></p>
                        <p><a href="#"><span class="foote-icon290"><i class="fa fa-video-camera" aria-hidden="true"></i></span>Video</a></p>
                        <p><a href="#"><span class="foote-icon290"><i class="fa fa-file-archive-o" aria-hidden="true"></i></span>Archive</a></p>


                    </div>

                </div>

            </div>
            <hr>
            <div class="another-menu83289">
                <div class="col-md-8">
                    <a href="#">E-Paper</a>
                    <a href="#">Advertise</a>
                    <a href="#">Circular</a>
                    <a href="#">Foreign Life</a>
                    <a href="#">North America</a>

                </div>
                <div class="col-md-4">
                    <p>Amader Kotha is the highest circulated and most read newspaper in Bangladesh. The online portal of Prothom Alo is the most visited Bangladeshi and Bengali website in the world.</p>
                    <p>Privacy Policy</p>

                </div>

            </div>
            <div class="another-menu2591">
                <div class="col-md-12">
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/2221_icon (1).png" alt="IMage"></span>২২২১</a>
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/trust_icon.png" alt="Image"></span>ট্রাস্ট</a>
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/pchinta_icon.png" alt="Image"></span>প্রতিচিন্তা</a>
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/chakridot_icon.png" alt="Image"></span>চাকরি ডটকম</a>
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/abcradio_icon.png" alt="Image"></span>abc রেডিও</a>
                    <a href="#"><span class="foote-icon939"><img src="{{ asset('/fonts/') }}/image/590679d8369d61d451b1076ef176926d-593e579b0f1b3.png"></span></a>


                </div>

            </div>


        </div>


    </div>

</section>

<!--    Footer end-->


<script src="{{ asset('/fonts/') }}/js/jquery-3.3.1.js"></script>
<script src="{{ asset('/fonts/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('/fonts/') }}/js/menu.js"></script>

<script>
    $(document).ready(function () {
        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');
            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });
    });
</script>
</body>
</html>

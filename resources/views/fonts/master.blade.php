<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('link')
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
        <li><a href="{{ url('/topic') }}">Bangladesh</a></li>
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
                        <li><a href="{{ url('/topic') }}">Bangladesh</a></li>
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
                        <li><a href="/login">Sign In</a></li>
                        <li><a href="#">Sign Up</a></li>
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

    @yield('content')

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

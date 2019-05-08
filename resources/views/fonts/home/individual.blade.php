@extends('fonts.master')

@section('title')
    Individual news| Amader Kotha
@endsection

@section('link')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/reset.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/style1.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/individual.css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row" style="margin-top: 15px;">
        <!--            side date part start-->
        <div class="col-sm-2">
            <div class="row">
                <div class="side-date">
                    <h4>Reporter Amader Kotha, Dhaka</h4>
                    <hr class="hr-style">
                    <p>28 April, 2019, 08:26</p>
                    <p>update: 28 April, 2019, 08:26</p>
                    <hr class="hr-style">
                    <p>Print Page</p>
                    <hr class="hr-style">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#">
                                <div class="img-side-date">
                                    <img src="{{ asset('/fonts/') }}/individual img/img/printer.jpg" alt="side bar logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <div class="img-side-date">
                                    <img src="{{ asset('/fonts/') }}/individual img/img/fb.png" alt="side bar logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <div class="img-side-date">
                                    <img src="{{ asset('/fonts/') }}/individual img/img/twitter.png" alt="side bar logo">
                                </div>
                            </a>
                        </div>
                    </div>
                    <hr class="hr-style">
                </div>
            </div>
        </div>
        <!--            side date part end-->

        <!--            main news part start-->
        <div class="col-sm-6">
            <div class="header">
                <h1>Brazil Won The Trophy</h1>
            </div>
            <a href="#" style="text-decoration: none;">
                <div class="header-img">
                    <img src="{{ asset('/fonts/') }}/individual img/img/lead.jpg" alt="lead news">
                    <p>Brazil Won The Trophy</p>
                </div>
            </a>
            <hr class="hr-style">
            <div class="news-content">
                <p>Jamie Vardy scored twice as Arsenal's hopes
                    of Champions League football suffered another serious
                    setback as familiar failings saw
                    the 10-man Gunners lose 3-0 at Leicester on Sunday.
                </p>
                <p>
                    It was the third time in seven days that the north London side,
                    once renowned for an impregnable defence,
                    had conceded three goals following 3-2 and 3-1 Premier League league
                    defeats by Crystal Palace and Wolves respectively.
                </p>
                <p>
                    Leicester's Youri Tielemans opened the scoring at the King
                    Power Stadium in the second half and Vardy netted twice for
                    the Foxes after the visitors had defender Ainsley
                    Maitland-Niles dismissed for two bookable offences before half-time.
                </p>
                <p>
                    Arsenal failed to stop James Maddison's cross or mark
                    Tielemans as he stole in to head home the first, then
                    were embarrassingly outwitted by a goal-kick from which Vardy poached the
                    second with the help of a rebound off the crossbar.
                </p>
                <p>
                    Leicester's Youri Tielemans opened the scoring at the King
                    Power Stadium in the second half and Vardy netted twice for
                    the Foxes after the visitors had defender Ainsley
                    Maitland-Niles dismissed for two bookable offences before half-time.
                </p>
                <p>
                    Suddenly, though, Leicester were hit by a rapid counter-attack
                    from the visitors, ending with a neat pass from
                    Aubameyang to Iwobi and a good,
                    low save from Kasper Schmeichel to keep out his shot.
                </p>
                <p>
                    It was the third time in seven days that the north London side,
                    once renowned for an impregnable defence,
                    had conceded three goals following 3-2 and 3-1 Premier League league
                    defeats by Crystal Palace and Wolves respectively.
                </p>
            </div>
            <div class="more-news">
                <p><a href="#" style="text-decoration: none">More News</a>
                    Topic: <a href="#" style="text-decoration: none">Sports</a>
                </p>
            </div>
            <hr class="hr-style">
        </div>
        <!--            main news part end-->

        <!--            side news part start-->
        <div class="col-sm-4" >
            <div class="side-news" style="margin-top: 80px;">
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="col-sm-4">
                            <div class="side-news-img">
                                <img src="{{ asset('/fonts/') }}/individual img/img/cristmas.jpg" alt="side news image">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="side-news-text">
                                <h3>Christmas Eve at a stadium in Surabaya</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <hr class="hr-style">
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="col-sm-4">
                            <div class="side-news-img">
                                <img src="{{ asset('/fonts/') }}/individual img/img/reuters.JPG" alt="side news image">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="side-news-text">
                                <h3>Reuters Photo of the Year</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--            side news part end-->
    </div>

    <!--        all news part start-->
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/china.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>China's island cities: Treasure or trouble for Asia?</b></h3>
                            <p>A high-rise city the size of central London
                                rising out of the ocean next to Sri
                                Lanka's capital is laying down another marker for</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/miss.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>Miss Philippines Catriona Gray</b></h3>
                            <p>Miss Philippines Catriona Gray is crowned Miss
                                Universe during the final round of the Miss
                                Universe pageant in Bangkok, Thailand </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/ice.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>ICE Castle in North Woodstock</b></h3>
                            <p>In this 26 January 2019 photo, a couple heads towards an entrance to a
                                cavern at Ice Castles in North Woodstock,
                                NH A team starts building massive walls in
                                December to create a spectacular winter experience </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/photo_of the_ye.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>Woman 'gang-raped' in Kurigram, 2 arrested</b></h3>
                            <p>
                                A supporter of the presidential candidate for the Honduran Opposition
                                Alliance Against the Dictatorship for the past election, Salvador Nasralla,
                                lies on the street in front of police officers during a demonstration
                                against the contested re-election of President Juan Orlando Hernandez. </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/china.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>China's island cities: Treasure or trouble for Asia?</b></h3>
                            <p>A high-rise city the size of central London
                                rising out of the ocean next to Sri
                                Lanka's capital is laying down another marker for</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/miss.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>Miss Philippines Catriona Gray</b></h3>
                            <p>Miss Philippines Catriona Gray is crowned Miss
                                Universe during the final round of the Miss
                                Universe pageant in Bangkok, Thailand </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/ice.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>ICE Castle in North Woodstock</b></h3>
                            <p>In this 26 January 2019 photo, a couple heads towards an entrance to a
                                cavern at Ice Castles in North Woodstock,
                                NH A team starts building massive walls in
                                December to create a spectacular winter experience </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/international/photo_of the_ye.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>Woman 'gang-raped' in Kurigram, 2 arrested</b></h3>
                            <p>
                                A supporter of the presidential candidate for the Honduran Opposition
                                Alliance Against the Dictatorship for the past election, Salvador Nasralla,
                                lies on the street in front of police officers during a demonstration
                                against the contested re-election of President Juan Orlando Hernandez. </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--        all news part end-->
@endsection
@extends('fonts.master')
@section('title')
    Bangladesh| Amader Kotha
@endsection

@section('link')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/reset.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/style1.css">
    <link rel="stylesheet" href="{{ asset('/fonts/') }}/css/topic.css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row" style="margin-top: 90px; ">
        <div class="col-sm-12">
            <!--            top news part start-->
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <a href="#" style="text-decoration: none;">
                            <div class="lead-topic">
                                <img src="{{ asset('/fonts/') }}/topic img/img/bd/satellite.jpg" alt="lead news">
                                <div class="text-wrap">
                                    <h1><b>Bangladesh Launches First Satellite</b></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--                        second lead news-->
                <div class="col-sm-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#" style="text-decoration: none;">
                                <div class="lead-topic-second">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/dr_k_zaman.jpg" alt="2nd lead news">
                                    <div class="text-wrap-second">
                                        <h4><b>UN Polio research body</b></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#" style="text-decoration: none;">
                                <div class="lead-topic-second" style="margin-top: 7px;">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/Mangal_Shobhajatra_in_Dhaka.jpg" alt="2nd lead news">
                                    <div class="text-wrap-second">
                                        <h4><b>Mangal Shobhajatra in Dhaka</b></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--                        second lead news end-->
                <div class="col-sm-4">

                </div>
            </div>
            <!--            top news part end-->
        </div>
    </div>

    <!--            normal news part start-->
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-3">
            <div class="row">
                <a href="#" style="text-decoration: none">
                    <div class="normal-news" style="margin-right: 15px;">
                        <div class="img-normal-news">
                            <img src="{{ asset('/fonts/') }}/topic img/img/bd/india.jpg" alt="Normal News Image">
                        </div>
                        <div class="text-normal-news">
                            <h3><b>Mokabbir joins Gonoforum council</b></h3>
                            <p>Voters line up to cast their votes outside a polling station during the
                                first phase
                                of general election in Alipurduar district in
                                the eastern state of West Bengal, India, 11 April 2019. Photo: </p>
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
                            <img src="{{ asset('/fonts/') }}/topic img/img/bd/miss.jpg" alt="Normal News Image">
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
                            <img src="{{ asset('/fonts/') }}/topic img/img/bd/ice.jpg" alt="Normal News Image">
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
                            <img src="{{ asset('/fonts/') }}/topic img/img/bd/photo_of the_ye.jpg" alt="Normal News Image">
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
    <!--normal news part end-->

    <!--            All News part start-->
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="heading">
                    <h2>All News</h2>
                    <hr  style=" border-top: 3px solid #DD3333"/>
                </div>
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/lightning-Lightning.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>Lightning kills housewife</h2>
                                    <p>A housewife was killed and another injured by a
                                        lightning strike at Beergor village in
                                        Haripur upazila of Thakurgaon on Friday morning, reports UNB....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/council.jpeg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>Mokabbir joins Gonoforum council</h2>
                                    <p>Though he took oath as a member of parliament
                                        violating his party decision,
                                        Gonoforum presidium member
                                        Mokabbir Khan joined its fifth national council on Friday.....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/bnp.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>BNP not worried over Zahidur’s oath taking: BNP</h2>
                                    <p>BNP secretary general Mirza Fakhrul
                                        Islam Alamgir on
                                        Friday said their party is not
                                        worried over its MP Zahidur Rahman
                                        Zahid taking oath as he did it under
                                        “government pressure”, reports UNB....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/bonolota.jpeg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>Non-stop train service on Dhaka-Rajshahi route opened</h2>
                                    <p>Prime minister Sheikh Hasina on Thursday
                                        launched the first-ever non-stop intercity
                                        train service on Dhaka-Rajshahi route fulfilling the
                                        long-cherished demand of the people of Rajshahi, reports UNB.....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/brac.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>BRAC University student killed as covered van hits bike</h2>
                                    <p>A female student of BRAC University was killed as a covered van hit the
                                        ridesharing motorcycle she was riding in the
                                        city's Sher-e-Bangla Nagar on Thursday, reports UNB.....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/jaflong.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>College student goes missing in Jaflong</h2>
                                    <p>A college student went missing in Jaflong's Piyain river while
                                        taking bath on Friday, reports UNB. The student,
                                        identified as Akikur Rahman Anik,...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/gun.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>2 killed in police ‘gunfight’</h2>
                                    <p>Two persons were killed in what police called a gunfight
                                        at Lemshikhali Darbar
                                        Ghat in Kutubdia upazila of
                                        Cox’s Bazar early Friday........
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/pm.jpg" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>PM Hasina says splitting any party isn't her policy</h2>
                                    <p>Prime minister Sheikh Hasina on Friday said it is not her policy to divide any
                                        party or do anything that leads a party
                                        to a split. "To divide a.......
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="hr-all">
                <a href="#" style="text-decoration: none;">
                    <div class="row">
                        <div class="all-news">
                            <div class="col-sm-4">
                                <div class="all-news-img">
                                    <img src="{{ asset('/fonts/') }}/topic img/img/bd/women.gif" alt="All News"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="all-news-text">
                                    <h2>Woman 'gang-raped', 2 arrested</h2>
                                    <p>A woman was allegedly gang-raped by four men at Karai Barishal Char in
                                        Chilmari upazila on Wednesday night.
                                        Two suspected rapists were arrested...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <!--                side bar topic start-->
        <div class="col-sm-4">
            <!--                    latest news start-->
            <div class="row">
                <div class="heading1">
                    <h2>Latest News</h2>
                    <hr  style=" border-top: 3px solid #DD3333;"/>
                </div>
                <div class="card1">
                    <a href="#" class="link">
                        <div class="row most-like margin-like">
                            <div class="col-sm-5 img-media">
                                <img class="like-img" src="{{ asset('/fonts/') }}/topic img/img/bd/ice.jpg" alt="like img">
                            </div>
                            <div class="col-sm-7 content-media">
                                <h5 class="like-text"><b>ICE Castle in North Woodstock </b></h5>
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
                    <hr style="display: block; border-top: 1px solid #cccccc"/>

                    <a href="#" class="link">
                        <div class="row most-like margin-like">
                            <div class="col-sm-5 img-media">
                                <img class="like-img" src="{{ asset('/fonts/') }}/topic img/img/bd/india.jpg" alt="like img">
                            </div>
                            <div class="col-sm-7 content-media">
                                <h5 class="like-text"><b>Voters line up to cast their votes </b></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--                    latest news end-->

            <!--                    with us start-->
            <div class="row">
                <a href="http://www.tracemyip.org/" target="_blank">
                    <div class="with-img">
                        <img src="{{ asset('/fonts/') }}/topic img/img/bd/with_us.png">
                    </div>
                </a>
            </div>
            <!--                    with us end-->

            <!--                    Highest Reading Start-->
            <div class="row">
                <div class="heading1">
                    <h2>Highest Reading</h2>
                    <hr  style=" border-top: 3px solid #DD3333;"/>
                </div>
                <div class="card1">
                    <a href="#" class="link">
                        <div class="row most-like margin-like">
                            <div class="col-sm-5 img-media">
                                <img class="like-img" src="{{ asset('/fonts/') }}/topic img/img/bd/jaflong.jpg" alt="like img">
                            </div>
                            <div class="col-sm-7 content-media">
                                <h5 class="like-text"><b>College student goes missing in Jaflong</b></h5>
                            </div>
                        </div>
                    </a>
                    <hr style="display: block; border-top: 1px solid #cccccc"/>
                    <a href="#" class="link">
                        <div class="row most-like margin-like">
                            <div class="col-sm-5 img-media">
                                <img class="like-img" src="{{ asset('/fonts/') }}/topic img/img/bd/bnp.jpg" alt="like img">
                            </div>
                            <div class="col-sm-7 content-media">
                                <h5 class="like-text"><b>Quick action to be taken against Zahidur: Fakhrul</b></h5>
                            </div>
                        </div>
                    </a>
                    <hr style="display: block; border-top: 1px solid #cccccc"/>

                    <a href="#" class="link">
                        <div class="row most-like margin-like">
                            <div class="col-sm-5 img-media">
                                <img class="like-img" src="{{ asset('/fonts/') }}/topic img/img/bd/brac.jpg" alt="like img">
                            </div>
                            <div class="col-sm-7 content-media">
                                <h5 class="like-text"><b>BRAC University student killed as covered van hits bike</b></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--                    Highest Reading End-->

            <div class="row">
                <div class="col-sm-12" style="background-color: whitesmoke; margin: 10px 0px 5px 15px;">
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
        </div>
        <!--                side bar topic end-->
    </div>
    <!--            All News part end-->
@endsection
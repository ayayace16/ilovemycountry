@extends('layout/header')
@include('layout/navbar')
@include('layout/socialbar')
@section('style')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
<link rel="stylesheet" href="{{asset('css/main-style.css')}}">
<link rel="stylesheet" href="{{asset('css/w3.css')}}">
<link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
@endsection
@section('layout')
<div class="container-fluid">

    <!--Home-->
    <div id="home">
        <div class="container-fluid">
            <div class="container">
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-12 text-center">
                        <img src="/image/heart1.png" class="img-home">
                    </div>
                </div>
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-5 text-center">
                        <h2 class="home-title1">iLoveMyCountry.Ph</h2>
                    </div>
                </div>
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-5 text-center">
                        <h2 class="home-title2">Extraordinary and Heroic Filipinos for <br> Fraud-Free Philippines</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-of-home-->

    <!--about-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">ABOUT US</h2>
        </div>
    </div>
    <div id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-12 text-center">
                        <img src="../image/About/About-img-1.png" class="about-img1" width="1056" height="485">
                    </div>
                    <div class="col-xl-5 text-right">
                        <img src="../image/About/About-img-2.png" class="about-img2" width="550" height="319">
                    </div>
                    <div class="col-xl-5 text-left">
                        <img src="../image/About/About-img-3.png" class="about-img3" width="550" height="319">
                    </div>
                    <div class="col-xl-10 text-center justify-content-center">
                        <p>iLoveMyCountry.Ph (ILMCP) is a non-stock, non-profit, and non-political organization
                            which aims to create a community of Extraordinary and Heroic Filipinos for Fraud-Free
                            Philippines.</p>
                        <p>Through the creation of ILoveMyCountry.Ph, Filipinos are given
                            high hopes of making the Philippines a great country again by being proud of the country
                            and of being a
                            Filipino; loving our country the way we love our families; exhibiting extraordinary
                            Filipino values;
                            promoting the Filipino culture, beauty and positive things about the Philippines; do
                            heroic
                            acts for the good of the majority; and maintain high level of integrity and discipline
                            to achieve
                            a Fraud-Free country resulting to a progressive nation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-of-about-->

    <!--corebeliefs-->
    <div class="container-fluid">
        <div id="corebeliefs">
            <div class="container">
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-12 text-center">
                        <h2>OUR CORE BELIEFS</h2>
                    </div>
                    <div class="col-xl-3.5 text-left">
                        <ul>
                            <li>Challenging the status quo</li>
                            <li>Unlimited Potential and Right to grow</li>
                            <li>Love our country</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="vision-mission">
            <div class="content">
                <div class="row mx-auto justify-content-center">
                    <div class="col-xl-6.5 text-center border">
                        <div class="col-xl-12 text-center">
                            <img src="image/About/vission.png">
                        </div>
                        <div class="col-xl-12 text-center">
                            <h2>OUR MISSION & VISION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end-of-corebeliefs-->

    <!--advocacy-team-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">ADVOCACY TEAM</h2>
        </div>
    </div>
    <div id="advocacy-team">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Sir-Sison.png">
                            <h4>NEIL SISON</h4>
                            <h5 id="h5">FOUNDER AND CEO</h5>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Ma'am-Alina.png">
                            <h4>ALINA ORILLO-SISON</h4>
                            <h5 id="h5">FOUNDER AND COO</h5>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Sir-Waw.png">
                            <h4>WAW MANLAPAZ</h4>
                            <h5 id="h5">CO-FOUNDER & CHIEF MARKETING STATEGIST</h5>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Ma'am-Aiza.png">
                            <h4>AIZA P. CAMUA</h4>
                            <h5 id="h5">TREASURER</h5>
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-start">
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Ma'am-Jennifer.png" class="picture">
                            <h4>JENNIFER PAHOYO</h4>
                            <h5 id="h5">MANAGER</h5>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Ma'am-Abby.png" class="picture">
                            <h4>ABBY GRACE ESTOCE</h4>
                            <h5 id="h5">PROGRAM ASSOCIATE</h5>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/About/advocacy-team/Ma'am-Cecile.png" class="picture">
                            <h4>CECILIA R. OREDINA</h4>
                            <h5 id="h5">CONSULTANT</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-of-advocacy-team-->

    <!--our-advoacy-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">OUR ADVOCACY</h2>
        </div>
    </div>
    <div id="our-advocacy">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-11 text-center">
                    <h2>WE LOVE TO PRODUCE<br>EXTRAORDINARY AND HEROIC FILIPINOS<br>WHO WILL HELP MAKE THE
                        PHILIPPINES A<br>FRAUD-FREE COUNTRY!</h2>
                </div>
            </div>
        </div>
    </div>
    <!--end-of-advocacy-team-->

    <!--our-programs-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">OUR ADVOCACY</h2>
        </div>
    </div>
    <div id="our-program">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-3">
                            <img src="image/Programs/programs-1.jpg" width="289.78px" height="196.06px">
                        </div>
                        <div class="col-xl-5">
                            <a href="#">ILOVEMYCOUNTRY FOR THE FAMILY</a>
                            <p>Talks and seminars on how we love our country more and value formation for
                                the
                                family.
                                <ul>
                                    <li>Feeding Program</li>
                                    <li>Calamity Assistance</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-5">
                            <a href="#">ILOVEMYCOUNTRY IN COMMUNITY</a>
                            <p>Talks and seminars on how to love our country more, livelihood training,
                                and values formation for
                                the community.
                                This program also includes:
                                <ul>
                                    <li>iLoveMyCountry Feeing Program</li>
                                    <li>Calamity Assistance Program</li>
                                    <li>Livelihood and Financial Literacy Seminar</li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-xl-3">
                            <img src="image/Programs/programs-2.png" width="289.78px" height="196.06px">
                        </div>
                    </div>
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-3">
                            <img src="image/Programs/programs-3.png" width="289.78px" height="196.06px">
                        </div>
                        <div class="col-xl-5">
                            <div class="programc">
                                <a href="#">ILOVEMYCOUNTRY IN SCHOOLS</a>
                                <p>Talks and symposia on how to love our country more to make it a
                                    Fraud-Free country.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-5">
                            <a href="#">ILOVEMYCOUNTRY IN BUSINESS AND PROFESSION</a>
                            <p>Seminars, symposia, and fora in a corporate and professional setting on how
                                a
                                company can
                                contribute to make the Philippines a Fraued-Free country. This program is in
                                coordination
                                with
                                Professionals of the Future (POF)</p>
                        </div>
                        <div class="col-xl-3">
                            <img src="image/Programs/programs-4.jpg" width="289.78px" height="196.06px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx=auto justify-content-center">
                <div class="col-xl-8">
                    <div class="parallax">
                        <h2 class="p-title">MEDIA CAMPAIGNS & AWARDS</h2>
                    </div>
                </div>
            </div>
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-3">
                            <img src="image/Programs/mca/mca-1.png" class="programb" width="289.78px" height="196.06px">
                        </div>
                        <div class="col-xl-5">
                            <a href="#">ILOVEMYCOUNTRY RUN</a>
                            <p class="text-left">A year fun-run gathering of Extraordinary and Heroic Filipino.
                                Participants
                                of this event run for
                                a
                                ause
                                and advocates of ILMCP vision and mission.</p>
                        </div>
                    </div>
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-5">
                            <a href="#">EXTRAORDINARY AND HEROIC FILIPINO AWARDS</a>
                            <p class="text-left">The highest award given to Filipino who explicit Extraordinary and
                                Heroic deeds in
                                showing
                                the
                                love for the country.</p>
                        </div>
                        <div class="col-xl-3 text-center">
                            <img src="image/Programs/mca/mca-2.png" class="programd" width="289.78px" height="196.06px">
                        </div>
                    </div>
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-3">
                            <img src="image/Programs/mca/mca-3.png" class="programb" width="289.78px" height="196.06px">
                        </div>
                        <div class="col-xl-5">
                            <a href="#">SOCIAL MEDIA CAMPAIGNS</a>
                            <p class="text-left">An everyday posting of photos, videos, blogs an articles showing how to
                                love your country
                                and
                                uplifting the Philippines as a nation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-of-our-programs-->

    <!--Gallery-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">GALLERY</h2>
        </div>
    </div>
    <!--End-of-Gallery-->

    <!--News-Events-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">NEWS AND EVENTS</h2>
        </div>
    </div>
    <div id="news-events">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center border">
                <div class="col-xl-12 text-center border">
                    <div class="row mx=auto justify-content-center border">
                        <a href="#">
                            <div class="col-xl-3 border">
                                <img src="image/news/news-1.jpg" width="289.78px" height="196.06px">
                            </div>
                            <div class="col-xl-6 text-left border">
                                <h2>ILMC Run 2019</h2>
                                <p>iLoveMyCountry.Ph Run 2019 for Fraud-Free Philippines. <br>
                                    Join us this November as we bring you the <br> biggest and much awaited
                                    Extraordinary and
                                    Heroic running
                                    event of the year, iLoveMyCountry.PH Run 2019 for Fraud-Free Philippines <br>
                                    Cebu - Novermber 9, 2019 at Cebu Business Park <br>
                                    Leyte - November 16, 2019 at Candahug, Paolo Leyte <br>
                                    Davao - November 23, 2019 at Davao People's Park <br>
                                    Manila - November 30, 2019 at Marikina Sports Center</p>
                            </div>
                        </a>
                    </div>
                    <hr>
                    <div class="row mx=auto justify-content-center border">
                        <a href="#">
                            <div class="col-xl-3 border">
                                <img src="image/news/news-2.png" width="289.78px" height="196.06px">
                            </div>
                            <div class="col-xl-5 text-left border">
                                <h2>Heroic Awards: An honest Janitor returns an envelope filled with
                                    dollar bills</h2>
                                <p>Losing your belongings in a public place may be one of the worst things that could
                                    happen, and there is
                                    very little chance that you could get it back. But...</p>
                            </div>
                        </a>
                    </div>
                    <hr>
                    <div class="row mx=auto justify-content-center border">
                        <a href="#">
                            <div class="col-xl-3 border">
                                <img src="image/news/news-3.jpg" width="289.78px" height="196.06px">
                            </div>
                            <div class="col-xl-5 text-left border">
                                <h2>FEEDING MISSION</h2>
                                <p>The recent population of PCJ (Pasig City Jail) is composed of 1,539 Males. The
                                    feeding mission were done
                                    mostly by our parner, DADA's lechon. SCP had our first mission last...</p>
                            </div>
                        </a>
                    </div>
                    <hr>
                    <div class="row mx=auto justify-content-center border">
                        <a href="#">
                            <div class="col-xl-3 border">
                                <img src="image/news/news-4.png" width="289.78px" height="196.06px">
                            </div>
                            <div class="col-xl-5 text-left border">
                                <h2>ILoveMyCountry HEROIC RUN 2018</h2>
                                <p>The first ever ilovecountry.ph Heroic Run 2018 was held last November 10, 2018 at the
                                    Amoranto Sports
                                    Complex in Quezon City.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <button type="button" class="btn btn-outline-warning">READ MORE NEWS</button>
                </div>
            </div>
        </div>
    </div>
    <!--End-of-News-Events-->

    <!--souvenir-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">OUR SOUVENIR ITEMS</h2>
        </div>
    </div>
    <div id="souvenir">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="row mx=auto justify-content-center">
                        <div class="col-xl-2">
                            <img src="image/souvenir/souvenir-1.png" width="175px" height="175px">
                        </div>
                        <div class="col-xl-2">
                            <img src="image/souvenir/souvenir-2.png" width="175px" height="175px">
                        </div>
                        <div class="col-xl-2">
                            <img src="image/souvenir/souvenir-3.png" width="175px" height="175px">
                        </div>
                        <div class="col-xl-2">
                            <img src="image/souvenir/souvenir-4.png" width="175px" height="175px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-souvenir-->

    <!--volunteer-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">VOLUNTEER</h2>
        </div>
    </div>
    <div id="volunteer">
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="col-xl-2 text-center">
                        <img src="image/volunteer/vol-1.jpg" width="343px" height="215px">
                    </div>
                    <div class="col-xl-2 text-center">
                        <img src="image/volunteer/vol-2.png" width="343px" height="215px">
                    </div>
                    <div class="col-xl-2 text-center">
                        <img src="image/volunteer/vol-3.jpg" width="343px" height="215px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-volunteer-->

    <!--our-partners-and-sponsors-->
    <div class="container-fluid">
        <div class="parallax">
            <h2 class="p-title">OUR PARTNERS AND SPONSORS</h2>
        </div>
    </div>
    <div id="partners-sponsors">
        <div class="container-fluid">
            <div class="container">
            <div class="row mx-auto justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/1.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/2.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/3.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/4.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/5.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/6.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/7.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/8.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/9.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/10.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/11.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/12.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/13.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/14.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/15.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/16.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/17.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/18.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/19.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/20.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/21.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/22.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/23.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/24.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/25.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/26.jpg" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/27.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/28.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/29.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/30.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/31.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/32.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/33.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/34.jpg" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/35.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/36.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/37.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/38.png" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/39.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/40.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/41.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/42.jpg" width="202">
                        </div>
                    </div>
                    <div class="row mx-auto justify-content-center">
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/43.jpg" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/44.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/45.png" width="202">
                        </div>
                        <div class="col-xl-2 text-center">
                            <img src="image/pas/46.png" width="202">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        <!--end-->
    
</div>

@endsection
{{-- @include('layout/footer') --}}
@section('script')
<link rel="stylesheet" href="{{asset('js/bootstrap.bundle.js')}}">
<link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}">
<link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
<link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('js/jquery.slim.min.js')}}">
<link rel="stylesheet" href="{{asset('js/popper.min.js')}}">
@endsection

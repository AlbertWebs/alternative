@extends('front.master')

@section('content')
   <!-- Breadcrumbs Start -->
   <div class="rs-breadcrumbs img8">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Who We Are
                <span class="watermark">About</span>
            </h1>
            <span class="sub-text">
                Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence

                in their careers and personal life through Transformative Leadership and

                Management Training.
            </span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- About Section Start -->
<div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                <div class="images-part">
                    <img src="{{asset('theme/assets/images/about/about-3.png')}}" alt="Images">
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="sec-title">
                    <h2 class="title pb-22">
                        All HR Solutions
                    </h2>
                    <span class="sub-text big">Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence

                        in their careers and personal life through Transformative Leadership and

                        Management Training.</span>

                    <p class="margin-0 pt-15">
                        Alizhora is a management consultancy centre with a highly qualified and experienced
                        team of dedicated human resource experts and takes pride in being your one stop centre
                        for human resource solutions.<br>
                        We avail our time and resources to be up to speed with the latest and most transformative

                        leadership and management solution. Our training elements are structured towards nurtu-
                        ring your individual objectives and ensures high staff performance as per your desired

                        need
                    </p>
                    <div class="btn-part mt-45 md-mt-30">
                        <a class="readon consultant discover" href="{{url('/services')}}">What We Do</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs-animation">
        <div class="animate-style">
            <img class="scale" src="{{asset('theme/assets/images/about/tri-circle-1.png')}}" alt="About">
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Services Section Start -->
<div id="rs-services" class="rs-services chooseus-style about-style bg12 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 md-mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/choose/icons/1.png')}}" alt="Images">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="{{url('/')}}/services">Expert Personale</a></h3>
                        <p class="services-txt">Our Expert personel makes us stand out</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/choose/icons/2.png')}}" alt="Images">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="{{url('/')}}/services">Sufficient Experience</a></h3>
                        <p class="services-txt">We offer our services from knowledge and Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/choose/icons/3.png')}}" alt="Images">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="{{url('/')}}/services">Quality Assuarance</a></h3>
                        <p class="services-txt">Quality Services Is 100% Guaranteed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- Why Choose Section Start -->
<div class="rs-choose pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                <div class="sec-title mb-35">
                    <h2 class="title pb-30">
                        Why choose us
                    </h2>
                    <p class="margin-0">
                        1. Integrity – Build trust with clients and each other by actions and deliverables. We deliver
                        what we promise to our people and our clients.
                        <br>
                        2. Quality - We ensure we deliver high standards of deliverables time and again.
                        <br>
                        3. Collaboration - We together work towards achieving long term growth for our clients, stake
                        holders and benefit each other.
                        <br>
                        4. Respect - We create an environment where each person feels valued and treated with dignity
                    </p>
                </div>
                <!-- Skillbar Section Start -->
                <div class="rs-skillbar style1">
                    <div class="cl-skill-bar">
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Human Resource Solutions</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Employee Selection & Placement</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Training</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>

                    </div>
                </div>
                <!-- Skillbar Section End -->
            </div>
            <div class="col-lg-6">
                <div class="rs-videos choose-video">
                    <div class="images-video">
                        <img src="{{asset('theme/assets/images/choose/chosse-video.jpg')}}" alt="images">
                    </div>
                    <div class="animate-border">
                        <a class="popup-border" href="https://www.youtube.com/watch?v=3tpVVY5OP3g">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->
    <div class="rs-counter style1 pt-100 md-pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 md-mb-30">
                    <div class="counter-area">
                        <div class="counter-list mb-20">
                            <div class="counter-icon">
                                <img src="{{asset('theme/assets/images/counter/icons/1.png')}}" alt="Counter">
                            </div>
                            <div class="counter-number">
                                <h3 class="rs-counts">Mission</h3>
                            </div>
                        </div>
                        <div class="content-part">
                            <h5 class="title">Dedication to our calling in organizational development programs including capacity buil-
                                ding, team buildingand quality audits that bring modern leadership and performance to

                                organizations.</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-area">
                        <div class="counter-list mb-20">
                            <div class="counter-icon">
                                <img src="{{asset('theme/assets/images/counter/icons/4.png')}}" alt="Counter">
                            </div>
                            <div class="counter-number">
                                <h3 class="rs-counts">Vision</h3>

                            </div>
                        </div>
                        <div class="content-part">
                            <h5 class="title">To be the leading management and Human Resource Consultancy Center in the region,

                                with a world class HR solutions and training modules that enable our clients confront com-
                                plex business challenges.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->
</div>
<!-- Why Choose Section Start -->
@endsection

@extends('front.master-pages')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Solutions</h2>
            <ul>
                <li>
                    <a href="index.html">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Solutions</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

	<!-- Start Services Area -->
    <section class="services-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>Cybersecurity services</span>
                <br>
                <h2>You can protect your organization’s cybersecurity by services us</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-1.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Website Scanning</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-2.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Malware Removal</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-3.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Cloud Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-4.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Data Protection</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-5.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Application Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img class="radius-10" src="{{asset('theme/assets/img/services/services-6.jpg')}}" alt="Image">
                            </a>
                        </div>

                        <div class="services-content">
                            <h3><a href="services-details.html">Threat Hunter</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>

                            <a href="services-details.html" class="read-more">
                                Read more
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Services Area -->
@endsection

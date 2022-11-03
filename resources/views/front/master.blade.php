<!doctype html>
<html lang="zxx">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links of CSS files -->
		<link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/boxicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/odometer.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset('theme/assets/img/Salcon-4.png')}}">
		<!-- Title -->
		@include('seo')
    </head>

    <body>

		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator">
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
		<!-- End Preloader Area -->

		<!-- Start Header Area -->
		<header class="header-area p-relative">

			<!-- Start Navbar Area -->
			<div class="navbar-area navbar-area-two">
				<div class="mobile-nav">
					<div class="container">
						<a href="{{url('/')}}" class="logo">
							<img class="logos" src="{{asset('theme/assets/img/logo.jpg')}}" alt="Logo">
						</a>
					</div>
				</div>

				<div class="main-nav">
					<div class="container">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand" href="{{url('/')}}">
								<img class="logos" src="{{asset('theme/assets/img/logo.jpg')}}" alt="Logo">
							</a>

							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="{{url('/')}}" class="nav-link active">
											<i class="bx bx-home"></i>
                                            Home
										</a>


									</li>
                                    <li class="nav-item">
										<a href="{{url('/')}}/the-company" class="nav-link">
											The Company
										</a>
									</li>



									<li class="nav-item">
										<a href="{{url('/')}}/our-solutions" class="nav-link">
											Solutions
											<i class="bx bx-chevron-down"></i>
										</a>

										<ul class="dropdown-menu">
											<?php
                                               $Services = DB::table('services')->get();
                                            ?>
                                            @foreach ($Services as $services)
                                            <li class="nav-item">
												<a href="{{url('/')}}/#our-solutions/{{$services->slung}}" class="nav-link">{{$services->title}}</a>
											</li>
                                            @endforeach
										</ul>
									</li>


                                    <li class="nav-item">
										<a href="{{url('/')}}/the-company" class="nav-link">
											Portfolio
										</a>
									</li>


									<li class="nav-item">

										<a href="{{url('/')}}/contact-us" class="nav-link"><i class="bx bx-phone"></i> Contact</a>
									</li>
								</ul>

								<div class="others-option">


									<div class="get-quote">
										<a href="#" class="default-btn">
											<span>Schedule a Call</span>
										</a>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>

				<div class="others-option-for-responsive">
					<div class="container">
						<div class="dot-menu">
							<div class="inner">
								<div class="circle circle-one"></div>
								<div class="circle circle-two"></div>
								<div class="circle circle-three"></div>
							</div>
						</div>

						<div class="container">
							<div class="option-inner">
								<div class="others-option justify-content-center d-flex align-items-center">
									<div class="get-quote">
										<a href="#" class="default-btn">
											<span>Schedule a Call</span>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navbar Area -->

		</header>
		<!-- End Header Area -->

       @yield('content')

		<!-- Start Footer Area -->
		<footer class="footer-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<a href="{{url('/')}}" class="logo">
								<img style="max-width:200px" src="{{asset('theme/assets/img/Salcon-2.png')}}" alt="Image">
							</a>

							<p>
                                We are a Somalia-based consulting firm that provides specialized consultancy services to government, non-government organizations and corporate entities in the areas of monitoring, evaluations, research, capacity building, organization development and Environmental Consulting services.
                            </p>

							<ul class="social-icon">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h3>Address</h3>

							<ul class="address">
								<li class="location">
									<i class="bx bxs-location-plus"></i>
									6890 Blvd, The Bronx, NY 1058 New York, USA
								</li>
								<li>
									<i class="bx bxs-envelope"></i>
									<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c9a1aca5a5a689baacb8bdb0e7aaa6a4"><span class="__cf_email__" data-cfemail="68000d040407281b0d191c11460b0705">[email&#160;protected]</span></a>
									<a href="#">skype: example</a>
								</li>
								<li>
									<i class="bx bxs-phone-call"></i>
									<a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
									<a href="tel:+1-(514)-312-6677">+1 (514) 312-6677</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h3>Solutions</h3>

							<ul class="import-link">
								<li>
									<a href="#">Secure Private Cloud</a>
								</li>
								<li>
									<a href="#">Online Backup</a>
								</li>
								<li>
									<a href="#">Secure Websites</a>
								</li>
								<li>
									<a href="#">Cyber-Security</a>
								</li>
								<li>
									<a href="#">Enterprise Networks</a>
								</li>
								<li>
									<a href="#">Collaboration</a>
								</li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-6">
						<p>
							Copyright <i class="bx bx-copyright"></i>{{date('Y')}} <a href="{{url('/')}}/copyright-statement">Alternative Solutions Consulting</a> All Rights Reserved | Powered By
							<a href="https://designekta.com/" target="_blank">Designekta Studios</a>
						</p>
					</div>

					<div class="col-lg-4 col-md-6">
						<ul class="footer-menu">
							<li>
								<a href="{{url('/')}}/privacy-policy" target="_blank">
									Privacy Policy
								</a>
							</li>
							<li>
								<a href="{{url('/')}}/terms-and-conditions" target="_blank">
									Terms & Conditions
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Copy Right Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->


		<!-- Links of JS files -->
        <script data-cfasync="false" src="{{asset('theme/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/meanmenu.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/nice-select.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/jarallax.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/appear.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/odometer.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/smoothscroll.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/form-validator.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/contact-form-script.js')}}"></script>
		<script src="{{asset('theme/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/custom.js')}}"></script>
    </body>

</html>

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

    <body onmousedown="return false" onselectstart="return false">

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
		<!-- Start Header Area -->
		<header class="header-area">

			<!-- Start Top Header -->
			<div class="top-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<ul class="header-left-content">
								<li>
									<i class="bx bx-phone-call"></i>
									<a href="tel:+1-(514)-312-5678">+252-613771205</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-sm-6">
							<ul class="header-right-content">
								<li>
									<a href="#" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										<i class="bx bxl-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->

			<!-- Start Navbar Area -->
			<div class="navbar-area">
				<div class="mobile-nav">
					<div class="container">
						<a href="{{url('/')}}" class="logo">
							<img src="{{asset('theme/assets/img/Salcon-2.png')}}" alt="Logo">
						</a>
					</div>
				</div>

				<div class="main-nav">
					<div class="container">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand" href="{{url('/')}}">
								<img class="logos" src="{{asset('theme/assets/img/Salcon-2.png')}}" alt="Logo">
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
											About Us
										</a>
									</li>



									<li class="nav-item">
										<a href="{{url('/')}}/#our-solutions" class="nav-link">
											Services
											<i class="bx bx-chevron-down"></i>
										</a>

										<ul class="dropdown-menu">
                                            <?php
                                               $Services = DB::table('services')->limit('5')->get();
                                            ?>
                                            @foreach ($Services as $services)
                                            <li class="nav-item">
												<a href="{{url('/')}}/our-solutions/{{$services->slung}}" class="nav-link">{{$services->title}}</a>
											</li>
                                            @endforeach
										</ul>
									</li>


                                    <li class="nav-item">
										<a href="{{url('/')}}/portfolio" class="nav-link">
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
											<span>Get a Quote</span>
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
		<!-- End Header Area -->

       @yield('content')

		<!-- Start Footer Area -->
		@include('front.footer')
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

        <script>
            $("form").each(function() {
                $(this).find(':input[type="submit"]').prop('disabled', true);
            });
            function correctCaptcha() {
                $("form").each(function() {
                    $(this).find(':input[type="submit"]').prop('disabled', false);
                });
            }
        </script>
    </body>

</html>

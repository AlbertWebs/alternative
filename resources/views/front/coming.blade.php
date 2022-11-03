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
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
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

		<!-- Start Coming Soon Area -->
		<div class="coming-soon-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="coming-soon-content">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('theme/assets/img/logo.jpg')}}" alt="image">
						</a>

						<h2>We are launching soon</h2>

                        <div id="timer" class="flex-wrap d-flex justify-content-center">
                            <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                            <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                            <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                            <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
						</div>

                        <form class="newsletter-form" data-toggle="validator">
                            <div class="form-group">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                <span class="label-title"><i class='bx bx-envelope'></i></span>
							</div>

                            <button type="submit" class="default-btn">
								<span>Subscribe</span>
							</button>

                            <div id="validator-newsletter" class="form-result"></div>
                            <p>If you would like to be notified when your app is live, Please subscribe to our mailing list.</p>
                        </form>
                    </div>
                </div>
			</div>
        </div>
        <!-- End Coming Soon Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->


       <!-- Links of JS files -->
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

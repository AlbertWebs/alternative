@extends('front.master')

@section('content')
		<!-- Start Banner Area -->
		<section class="banner-area bg-1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="banner-content">
							<span class="top-title">World Class Professional Consulting</span>
							<h1>Alternative Solutions Consultancy</h1>
							<p>
                                We are a Somalia-based consulting firm that provides specialized consultancy services to government, non-government organizations and corporate entities in the areas of monitoring, evaluations, research, capacity building, organization development and Environmental Consulting services.
                            </p>
							<div class="banner-btn">
								<a href="{{url('/')}}/our-solutions" class="default-btn">
									<span>Our Solutions <i style="color:#ffffff" class="bx bx-briefcase-alt-2"></i></span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="banner-image">
							<img src="{{asset('theme/assets/img/banner/banner-img.png')}}" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

		<!-- Start Feature Area -->
		<section class="feature-area feature-area-two pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-feature overly-one">
							<div class="overly-two">
								<div class="title">
									<i class="flaticon-testing"></i>
									<h3>Third Party Monitoring </h3>
								</div>
								<p>
                                    We provide monitoring and verification services in remote and non-permissive environments to help government agencies, donor and development and aid organizations to make informed decision...
                                </p>
								<div class="feature-shape">
									<img  src="{{asset('theme/assets/img/feature-shape.png')}}" alt="Image">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6" style="min-height:360px">
						<div class="single-feature overly-one">
							<div class="overly-two" >
								<div class="title">
									<i class="flaticon-cybercrime"></i>
									<h3>Policy Performance and Impact Evaluation </h3>
								</div>
								<p>
                                    Combining highest evaluation standards and unique sector specific understanding, we assess the effects of programmes and policies and turn evidence into action-based policy advice.
                                </p>
								<div class="feature-shape">
									<img src="{{asset('theme/assets/img/feature-shape.png')}}" alt="Image">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="single-feature overly-one" style="min-height:270px">
							<div class="overly-two">
								<div class="title">
									<i class="flaticon-cyber-security"></i>
									<h3>Cyber Security</h3>
								</div>
								<p>
                                    Through vast experience and skilled professionals with robust digital literacy, we defend private sector, government agencies and non-state actor against cyber-attack.
                                </p>
								<div class="feature-shape">
									<img src="{{asset('theme/assets/img/feature-shape.png')}}" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Feature Area -->

		<!-- Start About Us Area -->
		<section class="about-us-area pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img">
							<img class="radius-10" src="{{asset('theme/assets/img/about-img.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="about-content">
							<div class="about-title">
								<span>About Us</span>
								<p>
                                    Alternative Solutions is a Somalia-based consulting firm that provides specialized consultancy services to government, non-government organizations and corporate entities in the areas of monitoring, evaluations, research, capacity building, organization development and Environmental Consulting services.
                                </p>
                                <br>
                                <p>
                                    Alternative Solutions founded in 2011 as small startup firm grew over the years gaining momentum reputations in providing the aforementioned specialized services.
                                </p>
							</div>

							<div class="tab">
								<ul class="tabs">
									<li>
										Our vision:
									</li>
									<li>
										Our Mission:
									</li>
									<li>
										Our Core values:
									</li>
								</ul>

								<div class="tab_content">
									<div class="tabs_item">
										<p>
                                            To be your trusted companion for lasting solutions
                                        </p>


									</div>

									<div class="tabs_item">
										<p>
                                            providing and facilitating unparalleled consulting services through research, edge-cutting technologies, practical approaches and contextually tailored methodologies.
                                        </p>


									</div>

									<div class="tabs_item">
										{{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p> --}}

										<ul>
											<li>
												<i class="bx bx-check-circle"></i>
												<strong>Professionalism:</strong> Deploying relevant, competent and highly experienced network of experts who are passionate to make a difference;
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												<strong>Unique/unparalleled service:</strong> Providing contextualized and out-of-box multifaceted solutions;
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												<strong>Service durability:</strong>  Through meaningful involvement empowering lasting solutions
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Area -->

		<!-- Start Our Challenges Area -->
		<section class="challenges-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="section-title white-title">
					<span>Our Challenges</span>
					<h2>You Can Protect Your Organization’s Cybersecurity By Us</h2>
				</div>

				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-challenges overly-one">
							<div class="overly-two">
								<i class="flaticon-threat"></i>
								<h3>Identifying Threats</h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<span class="flaticon-threat"></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-challenges overly-one">
							<div class="overly-two">
								<i class="flaticon-cyber"></i>
								<h3>Cyber Risk Assessment</h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<span class="flaticon-cyber"></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-challenges overly-one">
							<div class="overly-two">
								<i class="flaticon-cyber-security-1"></i>
								<h3>Testing Cyber Security</h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<span class="flaticon-cyber-security-1"></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-challenges overly-one">
							<div class="overly-two">
								<i class="flaticon-password"></i>
								<h3>Managing Cloud Security</h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<span class="flaticon-password"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Challenges Area -->

		<!-- Start Services Area -->
		<section class="services-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Cyber Security Services</span>
					<h2>You Can Protect Your Organization’s Cybersecurity By Services Us</h2>
				</div>

				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-services">
							<div class="services-img">
								<a href="services-details.html">
									<img src="{{asset('theme/assets/img/services/services-1.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="services-content">
								<h3><a href="services-details.html">Website Scanning</a></h3>
								<div class="content">
									<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
									<a href="services-details.html" class="read-more">
										Read More
										<i class="flaticon-right-arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-services">
							<div class="services-img">
								<a href="services-details.html">
									<img src="{{asset('theme/assets/img/services/services-2.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="services-content">
								<h3><a href="services-details.html">Malware Removal</a></h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<a href="services-details.html" class="read-more">
									Read More
									<i class="flaticon-right-arrow"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-services">
							<div class="services-img">
								<a href="services-details.html">
									<img src="{{asset('theme/assets/img/services/services-3.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="services-content">
								<h3><a href="services-details.html">Cloud Security</a></h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<a href="services-details.html" class="read-more">
									Read More
									<i class="flaticon-right-arrow"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-services">
							<div class="services-img">
								<a href="services-details.html">
									<img src="{{asset('theme/assets/img/services/services-4.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="services-content">
								<h3><a href="services-details.html">Data Protection</a></h3>
								<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
								<a href="services-details.html" class="read-more">
									Read More
									<i class="flaticon-right-arrow"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Area -->

		<!-- Start Solution Area -->
		<section class="solution-area pb-70">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="solution-content">
							<div class="solution-title">
								<span>All-in Solution</span>
								<h2>Our experts are providing and planning 24/7 technical support services with product and security consultation.</h2>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-6">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>
												<a href="solution-details.html">
													Product Consultation
												</a>
											</h3>
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
											<span>01</span>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>
												<a href="solution-details.html">
													Security Consultation
												</a>
											</h3>
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
											<span>02</span>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>
												<a href="solution-details.html">
													24/7 Technical Support
												</a>
											</h3>
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
											<span>03</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 pr-0">
						<div class="solution-img">
							<img src="{{asset('theme/assets/img/solution-img.png')}}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Solution Area -->

		<!-- Start Get In Touch Area -->
		<section class="get-in-touch-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="section-title white-title">
					<span>Get In Touch</span>
					<h2>Contact Us Today To Speak With An Expert About Your Specific Needs</h2>
				</div>

				<form class="get-in-touch-form">
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" id="First-Name">
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" id="Email">
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" id="Number">
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Company</label>
								<input type="text" class="form-control" id="Company">
							</div>
						</div>
					</div>

					<button type="submit" class="default-btn">
						<span>Consultation</span>
					</button>
				</form>
			</div>
		</section>
		<!-- Eed Get In Touch Area -->

		<!-- Start Protect Area -->
		<section class="protect-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="protect-content">
							<div class="protect-title">
								<span>Cyber Security Protect</span>
								<h2>Protect your website, web server, and web application for helping you being threats from the hacker</h2>
							</div>

							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-database"></i>
											<h3>Database Security</h3>
											<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
											<span class="flaticon-database"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-application"></i>
											<h3>Database Security</h3>
											<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
											<span class="flaticon-application"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-security"></i>
											<h3>Web Security</h3>
											<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
											<span class="flaticon-security"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-security-1"></i>
											<h3>Server Security</h3>
											<p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
											<span class="flaticon-security-1"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="protect-img">
							<img src="{{asset('theme/assets/img/protect-img.jpg')}}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Eed Protect Area -->

		<!-- Start Testimonials Area -->
		<section class="testimonials-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="testimonials">
					<span>What our customers say</span>

					<div class="testimonials-slider owl-carousel owl-theme">
						<div class="testimonials-item">
							<i class="flaticon-quote"></i>
							<p>“Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>

							<ul>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>

							<h3>Jastin Anderson</h3>
							<span>CEO</span>
						</div>
						<div class="testimonials-item">
							<i class="flaticon-quote"></i>
							<p>“Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>

							<ul>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>

							<h3>Juhon Anderson</h3>
							<span>Manager</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Eed Testimonials Area -->

		<!-- Start Partner Area -->
		<div class="partner-area ptb-100">
			<div class="container">
				<div class="partner-slider owl-theme owl-carousel">
					<div class="partner-item">
						<a href="#">
							<img src="{{asset('theme/assets/img/partner/partner-1.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('theme/assets/img/partner/partner-2.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('theme/assets/img/partner/partner-3.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('theme/assets/img/partner/partner-4.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('theme/assets/img/partner/partner-5.png')}}" alt="Image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->

		<!-- Start Blog Area -->
		<section class="blog-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>Latest News</span>
					<h2>Read The Latest Articles From Us</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="{{asset('theme/assets/img/blog/blog-4.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="blog-content">
								<span>January 20, 2021</span>
								<h3><a href="blog-details.html">The security risks of changing package owners</a></h3>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="{{asset('theme/assets/img/blog/blog-5.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="blog-content">
								<span>January 19, 2021</span>
								<h3><a href="blog-details.html">Tips to Protecting Your Business and Family</a></h3>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="{{asset('theme/assets/img/blog/blog-6.jpg')}}" alt="Image">
								</a>
							</div>

							<div class="blog-content">
								<span>January 18, 2021</span>
								<h3><a href="blog-details.html">Protect Your Workplace from Cyber Attacks</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Subscribe Area -->
		<section class="subscribe-area pb-100">
			<div class="container">
				<div class="subscribe-bg">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<div class="subscribe-content">
								<img src="{{asset('theme/assets/img/subscribe-img.png')}}" alt="Image">
								<h3>Sing up for newsletter</h3>
								<span>Subscribe to the newsletter for all the latest updates</span>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

								<button class="default-btn" type="submit">
									Subscribe
								</button>

								<div id="validator-newsletter" class="form-result"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Subscribe Area -->
@endsection

@extends('front.master')

@section('content')
		<!-- Start Banner Area -->
		<section class="banner-area bg-1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="banner-content">
							<span class="top-title">World Class Professional Consulting</span>
							<h1>Alternative Solutions Consulting</h1>
							<p>
                                We are a Somalia-based consulting firm that provides specialized consultancy services to government, non-government organizations and corporate entities in the areas of monitoring, evaluations, research, capacity building, organization development and Environmental Consulting services.
                            </p>
							<div class="banner-btn">
								<a href="{{url('/')}}/our-solutions/third-party-monitoring" class="default-btn">
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
		<section class="about-us-area bg-color pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img">
                            <br>
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
					<span>More Services</span>
					{{-- <h2>You Can Protect Your Organization’s Cybersecurity By Us</h2> --}}
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-challenges overly-one" style="min-height:400px;">
							<div class="overly-two">
								<i class="flaticon-threat"></i>
								<h3>Applied research and learning</h3>
								<p>
                                    We conduct quick-turnaround studies to identify best practices and document learning to facilitate client understanding through ‘Pause and Reflect’’ sessions to inspire clients’ deep dive into data articulate ideas evidence-base decision, policies, strategies and further research
                                </p>
								<span class="flaticon-threat"></span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-challenges overly-one" style="min-height:400px;">
							<div class="overly-two">
								<i class="flaticon-cyber"></i>
								<h3>Organization Development and institutional capacity building</h3>
								<p>
                                    We offer organization development services through diagnosing the problem, providing clear and accurate feedback to design and assess solution for future practical recommendations while ensure best possible use of money, manage expectations to provide sustainable cost-effective services.
                                </p>
								<span class="flaticon-cyber"></span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-challenges overly-one" style="min-height:400px;">
							<div class="overly-two">
								<i class="flaticon-cyber-security-1"></i>
								<h3>Environment and Energy Consulting</h3>
								<p>
                                    As a forefront Somali consulting firm in environmental impact assessment (EIA) and Strategic Environmental Assessment (SEA), we provide specific environment appraisals and comprehensive impact assessments service to industrial, residential development programmes through deep subject matter expertise to meet client needs.
                                </p>
								<span class="flaticon-cyber-security-1"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Challenges Area -->



		<!-- Start Protect Area -->
		<section class="protect-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="protect-content">
							<div class="protect-title">
								<span>Cyber Security Protect</span>
								<h2>Protect your website, web server, and web application for helping you stay away from the hacker</h2>
							</div>

							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-database"></i>
											<h3>Database Security</h3>
											<p>The threat to data has never been greater. </p>
											<span class="flaticon-database"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-application"></i>
											<h3>Application Security</h3>
											<p>We Enable you Securely build, deploy and iterate applications.</p>
											<span class="flaticon-application"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-security"></i>
											<h3>Web Security</h3>
											<p>We ensure your website is up to date with neccessary security protocols</p>
											<span class="flaticon-security"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="single-challenges overly-one">
										<div class="overly-two">
											<i class="flaticon-security-1"></i>
											<h3>Server Security</h3>
											<p>We provide you with hardening and optimization in many different areas of server</p>
											<span class="flaticon-security-1"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="protect-img">
							<img style="border-radius:20px;" src="{{asset('theme/assets/img/protect-img.jpg')}}" alt="Image">
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
					<span>Our Portfolio</span>

					<div class="testimonials-slider owl-carousel owl-theme">
						<div class="testimonials-item">
							<i class="flaticon-quote"></i>
							<p>
                                End Evaluation IAPF Food security and Nutrition Project, Somalia
                            </p>

							{{-- <ul>
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
							</ul> --}}

							<h3>Concern Worldwide</h3>
							<span>April 30th -June 10th, 2022 </span>
						</div>
						<div class="testimonials-item">
							<i class="flaticon-reliability"></i>
							<p>
                                Final Evaluation of Triple Nexus Pilot Project
                            </p>

							{{-- <ul>
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
							</ul> --}}

							<h3>Nexus Platform</h3>
							<span>February 20th -March15th, 2022</span>
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
							<img src="{{asset('uploads/partner-1.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('uploads/partner-2.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('uploads/partner-3.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('uploads/partner-4.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{asset('uploads/partner-5.png')}}" alt="Image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->



		<!-- Start Subscribe Area -->
		{{-- <section class="subscribe-area pb-100">
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
		</section> --}}
		<!-- End Subscribe Area -->
@endsection

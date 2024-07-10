@extends('front.master-pages')

@section('content')

	<!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h2>Alternative Solutions Consulting</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            <i class="bx bx-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">The Company</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
<!-- Start About Us Area -->
<section class="about-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img style="border-radius:10px" src="{{asset('uploads/about.jfif')}}" alt="Image">
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
                            Alternative Solutions founded in 2011 as small startup firm grew over the years gaining momentum reputations in providing the aforementioned specialized services.<br>
                        </p>
                        <p>
                            We pair our pool of contextual and thematic expertise to provide contextually tailored and methodological rigorous services through edge-cutting technologies, theories and practical approaches to add value to the end-user’s aspirations to effect and achieve desired changes.
                        </p>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

		<!-- Start Mission & Vision Area -->
		<section class="challenges-area challenges-area-two pt-100 pb-70">
			<div class="container">
                    {{-- <div class="section-title white-title">
                        <span>Mission & Vision</span>
                        <h2>You Can Protect Your Organization’s Cybersecurity By Us</h2>
                    </div> --}}
                <center>
				<div class="row" style="margin:0 auto !important">
                        <div class="col-lg-6 col-sm-6" >
                            <div class="single-challenges overly-one" style="min-height:254px;">
                                <div class="overly-two">
                                    <i class="bx bxs-binoculars"></i>
                                    <h3>Our vision</h3>
                                    <p>To be your trusted companion for lasting solutions </p>
                                    <span class="bx bxs-binoculars"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="single-challenges overly-one">
                                <div class="overly-two">
                                    <i class="bx bxs-bullseye"></i>
                                    <h3>Our Mission:</h3>
                                    <p>
                                        providing and facilitating unparalleled consulting services through research, edge-cutting technologies, practical approaches and contextually tailored methodologies.
                                    </p>
                                    <span class="bx bxs-bullseye"></span>
                                </div>
                            </div>
                        </div>
				</div>
            </center>
			</div>

			<div class="challenges-shape">
				<img src="https://alternativesln.com/theme/assets/img/challenges-shape.png" alt="Image">
			</div>
		</section>
		<!-- End Mission & Vision Area -->

		<!-- Start Protect Area -->
		<section class="protect-area bg-color pt-100 pb-70">
			<div class="container">
                <div class="section-title white-title">
                    {{-- <span>Core Values</span> --}}
                    <h2 style="color:#000000">Core Values</h2>
                </div>
				<div class="row">
					<div class="col-lg-6">
						<div class="solution-content">


							<div class="row">
								<div class="col-lg-12 col-md-6">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>Professionalism</h3>
											<p>Deploying relevant, competent and highly experienced network of experts who are passionate to make a difference</p>
											<span>01</span>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>Unique/unparalleled service:</h3>
											<p>Providing contextualized and out-of-box multifaceted solutions</p>
											<span>02</span>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
									<div class="single-solution overly-one">
										<div class="overly-two">
											<h3>Service durability:</h3>
											<p>Through meaningful involvement empowering lasting solutions</p>
											<span>03</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="protect-img">
							<img style="border-radius:20px;" src="{{asset('uploads/map.png')}}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Eed Protect Area -->



@endsection

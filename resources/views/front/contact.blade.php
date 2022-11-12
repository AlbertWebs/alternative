@extends('front.master-pages-contact')

@section('content')

	<!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            <i class="bx bx-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="contact-wrap">
                        <div class="contact-form">
                            <div class="contact-title">
                                <h2>Contact Us</h2>
                            </div>

                            <form id="contactForms">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12" id="TheCapcha">
                                        <div class="g-recaptcha" data-sitekey="6LdCDP8iAAAAACaTuby18ZLJk8j6PZZQ1jJlAf8a" data-callback="correctCaptcha"></div>
                                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            <span>Send Message</span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>Our contact details</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p> --}}

                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                <span>Address</span>
                                Behind Kheyre supermaket, Macruuf Junction, Dan-wadaagaha road Bula-Hubey, Wadajir district, Mogadishu
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <span>Phone</span>
                                <a href="tel:+252-613771205">+252-613771205</a>
                                <a href="tel:+252-613771205">+252-613771205</a>
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:info@alternativesln.com"><span class="__cf_email__">info@alternativesln.com</span></a>
                                <a href="#">skype: example</a>
                            </li>
                        </ul>

                        <div class="sidebar-follow-us">
                            <h3>Follow us:</h3>

                            <ul class="social-wrap">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area -->
    <div class="map-area">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277519149899!2d36.8222851!3d-1.2821533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1667545739812!5m2!1sen!2ske"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63795.86928099002!2d45.3066649!3d2.0592008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6f10dfbd5a618c7!2sAlternative%20Solutions%20Consulting!5e0!3m2!1ssw!2ske!4v1668238304225!5m2!1ssw!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Map Area -->


@endsection

@extends('front.master-pages')

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
                                <h2>Write Us</h2>
                            </div>

                            <form id="contactForm">
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
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
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
                                6890 Mogadishu, Mogadishu, Somalia
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <span>Phone</span>
                                <a href="tel:+254 (514) 312-5678">+254 (514) 312-5678</a>
                                <a href="tel:+254 (514) 312-5678">+254 (514) 312-6677</a>
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <span>Email</span>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#d8b0bdb4b4b798abbda9aca1f6bbb7b5"><span class="__cf_email__" data-cfemail="abc3cec7c7c4ebd8cedadfd285c8c4c6">[email&#160;protected]</span></a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277519149899!2d36.8222851!3d-1.2821533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1667545739812!5m2!1sen!2ske"></iframe>
    </div>
    <!-- End Map Area -->


@endsection

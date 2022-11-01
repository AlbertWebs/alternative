@extends('front.master')

@section('content')
  <!-- Breadcrumbs Start -->
  <div class="rs-breadcrumbs img10">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                What we do
                <span class="watermark">Management & Leadership</span>
            </h1>
            <span class="sub-text">Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence in their careers and personal life through Transformative Leadership and Management Training.  </span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- About Section Start -->
<div class="rs-about main-home bg1 pt-110 pb-110 md-pt-70 md-pb-65">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="{{asset('theme/assets/images/about/about.png')}}" alt="Images">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title">
                    <h2 class="title pb-30">
                        Human Resource Solutions
                    </h2>


                    <p class="margin-0">
                        {{--  --}}
                        <strong>1. Recruitment, Outsourcing, Selection and Placement</strong>
                        <br>

                        Human resources are a key component in a business, the need to have the right people,
                        doing the right job,possessing the right skill set is a growing demand. As a result, Alizhora
                        comes in to all these growing demands.We source our staff from various fields both for
                        short-term and long-term placements.
                        <br><br>
                        <strong>2. Job Evaluations, Analysis, Grading and Benchmarking</strong>
                        <br>
                        This process determines the relative size and worth of each job. We get to examine the
                        contents and requirements of jobs and measures these against a standard scale. This result
                        in job grades, scores, levels or ratings whereby jobs can be compared with other jobs to
                        determine their relative worth. We get to benchmark your organization against similar
                        organizations in the same industry to ensure that your organization remains competitive
                        at all times.
                        {{--  --}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Services Section Start -->
<div class="rs-services main-home bg7 services-style1 gray-bg3 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row y-middle">

            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title">
                    <h2 class="title pb-30">
                        Employee Selection & Placement
                    </h2>


                    <p class="margin-0">
                        We assist clients with selection and placement services. We provide placement services
                        where we develop an ideal employee profile and then work to source interview candidates for
                        a specific position.
                        <br><br>
                        We then pre-screen applicants using behavioral interview techniques. Finally, we only send
                        the best candidates to you for interviewing. This benefits you by eliminating wasted time in
                        interviews with less than ideal candidates and sets you up to hire right the first time.
                        The Process would include:-<br><br>
                        Recruitment and selection
                        Short listing
                        Assessing the shortlisted candidates
                        Interviewing
                        Final selection for the best 3 candidates
                        Pre-Employment and back ground testing
                        Sending the pre-selected candidates to the client for final selection
                    </p>

                </div>
            </div>

            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img style="border-radius:10px;" src="{{asset('theme/assets/images/placement.jpg')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- About Section Start -->
<div class="rs-about main-home bg1 pt-110 pb-110 md-pt-70 md-pb-65">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img style="border-radius:10px" src="{{asset('theme/assets/images/Sales-talent.jpg')}}" alt="Images">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title">
                    <h2 class="title pb-30">
                        Training
                    </h2>


                    <p class="margin-0">
                        {{--  --}}
                        Training is one of the most important parts of an organization's overall Strategy. It presents
                        a prime opportunity to expand the knowledge base of all employees and should not be viewed
                        as an expense but rather as an investment. Benefits of training are intangible and investing in
                        training benefits both, organization and employees for a long period. Training enhances a
                        worker level of skills, provides a sense of satisfaction which is an intrinsic motivator. Training
                        also provides organization multi skill employees and increases an employee commitment to
                        their job and their organization.<br><br>
                        Alizhora HR International offer different training programs for her clients and we exercise
                        flexibility in tailoring programs that suit different organizational needs. Some of the programs
                        we offer are:<br><br>
                        Strategic Performance Management Training
                        HR for Non HR managers
                        Employee wellness training programs
                        Employee safety at Work place
                        Communication Skills
                        Change Management
                        Customer Service training programs
                        Time and Priority Management
                        {{--  --}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->


<!-- Process Section Start -->
<div class="rs-process style1 bg2 pt-100 pb-100 md-pt-70 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-7">
                <div class="sec-title md-text-center mb-30">
                    <h2 class="title title2 white-color">
                        Our work process
                    </h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="btn-part text-right md-text-center">
                    <a class="readon consultant discover" href="{{url('/')}}/contact-us">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container custom2">
        <div class="process-effects-layer">
            <div class="row">
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="rs-addon-number">
                        <div class="number-part">
                            <div class="number-image">
                                <img src="{{asset('theme/assets/images/process/style1/1.png')}}" alt="Process">
                            </div>
                            <div class="number-text">
                                <div class="number-area"> <span class="number-prefix"> 1 </span></div>
                                <div class="number-title">
                                    <h3 class="title"> Discovery</h3>
                                </div>
                                <div class="number-txt">
                                    Initial meeting where we learn and understand our clients HR requirments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="rs-addon-number">
                        <div class="number-part">
                            <div class="number-image">
                                <img src="{{asset('theme/assets/images/process/style1/2.png')}}" alt="Process">
                            </div>
                            <div class="number-text">
                                <div class="number-area"> <span class="number-prefix"> 2 </span></div>
                                <div class="number-title">
                                    <h3 class="title">Planning</h3>
                                </div>
                                <div class="number-txt">
                                    Gathering information about current processes, including interviews and other qualitative approaches with the stakeholders involved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="rs-addon-number">
                        <div class="number-part">
                            <div class="number-image">
                                <img src="{{asset('theme/assets/images/process/style1/3.png')}}" alt="Process">
                            </div>
                            <div class="number-text">
                                <div class="number-area"> <span class="number-prefix"> 3 </span></div>
                                <div class="number-title">
                                    <h3 class="title">Execute</h3>
                                </div>
                                <div class="number-txt">
                                    Actual Process of implementing the solution
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rs-addon-number">
                        <div class="number-part">
                            <div class="number-image">
                                <img src="{{asset('theme/assets/images/process/style1/4.png')}}" alt="Process">
                            </div>
                            <div class="number-text">
                                <div class="number-area"> <span class="number-prefix"> 4 </span></div>
                                <div class="number-title">
                                    <h3 class="title">Deliver</h3>
                                </div>
                                <div class="number-txt">
                                    Honoring our promises to our clients
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Section End -->

<!-- Contact Section Start -->
<div class="rs-contact contact-style2 bg11 pt-95 pb-100 md-pt-65 md-pb-70">
    <div class="container">
        <div class="sec-title2 mb-55 md-mb-35 text-center">
            <div class="sub-text">Contact</div>
            <h2 class="title mb-0">Let us help your business to <br> move <span>forward.</span></h2>
        </div>
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="contact-img">
                    <img style="border-radius:10px" src="{{asset('theme/assets/images/contact/computer.jpg')}}" alt="Computer">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-wrap">
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="#">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name"
                                        placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email"
                                        placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="Website" name="subject"
                                        placeholder="Your Website" required="">
                                </div>

                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message"
                                        placeholder="Your message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icon Section Start -->
    <div class="rs-contact main-home">
        <div class="container">
            <div class="contact-icons-style box-address box-style2 pt-100 md-pt-70">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="contact-item">
                            <div class="contact-icon" style="border-radius:10px">
                                <img style="border-radius:10px" src="{{asset('theme/assets/images/contact/icons/1.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Nairobi office</a></h2>
                                <p class="services-txt">
                                    Cianda House, Koinange Street
                                    Suite 24, Nairobi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 xs-mb-30">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <img src="{{asset('theme/assets/images/contact/icons/3.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Email us</a></h2>
                                <a href="#">info@alizhorahrinternational.co.ke</a><br>
                                <a href="#">support@alizhorahrinternational.co.ke</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <img src="{{asset('theme/assets/images/contact/icons/4.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Call us</a></h2>
                                <a href="tel:+254 740 736 877">+254 740 736 877</a><br>
                                <a href="tel:+254 716 351 111">+254 716 351 111</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icon Section End -->
</div>
<!-- Contact Section End -->


@endsection

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
                            Behind Kheyre supermaket, Macruuf Junction, Dan-wadaagaha road Bula-Hubey, Wadajir district, Mogadishu
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:info@alternativesln.com"><span class="__cf_email__">info@alternativesln.com</span></a>
                            <a href="#">skype: Alternativesln</a>
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:+252-613771205">+252-613771205</a>
                            <a href="tel:+252-613771205">+252-613771205</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3>Solutions</h3>

                    <ul class="import-link">
                        <?php
                        $Services = DB::table('services')->get();
                        ?>
                        @foreach ($Services as $ser)
                        <li>
                            <a href="{{url('/')}}/our-solutions/{{$ser->slung}}">{{$ser->title}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>


        </div>
    </div>
</footer>

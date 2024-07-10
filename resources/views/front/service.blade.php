@extends('front.master-pages')

@section('content')
@foreach ($Services as $Service)


<!-- Start Page Title Area -->
<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>{{$Service->title}}</h2>
            <ul>
                <li>
                    <a href="index.html">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">{{$Service->title}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Details Area -->
<section class="services-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-details-content">
                    <div class="services-content">
                        @if($Service->image == null)
                        @else
                        <div class="services-details-one">
                            <img style="border-radius:10px" src="{{url('/')}}/uploads/{{$Service->image}}" alt="{{$Service->title}}">
                        </div>
                        <br><br>
                        @endif
                        <p style="color:#000000">{!!html_entity_decode($Service->content)!!}</p>


                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="services-sidebar">
                    <div class="services-category">
                        <ul>
                            <?php
                               $Services = DB::table('services')->get();
                            ?>
                            @foreach ($Services as $ser)
                            @if($ser->id == $Service->id)

                            @else
                            <li>
                                <a class="active" href="{{url('/')}}/our-solutions/{{$ser->slung}}">
                                    {{$ser->title}}
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            @endif
                            @endforeach

                        </ul>
                    </div>

                    <div class="services-pdf">
                        <ul>
                            <li>
                                <a download href="{{url('/')}}/uploads/Profile_AltCon.pdf">
                                    <i class="bx bxs-file-pdf"></i>
                                    PDF Download
                                </a>
                            </li>
                            <li>
                                <a download href="{{url('/')}}/uploads/Profile_AltCon.docx">
                                    <i class="bx bxs-file-doc"></i>
                                    DOC Download
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="services-contact mb-30">
                        <h3>Contact us to do your new projects</h3>
                        <a href="{{url('/')}}/contact-us" class="default-btn">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->
    @endforeach
@endsection

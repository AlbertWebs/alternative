@extends('front.master-pages')

@section('content')

	<!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h2>Portfolio</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            <i class="bx bx-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
<!-- Start About Us Area -->

<!-- Start Cart Area -->
<!-- Start Solution Area -->
<section class="solution-area pt-100 pb-70">
    <div class="container-fluid">
        <?php $Portfolio = DB::table('portfolios')->orderBy('id','DESC')->where('list','1')->get(); $counter = 1 ?>
        @foreach($Portfolio as $folio)
            @if($counter % 2 == 0)
            <div class="row">
                <div class="col-lg-6">
                    <div class="solution-contents" style="padding:80px">
                        <div class="solution-title">
                            <span>Client: {{$folio->client}}</span>
                            <p> <i class="bx bxs-calendar"></i> {{$folio->period}}</p>
                            <p><i class="bx bxs-location-plus"></i> {{$folio->assignment}}</p>
                            <h2>{{$folio->title}}</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">

                                        <p>{!!html_entity_decode($folio->content)!!}</p>
                                        <span>0{{$counter}}</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pr-0">
                    <div class="solution-img" style="background-image: url('{{url('/')}}/uploads/{{$folio->image}}');
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: contain;
                    height: 100%;

                    position: relative;">
                        <img src="{{url('/')}}/uploads/{{$folio->image}}" alt="Image">
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <div class="solution-img" style="background-image: url('{{url('/')}}/uploads/{{$folio->image}}');
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-size: contain;
                        height: 100%;

                        position: relative;">
                        <img src="{{url('/')}}/uploads/{{$folio->image}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution-contents" style="padding:80px">
                        <div class="solution-title">
                            <span>Client: {{$folio->client}}</span>
                            <p> <i class="bx bxs-calendar"></i> {{$folio->period}}</p>
                            <p><i class="bx bxs-location-plus"></i> {{$folio->assignment}}</p>
                            <h2>{{$folio->title}}</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <p>{!!html_entity_decode($folio->content)!!}</p>
                                        <span>0{{$counter}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        <?php $counter = $counter+1; ?>
        @endforeach
    </div>
</section>
<!-- End Solution Area -->

{{-- <section class="shopping-cart-area ">
    <div class="container">
        <form class="cart-controller">
            <div class="cart-table table-responsive">
                <table class="table table-bordered table-striped" style="border:2px solid #498128; border-radius:10px;">
                    <thead>
                        <tr>
                            <th scope="col">Period</th>
                            <th scope="col">Assignment</th>
                            <th scope="col">Client</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $Portfolio = DB::table('portfolios')->where('list','0')->get(); ?>
                        @foreach($Portfolio as $folio)
                        <tr>
                            <td style="border:2px solid #498128">
                                <h6 style="padding:10px">
                                    {!!html_entity_decode($folio->period)!!}
                                </h6>
                            </td>

                            <td  style="border:2px solid #498128;">

                                    {!!html_entity_decode($folio->assignment)!!}

                            </td>

                            <td style="border:2px solid #498128" class="product-price">
                                <span class="unit-amount">
                                    {!!html_entity_decode($folio->client)!!}
                                </span>
                            </td>


                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


        </form>

    </div>
</section> --}}
<!-- End Cart Area -->



@endsection

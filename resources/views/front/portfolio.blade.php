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
<section class="shopping-cart-area ">
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
                        <?php $Portfolio = DB::table('portfolios')->get(); ?>
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
</section>
<!-- End Cart Area -->



@endsection

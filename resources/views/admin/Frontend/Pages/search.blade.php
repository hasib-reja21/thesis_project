
@extends('admin.Frontend.master')
@section('content')
<section class=" pb-100 sections-bg">
        <div class="bg-section">
            <img src="#" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <div class="section-header text-center">
                        <h2 class="section-title ">Bid On These Featured Auctions!</h2>
                    </div>
                    <h2 class="mb-3" style="text-align:left;">Search result for : {{ request()->search }} found {{$products->count()}} products.</h2>
                </div>
            </div>
           
            <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            @if($products->count()>0)
                @foreach ($products as $product )
                <!-- ancore tag -->

                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="service_item style_1 shadow" style="text-align: left">
                        <div class="auction-thumb">
                            <a href=""><img style="width: 100%;" src="{{url('/uploads//'.$product->Product_Image)}}" alt="product_image"></a>
                            <a href="#0" class="rating"><i class="fa-regular fa-star" style="color:yellow;"></i></a>

                        </div>
                        <div>
                            <h5 class="title mt-2 text-left">
                                <a href="#0">{{$product->Product_Name}}</a>

                            </h5>
                            <hr class="mt-2">
                            <div class="d-flex gap-5 ">
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content mt-3">
                                        <div class="current">Starting Bid:{{ $product->Product_Price }} .BDT</div>
                                        <!-- <div class="amount"></div> -->
                                    </div>
                                </div>
                                <!-- <div class="d-flex">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div> -->

                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="countdown">
                                    <div class="countdown">
                                        <div id="bid_counter26">Initial time: {{ $product->created_at }} </div>
                                    </div>
                                    <div id="bid_counter26">Remaining time </div>
                                </div>
                                <span class="total-bids"><span style="color: orange;">|</span> 30 Bids</span>
                            </div>

                            <div class="text-center" style="text-align: left !important;">
                                <button class="btn btn-success text-white mt-5 "><a href="{{route('single.product',$product->id)}}">Bid Details</a></button>
                            </div>
                        </div>
                    </div>
                 </div>
                <!-- ancore tag close -->
                @endforeach
                   
                @else
                <h1 class="mb-5 text-center fw-800"> Product not found.</h1>
            @endif

            </div>

        </div>
        
    @endsection 
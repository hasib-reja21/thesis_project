<div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
           
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service_item style_1 shadow" style="text-align: left">
                    <div class="auction-thumb">
                        <a href=""><img style="width: 100%;" src="{{url('/uploads//'.$singleProduct->Product_Image)}}" alt="product_image"></a>
                        <!-- <a href="#0" class="rating"><i class="fa-regular fa-star" style="color:yellow;"></i></a> -->
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div>
                        <h5 class="title mt-2 text-left">
                            <a href="#0">{{$singleProduct->Product_Name}}</a>
                        </h5>
                        <hr class="mt-2">
                        <div class="d-flex gap-5 ">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content mt-3">
                                    <div class="current">Starting Bid:{{ $singleProduct->Product_Price }} .BDT</div>
                                    <!-- <div class="amount"></div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="countdown">
                                <div id="bid_counter26">Remaining time </div>
                            </div>
                            <span class="total-bids"><span style="color: orange;">|</span> 30 Bids</span>
                        </div>
                        <div class="text-center" style="text-align: right !important;">
                            <button class="btn btn-warning text-white mt-5 "><a href="">Submit a Bid</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
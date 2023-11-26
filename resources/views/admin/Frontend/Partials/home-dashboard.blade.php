@extends('admin.Frontend.master')
@section('content')
<div class="main-wrapper">

    <section class="hero bg_img" style="background-image: url('https://i.ibb.co/g30Qq50/Auction-1.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="hero__subtitle text-white wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Welcome to the online</div>
                    <h1 class="hero__title mb-5">Auction and Bidding System</h1>
                </div>
            </div>
        </div>
    </section>
</div>

<section class=" pb-100 sections-bg">
    <div class="bg-section">
        <img src="#" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
                <div class="section-header text-center">
                    <h2 class="section-title ">Bid On These Featured Auctions!</h2>
                </div>
            </div>
        </div>




        <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            @foreach ($products as $product )
            <!-- ancore tag -->

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
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
                                <div id="bid_counter26">Remaining time </div>
                            </div>
                            <span class="total-bids"><span style="color: orange;">|</span> 30 Bids</span>
                        </div>
                        <div class="text-center" style="text-align: left !important;">
                            <button class="btn btn-success text-white mt-5 "><a href="">Bid Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ancore tag close -->
            @endforeach
        </div>

    </div>
</section>
<!-- <section class="pt-100 pb-100 section-bg-common">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
                <div class="section-header text-center">
                    <h2 class="section-title">Our Statistics</h2>
                    <p>Business statistics refers to the collection, analysis, interpretation, presentation, and application of data and statistical techniques in a business context.</p>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-lg-3 col-sm-6">
                <div class="overview-item">
                    <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <img src="https://i.ibb.co/3MFnNnH/complete2.png" alt="">
                    </div>
                    <h4 class="overview-item__amount counter"><span class="odometer" data-odometer-final="12">0</span>+</h4>
                    <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <h4 class="overview-item__title">Years Online</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="overview-item">
                    <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <img src="https://i.ibb.co/znGJjNv/program.png" alt="">
                    </div>
                    <h4 class="overview-item__amount counter"><span class="odometer" data-odometer-final="No products"></span>+ </h4>
                    <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <h4 class="overview-item__title">Unique Items</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="overview-item">
                    <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <img src="https://i.ibb.co/sgfh1Kf/shopping-cart.png" alt="">
                    </div>
                    <h4 class="overview-item__amount counter"><span class="odometer" data-odometer-final="10,000">0</span>+</h4>
                    <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <h4 class="overview-item__title">Item Sold</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="overview-item">
                    <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <img src="https://i.ibb.co/3Bp4tM8/users.png" alt="">
                    </div>
                    <h4 class="overview-item__amount counter"><span class="odometer" data-odometer-final="11000">0</span>+</h4>
                    <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <h4 class="overview-item__title">Happy Clients</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="pt-100 pb-100 section-bg-common">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
                <div class="section-header text-center ">
                    <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">What People Say</h2>
                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We care about our clients and they do the same for us. Have a look below and see what our awesome clients say about their experience with us!”</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="testimonial-slider">
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">Staricson</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“I just want to thank the support staff because they have been wonderful! I have never been left alone and despite my repeated requests, they have assured.Thank you”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_2.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">Pepsy_si</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“Good template to start with. I had one minor issue with implementation but was resolved with fast reply from Thesoftking. Will use Thesoftking for some aditional costumisation in the future - since it will be done the fastest with their help.”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">javicerillos</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“It's a good script. Installation easy in two minutes. It's very easy to configure. The support is perfect, the support help you in the installation or any questions you have very fast and correct. It's 100% recommended.”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">Letsgetonline</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“Seller did an amazing job helping me out with everything. Even changed some coding for me, free of charge which was great. Supplied some free hosting also. This seller is A++++”</p>
                                <span class="quote_icon">
                                    <img src="assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">Sabba24</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“customer service is very excellent and I love your software. I give it a 100% for your e-wallet, I have to give some one credit when they deserve it and you have earned it, wish you all the best with a lot of sales and success.”</p>
                                <span class="quote_icon">
                                    <img src="assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">Lealmar</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                </div>
                                <p class="testimonial_des">“Its product is original and good, installs in 5 minutes, works great and is very well written code. Speed optimizations will already come minimizing, but the code is clean and clear, so that everyone can adjust it to their needs. I'm going to give you my five points and also thank you. I wish you lots of sales, I will be attentive to your new products.”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>

                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">sanjeetuts</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“Awesome Features. Fantastic user interface. Everything is running very nicely on my website. I just purchased today and got some issues as i m non technical person but Thesoftking provide me step to step solutions.”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">kratos-myth</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“Very nice design quality 5 stars cause the designer should be the best! Thanks ThemeForest to bring me that diamond work! The highest best coded and designed html files i have even seen! Purchase it and you won't regret it! Very low prices for the work that's made!”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonails-card">
                        <div class="single-slide-item">
                            <div class="testimonial-content">
                                <div class="d-flex flex-wrap justify-content-between tesi-top align-items-center mb-4 gap-3">
                                    <div class="admin_item">
                                        <div class="admin_thumbnail">
                                            <img src="https://thesoftking.com/assets/images/testimonial/avatar_1.png" alt="Admin Avatar">
                                        </div>
                                        <div class="admin_info">
                                            <h3 class="admin_name">robertotamere-myth</h3>
                                            <span class="admin_designation">Director</span>
                                        </div>
                                    </div>
                                    <ul class="rating_star unordered_list">
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                        <i class="fa-regular fa-star" style="color:yellow;"></i>
                                    </ul>
                                </div>
                                <p class="testimonial_des">“Everyone who but this website please be appreciative by giving this guys 5 stars.Very well design clean code and Fast, accurate support service.I must give you more than 5 star so you have 100 stars from me, well done guys keep up with your good work and very well recommended !!!”</p>
                                <span class="quote_icon">
                                    <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png">
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
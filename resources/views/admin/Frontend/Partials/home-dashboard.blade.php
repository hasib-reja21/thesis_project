@extends('admin.Frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        body {
            background-color: #eee;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }




        .search {
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);
            transform: translateY(-131px);
        }

        .search input {

            height: 60px;
            text-indent: 25px;
            border: 2px solid #d6d4d4;


        }


        .search input:focus {

            box-shadow: none;
            border: 2px solid blue;


        }

        .search .fa-search {

            position: absolute;
            top: 20px;
            left: 16px;

        }

        .search button {

            position: absolute;
            top: 5px;
            right: 5px;
            height: 50px;
            width: 110px;
            background: blue;

        }

        .hero__title {
            transform: translateY(-95px);
            font-size: 5rem;
            font-weight: 700;
            -webkit-text-stroke: 1px #fff;
            color: transparent;
            background-image: linear-gradient(#fff, #fff);
            background-repeat: no-repeat;
            background-position: -1050px 0;
            animation: backcolor 5s linear infinite alternate;
        }

        .hero__subtitle {
            transform: translateY(-73px);
        }
        img{
            transform: translate(-3px);
        }
    </style>
</head>

<body>
    <div class="main-wrapper">

        <section class="hero bg_img" style="background-image: url('https://i.ibb.co/g30Qq50/Auction-1.jpg');">
            <!-- for searching the products -->
            <div class="container">

                <div class="row height d-flex justify-content-center align-items-center">

                    <div class="col-md-8">
                        <form action=" {{route('product.search')}}" method="">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
            <!-- end searching section -->

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
                @foreach ($products->take(3) as $product )


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item style_1 shadow" style="text-align: left">
                        <div class="auction-thumb">
                            <a href=""><img style="width: 100%;" src="{{url('/uploads//'.$product->Product_Image)}}" alt="product_image"></a>


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


                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="countdown">
                                    <div class="countdown">
                                        <div id="bid_counter26">Initial time: {{ $product->created_at }} </div>
                                    </div>

                                    <div class="countdown">
                                        <div id="bid_counter26">Expired time: {{ $product->bid_expiration_date }} </div>
                                    </div>

                                </div>
                                <span class="total-bids"><span style="color: orange;">
                            </div>

                            <div class="text-center" style="text-align: left !important;">
                                <button class="btn btn-success text-white mt-5 "><a href="{{route('single.product',$product->id)}}">Bid Details</a></button>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach
                <button><a href="{{route('product.all.view')}}"><span class="fw-700">View All</span></a></button>
            </div>


            <div style="display: none;" class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                @foreach ($products->slice(3) as $product )


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item style_1 shadow" style="text-align: left">
                        <div class="auction-thumb">
                            <a href=""><img style="width: 100%;" src="{{url('/uploads//'.$product->Product_Image)}}" alt="product_image"></a>


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


                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="countdown">
                                    <div class="countdown">
                                        <div id="bid_counter26">Initial time: {{ $product->created_at }} </div>
                                    </div>

                                </div>
                                <span class="total-bids"><span style="color: orange;">|</span> 30 Bids</span>
                            </div>
                            <div id="timerSection">
                                <h5>Remaining Time: <span style="color:red" id="timer"></span></h5>
                            </div>

                            <div class="text-center" style="text-align: left !important;">
                                <button class="btn btn-success text-white mt-5 "><a href="{{route('single.product',$product->id)}}">Bid Details</a></button>
                            </div>
                        </div>
                    </div>
                </div>

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
              <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
                <img src="assets/images/how-work-icon/complete2.png" alt="">                
              </div>
              <h4 class="overview-item__amount counter"><span class="odometer odometer-auto-theme" data-odometer-final="12"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span></div></span>+</h4>
              <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h4 class="overview-item__title">Years Online</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="overview-item">
              <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
                <img src="assets/images/how-work-icon/program.png" alt="">                
              </div>
              <h4 class="overview-item__amount counter"><span class="odometer odometer-auto-theme" data-odometer-final=""><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+ </h4>
              <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h4 class="overview-item__title">Unique Items</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="overview-item">
              <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
                <img src="assets/images/how-work-icon/shopping-cart.png" alt="">                
              </div>
              <h4 class="overview-item__amount counter"><span class="odometer odometer-auto-theme" data-odometer-final="10,000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h4>
              <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h4 class="overview-item__title">Item Sold</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="overview-item">
              <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
                <img src="assets/images/how-work-icon/users.png" alt="">                
              </div>
              <h4 class="overview-item__amount counter"><span class="odometer odometer-auto-theme" data-odometer-final="11000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h4>
              <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
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
                                                <img src="#" alt="Admin Avatar">
                                            </div>
                                            <div class="admin_info">
                                                <h3 class="admin_name">Hasib Reja</h3>
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
                                        <img src="">
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
                                        <!-- <img src="https://thesoftking.com/assets/images/testimonial/icon_quote_dark.png"> -->
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
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 21, 2023 22:17:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("timer").innerHTML = minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "BID TIME EXPIRED";
                document.getElementById("bidAmount").disabled = true;
                document.getElementById("bidNow").disabled = true;
                var productId = document.getElementById("id").innerHTML;


            //    window.location.replace('/product_status_update' + '/' + productId);


            }
        }, 1000);
    </script>
   

</body>


</html>

@endsection
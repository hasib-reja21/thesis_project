@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: .8125rem;
            font-weight: 400;
            line-height: 1.5385;
            color: #333;
            text-align: left;
            background-color: #2196F3;
        }

        .mt-50 {

            margin-top: 50px;
        }

        .mb-50 {

            margin-bottom: 50px;
        }



        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: row;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .1875rem;
        }

        .card-img-actions {
            position: relative;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            text-align: left;
        }

        .card-img {

            width: 350px;
        }

        .star {
            color: red;
        }

        .bg-cart {
            background-color: orange;
            color: #fff;
        }

        .bg-cart:hover {

            color: #fff;
        }

        .bg-buy {
            background-color: green;
            color: #fff;
            padding-right: 29px;
        }

        .bg-buy:hover {

            color: #fff;
        }

        a {

            text-decoration: none !important;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">

        <div class="row">
            <div class="col-md-11 mt-2">

                <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions">

                            <img src="{{url('/uploads//'.$product->Product_Image)}}" class="card-img img-fluid" width="96" height="350" alt="">
                        </div>
                    </div>
                    <div class="card-body bg-light ">
                        <div class="mb-2">
                        <h5 class="font-weight-semibold mb-2">
                                <a href="#" class="text-default mb-2" data-abc="true">Category: {{$product->category_id}}</a>
                            </h5>
                            <h5 class="font-weight-semibold mb-2">
                                <a href="#" class="text-default mb-2" data-abc="true">Name: {{$product->Product_Name}}</a>
                            </h5>

                            <a href="#" class="text-muted" data-abc="true">{{$product->Product_Description}}</a>
                        </div>

                        <h3 class="mb-0 font-weight-semibold">Price: {{$product->Product_Price}} BDT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
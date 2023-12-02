@extends('admin.Frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mb-4{
            margin-top: 110px;
            margin-left: 116px;
        }
    </style>
</head>
<body>
<section id="gallery" class="d-flex justify-content-center align-items-center">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 mb-4 " >
                <div class="card ">
                    <img src="{{url('/uploads//'.$singleProduct->Product_Image)}}" style="height: 250px; padding:5px;" alt="" class="">
                    <div class="card-body">
                        <h5 class="card-title">Product Name: {{ $singleProduct->Product_Name}}</h5>
                        <p class="card-text">{{ $singleProduct->Product_Description}}</p>
                        <h5 class="card-title">Product Price: {{$singleProduct->Product_Price}}</h5>
                        <div class="d-flex gap-5 justify-content-center align-items-center">

                          <div class="form-group col-sm-7">
                              <label></label>
                              <input type="number" name="amount" class="border p-2 rounded" placeholder="Your amount...">
                              
                          </div>
                            <div class="col-3"> <a href="" class="btn btn-outline-success btn-sm p-2 mt-2">Bid Now</a></div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
  <!-- <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. </p> -->
  <table class="table mr-5">
    <thead>
      <tr>
      <th>ID</th>
        <th>UserID</th>
        <th>Price</th>
        <th>ProductID</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Defaultson</td>
        <td>1230</td>
        <td>1</td>
        <td>pending</td>
      </tr>      
      <tr class="success">
        <td>2</td>
        <td>Doe</td>
        <td>1230</td>
        <td>2</td>
        <td>pending</td>
      </tr>
      <tr class="danger">
        <td>3</td>
        <td>Moe</td>
        <td>1230</td>
        <td>3</td>
        <td>Pending</td>
      </tr>
      
    </tbody>
  </table>
</div>
</section>
</body>
</html>
@endsection
@extends('admin.Frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .mb-4 {
      margin-top: 110px;
      margin-left: 116px;
    }
  </style>
</head>

<body>
  <section id="gallery" class="d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mb-4 ">
          <div class="card ">
            <img src="{{url('/uploads/'.$singleProduct->Product_Image)}}" style="height: 250px; padding:5px;" alt="" class="">
            <div class="card-body">
              <h5 class="card-title">Product Name: {{ $singleProduct->Product_Name}}</h5>
              <h5 class="card-title">Product Price: {{$singleProduct->Product_Price}}</h5>
              <!-- <p class="card-text">{{ $singleProduct->Product_Description}}</p> -->
              <h5 class="card-title">Initial Time: {{$singleProduct->created_at}}</h5>

              <div class="d-flex gap-5 justify-content-center align-items-center">

                <div class="form-group col-sm-7">
                   <!-- Display the countdown timer -->
                  
                 
                  <input type="number" name="amount" id="bidAmount" class="border p-2 rounded mt-2" placeholder="Your amount...">
                </div>

                <div class="col-3">
                  <!-- No need for an <a> tag here, we'll handle the real-time generation with JavaScript -->
                  <button class="btn btn-outline-success btn-sm p-2 mt-2" id="generateValue">Bid Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table mr-5 border ">
        <thead>
          <tr>
            <th>ID</th>
            <th>User Name</th>
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
        </tbody>
      </table>
    </div>
  </section>

  <!-- Include jQuery library -->
 
</body>

</html>
@endsection
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
                
                <form action="{{route('bid.store', $singleProduct->id)}}" method="post" class="d-flex gap-3">
                  @csrf
                  <div class="">

                    <input type="number" name="amount" id="bidAmount" class="border p-2 rounded mt-2" placeholder="Your amount..." required>
                  </div>

                  <div class="col-3">

                    <button class="btn btn-outline-success btn-sm p-2 mt-2" type="submit" id="generateValue">Bid Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
    <h1 class="mb-3"><strong>Bidding Information</strong></h1>
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
          
            
         @foreach ($biddings as $key=>$bid )
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$bid->user_name}}</td>
            <td>{{$bid->price}}</td>
            <td>{{$bid->product_id}}</td>
            <td>{{$bid->status}}</td>
          </tr>
          @endforeach
       
          
        </tbody>
      </table>
    </div>
  </section>

  <!-- Include jQuery library -->

</body>

</html>
@endsection
@extends('admin.Frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <script type="module" src=" https://code.jquery.com/jquery-3.7.0.js"></script>
  <script type="module" src=" https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  

  <style>
    .mb-4 {
      margin-top: 110px;
      margin-left: 116px;
    }
    img{
            transform: translate(-3px);
       }
       .btn{
        width: 80px;
       }
  </style>
</head>

<body>
  <section id="gallery" class="d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mb-4 ">
          <div class="card mt-5">
            <img src="{{url('/uploads/'.$singleProduct->Product_Image)}}" style="height: 250px; padding:5px;" alt="" class="">
            <div class="card-body">
              <h5 class="" id="id">ProductID: {{$singleProduct->id }}</h5>
              <h5 class="card-title">Product Name: {{ $singleProduct->Product_Name}}</h5>
              <h5 class="card-title">Product Price: {{$singleProduct->Product_Price}}</h5>
              <div id="timerSection">
                <h5>Remaining Time: <span style="color:red" id="timer"></span></h5>
              </div>

              <div class="d-flex gap-5 ">

                <form action="{{route('bid.store', $singleProduct->id)}}" method="post" class="d-flex gap-3">
                  @csrf
                  <div>
                    <input type="number" name="amount" id="bidAmount" class="border p-2 rounded mt-2" placeholder="Your amount..." required>
                  </div>
                  <div class="col-3">
                    <button class="btn btn-outline-success btn-sm p-2 mt-2" type="submit" id="bidNow">Bid Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h1 class="mb-3 mt-5"><strong>Bidding Information</strong></h1>
      <table class="table mr-5 border " id="#myTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Price</th>
            <th>ProductID</th>
            <th>Bidding Time</th>
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
            <td>{{$bid->created_at->format('d-m-Y | H:i:s')}} </td>
            <td>{{$bid->status}}</td>
          </tr>
          @endforeach


        </tbody>
      </table>

    </div>
  </section>

  <!-- Include jQuery library -->

  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
    // Set the date we're counting down to
    var singleProduct = @php echo json_encode($singleProduct); @endphp;
    var countDownDate = new Date(singleProduct?.bid_expiration_date).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for  minutes and seconds

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
      }
    }, 1000);
  </script>
</body>

</html>
@endsection
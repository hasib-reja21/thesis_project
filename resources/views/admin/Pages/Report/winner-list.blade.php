
@extends('Admin.master')
@section('content')
 <div class="container">
      <h1 class="mb-3 mt-5"><strong>Bidding Information</strong></h1>
      <button onclick="printTable()" class="btn btn-danger mb-3"><a style="text-decoration: none; color:white;" href="">Print</a></button>
      <table class="table mr-5 border " id="myTable">
        <thead>
          <tr>
            <th>User Name</th>
            <th>Price</th>
            <th>ProductID</th>
            <th>Bidding Time</th>
            <th>status</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($biddings as $key=>$bid )
         @if($bid->status =='win')
            
          <tr>
            <td>{{$bid->user_name}}</td>
            <td>{{$bid->price}}</td>
            <td>{{$bid->product_id}}</td>
            <td>{{$bid->created_at->format('d-m-Y | H:i:s')}} </td>
            <td>{{$bid->status}}</td>
          </tr>
          @endif
          @endforeach

       

        </tbody>
      </table>
    </div>

 @endsection
 <script>
    function printTable() {
        var printContents = document.getElementById("myTable").outerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

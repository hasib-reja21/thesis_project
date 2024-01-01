
@extends('Admin.master')
@section('content')

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

 @endsection
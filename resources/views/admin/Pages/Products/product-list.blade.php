@extends('Admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   <style>
    img{
      height: 70px;
      width: 70px;
      border-radius: 50%;
      border: 1px solid black;
      
    }
   </style>
<body>
<h4 class="shadow p-2 text-uppercase col-12 text-center py-3 f-w-300 " style="background-color:rgba(255, 255, 255,1.0)">view product list</h4>
  <div class="container">
 
   
    <table class="table border mr-5 table-hover mt-3">
      <thead class="bg-dark">
        <tr class="text-center">
          <th scope="col"class="border">ID</th>
          <th scope="col"class="border">Product Name</th>
          <th scope="col"class="border">Category Type</th>
          <th scope="col"class="border">Image</th>
          <th scope="col"class="border">Price</th>
          <th scope="col"class="border">Description</th>
          <th scope="col-"class="border">Status</th>
          
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <!-- showed the product in the table -->

        @foreach ($products as $key=>$product )
        <tr class="text-center"class="border">
          <th scope="row">{{$key+1}}</th>
          <td>{{$product->Product_Name}}</td>
          <td>{{$product->category->name}}</td>
          <td>
            <img  src="{{url('/uploads//'.$product->Product_Image)}}" alt="">
          </td>
          <td>{{$product->Product_Price}}</td>
          <td>{{$product->Product_Description}}</td>
          <td>{{$product->status}}</td>
          <td>
             <a href="" class="btn btn-dark mr-3 btn-sm">View</a>
            <a href="{{route('product.edit',$product->id)}}" class="btn btn-dark mr-3 btn-sm">Edit</a>
            <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    <!-- for pagination links -->
    {{ $products->links() }}
  </div>
</body>

</html>
@endsection
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

<body>
  <div>
<h4 class="shadow p-2 text-uppercase col-12 text-center py-3 f-w-300 " style="background-color:rgba(255, 255, 255,1.0) ;font-family: 'Courier New', Courier, monospace;">view category list</h4>
</div>
  <div class="container">
 
    <div class="text-right">
     
      <!-- <a href="" class=" btn btn-success p-2 mb-2" style="float:right;"> Add New Category</a> -->
      <div><a class="btn btn-success text-uppercase p-2 mb-2" href="{{route('category.create')}}"> <i class="fa fa-plus me-2 mr-2"> </i>Add New Category</a></div>
    </div>

    <table class="table border mr-5 table-hover">
      <thead class="bg-dark">
        <tr class="text-center">
          <th scope="col" class="border">ID</th>
          <th scope="col"class="border">Category Name</th>
          <th scope="col"class="border">Description</th>
          <th scope="col"class="border">Status</th>
          <th scope="col"class="border">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ( $categories as $category )
        <tr class="text-center">
          <th scope="row" >{{$category->id}}</th>
          <td>{{$category->name}}</td>
          <td>{{$category->description}}</td>
          <td>{{$category->status}}</td>
          
          <td>
            <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger btn-sm">Delete</a>
          </td>

        </tr>
        @endforeach


      </tbody>
    </table>
    {{ $categories->links() }}
  </div>
</body>

</html>
@endsection
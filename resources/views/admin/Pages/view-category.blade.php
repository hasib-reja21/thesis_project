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
  <h1> Categories</h1>
  <a href="{{url('/category/form')}}" class=" btn btn-success" style="float:right;"><i class="fa-regular fa-plus"></i> Add New Category</a>
  <br><br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Description</th>
        
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach ( $categories as $category )
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
       
        <td>{{$category->description}}</td>
        <td>
          <a href="" class="btn btn-success">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>

      </tr>
      @endforeach


    </tbody>
  </table>
</body>

</html>
@endsection
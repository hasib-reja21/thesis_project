@extends('Admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    img{
      height: 70px;
      width: 70px;
      border-radius: 50%;
      border: 1px solid black;
      
    }
   </style>
</head>

<body>

  <div>
    <h4 class="shadow p-2 col-12 text-center py-3 f-w-300 mb-3" style="background-color:rgba(255, 255, 255,1.0); font-family: 'Courier New', Courier, monospace;"> User List</h4>
  </div>
  <div>
    <div>
      @if (Session::has('message'))
      <div class="alert alert-success">
        {{Session::get('message')}}
      </div>

      @endif
    </div>
    <h1 class="mb-3 ml-3" style="font-family: 'Courier New', Courier, monospace;">Create new user</h1>
    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" >
      @csrf
      <div class="col-5 ">
        <div class="col mb-2">
          <input type="text" name="user_name" class="form-control" placeholder="Enter user name" required>
        </div>
        <div class="col mb-2">
          <input type="text" name="role" class="form-control" placeholder="Enter role" required>
        </div>
        <div class="col mb-2">
          <input type="file" name="image" class="form-control" placeholder="Upload yourimage" required>
        </div>
        <div class="col mb-2">
          <input type="email" name="user_email" class="form-control mb-3" placeholder="Enter your email" required>
        </div>
        <div class="col">
          <input type="password" name="user_password" class="form-control mb-3" placeholder="Enter your Password" required>
        </div>
      </div>
      <div class="ml-3"><button type="submit" class="btn btn-dark ">Add User</button></div>
    </form>
  </div>
  <div class="container">

    <div class="text-right">

      <!-- <a href="" class=" btn btn-success p-2 mb-2" style="float:right;"> Add New Category</a> -->
      <!-- <div><a class="btn btn-success text-uppercase p-2 mb-2" href="{{route('category.create')}}"> <i class="fa-solid fa-circle-plus mr-2"></i>Add New user</a></div> -->
    </div>

    <table class="table border table-hover" style="width: 800px; margin-left: 300px;">
      <thead class="bg-dark">
        <tr class="text-center">
          <th scope="col" class="border">ID</th>
          <th scope="col" class="border">User Name</th>
          <th scope="col" class="border">Role</th>
          <th scope="col" class="border">User image</th>
          <th scope="col" class="border">Email</th>
          <th scope="col" class="border">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $users as $user )
        <tr class="text-center">
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->role}}</td>
          <td>
          <img src="{{url('/uploads//'.$user->image)}}" alt="">
          </td>
          <td>{{$user->email}}</td>
          <td>
            <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
@endsection
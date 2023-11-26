@extends('Admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div>
    <h4 class="shadow p-2 col-12 text-center py-3 f-w-300 mb-3" style="background-color:rgba(255, 255, 255,1.0); font-family: 'Courier New', Courier, monospace;"> User List</h4>
  </div>
  <div>
    <h1 class="mb-3 ml-3" style="font-family: 'Courier New', Courier, monospace;">Create new user</h1>
    <form>
      <div class="col-5 ">
        <div class="col mb-2">
          <input type="text" class="form-control" placeholder="Enter user name">
        </div>
        <div class="col mb-2">
          <input type="text" class="form-control" placeholder="Enter role">
        </div>
        <div class="col">
          <input type="email" class="form-control mb-3" placeholder="Enter your email">
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
          <th scope="col" class="border">Email</th>
          <!-- <th scope="col"class="border">Role</th> -->
          <th scope="col" class="border">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ( $users as $user )
        <tr class="text-center">
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->role}}</td>
          <td>{{$user->email}}</td>
          <!-- <td>{{$user->role}}</td> -->

          <td>
            <a href="" class="btn btn-dark mr-3 btn-sm">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
          </td>

        </tr>
        @endforeach


      </tbody>
    </table>

  </div>

</body>

</html>
@endsection
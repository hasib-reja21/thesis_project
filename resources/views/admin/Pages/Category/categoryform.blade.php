@extends('Admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div>
  @if (Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
    
  @endif
</div>

<section class="intro">
  <div class=" h-100 " >
    <div class="mask d-flex align-items-center h-100 ">
      
      <div class="container">
        
        <h4 class="shadow p-2 text-uppercase col-12 text-center py-3" style="background-color:rgba(255, 255, 255,1.0)">category form</h4>

      
      <div class="row justify-content-center">
          <div class="col-12 col-lg-10 ">
            <div class="card mt-3 p-3 " style="border-radius: 1rem;">
              <div class="card-body p-5 shadow-sm rounded">
              
                  <form action="{{route('category.store')}}" method="post">
                    @csrf
                    
                    <div class="col-12 col-md-6 mb-4 mt-4 ml-5 ">
                      <label class="form-label" for="form6Example3">Categotyy name:</label>
                      <input type="text" id="form6Example3" class="form-control "
                        name="category_name" placeholder="Enter Category Name..."/>
                    </div>

                    <div class="form-outline col-12 col-md-6 mb-4 mt-4 ml-5">
                      <label class="form-label" for="form6Example7">Category Discription:</label>
                      <textarea class="form-control" id="form6Example7" name="description_name" rows="2" placeholder="Write Your description !"></textarea>                   
                    </div>
                
                    <div class="col text-center">
                      <button type="submit" class="btn btn-secondary btn-rounded mr-5 ">Add Category</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>
@endsection
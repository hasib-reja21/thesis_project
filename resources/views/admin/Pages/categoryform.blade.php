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

<section class="intro">
  <div class=" h-100 " >
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 ">
            <div class="card  " style="border-radius: 1rem; background-color:#C2DEDC;">
              <div class="card-body p-5 shadow-sm rounded">

                <h1 class="mb-5 text-center fw-bold text-uppercase">Category Form</h1>
                <hr>

                <form action="{{route('category.store')}}" method="post">
                  @csrf
                  

                  <div class="col-12 col-md-6 mb-4">
                    <label class="form-label" for="form6Example3">Categotyy name:</label>
                    <input type="text" id="form6Example3" class="form-control" name="category_name" placeholder="Enter Category Name..."/>
                   
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Category Discription:</label>
                    <textarea class="form-control" id="form6Example7" name="description_name" rows="2" placeholder="Write Your description !"></textarea>
                 
                  </div>
              
                  <div class="col text-center">
                  <button type="submit" class="btn btn-secondary btn-rounded ">Add Category</button>
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
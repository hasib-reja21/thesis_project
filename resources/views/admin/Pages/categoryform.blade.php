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
  <div class="bg-image-vertical h-100" >
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-body p-5">

                <h1 class="mb-5 text-center">Category Form</h1>

                <form>
                  <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Category Title</label>
                            <input type="text" id="form6Example1" class="form-control" />
                           
                        </div>
                        </div>`
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <label class="form-label" for="form6Example3">Categotyy name</label>
                    <input type="text" id="form6Example3" class="form-control" />
                   
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Category Discription</label>
                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                 
                  </div>
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">Add Category</button>
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
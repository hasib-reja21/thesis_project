@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Include Bootstrap CSS and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>

        @endif
    </div>
    <div class="container ">
        <h4 class="shadow p-2 text-uppercase col-12 text-center py-3 mb-3">add product</h4>
        <div class="   d-flex justify-content-center border py-2 ">
            <form action="{{route('product.store')}}" method="POST" class="w-100 mr-3 ml-3 mt-3 mb-3 col-9">
                @csrf

                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control   " id="productName" name="product_Name" placeholder="Enter product Name" required>
                </div>
                <div class="form-group">
                    <label for="productName">Select Brand</label>
                    <select  class="form-control  name="brand_Name" id="">
                        <option value="">Hello</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productName">Select Category</label>
                    <select  class="form-control  name="category_Name" id="">

                    //for dropdown oprion
                        @foreach ($categories as $category )
                        <option value="">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="productImage">Upload Image</label>
                    <input type="file" class="form-control" id="productImage" name="product_Image" required>
                </div>
                <div class="form-group">
                    <label for="productPrice">Product Price</label>
                    <input type="number" step="0.01" class="form-control" id="productPrice" name="product_Price" placeholder="Enter product amount" required>
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <textarea class="form-control" id="productDescription" name="product_Description" rows="5" placeholder="Write about the product"></textarea>
                </div>
                <button type="submit" class="btn btn-dark mb-3">ADD</button>
            </form>
        </div>

    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>

@endsection
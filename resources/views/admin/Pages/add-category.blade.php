@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
`  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <style>
  .container{
    
    position: absolute; 
    width: 50%;
    height: 300px;
    left: 50%;
    top:100px;
    margin: 0 0 0 -25%;
    

  } 
  .button {
      background-color: #4CAF50; 
      border: none;
      border-radius:10px;
      color: white;
      padding: 12px 25px;
      text-align: center;
      
      text-decoration: none;
      display: inline-block;
      font-size: 16px;

}

  </style>
  <body>
  <div class="container">
     <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="button " class="button" value="Add">
      </form>
    </div>
  </body>
</html>


@endsection
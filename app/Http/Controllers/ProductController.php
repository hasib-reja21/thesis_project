<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   
  public function Form(){
    $categories=Category::all();
    return view('admin.Pages.Products.product_form',compact('categories'));
  }
  public function List(){
    $products=Product::paginate(5);
    return view('admin.Pages.Products.product-list',compact('products'));
  }
  public function store(Request $request){
    //form validation
    //  dd($request->all());
  $validate=validator::make($request->all(),[
    // 'product_Name'=>'required',
    // 'category_Name'=>'required',
    // 'Product_Image'=>'required',
    // 'product_Price'=>'required'
  ]);
  if($validate->fails()){
    return redirect()->back()->withErrors($validate);
  }
  //for file handling
  $fileName=null;
  if($request->hasFile('Product_Image')){

    $file=$request->file('Product_Image');
    $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
    $file->storeAs('/uploads',$fileName);
  }

  //  dd($request->all());
     Product::create([
        'Product_Name' =>$request->product_Name,
        'brand_id' =>$request->brand_Name,
        'category_id' =>$request->category_Name,
        'Product_Description'=>$request->product_Description,
        'Product_Price' =>$request->product_Price,
        'Product_Image' =>$fileName
       ]);
      //  dd($data);
       return redirect()->back()->with('success','product created Successfully!!');
  }
}

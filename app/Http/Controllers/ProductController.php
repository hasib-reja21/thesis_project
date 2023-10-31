<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
    Product::create([
        'Product_Name' =>$request->product_Name,
        'brand_id' =>$request->brand_Name,
        'category_id' =>$request->category_Name,
        'Product_Price' =>$request->product_Price,
        'Product_Image' =>$request->product_Image
       ]);
       return redirect()->back()
                           ->with('success','product created Successfully!!');
  }
}

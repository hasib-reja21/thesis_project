<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   //create product form
  public function Form(){
    $categories=Category::all();
    return view('admin.Pages.Products.product_form',compact('categories'));
  }
   //view product list throw model
  public function List(){
    $products=Product::paginate(5);
    return view('admin.Pages.Products.product-list',compact('products'));
  }

   //delete product
  public function delete($id)
  {
    $product = Product::find($id);
    if ($product) {
      $product->delete();
    }
    return redirect()->back();
  }

     //edit product
    public function edit($id){
      $product=Product::find($id);
      $categories=Category::all();
      return view('admin.Pages.Products.edit',compact('product','categories'));

    }

    //update product

    public function update( Request $request ,$id){
      $product=Product::find($id);
      if($product){
        $fileName=$product->Product_Image;
        if($request->hasFile('Product_Image')){
    
        $file=$request->file('Product_Image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$fileName);
      }
        $product->update([
          'Product_Name' =>$request->product_Name,
          'brand_id' =>$request->brand_Name,
          'category_id' =>$request->category_Name,
          'Product_Description'=>$request->product_Description,
          'Product_Price' =>$request->product_Price,
          'Product_Image' =>$fileName

        ]);
        return redirect()->back()->with('success','Product updated successfully');
      }

    }

    // store the in the database
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

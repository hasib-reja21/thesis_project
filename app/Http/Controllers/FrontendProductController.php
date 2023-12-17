<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bidding;


class FrontendProductController extends Controller
{
    public function  singleProductView($productId)
    {
        $biddings=Bidding::orderBy('price', 'DESC')->get();
        $products = Product::all();
        $singleProduct=Product::find($productId);
        // dd($singleProduct->name);
        return view('admin.Frontend.Pages.product-view',compact('singleProduct','products','biddings'));

    }  
     public function store( Request $request, $id){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'amount'=>'required',
            
        ]);
        if($validate->fails())
        {
         
            return redirect()->back()->withErrors($validate);
        }
        Bidding::create([
            'user_name'=>auth()->user()->name,
            'price'=>$request->amount,
            'product_id' => $id,
            'status' => 'pending',

            
        ]);
        notify()->success('Bid submitted successfull');
        return redirect()->back();


     }

     public function productUnderCategory($category_id){
        $products=Product::where('category_id',$category_id)->get();
        return view('admin.Frontend.Pages.product-under-category',compact('products'));
     }
    
}

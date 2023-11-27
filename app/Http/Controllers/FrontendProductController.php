<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendProductController extends Controller
{
    public function  singleProductView($productId)
    {
        
       $products = Product::all();
        $singleProduct=Product::find($productId);
        // dd($singleProduct->name);
        return view('admin.Frontend.Pages.product-view',compact('singleProduct','products'));

    }
}

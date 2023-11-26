<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(){
        $product = Product::count();
        $products=Product::all();
        return view('admin.Frontend.Partials.home-dashboard',compact('products','products'));
    }
}

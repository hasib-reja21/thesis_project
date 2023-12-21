<?php

namespace App\Http\Controllers;

use App\Models\Bidding;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(){
        $product = Product::count();
        $biddings = Bidding::count();
        return view('admin.Frontend.Partials.home-dashboard',compact('product','biddings'));
    }

    public function search(Request $request){
        // dd($request->all());
        if($request->search)
        {
            $products=Product::where('Product_Name','LIKE','%'.$request->search.'%')->get();
            
        }else{
            $products=Product::all();
        }
       
        return view("Admin.Frontend.Pages.search",compact('products'));
        
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bidding;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $biddings = Bidding::count();
        $categories = Category::count();
        $products = Product::count();
        $users = User::where('role','Customer')->count();
       
        return view('admin.Partial.dashboard',compact('categories','products','users','biddings'));
    }
     public function BidderInfo(){
        return view('admin.Pages.Bidder.bidder-info');
     }
}

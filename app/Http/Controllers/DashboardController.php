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
        $biddings = Bidding::all();
        return view('admin.Pages.Bidder.bidder-info',compact('biddings'));
     }

     public function profileView(){
        return view('admin.Pages.Profile.admin-profile');
     }
}

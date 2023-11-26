<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $categories = Category::count();
        $products = Product::count();
        $users = User::count();
       
        return view('admin.Partial.dashboard',compact('categories','products','users'));
    }
}

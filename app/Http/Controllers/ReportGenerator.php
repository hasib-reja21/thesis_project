<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bidding;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ReportGenerator extends Controller
{
    public function Report(){
        $biddings = Bidding::count();
        $categories = Category::count();
        $products = Product::count();
        $users = User::where('role','Customer')->count();
        return view('admin.Pages.Report.report-print',compact('biddings','categories','products','users'));
    }

    public function WinList(){
        $biddings = Bidding::all();
        return view('admin.Pages.Report.winner-list',compact('biddings'));

    }
}

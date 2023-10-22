<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function List(){
        return view('Admin.Pages.list');
    }
    public function Add(){
        return view('Admin.Pages.add-category');
    }

    public function View(){
        $categories=Category::all();

        return view('Admin.Pages.view-category',compact('categories'));
    }
    public function createForm(){
        return view('Admin.Pages.categoryform');
    }
    public function store(Request $request){
       
           Category::create([

            'name' =>$request->category_name,
            'description' =>$request->description_name
           ]);
           return redirect()->back()->with('success','Your data has been store Successfully!!');
                               

        
    }
}

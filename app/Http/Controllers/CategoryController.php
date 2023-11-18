<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function List(){
        return view('Admin.Pages.Category.list');
    }
   
    public function View(){
        //view data at the view page through model
        $categories=Category::paginate(8);

        return view('Admin.Pages.Category.view-category',compact('categories'));
    } 
    //return the category form at view page
    public function createForm(){
        return view('Admin.Pages.Category.categoryform');
    }
    //query for store the data at the database
    public function store(Request $request){
           Category::create([
            'name' =>$request->category_name,
            'description' =>$request->description_name
           ]);
           return redirect()->back()->with('success','Your data has been store Successfully!!');
                             
    }
   
}
<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    // public function List(){
    //     return view('admin.Pages.Category.list');
    // }
   
    public function View(){
        //view data at the view page through model
        $categories=Category::paginate(8);

        return view('admin.Pages.Category.view-category',compact('categories'));
    } 
    //return the category form at view page
    public function createForm(){
        return view('admin.Pages.Category.categoryform');
    }
    //query for store the data at the database
    public function store(Request $request){
           Category::create([
            'name' =>$request->category_name,
            'description' =>$request->description_name
           ]);
           return redirect()->back()->with('success','Your data has been store Successfully!!');                    
    }
     
    public function delete($id){
        $categories = Category::find($id);
        if($categories){
            $categories->delete();
        }
        notify()->success('Category Deleted Successfully.');
        return redirect()->back();
    }
}
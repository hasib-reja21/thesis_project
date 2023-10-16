<?php

namespace App\Http\Controllers;

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
        return view('Admin.Pages.view-category');
    }
    public function createForm(){
        return view('Admin.Pages.categoryform');
    }
}

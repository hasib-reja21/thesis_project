<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function registration(){
        return view('admin.Frontend.Pages.registration');
    }

    public function login(){
        return view('admin.Frontend.Pages.login');
    }
}

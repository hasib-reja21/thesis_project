<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    function registration(){
        return view('admin.Frontend.Pages.registration');
    }

    public function store(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]); 

        notify()->success('Your Registration has been successful.');
        return redirect()->back();
    }


    public function login(){
        return view('admin.Frontend.Pages.login');
    }


    public function doLogin(Request $request){
        
        $validation = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validation->fails()){
            notify()->error($validation->getMessageBag());
            return redirect()->back();
        }

        $credentials =$request->except('_token');

        if(auth()->attempt($credentials)){
            notify()->success('You have login successfully');
            return redirect()->route('frontend.home');
        }

        notify()->error('Invalid Credentials.');
        return redirect()->back();
    }



    public function logout(){

        auth()->logout();
        notify()->success('Logout successfull');
        return redirect()->route('frontend.home');
    }
    public function profile(){
        $products=Product::all();
        return view('admin.Frontend.Pages.profile-view',compact('products'));
    }
}

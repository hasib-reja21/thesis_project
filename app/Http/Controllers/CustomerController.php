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
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]); 
        // notify()->success('user registration successfull!');
        return redirect()->back()->with('success','User registration successfull');
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
            // notify()->error($validation->getMessageBag());
            return redirect()->back();
        }

        $credentials =$request->except('_token');
        if(auth()->attempt($credentials)){
            // notify()->success('Laravel Notify is awesome!');
            // return redirect()->back()->with('success','You have login successfully');
            return redirect()->route('frontend.home');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }


    public function logout(){

        auth()->logout();
        return redirect()->route('frontend.home');
    }
    public function profile(){
        $products=Product::all();
        return view('admin.Frontend.Pages.profile-view',compact('products'));
    }
}

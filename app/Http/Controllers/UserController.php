<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller

{
  

    public function loginForm(){
        return view('admin.Pages.login');
    }

    public function loginPost( Request $request)
    {
        $validate=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ]);
            if($validate->fails())
            {
             
                return redirect()->back()->withErrors($validate);
            }
            $credentials=$request->except('_token');

            $login=auth()->attempt($credentials);
            if($login)
            {
                notify()->success('Login Successfull!');
               return redirect()->route('dashboard');
            }
           
            return redirect()->back()->withErrors('Invalid user or password');
     }
        public function logout(){
            
            auth()->logout();
            return redirect()->route('admin.login');
            notify()->success('Logout successfull');
        }

        public function list(){
            $users = User::all();
            return view('admin.Pages.User.users-list',compact('users'));
        }

        public function store(Request $request)
        {  
            dd($request->all());
            $validate=Validator::make($request->all(),[
                'user_name'=>'required',
                'role'=>'required',
                'user_email'=>'required|email',
                'user_password'=>'required|min:6',
            ]);
    
            if($validate->fails())
            {
                return redirect()->back()->with('myError',$validate->getMessageBag());
            }
    
            $fileName=null;
            if($request->hasFile('user_image'))
            {
                $file=$request->file('user_image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
               
                $file->storeAs('/uploads',$fileName);
    
            }
    
           
            User::create([
                'name'=>$request->user_name,
                'role'=>$request->role,
                'image'=>$fileName,
                'email'=>$request->user_email,
                'password'=>bcrypt($request->user_password),
            ]);
    
            return redirect()->back()->with('message','User created successfully.');
    
    
        }
    }
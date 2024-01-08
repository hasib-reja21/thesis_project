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
            
            notify()->error('Invalid username or password');
            return redirect()->back();
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
            // dd($request->all());
            $validate=Validator::make($request->all(),[
                'user_name'=>'required',
                'role'=>'required',
                'image'=>'required',
                'user_email'=>'required|email',
                'user_password'=>'required|min:6',
            ]);
    
            if($validate->fails())
            {
                return redirect()->back()->with('myError',$validate->getMessageBag());
            }
    
            $fileName=null;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
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
            notify()->success('User created successfull');
            return redirect()->back();
        } 

        public function delete($id){
            $users = User::find($id);
            if($users){
                $users->delete();
            }
            notify()->success('User Deleted Successfully.');
            return redirect()->back();


        }

    }
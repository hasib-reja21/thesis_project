<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    function registration(){
        return view('admin.Frontend.Pages.registration');
    }

    public function store(Request $request){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'role'=>'required',
            'image'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
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
        // dd($fileName);
        User::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'image'=>$fileName,
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
        $contacts=Contact::all();
        return view('admin.Frontend.Pages.profile-view',compact('products','contacts'));

    }
    public function edit($id){
        $profile_edit=User::find($id);
        return view('admin.Frontend.Pages.profile-edit',compact('profile_edit'));
    }
    public function update(Request $request ,$id){
        // dd($request->all());
        $profile_edit=User::find($id);
        if($profile_edit){
            $fileName = $profile_edit->image;
            if ($request->hasFile('image')) {
      
              $file = $request->file('image');
              $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
              $file->storeAs('/uploads', $fileName);
            }
            $profile_edit->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'image'=>$fileName
               ]);
        }
       
        notify()->success('Profile update successfull');
        return redirect()->route('frontend.home');
        
    }


 
}

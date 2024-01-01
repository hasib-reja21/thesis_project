<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function createForm(){
        return view('admin.Pages.Contact.contact');
    }
    public function Store(Request $request){

        Contact::create([

            'name' =>$request->fullname,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message' =>$request->message
           ]);
           return redirect()->back()
                               ->with('success','Your data has been submitted Successfully!!'); 
    }
    public function Message(){
        return view('admin.Frontend.Pages.contact-us');
    }

    public function StoreMessage(Request $request){
        // dd($request->all());
        Contact::create([

            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message' =>$request->message
           ]);
           notify()->success('Your information is submitted Successfull!');
           return redirect()->back();
    }
}

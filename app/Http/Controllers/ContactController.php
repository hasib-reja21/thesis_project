<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function Form(){
        return view(('admin.pages.contact'));
    }
    public function Store(Request $request){

        Contact::create([

            'name' =>$request->fullname,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message' =>$request->message
           ]);
           return redirect()->back()
                               ->with('success','Category Created Successfully!!');

        
    }
}

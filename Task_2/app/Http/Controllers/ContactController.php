<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactShow(){
        return view('pages.contact');
    }

    public function CheckContact(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:40',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'message'=>'required|min:5|max:200'
            ],

            [
                'name.required'=>'Your name is required',
                'name.min'=>'Your name should be more than 5 charcters'

            ]
            );
        
            return "<h1>Your Contact Request</h1> <br>Name: ".$request->name."<br>Email: ".$request->email."<br>Phone: ".$request->phone."<br>Message: ".$request->message;    
    }
}
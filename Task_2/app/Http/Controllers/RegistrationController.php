<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Registration(){
        return view('pages.registration');
    }

    public function CheckRegistration(Request $request){

        $this->validate(
            $request,
            [
                'fname'=>'required|min:5|max:70',
                'lname'=>'required|min:5|max:70',
                'address'=>'required|min:5|max:70',
                'email'=>'email',
                'username'=>'required|min:5|max:50',
                'password'=>'required',
                'conpassword'=>'required',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'fname.required'=>'Your First name required',
                'fname.min'=>'First name should be more than 6 charcters',
                'fname.max'=>'First name should be less than 40 charcters',

                'lname.required'=>'Your Last name required',
                'lname.min'=>'Last name should be more than 6 charcters',
                'lname.max'=>'Last name should be less than 40 charcters',

                'address.required'=>'Your address name required',
                'email.required'=>'Your email required',
                'username.required'=>'Your username required',

                'password.required'=>'Your password required',
                'conpassword.required'=>'Confirm your password required',
                
                'dob.required'=>'Your DOB required',
                'phone.required'=>'Your phone number required'
            ]
            );

        return "First name:".$request->fname."<br>Last name:".$request->lname."<br>Address:".$request->address."<br>Email:".$request->email."<br>Phone:".$request->phone."<br>username:".$request->username.
               "<br>Password:".$request->password."<br>DOB:".$request->dob ;      
    }
}
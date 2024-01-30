<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Http\Request;


class SignupController extends Controller
{
    public function insert(Request $request){

        $signup =new Signup();
        $signup->id = $request->id;
        $signup->name = $request->username;
        $signup->email = $request->usermail;
        $signup->password = $request->userpass;
        $signup->save();
        return view("SignupResources.insert_signup",["name"=> $signup->name]);
        
    }

}


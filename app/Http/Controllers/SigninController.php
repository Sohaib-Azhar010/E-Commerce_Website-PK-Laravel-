<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class SigninController extends Controller
{
    // public function checkLogin(Request $request){
    //     $email = $request->input('usermail');
    //     $password = $request->input('userpass');
    //     $userData = DB::table('signup_tbl')->where('email', $email)->first();
    //     if ($userData && $userData->email == $email && $password == $userData->password) {
    //         $request->session()->put('user_data', $userData);
    //         return view('SignupResources.insert_signup',['name' => $userData->name]);
    //     }
    //      else {
    //         return view('index');
    //     }
       
    // }
    public function checkLogin(Request $request)
    {
        $email = $request->input('usermail');
        $password = $request->input('userpass');
        
        try {
            $userData = DB::table('signup_tbl')->where('email', $email)->first();

            if ($userData && Hash::check($password, $userData->password)) {
                return view('SignupResources.insert_signup', ['name' => $userData->name]);
            } else {
                return view('index')->with('error', 'Invalid login credentials.');
            }
        } catch (\Exception $e) {
            // Handle database query errors
            return view('index')->with('error', 'An error occurred during login.');
        }
    }

}

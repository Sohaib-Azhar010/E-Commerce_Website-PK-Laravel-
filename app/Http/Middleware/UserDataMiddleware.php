<?php
// app/Http/Middleware/UserDataMiddleware.php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserDataMiddleware
{
    // public function handle($request, Closure $next)
    // {

    //     // dd('Middleware executed!');
    //     // if (Auth::check()) {
    //     //     $userData = Auth::user();
    //     //     View::share('userData', $userData);
    //     // } else {
    //     //     View::share('userData', null); // Ensure that the variable is always defined
    //     // }

    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         dd($user);
    //     } else {
    //         dd('User not authenticated');
    //     }

    //     return $next($request);
    // }

//     public function handle($request, Closure $next)
// {
//     if (Auth::check()) {
//         $userData = Auth::user();
//         View::share('userData', $userData);
//     } else {
//         View::share('userData', null);
//     }

//     return $next($request);
// }

public function handle($request, Closure $next)
{
    \Log::info('UserDataMiddleware executing');
    
    if (Auth::check()) {
        $userData = Auth::user();
        View::share('userData', $userData);
    } else {
        View::share('userData', null);
    }

    return $next($request);
}


}

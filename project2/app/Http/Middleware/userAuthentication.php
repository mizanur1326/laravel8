<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class userAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // echo "Hello USERAUTH";
        $user = Auth::user();
        // print_r($user);
        // echo $user->name;

        // if($user->role == 1){
        //     return view('/admin');
        // }else if($user->role == 2){
        //     return view('/teacher');
        // }else if($user->role == 3){
        //     return view('/student');
        // }

        return $next($request);
        
    }
}

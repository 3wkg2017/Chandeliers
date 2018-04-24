<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $user = Auth::user();
        // if($user){
        //     if($user->user_type != 'admin') {
        //         return abort(403, 'You are not admin!');
        //     }
        // }
        // else if(Auth::guest()) {
        //     return abort(403);
        // } else {
            
        // }


        $user = Auth::user();
        if($user->user_type == 'admin'){
            return $next($request);
        }
        else {
            return abort(403);
        }


  }
}
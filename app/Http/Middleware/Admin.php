<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class Admin
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

        // if (Auth::check()){
        //         return redirect('/');
        //     if (Auth::user()->role=='admin') {
        //         return redirect()->route('index');
        //     }else if (Auth::user()->role=='user') {
        //         return redirect('/user');
        //     }elseif (Auth::user()->role=='hrd') {
        //         return redirect('/hrd');
        //     }
        // }
        //     return $next($request);



            if (!Auth::check()){
                return redirect('/');
            }
            return $next($request);



            // if ($request->user()->role==User::ROLE_ADMIN) {
            //         return $next($request);
            //     }elseif ($request->user()->role==User::ROLE_USER) {
            //         return $next($request);
            // }
            // abort(401);

    }

}

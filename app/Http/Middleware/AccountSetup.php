<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AccountSetup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->is_admin){
            if(!Auth::user()->setup) { return redirect()->route('admin.account.setup'); }
        }
        if (Auth::user()->is_institution){
            if(!Auth::user()->setup) { return redirect()->route('university.account.setup'); }
        }
        if (Auth::user()->is_student){
            if(!Auth::user()->setup) { return redirect()->route('student.account.setup'); }
        }
        return $next($request);
    }
}

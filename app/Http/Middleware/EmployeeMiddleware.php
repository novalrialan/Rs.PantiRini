<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle()
    {

        $departemens = session('id_departemen');
        if ($departemens == '1') {
            return redirect('/dashboard');
        } elseif ($departemens == '2') {
            return redirect('/dashboard');
        } elseif ($departemens == '3') {
            return redirect('/dashboard');
        } elseif ($departemens == '4') {
            return redirect('/dashboard');
        } elseif ($departemens == '5') {
            return redirect('/dashboard');
        } elseif ($departemens == '6') {
            return redirect('/dashboard');
        } elseif ($departemens == '7') {
            return redirect('/dashboard');
        } elseif ($departemens == '8') {
            return redirect('/dashboard');
        } elseif ($departemens == '9') {
            return redirect('/dashboard');
        }

        return redirect('/');
    }
}
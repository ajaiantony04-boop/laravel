<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkrole
{
    public function handle(Request $request, Closure $next)
    {
        // Debugging: check if middleware is triggered
        // dd('Checkrole middleware reached', auth()->user());

        // Ensure user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Ensure user is admin
        if (auth()->user()->role !== 'admin') {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}

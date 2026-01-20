<?php

namespace App\Http\Controllers;

use App\Models\StudentLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckLoginController extends Controller
{
    public function checkLogin(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('pass');

        // Find user by email
        $user = StudentLogin::where('email', $email)->first();

        // Check if user exists and password matches
        if ($user && $pass=$user->password) {
            // Login successful, redirect to dashboard or home
            return redirect()->route('home');
        } else {
            // Login failed, redirect back with error
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}

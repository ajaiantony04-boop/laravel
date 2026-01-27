<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class CheckLoginController extends Controller
{
   public function checkLogin(Request $request)
{
    // 1️⃣ Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // 2️⃣ Retrieve user by email
    $user = \App\Models\User::where('email', $request->email)->first();

    if (!$user) {
        // No user found
        return back()->withErrors(['email' => 'User not found.']);
    }

    // 3️⃣ Check password manually
    if (!Hash::check($request->password, $user->password)) {
        return back()->withErrors(['password' => 'Incorrect password.']);
    }

    // 4️⃣ Optional: Check user role
    if ($user->role !== 'admin') {
        return back()->withErrors(['role' => 'You are not authorized to login.']);
    }

    // 5️⃣ Log in user
    Auth::login($user); // Direct login
    $request->session()->regenerate(); // prevent session fixation

    // 6️⃣ Redirect to intended page or /home
    return redirect()->intended('/home');
}

}

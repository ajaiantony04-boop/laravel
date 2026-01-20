<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexpage()
    {

 
         $user = auth()->user();

         
         $student = ['user' => 'Ajai'];

         return view('home', compact('user', 'student'));
    }
}

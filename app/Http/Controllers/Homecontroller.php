<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Studentlogin;

class HomeController extends Controller
{
    public function indexpage()
    {
        $name = auth()->user()->name;
        $students = Studentlogin::select('email', 'name','role','id')->where('name',$name)->get();
        return view('home',compact('students')); // create resources/views/home.blade.php
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckLoginController extends Controller
{
  public function checkLogin(Request $request)
{
    $email = $request->input('email');
    $pass =  $request->input('pass');

    return $email;
}
}

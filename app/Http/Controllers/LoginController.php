<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('/');
    }
}

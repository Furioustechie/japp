<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function testlogin()
    {
        return view('testlogin');
    }

    public function testforgot()
    {
        return view('testforgot');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function jekono()
    {
        return view('homecopy');
    }

    public function welcome()
    {
        return view('welcome');
    }
}

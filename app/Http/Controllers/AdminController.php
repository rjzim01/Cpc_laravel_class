<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // code start
    public function index( ){
        return view('frontend.admin');
    }
}

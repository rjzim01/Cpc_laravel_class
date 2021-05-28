<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.index');
    }

    public function userlist(){
        //To show all user
        //$users = User::all();
        //To show limited user in one page
        $users = User::paginate(5);
        return view('backend.user.view', compact('users'));

        //way of datapass  : array,compact,with
    }
}

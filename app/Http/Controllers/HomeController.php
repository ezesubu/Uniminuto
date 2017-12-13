<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\formulas;
use App\Models\users;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulas = formulas::where('status', '==', 0)->get();
        return view('home')->with('formulas', $formulas);
    }

    public function usuarios(){
        $users = User::all();
        return view('users')->with('users', $users);
    }
}

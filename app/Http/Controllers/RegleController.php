<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regle;
use App\User;

class RegleController extends Controller
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
        //$regle = Regle::orderBy('name')->get();
        //$users=User::all();
        return view('regle');
    }
}

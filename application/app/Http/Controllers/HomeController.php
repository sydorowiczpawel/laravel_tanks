<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Documents;
use Illuminate\Support\Facades\DB;



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
        return view('home');
    }

    public function admin()
    {
        $users = User::orderBy('id', 'desc')->paginate(100);
        return view('Models.admin')->with('users', $users);
    }

    public function document()
    {
        $docs = Documents::orderBy('id', 'desc')->paginate(100);
        return view('home')->with('docs', $docs);
    }
}

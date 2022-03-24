<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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

    public function user_index(){
        return view('index');
    }

    public function admin_index(){
        $users = User::all()->where('user_type', 0);
        return view('admin.dashboard', compact('users'));
    }

    public function delivery_dashboard(){
        return view('delivery.dashboard');
    }
}

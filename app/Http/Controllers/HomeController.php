<?php

namespace App\Http\Controllers;

use App\Models\Department;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as RequestMode;

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
        $request = RequestMode::paginate(10);
        return view('dashboard',compact('request'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

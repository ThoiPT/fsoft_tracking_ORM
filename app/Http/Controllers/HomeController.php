<?php

namespace App\Http\Controllers;

use App\Models\CVitae;
use App\Models\Department;
use App\Models\Skill;
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
        $request = RequestMode::where('status','=','1')->paginate(10);
        $totalAccount = \App\Models\User::all();
        $totalSkill = Skill::all()->where('status','=','1');
        $totalCV = CVitae::all()->where('status','=','3');
        return view('dashboard',compact('request', 'totalAccount','totalSkill', 'totalCV'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

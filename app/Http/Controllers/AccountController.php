<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;
use Symfony\Component\Console\Input\Input;

class AccountController extends Controller
{
    public function index(){
        $dpm = Department::all();
        return view('Account/create',compact('dpm'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        Session::flash('mes','Account Add Success');
//        return view('Account/list',compact('list'));
        return Redirect::back();
    }
    public function editForm($id){
        $dpm = Department::all();
        $account = User::find($id);
        return view("Account/update",compact('dpm'))->with('account',$account);
    }
    public function update(Request $request, User $id){
        $id->update($request->all());
        return redirect()->route('get.account.list');
    }
    public function delete($id){
        User::destroy($id);
        return redirect()->route('get.account.list');
    }
    public function list(){
//        $list = User::all();
        $list = User::paginate(10);
        return view("Account/list",compact('list'));
    }
}

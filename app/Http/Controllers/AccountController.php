<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Symfony\Component\Console\Input\Input;

class AccountController extends Controller
{
    public function index(){
        $dpm = Department::all();
        return view('Account/create',compact('dpm'));
    }
    public function store(Request $request){
        $list = User::all();
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return view('Account/list',compact('list'));
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

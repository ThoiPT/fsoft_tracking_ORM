<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view("Department/create");
    }

    public function store(Request $request){
        $request -> validate([
            'name'=>'required', 'description'=>'required'
        ]);
        Department::create($request->all());
        return redirect()->route('get.department.list');
    }

    public function editForm($id){
        $department = Department::find($id);
        return view("Department/update")->with('department',$department);
    }

    public function update(Request $request, Department $id){
        $id->update($request->all());
        return redirect()->route('get.department.list');
    }

    public function delete($id){
        Department::destroy($id);
        return redirect()->route('get.department.list');
    }

    public function list(){
        $list = Department::paginate(10);
        return view("Department/list",compact('list'));
    }

}

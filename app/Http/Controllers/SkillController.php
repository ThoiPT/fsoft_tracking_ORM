<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Toaster;

class SkillController extends Controller
{
    public function index(){
        return view("Skill/create");
    }

    // create
    public function store(Request $request){

        $request -> validate([
           'name'=>'required', 'status' => 'required'
        ]);
        Skill::create($request->all());
        Session::flash('mes',"Skill Add Success");
        return Redirect::back();
    }

    // update
    public function editForm($id){
        $skill = Skill::find($id);
        return view("Skill/update")->with('skills',$skill);
    }

    public function update(Request $request, Skill $id){
        $id->update($request->all());
        return \redirect('skill/list');
    }

    // destroy
    public function delete($id){
        Skill::destroy($id);
        return redirect('skill/list');
    }
    // show
    public function list(){
        $list = Skill::paginate(50);
        return view("Skill/list",compact('list'));
    }
}

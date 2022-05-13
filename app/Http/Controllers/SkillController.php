<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Session;
use Illuminate\Support\MessageBag;

class SkillController extends Controller
{
    public function index()
    {
        return view("Skill/create");
    }

    // create
    public function store(Request $request)
    {
//        return $request->all();
        Skill::create($request->all());
        return \redirect('skill/list');
    }

    // update
    public function editForm($id)
    {
        $skill = Skill::find($id);
        return view("Skill/update")->with('skills',$skill);
    }

    public function update(Request $request, Skill $id)
    {
        $id->update($request->all());
        return \redirect('skill/list');
    }

    // destroy
    public function delete($id)
    {
        Skill::destroy($id);
        return \redirect('skill/list');
    }

    // show
    public function list()
    {
        $list = Skill::all();
        return view("Skill/list",compact('list'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view("Skill/create");
    }

    // create
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        Skill::create($request->all());
        return view("Skill/list");
    }

    // update
    public function editForm(Skill $id)
    {
        return view("Skill/update",compact('id'));
    }
    public function update(Request $request, Skill $id)
    {
        $list = Skill::all();
        $id->update($request->all());
        return view("Skill/list",compact('list'));
    }
    public function list()
    {
        $list = Skill::all();
        return view("Skill/list",compact('list'));
    }
}

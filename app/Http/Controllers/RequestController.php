<?php

namespace App\Http\Controllers;

use App\Models\Request as ReaquestModel;
use App\Models\Skill;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {

        $data = Skill::all();
        return view("Request/create",compact('data'));
    }

    public function store(Request $request)
    {

        ReaquestModel::create($request->all());
        return \redirect("home");
    }

    public function editForm(ReaquestModel $id)
    {
        return view("Request/update");
    }

    public function update()
    {

    }

    public function list()
    {

        $data = ReaquestModel::all();
        $data2 = ReaquestModel::with('skills')->find(1)->skills();
        //dd($data2);
        return view("Request/list",compact('data','data2'));
    }
}

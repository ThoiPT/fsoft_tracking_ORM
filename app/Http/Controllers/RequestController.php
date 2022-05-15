<?php

namespace App\Http\Controllers;

use App\Models\Request as RequestModel;
use App\Models\RequestSkill;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index()
    {
        $data = Skill::all();
        return view("Request/create",compact('data'));
    }

    // create
    public function store(Request $request)
    {
        $data = RequestModel::create($request->all());
        foreach ($request->other_id as $item)
        {
            RequestSkill::create([
                'request_id'=>$data->id,
                'skill_id'=>$item
            ]);
        }
        return \redirect('request/list');
    }

    // update
    public function editForm($id)
    {
        $request= RequestModel::find($id);
        $skillName = Skill::all();
        $requestSkill = RequestSkill::all();
        $data = RequestModel::all();
        return view("Request/update",compact('skillName','data','requestSkill'))
            ->with('requests',$request)
            ->with('requestSkill',$requestSkill);
    }
    public function update(Request $request, RequestModel $id)
    {
//        $id->update($request->all());
        // Xủ lý
        $id->update($request->all());
        RequestSkill::where('request_id',$id->id)->delete();

        foreach ($request->other_id as $item)
        {
            RequestSkill::create([
                'request_id'=>$id->id,
                'skill_id'=>$item
            ]);
        }
        return \redirect('request/list');
    }

    // delete
    public function delete($id)
    {
        RequestModel::destroy($id);
        return \redirect('request/list');
    }

    // show
    public function list()
    {
        $data = RequestModel::all();
        return view("Request/list",compact('data'));
    }
}

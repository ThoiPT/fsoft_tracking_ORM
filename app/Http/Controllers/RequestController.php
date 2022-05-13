<?php

namespace App\Http\Controllers;

use App\Models\Request as RequestModel;
use App\Models\Request_Skill;
use App\Models\Skill;
use Illuminate\Http\Request;

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
        RequestModel::create($request->all());
        // Lấy id của request
        $data = RequestModel::all();
        foreach ($data as $re)
        {
            $re->idReq = RequestModel::find($re->id);
        }
        return $re;
        return \redirect('request/list');
    }

    // update
    public function editForm($id)
    {
        $request= RequestModel::find($id);
        $skillName = Skill::all();
        return view("Request/update",compact('skillName'))->with('requests',$request);
    }
    public function update(Request $request, RequestModel $id)
    {
        $id->update($request->all());
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
        // Lấy toàn bộ dữ liệu trong bảng Request
        $data = RequestModel::all();
        foreach ($data as $v)
        {
            // Tim đến từng id và select đến cột name, sau đó gán vào biến nameSkill
            $v->nameSkill = RequestModel::find($v->id)->skills->name;
        }
        return view("Request/list",compact('data'));
    }
}

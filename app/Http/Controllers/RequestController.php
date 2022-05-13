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

    // create
    public function store(Request $request)
    {

        ReaquestModel::create($request->all());
        return \redirect('request/list');
    }

    // update
    public function editForm($id)
    {
        $request= ReaquestModel::find($id);
        $skillName = Skill::all();
        return view("Request/update",compact('skillName'))->with('requests',$request);
    }
    public function update(Request $request, ReaquestModel $id)
    {
        $id->update($request->all());
        return \redirect('request/list');
    }

    // delete
    public function delete($id)
    {
        ReaquestModel::destroy($id);
        return \redirect('request/list');
    }

    // show
    public function list()
    {
        // Lấy toàn bộ dữ liệu trong bảng Request
        $data = ReaquestModel::all();
        foreach ($data as $v)
        {
            // Tim đến từng id và select đến cột name, sau đó gán vào biến nameSkill
            $v->nameSkill = ReaquestModel::find($v->id)->skills->name;
        }
        return view("Request/list",compact('data'));
    }
}

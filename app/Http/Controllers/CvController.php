<?php

namespace App\Http\Controllers;
use App\Models\CVitae;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
       $request = RequestModel::all();
       return view('Cv/create',compact('request'));
    }

    public function store(Request $request)
    {
        CVitae::create($request->all());
        $filename = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'),$filename);
        return redirect()->route('get.cv.list');
    }

    public function editForm($id)
    {
        $cv = CVitae::find($id);
        $cvData = CVitae::all();
        return view("Cv/update",compact('cvData'))->with('cvitaes',$cv);
    }

    public function update(Request $request, CVitae $id)
    {
        $id->update($request->all());
        return redirect()->route('get.cv.list');
    }

    public function list()
    {
        $request = RequestModel::all();
        $list = CVitae::all();
        return view('Cv/list',compact('list'))->with('request',$request);
    }

    public function delete($id)
    {
        CVitae::destroy($id);
        return redirect()->route('get.cv.list');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\CVitae;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
       // Lấy ra các Request có trạng thái là On (value > 0)
       $request = RequestModel::all()->where('status','>',0);
       return view('Cv/create',compact('request'));
    }

    public function store(Request $request)
    {
        $request -> validate(['name'=>'required','phone'=>'required','address'=>'required','file'=>'required','status'=>'required']);
        CVitae::create($request->all());
        $filename = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'),$filename);
        return redirect()->route('get.cv.list');
    }

    public function editForm($id)
    {
        $cv = CVitae::find($id);
        $rqData= RequestModel::all();
        return view("Cv/update",compact('rqData'))->with('cvitaes',$cv);
    }

    public function update(Request $request, CVitae $id)
    {
        $id->update($request->all());
//        $filename = $request->file->extension();
//        $request->file->move(public_path('uploads'),$filename);

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

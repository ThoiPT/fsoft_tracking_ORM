<?php

namespace App\Http\Controllers;
use App\Models\CVitae;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        CVitae::create($request->all());
        $filename = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'),$filename);

        Session::flash('mes',"Curriculum Vitae Add Success");
//        return redirect()->route('get.cv.list');
        return Redirect::back();
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
        $list = CVitae::paginate(10);
        return view('Cv/list',compact('list'))->with('request',$request);
    }

    public function delete($id)
    {
        CVitae::destroy($id);
        return redirect()->route('get.cv.list');
    }
}

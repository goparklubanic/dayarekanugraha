<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wdcareer;
class WdcareerController extends Controller
{
    public function index(){
        $data = wdcareer::all();
        return response()->json(['karir'=>$data]);
    }
    public function show(){}
    public function create(){
        // id , posisi , deskripsi , iconurl
        return view('karir.form',['mode'=>'append','data'=>[
            'id'=>NULL,
            'posisi'=>'',
            'deskripsi'=>'',
            'iconurl'=>''
        ]]);
        
    }
    public function store(Request $request){
        // Wdgeneral::create($request->all());
        wdcareer::create($request->all());
        return redirect()->to('/Admin')->with('success','Informasi Karir tersimpan');
    }
    public function edit(Request $request){
        $data = wdcareer::where('id',$request->id);
        return view('karir.form',['mode'=>'update','data'=>$data]);
    }
    public function update(Request $request){
        $data = wdcareer::find($request->id)->update([
            'jenisoutlet'=>$request->jenisoutlet,
            'iconUrl'=>$request->iconUrl,
            'tampil'=>$request->tampil
        ]);
    }
    public function destroy(){}
}

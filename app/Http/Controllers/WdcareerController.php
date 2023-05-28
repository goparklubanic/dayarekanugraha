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
        return redirect()->to('/Admin')->with(['success'=>'Informasi Karir tersimpan']);
    }
    public function edit(Request $request){
        $data = wdcareer::find($request->id);
        return view('karir.form',['mode'=>'update','data'=>$data]);
    }
    public function update(Request $request){
        $data = wdcareer::where('id',$request->id)->update([
            'posisi'=>$request->posisi,
            'deskripsi'=>$request->deskripsi,
            'iconurl'=>$request->iconurl
        ]);
        return redirect()->to('/Admin')->with(['info'=>'Informasi Karir terupdate']);
    }
    public function destroy(Request $request){
        wdcareer::where('id',$request->id)->delete();
        return redirect()->to('/Admin')->with(['warning'=>'Informasi Karir terhapus']);
    }
}

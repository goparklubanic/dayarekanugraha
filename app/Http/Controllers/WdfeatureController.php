<?php

namespace App\Http\Controllers;

use App\Models\wdfeature;
use Illuminate\Http\Request;

class WdfeatureController extends Controller
{
    public function index(){
        $data = wdfeature::where('tampil','ya')->get();
        return response()->json(['fitur'=>$data]);
    }
    public function show(){}
    public function create(){
        return view('fitur.form',['mode'=>'append','data'=>[
            'id'=>NULL,
            'namaFitur'=>'',
            'iconUrl'=>'',
            'tampil'=>''
        ]]);
        
    }
    public function store(Request $request){
        // Wdgeneral::create($request->all());
        wdfeature::create($request->all());
        return redirect()->to('/Admin')->with('success','Informasi Fitur tersimpan');
    }
    public function edit(Request $request){
        $data = wdfeature::find($request->id);
        return view('fitur.form',['mode'=>'update','data'=>$data]);
    }
    public function update(Request $request){
        $data = wdfeature::find($request->id)->update([
            'namaFitur'=>$request->namaFitur,
            'iconUrl'=>$request->iconUrl,
            'tampil'=>$request->tampil
        ]);
        return redirect()->to('/Admin')->with(['success'=>'Fitur berhasil diupdate']);
    }
    public function destroy(Request $request){
        wdfeature::where('id',$request->id)->delete();
        return redirect()->to('/Admin')->with(['info'=>'Fitur telah dihapus']);
    }
}

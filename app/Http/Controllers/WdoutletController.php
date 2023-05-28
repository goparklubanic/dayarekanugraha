<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wdoutlet;

class WdoutletController extends Controller
{
    public function index(){
        $data = wdoutlet::where('tampil','ya')->get();
        return response()->json(['fitur'=>$data]);
    }
    public function show(){}
    public function create(){
        return view('outlet.form',['mode'=>'append','data'=>[
            'id'=>NULL,
            'jenisoutlet'=>'',
            'iconUrl'=>'',
            'tampil'=>''
        ]]);
        
    }
    public function store(Request $request){
        // Wdgeneral::create($request->all());
        wdoutlet::create($request->all());
        return redirect()->to('/Admin')->with(['success'=>'Informasi kedai tersimpan']);
    }
    public function edit(Request $request){
        $data = wdoutlet::find($request->id);
        return view('outlet.form',['mode'=>'update','data'=>$data]);
    }
    public function update(Request $request){
        $data = wdoutlet::where('id',$request->id)->update([
            'jenisoutlet'=>$request->jenisoutlet,
            'iconUrl'=>$request->iconUrl,
            'tampil'=>$request->tampil
        ]);
        return redirect()->to('/Admin')->with(['info'=>'Informasi kedai terupdate']);
    }
    public function destroy(Request $request){
        wdoutlet::where('id',$request->id)->remove();
        return redirect()->to('/Admin')->with(['warning'=>'Informasi kedai terhapus']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wdgeneral;

class WdgeneralController extends Controller
{
    public function index(){
        $data = wdgeneral::first();
        return response()->json(['umum'=>$data]);
    }
    public function show(){}
    public function create(){      
        // -- headertitle, headerDescription , brandUrl , mapUrl , webUrl , about   
        return view('umum.form',['mode'=>'append','data'=>[
            'headerTitle'=>'',
            'headerDescription'=>'',
            'brandUrl'=>'',
            'mapUrl'=>'',
            'webUrl'=>'',
            'about'=>''
        ]]);
    }
    public function store(Request $request){
        // @dd($request);
        Wdgeneral::create($request->all());
        return redirect()->to('/Admin')->with('success','Informasi umum tersimpan');
    }   
    public function edit(Request $request){
        $data = wdgeneral::find(1);
        return view('umum.form',['mode'=>'update','data'=>$data]);
    }
    public function update(Request $request){
        $mutakhir = wdgeneral::where('id',1)->update([
            'headerTitle'=>$request->headerTitle,
            'headerDescription'=>$request->headerDescription,
            'brandUrl'=>$request->brandUrl,
            'mapUrl'=>$request->mapUrl,
            'webUrl'=>$request->webUrl,
            'about'=>$request->about
        ]);

        return redirect()->to('/Admin')->with('success','Informasi umum terupdate');
    }
    public function destroy(){}
}

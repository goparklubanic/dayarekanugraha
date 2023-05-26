<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wdcareer;
use App\Models\wdfeature;
use App\Models\wdgeneral;
use App\Models\wdoutlet;

class WdadminController extends Controller
{
    public function index(){
        $infoUmum  = wdgeneral::find(1);
        $infoFitur = wdfeature::where('tampil','ya')->get();
        $infoKedai = wdoutlet::where('tampil','ya')->get();
        $infoKarir = wdcareer::all();

        return view('manager.index',[
            'info'=>[
                'umum'=>$infoUmum,
                'fitur'=>$infoFitur,
                'kedai'=>$infoKedai,
                'karir'=>$infoKarir
            ]
        ]);
    }
}

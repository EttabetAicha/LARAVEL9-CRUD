<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testDB extends Controller
{
    public function getDataFromDB(){
    $m = DB::select('select * from modules');
    return view('readdata',["Modules"=>$m])
    ;}
    public function add(Request $request){
        $codeM=$request->input('codeM');
        $titerM=$request->input('titerM');
        $heures=$request->input('heures');
        DB::insert('insert into Modules (codeM, Titre,MH) values ( ?,?,? )',[ $codeM, $titerM,$heures]);
        return view('readdata',["Modules"=>$m])

        ;}
}

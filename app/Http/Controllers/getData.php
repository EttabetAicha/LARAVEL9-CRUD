<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getData extends Controller
{
    public function getdatafn(Request $request){
        $request->validate(['name'=>'required']);
        $data=[];
        $data['name']=$request->input('name');
        $data['email']=$request->input('email');
        $data['pw']=$request->input('password');
        return view('readdata',$data);
        }
        
}

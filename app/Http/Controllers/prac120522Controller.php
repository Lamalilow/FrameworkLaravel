<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prac120522Controller extends Controller
{
    public function inputing(Request $req)
    {
        $data = $req->input();
        $req->session()->put('age',$data['age']);
        $req->session()->put('country',$data['country']);
        $req->session()->put('address',$data['address']);
        $req->session()->put('hobby',$data['hobby']);
        $req->session()->put('aboutme',$data['aboutme']);



    }
}

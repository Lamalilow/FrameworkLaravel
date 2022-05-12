<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prac120522Controller extends Controller
{
    public function inputting(Request $req)
    {
        $req -> session()-> put('name', $req -> name);
        $req -> session()-> put('age', $req -> age);
        $req -> session()-> put('country', $req -> country);
        $req -> session()-> put('address', $req -> address);
        $req -> session()-> put('hobby', $req -> hobby);
        $req -> session()-> put('aboutme', $req -> aboutme);

        return redirect('/page2output');


    }
}

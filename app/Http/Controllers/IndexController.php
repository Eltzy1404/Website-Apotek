<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function pertama(){
        $nama = "Bagas Bagus";
        return view('index', compact('nama'));
    }

    public function store(){
        
    }

}

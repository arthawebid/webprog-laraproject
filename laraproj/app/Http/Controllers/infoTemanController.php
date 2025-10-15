<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoTemanController extends Controller
{
    public function index(){
        $nama = "Zizuki";
        return view('info', compact('nama') );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoTemanController extends Controller
{
    public function index(){
        $nama = "Zizuki";
        
        $dtateman = [
            [
                "namateman"=>"Tangidah Idun",
                "alamat"=>"Jl. Persatuan Kodok Blok F No 70",
                "kota"=>"Denpasar",
                'wa'=>"086677889",
                'idbuku'=>1,
            ],
            [    
                "namateman"=>"Rudiani Putri Dimana",
                "alamat"=>"Jl. Tegak Lurus Blok T No 80",
                "kota"=>"Denpasar",
                "wa"=>"08774433267",
                "idbuku"=>2,
            ],
        ];

        return view('info', compact('nama','dtateman') );
    }
}

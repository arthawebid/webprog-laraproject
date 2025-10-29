<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoTemanController extends Controller
{
    private $dteman = [
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
    public function index(){
        $nama = "Zizuki";
        
        //https://shorturl.at/6L1DX

        
        $dtateman = $this->dteman;
        return view('info', compact('nama','dtateman') );
    }

    public function detail($id){
        $dtateman = collect($this->dteman)->firstWhere('idbuku',$id);

        return view('infodetail',compact('dtateman'));
    }
}

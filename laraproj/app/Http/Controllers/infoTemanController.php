<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class infoTemanController extends Controller
{
    private $dteman;

    public function __construct(){
        // membaca data json
        $this->dteman = storage_path("app/private/dteman.json");
    }

    public function index(){
        $nama = "Zizuki";
        
        //https://shorturl.at/6L1DX

        
        $dtateman = $this->readData();
        return view('info', compact('nama','dtateman') );
    }

    public function detail($id){
        $dtateman = collect($this->readData())->firstWhere('idbuku',$id);
        
        if(!$dtateman){
            abort(404,"Data tidak ditemukan");
        }
        
        return view('infodetail',compact('dtateman'));
    }

    public function create(){
        return view('infocreate');
    }
    public function store(Request $req){
        $req->validate([
            'namateman'=> 'required',
            'alamat'=> 'required',
            'kota'=> 'required',
            'wa'=> 'required',
        ]);
        $dtateman = $this->readData();
        $new =[
            'idbuku' => count($dtateman) ? max(array_column($dtateman, 'idbuku'))+1 : 1,
            'namateman' => $req->namateman,
            'alamat' => $req->alamat,
            'kota' => $req->kota,
            'wa' => $req->wa,
        ];

        $dtateman[] = $new;

        file_put_contents($this->dteman, json_encode($dtateman, JSON_PRETTY_PRINT) );
        
        return redirect()->route('infoteman')->with('success','Data Berhasil ditambahkan');
    }

    private function readData(){

        if(!file_get_contents($this->dteman) ){
            return [];
        }

        $jsn = file_get_contents($this->dteman);
        $data = json_decode($jsn,true);
        return $data ?: []; 
    }
}

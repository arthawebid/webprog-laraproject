@extends('layouts.app')

@section('judulpage','Tambah Data Teman') 

@section('konten')
<div class="container">
    
    <div class="konten">
        <h3>Tambah Data Teman</h3>

        <form action="{{ route('infoteman.store') }}" method="POST">
            @csrf
            Nama Teman
            <input type="text" name="namateman" required>
            Alamat
            <input type="text" name="alamat" required>
            Kota
            <input type="text" name="kota" required>
            WA
            <input type="text" name="wa" required>
            
            <button type="submit"> Simpan Data </button>
        </form>

    </div>

</div>
@endsection
@extends('layouts.app')

@section('judulpage','Info Teman - Detail') 

@section('konten')

<div class="container">

<h3>Perbaharui Data Teman</h3>

        <form action="{{ route('infoteman.update', $dtateman['idbuku']) }}" method="POST">
          @csrf
          @method('PUT')

            Nama Teman
            <input type="text" name="namateman" value="{{ $dtateman['namateman'] }}" required>
            Alamat
            <input type="text" name="alamat" required>
            Kota
            <input type="text" name="kota" required>
            WA
            <input type="text" name="wa" required>
            
            <button type="submit"> Simpan Data </button>
        </form>

</div>

@endsection
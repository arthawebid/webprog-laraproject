@extends('layouts.app')

@section('judulpage','Info Teman - Detail') 

@section('konten')

<div class="container">

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $dtateman["namateman"] }}</li>
            <li class="list-group-item">{{ $dtateman["alamat"] }} {{ $dtateman["kota"] }}</li>
            <li class="list-group-item">{{ $dtateman["wa"] }}</li>
        </ul>
    </div>
  </div>
  <div class="card-footer">
    <a class="btn btn-primary" href="{{route('infoteman')}}"> kembali </a>
  </div>
</div>

</div>

@endsection
@extends('layouts.app')

@section('judulpage','Welcome Page') 

@section('konten')
<div class="container">

    <div class="konten">
        <h3>Info Teman {{$nama}}</h3>
        @if( session('success') )
        <p style="color: green">{{session('success')}}</p>
        @endif
        <a class="btn btn-primary btn-sm" href="{{ route('infoteman.create') }}"> + DataBaru</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama Teman</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtateman as $tm)
                <tr>
                    <td>{{ $tm['namateman'] }}</td>
                    <td>{{ $tm['alamat'] }}</td>
                    <td><a class="btn btn-warning btn-sm" href="{{route('infoteman.detail', $tm['idbuku']  )}}"> detail </a></td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>


</div>
@endsection
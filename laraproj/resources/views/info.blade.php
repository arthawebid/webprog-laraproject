@extends('layouts.app')

@section('judulpage','Welcome Page') 

@section('konten')
<div class="container">

    <div class="konten">
        <h3>Info Teman {{$nama}}</h3>

        <table border="1">
            <thead>
                <tr>
                    <th>Nama Teman</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Nomor WA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtateman as $tm)
                <tr>
                    <td>{{ $tm['namateman'] }}</td>
                    <td>{{ $tm['alamat'] }}</td>
                    <td>{{ $tm['kota'] }}</td>
                    <td>{{ $tm['wa'] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>


</div>
@endsection
@extends('layout.v_template')
@section('title', 'Detail Petugas')

@section('content')

<table class="table">
    <tr>
        <th width="130px">NIP</th>
        <th width="30px">:</th>
        <th>{{$petugas->nip}}</th>
    </tr>
    <tr>
        <th width="130px">Nama Petugas</th>
        <th width="30px">:</th>
        <th>{{$petugas->nama_petugas}}</th>
    </tr>
    <tr>
        <th width="130px">Alamat Petugas</th>
        <th width="30px">:</th>
        <th>{{$petugas->alamat_petugas}}</th>
    </tr>
    <tr>
        <th width="130px">Foto Petugas</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_petugas/'.$petugas->foto_petugas)}}" width="250px"></th>
    </tr>
    <tr>
        <th>
            <a href="/petugas" class="btn btn-sm btn-success">Kembali</a>
        </th>
    </tr>
</table>


@endsection
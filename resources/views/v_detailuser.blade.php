@extends('layout.v_template')
@section('title', 'Detail Anggota')

@section('content')

<table class="table">
    <tr>
        <th width="130px">NIM</th>
        <th width="30px">:</th>
        <th>{{$user->nim}}</th>
    </tr>
    <tr>
        <th width="130px">Nama Anggota</th>
        <th width="30px">:</th>
        <th>{{$user->nama_user}}</th>
    </tr>
    <tr>
        <th width="130px">Nomor HP Anggota</th>
        <th width="30px">:</th>
        <th>{{$user->nomor_user}}</th>
    </tr>
    <tr>
        <th width="130px">Alamat Anggota</th>
        <th width="30px">:</th>
        <th>{{$user->alamat_user}}</th>
    </tr>
    <tr>
        <th width="130px">Fakultas Anggota</th>
        <th width="30px">:</th>
        <th>{{$user->fakultas_user}}</th>
    </tr>
    <tr>
        <th>
            <a href="/user" class="btn btn-sm btn-success">Kembali</a>
        </th>
    </tr>
</table>


@endsection
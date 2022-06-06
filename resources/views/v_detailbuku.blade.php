@extends('layout.v_template')
@section('title', 'Detail buku')

@section('content')

<table class="table">
    <tr>
        <th width="130px">ISBN</th>
        <th width="30px">:</th>
        <th>{{$buku->ISBN}}</th>
    </tr>
    <tr>
        <th width="130px">Judul Buku</th>
        <th width="30px">:</th>
        <th>{{$buku->judul_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Pengarang</th>
        <th width="30px">:</th>
        <th>{{$buku->pengarang_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Penerbit</th>
        <th width="30px">:</th>
        <th>{{$buku->penerbit_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Tahun Terbit</th>
        <th width="30px">:</th>
        <th>{{$buku->tahun_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Subjek buku</th>
        <th width="30px">:</th>
        <th>{{$buku->subjek_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Edisi</th>
        <th width="30px">:</th>
        <th>{{$buku->edisi_buku}}</th>
    </tr>
    <tr>
        <th width="130px">Stok buku</th>
        <th width="30px">:</th>
        <th>{{$buku->stok_buku}}</th>
    </tr>

    <tr>
        <th>
            <a href="/buku" class="btn btn-sm btn-success">Kembali</a>
        </th>
    </tr>
</table>


@endsection
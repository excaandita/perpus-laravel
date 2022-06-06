@extends('layout.v_template')
@section('title', 'Peminjaman')

@section('content')
<a href="/peminjaman/add/" class="btn btn-sm btn-primary">Tambah Peminjam</a>
</br>

@if (session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('pesan')}}
  </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID </th>
            <th>ID Peminjam</th>
            <th>Nama Peminjam</th>
            <th>ID Buku </th>
            <th>Judul buku</th>
            <th>Tanggal Pinjam</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $no=1; ?>
    <tbody>
        @foreach ($peminjaman as $data)
            <tr>
                <td>{{ $no++;}}</td>
                <td>{{ $data->id_peminjaman}}</td>
                <td>{{ $data->nim}}</td>
                <td>{{ $data->nama_user}}</td>
                <td>{{ $data->id_buku}}</td>
                <td>{{ $data->judul_buku}}</td>
                <td>{{ $data->tgl_peminjaman}}</td>
                <td>
                    <a href="/peminjaman/detail/{{ $data->id_user}}" class="btn btn-sm btn-primary">Detail</a>
                    <a href="/peminjaman/edit/{{ $data->id_user}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_user}}">
                        Delete
                    </button>
                </td>
                
            </tr>
        @endforeach
    </tbody>    
</table>

@endsection
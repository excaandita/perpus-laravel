@extends('layout.v_template')
@section('title', 'Buku')

@section('content')
<a href="/buku/add/" class="btn btn-sm btn-primary">Tambah Data</a>
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
            <th>ID Buku</th>
            <th>ISBN</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Subjek Buku</th>
            <th>Edisi</th>
            <th>Jumlah Stok</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $no=1; ?>
    <tbody>
        @foreach ($buku as $data)
            <tr>
                <td>{{ $no++;}}</td>
                <td>{{ $data->id_buku}}</td>
                <td>{{ $data->ISBN}}</td>
                <td>{{ $data->judul_buku}}</td>
                <td>{{ $data->pengarang_buku}}</td>
                <td>{{ $data->penerbit_buku}}</td>
                <td>{{ $data->tahun_buku}}</td>
                <td>{{ $data->subjek_buku}}</td>
                <td>{{ $data->edisi_buku}}</td>
                <td>{{ $data->stok_buku}}</td>
                <td>
                    <a href="/buku/detail/{{ $data->id_buku}}" class="btn btn-sm btn-primary">Detail</a>
                    <a href="/buku/edit/{{ $data->id_buku}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_buku}}">
                        Delete
                    </button>
                </td>
                
            </tr>
        @endforeach
    </tbody>    
</table>



@foreach ($buku as $data)
<div class="modal fade" id="delete{{ $data->id_buku}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{$data->judul_buku}}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah yakin ini hapus data?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
          <a href="/buku/delete/{{ $data->id_buku}}" class="btn btn-primary">Ya Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach

    

@endsection
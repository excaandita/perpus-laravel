@extends('layout.v_template')
@section('title', 'User')

@section('content')

<a href="/user/add/" class="btn btn-sm btn-primary">Tambah Data</a>
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
            <th>NIM</th>
            <th>Nama Anggota</th>
            <th>Nomor HP Anggota</th>
            <th>Alamat Anggota</th>
            <th>Fakultas Anggota</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $no=1; ?>
    <tbody>
        @foreach ($user as $data)
            <tr>
                <td>{{ $no++;}}</td>
                <td>{{ $data->nim}}</td>
                <td>{{ $data->nama_user}}</td>
                <td>{{ $data->nomor_user}}</td>
                <td>{{ $data->alamat_user}}</td>
                <td>{{ $data->fakultas_user}}</td>
                <td>
                    <a href="/user/detail/{{ $data->id_user}}" class="btn btn-sm btn-primary">Detail</a>
                    <a href="/user/edit/{{ $data->id_user}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_user}}">
                        Delete
                    </button>
                </td>
                
            </tr>
        @endforeach
    </tbody>    
</table>



@foreach ($user as $data)
<div class="modal fade" id="delete{{ $data->id_user}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{$data->nama_user}}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah yakin ini hapus data?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
          <a href="/user/delete/{{ $data->id_user}}" class="btn btn-primary">Ya Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach


@endsection
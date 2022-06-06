@extends('layout.v_template')
@section('title', 'Petugas')

@section('content')
    <a href="/petugas/add/" class="btn btn-sm btn-primary">Tambah Data</a>
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
                <th>NIP</th>
                <th>Nama Petugas</th>
                <th>Alamat</th>
                <th>Foto Petugas</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no=1; ?>
        <tbody>
            @foreach ($petugas as $data)
                <tr>
                    <td>{{ $no++;}}</td>
                    <td>{{ $data->nip}}</td>
                    <td>{{ $data->nama_petugas}}</td>
                    <td>{{ $data->alamat_petugas}}</td>
                    <td><img src="{{ url('foto_petugas/'.$data->foto_petugas)}}" width="100px"></td>
                    <td>
                        <a href="/petugas/detail/{{ $data->id_petugas}}" class="btn btn-sm btn-primary">Detail</a>
                        <a href="/petugas/edit/{{ $data->id_petugas}}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_petugas}}">
                            Delete
                          </button>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>    
    </table>



    @foreach ($petugas as $data)
    <div class="modal fade" id="delete{{ $data->id_petugas}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{$data->nama_petugas}}</h4>
            </div>
            <div class="modal-body">
              <p>Apakah yakin ini hapus data?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
              <a href="/petugas/delete/{{ $data->id_petugas}}" class="btn btn-primary">Ya Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

@endsection
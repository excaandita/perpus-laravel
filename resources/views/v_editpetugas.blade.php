@extends('layout.v_template')
@section('title', 'Edit Petugas')

@section('content')

<form action="/petugas/update/{{ $petugas->id_petugas }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control" value="{{ $petugas->nip }}" readonly>
                    <div class=" text-danger">
                        @error('nip')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Petugas</label>
                    <input name="nama_petugas" class="form-control" value="{{ $petugas->nama_petugas }}">
                    <div class=" text-danger">
                        @error('nama_petugas')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat Petugas</label>
                    <input name="alamat_petugas" class="form-control" value="{{ $petugas->alamat_petugas }}">
                    <div class=" text-danger">
                        @error('alamat_petugas')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm 12">
                        <div class="col-sm-4">
                            <img src="{{ url('foto_petugas/'.$petugas->foto_petugas)}}" width="150px">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Foto Petugas</label>
                                <input type="file" name="foto_petugas" class="form-control">
                                <div class=" text-danger">
                                    @error('foto_petugas')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <button class="btn btn-sm btn-primary">Simpan Data</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

</form>

@endsection
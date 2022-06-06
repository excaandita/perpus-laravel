@extends('layout.v_template')
@section('title', 'Add Petugas')

@section('content')
   
<form action="/petugas/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip" class="form-control">
                    <div class=" text-danger">
                        @error('nip')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Petugas</label>
                    <input name="nama_petugas" class="form-control">
                    <div class=" text-danger">
                        @error('nama_petugas')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat Petugas</label>
                    <input name="alamat_petugas" class="form-control">
                    <div class=" text-danger">
                        @error('alamat_petugas')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Petugas</label>
                    <input type="file" name="foto_petugas" class="form-control">
                    <div class=" text-danger">
                        @error('foto_petugas')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    
                    <button class="btn btn-sm btn-primary">Simpan Data</button>
                </div>

            </div>
        </div>
    </div>
    

</form>

@endsection
@extends('layout.v_template')
@section('title', 'Add Anggota')

@section('content')
   
<form action="/user/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIM</label>
                    <input name="nim" class="form-control">
                    <div class=" text-danger">
                        @error('nim')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input name="nama_user" class="form-control">
                    <div class=" text-danger">
                        @error('nama_user')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nomor HP Anggota</label>
                    <input name="nomor_user" class="form-control">
                    <div class=" text-danger">
                        @error('nomor_user')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat Anggota</label>
                    <input name="alamat_user" class="form-control">
                    <div class=" text-danger">
                        @error('alamat_user')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Fakultas Anggota</label>
                    <input name="fakultas_user" class="form-control">
                    <div class=" text-danger">
                        @error('fakultas_user')
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
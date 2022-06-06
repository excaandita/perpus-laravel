@extends('layout.v_template')
@section('title', 'Add Buku')

@section('content')
   
<form action="/buku/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ISBN</label>
                    <input name="ISBN" class="form-control">
                    <div class=" text-danger">
                        @error('ISBN')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Judul Buku</label>
                    <input name="judul_buku" class="form-control">
                    <div class=" text-danger">
                        @error('judul_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Pengarang</label>
                    <input name="pengarang_buku" class="form-control">
                    <div class=" text-danger">
                        @error('pengarang_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Penerbit (kota : Penerbit)</label>
                    <input name="penerbit_buku" class="form-control">
                    <div class=" text-danger">
                        @error('penerbit_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input name="tahun_buku" class="form-control">
                    <div class=" text-danger">
                        @error('tahun_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Subjek Buku</label>
                    <input name="subjek_buku" class="form-control">
                    <div class=" text-danger">
                        @error('subjek_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Edisi</label>
                    <input name="edisi_buku" class="form-control">
                    <div class=" text-danger">
                        @error('edisi_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jumlah Stok</label>
                    <input name="stok_buku" class="form-control">
                    <div class=" text-danger">
                        @error('stok_buku')
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
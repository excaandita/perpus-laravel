@extends('layout.v_template')
@section('title', 'Edit Buku')

@section('content')

<form action="/buku/update/{{ $buku->id_buku }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row g-3">
            <div class="col-md-6">
                <label>ISBN</label>
                <input name="ISBN" class="form-control" value="{{ $buku->ISBN }}" readonly>
                <div class=" text-danger">
                    @error('ISBN')
                         {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label>Pengarang</label>
                <input name="pengarang_buku" class="form-control" value="{{ $buku->pengarang_buku }}">
                <div class=" text-danger">
                    @error('pengarang_buku')
                        {{ $message }}
                    @enderror
                </div>  
            </div>

            <div class="col-sm-12">
                <label>Judul Buku</label>
                <input name="judul_buku" class="form-control" value="{{ $buku->judul_buku }}">
                <div class=" text-danger">
                    @error('judul_buku')
                            {{ $message }}
                    @enderror
                </div>
            </div>

                <div class="col-sm-12">
                    <label>Penerbit (kota : Penerbit)</label>
                    <input name="penerbit_buku" class="form-control" value="{{ $buku->penerbit_buku }}">
                    <div class=" text-danger">
                        @error('penerbit_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Tahun Terbit</label>
                    <input name="tahun_buku" class="form-control" value="{{ $buku->tahun_buku }}">
                    <div class=" text-danger">
                        @error('tahun_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Subjek Buku</label>
                    <input name="subjek_buku" class="form-control" value="{{ $buku->subjek_buku }}">
                    <div class=" text-danger">
                        @error('subjek_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Edisi</label>
                    <input name="edisi_buku" class="form-control" value="{{ $buku->edisi_buku }}">
                    <div class=" text-danger">
                        @error('edisi_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Jumlah Stok</label>
                    <input name="stok_buku" class="form-control" value="{{ $buku->stok_buku }}">
                    <div class=" text-danger">
                        @error('stok_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                
                
                <div class="col-12 ">
                    
                    <button class="btn btn-sm btn-primary">Simpan Data</button>
                </div>

            </div>
        </div>
    </div>
    

</form>

@endsection
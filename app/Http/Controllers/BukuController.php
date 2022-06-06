<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;
use Facade\Ignition\Middleware\AddDumps;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->BukuModel = new BukuModel();
    }

    public function index() 
    {
        $data = [
            'buku'=> $this->BukuModel->allData(),
        ];
        return view('v_buku',$data);
    }

    public function detail($id_buku)
    {
        if (!$this->BukuModel->detailData($id_buku)) {
            abort(404);
        }
        $data = [
            'buku'=> $this->BukuModel->detailData($id_buku),
        ];
        return view('v_detailbuku',$data);
    }

    public function add()
    {
        return view('v_addbuku');
    }

    public function insert()
    {
        Request()->validate([
            'ISBN' => 'required|unique:tbl_buku,isbn',
            'judul_buku' => 'required',
            'pengarang_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_buku' => 'required',
            'subjek_buku' => 'required',
            'edisi_buku' => 'required',
            'stok_buku' => 'required',
            
        ],[
            'ISBN.required' => 'Wajib di Isi!!',
            'ISBN.unique' => 'NIM Sudah Ada, Masukan yang Lain!!',
            'judul_buku.required' => 'Wajib di Isi!!',
            'pengarang_buku.required' => 'Wajib di Isi!!',
            'penerbit_buku.required' => 'Wajib di Isi!!',
            'tahun_buku.required' => 'Wajib di Isi!!',
            'subjek_buku.required' => 'Wajib di Isi!!',
            'edisi_buku.required' => 'Wajib di Isi!!',
            'stok_buku.required' => 'Wajib di Isi!!',
        ]);

        //form Validation diatas
        $data = [
            'ISBN' => Request() ->ISBN,
            'judul_buku'=> Request()->judul_buku,
            'pengarang_buku'=> Request()->pengarang_buku,
            'penerbit_buku'=> Request()->penerbit_buku,
            'tahun_buku'=> Request()->tahun_buku,
            'subjek_buku'=> Request()->subjek_buku,
            'edisi_buku'=> Request()->edisi_buku,
            'stok_buku'=> Request()->stok_buku,
        ];

        $this->BukuModel->addData($data);
        return redirect()->route('buku')->with('pesan','Data Berhasil di Tambahkan');
        
    }

    public function edit($id_buku)
    {
        if (!$this->BukuModel->detailData($id_buku)) {
            abort(404);
        }
        $data = [
            'buku'=> $this->BukuModel->detailData($id_buku),
        ];
        return view('v_editbuku',$data);
    }

    public function update($id_buku)
    {
        Request()->validate([
            'judul_buku' => 'required',
            'pengarang_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_buku' => 'required',
            'subjek_buku' => 'required',
            'edisi_buku' => 'required',
            'stok_buku' => 'required',
            
        ],[
            
            'judul_buku.required' => 'Wajib di Isi!!',
            'pengarang_buku.required' => 'Wajib di Isi!!',
            'penerbit_buku.required' => 'Wajib di Isi!!',
            'tahun_buku.required' => 'Wajib di Isi!!',
            'subjek_buku.required' => 'Wajib di Isi!!',
            'edisi_buku.required' => 'Wajib di Isi!!',
            'stok_buku.required' => 'Wajib di Isi!!',
        ]);

        //form Validation diatas
        

        $data = [
            'judul_buku'=> Request()->judul_buku,
            'pengarang_buku'=> Request()->pengarang_buku,
            'penerbit_buku'=> Request()->penerbit_buku,
            'tahun_buku'=> Request()->tahun_buku,
            'subjek_buku'=> Request()->subjek_buku,
            'edisi_buku'=> Request()->edisi_buku,
            'stok_buku'=> Request()->stok_buku,
        ];

        $this->BukuModel->editData($id_buku, $data);
        return redirect()->route('buku')->with('pesan','Data Berhasil di Update');
        
    }

    public function delete($id_buku)
    {

        //$user = $this->UserModel->detailData($id_user);

        $this->BukuModel->deleteData($id_buku);
        return redirect()->route('buku')->with('pesan','Data Berhasil di Hapus');
    }


}

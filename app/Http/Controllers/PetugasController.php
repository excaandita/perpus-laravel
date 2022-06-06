<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;
use Facade\Ignition\Middleware\AddDumps;

class PetugasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->PetugasModel = new PetugasModel();
    }

    public function index() 
    {
        $data = [
            'petugas'=> $this->PetugasModel->allData(),
        ];
        return view('v_petugas',$data);
    }

    public function detail($id_petugas)
    {
        if (!$this->PetugasModel->detailData($id_petugas)) {
            abort(404);
        }
        $data = [
            'petugas'=> $this->PetugasModel->detailData($id_petugas),
        ];
        return view('v_detailpetugas',$data);
    }

    public function add()
    {
        return view('v_addpetugas');
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tbl_petugas,nip|min:4|max:5',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            'foto_petugas' => 'required|mimes:jpg,jpeg,bmp,png|max:3072',
        ],[
            'nip.required' => 'Wajib di Isi!!',
            'nip.unique' => 'NIP Sudah Ada, Masukan yang Lain!!',
            'nip.min' => 'Minimal 4 Karakter!!',
            'nip.max' => 'Maximal 5 Karakter!!',
            'nama_petugas.required' => 'Wajib di Isi!!',
            'alamat_petugas.required' => 'Wajib di Isi!!',
            'foto_petugas.required' => 'Wajib di Isi!!'
        ]);

        //form Validation diatas

        //upload gambar dari form
        $file = Request()->foto_petugas;
        $fileName = Request()->nip.'.'.$file->extension();
        $file->move(public_path('foto_petugas'),$fileName);

        $data = [
            'nip' => Request() ->nip,
            'nama_petugas'=> Request()->nama_petugas,
            'alamat_petugas'=> Request()->alamat_petugas,
            'foto_petugas'=> $fileName,
        ];

        $this->PetugasModel->addData($data);
        return redirect()->route('petugas')->with('pesan','Data Berhasil di Tambahkan');
        
    }

    public function edit($id_petugas)
    {
        if (!$this->PetugasModel->detailData($id_petugas)) {
            abort(404);
        }
        $data = [
            'petugas'=> $this->PetugasModel->detailData($id_petugas),
        ];
        return view('v_editpetugas',$data);
    }

    public function update($id_petugas)
    {
        Request()->validate([
            'nip' => 'required|min:4|max:5',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            
        ],[
            'nip.required' => 'Wajib di Isi!!',
            'nip.min' => 'Minimal 4 Karakter!!',
            'nip.max' => 'Maximal 5 Karakter!!',
            'nama_petugas.required' => 'Wajib di Isi!!',
            'alamat_petugas.required' => 'Wajib di Isi!!',
        ]);

        //form Validation diatas
        if (Request()->foto_petugas <> "") {
            //upload gambar dari form
            $file = Request()->foto_petugas;
            $fileName = Request()->nip.'.'.$file->extension();
            $file->move(public_path('foto_petugas'),$fileName);

            $data = [
                'nip' => Request() ->nip,
                'nama_petugas'=> Request()->nama_petugas,
                'alamat_petugas'=> Request()->alamat_petugas,
                'foto_petugas'=> $fileName,
            ];

            $this->PetugasModel->editData($id_petugas, $data);
        }else{
            //jika tidak ingin ganti foto
            $data = [
                'nip' => Request() ->nip,
                'nama_petugas'=> Request()->nama_petugas,
                'alamat_petugas'=> Request()->alamat_petugas,
            ];
            $this->PetugasModel->editData($id_petugas, $data);
        }
        return redirect()->route('petugas')->with('pesan','Data Berhasil di Update');
        
    }

    public function delete($id_petugas)
    {

        //hapus fotonya
        $petugas = $this->PetugasModel->detailData($id_petugas);
        if ($petugas->foto_petugas <> "") {
            unlink(public_path('foto_petugas').'/'. $petugas->foto_petugas);
        }

        $this->PetugasModel->deleteData($id_petugas);
        return redirect()->route('petugas')->with('pesan','Data Berhasil di Hapus');
    }
}

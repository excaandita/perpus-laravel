<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Facade\Ignition\Middleware\AddDumps;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'user'=> $this->UserModel->allData(),
        ];
        return view('v_user',$data);
    }

    public function detail($id_user)
    {
        if (!$this->UserModel->detailData($id_user)) {
            abort(404);
        }
        $data = [
            'user'=> $this->UserModel->detailData($id_user),
        ];
        return view('v_detailuser',$data);
    }

    public function add()
    {
        return view('v_adduser');
    }

    public function insert()
    {
        Request()->validate([
            'nim' => 'required|unique:tbl_user,nim|min:7|max:9',
            'nama_user' => 'required',
            'nomor_user' => 'required',
            'alamat_user' => 'required',
            'fakultas_user' => 'required',
            
        ],[
            'nim.required' => 'Wajib di Isi!!',
            'nim.unique' => 'NIM Sudah Ada, Masukan yang Lain!!',
            'nim.min' => 'Minimal 7 Karakter!!',
            'nim.max' => 'Maximal 9 Karakter!!',
            'nama_user.required' => 'Wajib di Isi!!',
            'nomor_user.required' => 'Wajib di Isi!!',
            'alamat_user.required' => 'Wajib di Isi!!',
            'fakultas_user.required' => 'Wajib di Isi!!',
        ]);

        //form Validation diatas
        $data = [
            'nim' => Request() ->nim,
            'nama_user'=> Request()->nama_user,
            'nomor_user'=> Request()->nomor_user,
            'alamat_user'=> Request()->alamat_user,
            'fakultas_user'=> Request()->fakultas_user,
        ];

        $this->UserModel->addData($data);
        return redirect()->route('user')->with('pesan','Data Berhasil di Tambahkan');
        
    }

    public function edit($id_user)
    {
        if (!$this->UserModel->detailData($id_user)) {
            abort(404);
        }
        $data = [
            'user'=> $this->UserModel->detailData($id_user),
        ];
        return view('v_edituser',$data);
    }

    public function update($id_user)
    {
        Request()->validate([
            'nim' => 'required|min:4|max:5',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            
        ],[
            'nim.required' => 'Wajib di Isi!!',
            'nim.min' => 'Minimal 4 Karakter!!',
            'nim.max' => 'Maximal 5 Karakter!!',
            'nama_petugas.required' => 'Wajib di Isi!!',
            'alamat_petugas.required' => 'Wajib di Isi!!',
        ]);

        //form Validation diatas
        

        $data = [
            'nim' => Request() ->nim,
            'nama_user'=> Request()->nama_user,
            'nomor_user'=> Request()->nomor_user,
            'alamat_user'=> Request()->alamat_user,
            'fakultas_user'=> Request()->fakultas_user,
        ];

        $this->UserModel->editData($id_user, $data);
        return redirect()->route('user')->with('pesan','Data Berhasil di Update');
        
    }

    public function delete($id_user)
    {

        //$user = $this->UserModel->detailData($id_user);

        $this->UserModel->deleteData($id_user);
        return redirect()->route('user')->with('pesan','Data Berhasil di Hapus');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;
use App\Models\UserModel;
use App\Models\BukuModel;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->UserModel = new UserModel();
        $this->PeminjamanModel = new PeminjamanModel();
    }

    public function index() 
    {
        $data = [
            'peminjaman'=> $this->PeminjamanModel->allData(),
        ];
        return view('v_peminjaman',$data);
    }

    public function add()
    {
        return view('v_addpeminjaman');
    }

}

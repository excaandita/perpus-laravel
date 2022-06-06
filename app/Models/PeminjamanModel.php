<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PeminjamanModel extends Model
{
    public function allData() 
    {
        return DB::table('tbl_peminjaman')
            ->leftJoin('tbl_buku', 'tbl_buku.id_buku', '=', 'tbl_peminjaman.id_buku')
            ->leftJoin('tbl_user', 'tbl_user.id_user', '=', 'tbl_peminjaman.id_user')
            ->get();
    }
    
}

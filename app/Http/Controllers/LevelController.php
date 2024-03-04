<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LevelController extends Controller
{
    public function index(){
        // DB::insert('insert into m_level(lvl_kode, lvl_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_level set lvl_nama = ? where lvl_kode = ?', ['Customer','CUS']);
        // return 'Update data berhasil. Jumlah datayang di update: '.$row. 'baris';

        // $row = DB::update('delete from m_level where lvl_kode = ?', ['CUS']);
        // return 'delete data berhasil. Jumlah datayang di hapus: '.$row. 'baris';

        $data = DB::select('select  * from m_level');
        return view('level', ['data' => $data]);
    }
    
}

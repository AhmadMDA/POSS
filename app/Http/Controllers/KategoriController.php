<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        // $data = [
        //     'lvl_kode' => 'SNK',
        //     'lvl_nama' => 'Snack',
        //     'created_at' => now()
      
        //   ];
        //   DB::table('m_kategori')->insert($data);
        //   return 'Insert data baru berhasil';
    
        // $row = DB:: table('m_kategori')->where('lvl_kode', 'SNK')->update(['lvl_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumalh data yang di update: '.$row.' baris';

        // $row = DB::update('delete from m_kategori where lvl_kode = ?', ['Camilan']);
        // return 'delete data berhasil. Jumlah data yang di hapus: '.$row. 'baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }   
    
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'lvl_kode' => 1,
                'lvl_nama' => 'food',
   
            ],
            [
                'id' => 2,
                'lvl_kode' => 2,
                'lvl_nama' => 'barang',
                
            ],
            [
                'id' => 3,
                'lvl_kode' => 3,
                'lvl_nama' => 'minuman',
                
            ],
            [
                'id' => 4,
                'lvl_kode' => 4,
                'lvl_nama' => 'baju',
                
            ],
            [
                'id' => 5,
                'lvl_kode' => 5,
                'lvl_nama' => 'cake',
                
            ],
        ];
        DB:: table('m_kategori')->insert($data);
    }
}

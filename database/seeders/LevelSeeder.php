<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'lvl_kode' =>'ADM','lvl_nama' => 'Administrator'],
            ['level_id' => 2, 'lvl_kode' =>'MNG','lvl_nama' => 'Manager'],
            ['level_id' => 3, 'lvl_kode' =>'STF','lvl_nama' => 'Staff'],
        ];
        DB::table('m_level')->insert($data);
    }
}

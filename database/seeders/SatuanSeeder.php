<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => '111',
                'nama_satuan' => 'lusin'
            ],
            [
                'kode_satuan' => '112',
                'nama_satuan' => 'kodi'
            ],
            [
                'kode_satuan' => '113',
                'nama_satuan' => 'gross'
            ],
        ]);
    }
}

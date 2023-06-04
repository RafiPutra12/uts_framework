<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => '111BS5',
                'nama_barang' => 'Beras Sabit 5kg',
                'harga_barang' => '50000',
                'deskripsi_Barang'=> 'Beras kualitas premium dengan harga miring',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => '112TCB',
                'nama_barang' => 'Teh Cangkir Box',
                'harga_barang' => '20000',
                'deskripsi_Barang'=> 'Lebih enak daripada merek teh sebelah',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => '113T25',
                'nama_barang' => 'Titato 250gr',
                'harga_barang' => '5000',
                'deskripsi_Barang'=> 'Titato? kok kyk pernah denger yaa',
                'satuan_id' => 3
            ],
        ]);
    }
}

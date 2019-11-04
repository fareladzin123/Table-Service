<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'Expresso',
                'deskripsi_barang' => 'Kopi nikmat bikin tidak bisa tidur',
                'harga' => 7000,
                'stok_barang' => 15,
                'status' => 1
            ],
            [
                'nama_barang' => 'Rice Bowl (BBQ)',
                'deskripsi_barang' => 'Nasi dengan topping ayam / sapi, dan berbumbukan Barbeque',
                'harga' => 15000,
                'stok_barang' => 20,
                'status' => 1
            ],
            [
                'nama_barang' => 'Rice Bowl (Blackpepper)',
                'deskripsi_barang' => 'Nasi dengan topping ayam / sapi, dan berbumbukan Blackpepper',
                'harga' => 15000,
                'stok_barang' => 20,
                'status' => 1
            ],
            [
                'nama_barang' => 'Rice Bowl (Sambal Matah)',
                'deskripsi_barang' => 'Nasi dengan topping ayam / sapi, dan berbumbukan Sambal Matah',
                'harga' => 15000,
                'stok_barang' => 20,
                'status' => 1
            ],
        ]);
    }
}

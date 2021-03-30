<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_barang=[
            [
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '2500',
                'qty' => '10'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweet',
                'kategori_barang' => 'Minuman',
                'harga' => '4000',
                'qty' => '15'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Nasi Gila',
                'kategori_barang' => 'Makanan',
                'harga' => '7500',
                'qty' => '20'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Robot',
                'kategori_barang' => 'Mainan',
                'harga' => '15000',
                'qty' => '15'
            ],
            [
                'id_barang' => '5',
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Lampu',
                'kategori_barang' => 'Elektronik',
                'harga' => '35000',
                'qty' => '30'
            ],
            [
                'id_barang' => '6',
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Sepeda Pancal',
                'kategori_barang' => 'Kendaraan',
                'harga' => '50000',
                'qty' => '20'
            ],
            [
                'id_barang' => '7',
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Ban Motor',
                'kategori_barang' => 'Perlengkapan Motor',
                'harga' => '30000',
                'qty' => '15'
            ],
            [
                'id_barang' => '8',
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Kipas Angin',
                'kategori_barang' => 'Elektronik',
                'harga' => '20000',
                'qty' => '15'
            ],
            [
                'id_barang' => '9',
                'kode_barang' => 'PRD009',
                'nama_barang' => 'AC',
                'kategori_barang' => 'Elektronik',
                'harga' => '250000',
                'qty' => '30'
            ],
            [
                'id_barang' => '10',
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Helm',
                'kategori_barang' => 'Alat Pengaman',
                'harga' => '20000',
                'qty' => '15'
            ],
            [
                'id_barang' => '11',
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Gado Gado',
                'kategori_barang' => 'Makanan',
                'harga' => '5000',
                'qty' => '20'
            ],
            [
                'id_barang' => '12',
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Mie Goreng',
                'kategori_barang' => 'Makanan',
                'harga' => '10000',
                'qty' => '10'
            ],
            [
                'id_barang' => '13',
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Sedap',
                'kategori_barang' => 'Makanan',
                'harga' => '3500',
                'qty' => '26'
            ],
            [
                'id_barang' => '14',
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Nutrisari',
                'kategori_barang' => 'Minuman',
                'harga' => '2500',
                'qty' => '15'
            ],
            [
                'id_barang' => '15',
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Kompor',
                'kategori_barang' => 'Alat Dapur',
                'harga' => '25000',
                'qty' => '10'
            ],
            [
                'id_barang' => '16',
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Ayam Geprek',
                'kategori_barang' => 'Makanan',
                'harga' => '5000',
                'qty' => '10'
            ],
            [
                'id_barang' => '17',
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Ayam Goreng',
                'kategori_barang' => 'Makanan',
                'harga' => '6000',
                'qty' => '15'
            ],
            [
                'id_barang' => '18',
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Mie Geprek',
                'kategori_barang' => 'Makanan',
                'harga' => '10000',
                'qty' => '15'
            ],
            [
                'id_barang' => '19',
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Sarimi',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '10'
            ],
            [
                'id_barang' => '20',
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Putu',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '10'
            ]
            
        ];
        DB::table('barangs')->insert($data_barang);
    }
}

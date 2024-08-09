<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kriteria' => 'c1',
                'keterangan' => 'Spesifikasi Produk',
            ],
            [
                'kriteria' => 'c2',
                'keterangan' => 'Harga Produk',
            ],
            [
                'kriteria' => 'c3',
                'keterangan' => 'Kualitas Produk',
            ],
            [
                'kriteria' => 'c4',
                'keterangan' => 'Masa Garansi Produk',
            ],
            [
                'kriteria' => 'c5',
                'keterangan' => 'Populasi Produk',
            ]
        ];
        for ($i = 0; $i < count($data); $i++) {
            \App\Models\Kriteria::create([
                'name' => $data[$i]['kriteria'],
                'keterangan' => $data[$i]['keterangan'],
                'group' => 'Handphone'
            ]);
        }
    }
}

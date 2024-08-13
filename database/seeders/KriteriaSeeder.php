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
                'type' => 'Benefit',
                'bobot' => 0.25
            ],
            [
                'kriteria' => 'c2',
                'keterangan' => 'Harga Produk',
                'type' => 'Cost',
                'bobot' => 0.05
            ],
            [
                'kriteria' => 'c3',
                'keterangan' => 'Kualitas Produk',
                'type' => 'Benefit',
                'bobot' => 0.5
            ],
            [
                'kriteria' => 'c4',
                'keterangan' => 'Masa Garansi Produk',
                'type' => 'Benefit',
                'bobot' => 0.15
            ],
            [
                'kriteria' => 'c5',
                'keterangan' => 'Populasi Produk',
                'type' => 'Cost',
                'bobot' => 0.05
            ]
        ];
        for ($i = 0; $i < count($data); $i++) {
            \App\Models\Kriteria::create([
                'name' => $data[$i]['kriteria'],
                'keterangan' => $data[$i]['keterangan'],
                'type' => $data[$i]['type'],
                'bobot' => $data[$i]['bobot'],
                'group' => 'Handphone'
            ]);
        }
    }
}

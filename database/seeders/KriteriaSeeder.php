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
        \App\Models\Kriteria::create([
            'data_kriteria' => json_encode([
                'data' => [
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
                ],
                'group' => 'produk_umum'
            ]),
        ]);
    }
}

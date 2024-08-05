<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BobotKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BobotKriteria::create([
            'data_bobot' => json_encode(
                [
                    [
                        'kriteria' => 'c1',
                        [
                            'spesifikasi_produk' => 'Tidak Sesuai',
                            'nilai' => 1
                        ],
                        [
                            'spesifikasi_produk' => 'Sesuai',
                            'nilai' => 3
                        ],
                        [
                            'spesifikasi_produk' => 'Sangat Sesuai',
                            'nilai' => 5
                        ],
                    ],
                    [
                        'kriteria' => 'c2',
                        [
                            'harga_produk' => 'Sangat Murah',
                            'kategori' => 'Sangat Memenuhi',
                            'nilai' => 5
                        ],
                        [
                            'harga_produk' => 'Murah',
                            'kategori' => 'Memenuhi',
                            'nilai' => 4
                        ],
                        [
                            'harga_produk' => 'Terjangkau',
                            'kategori' => 'Cukup Memenuhi',
                            'nilai' => 3
                        ],
                        [
                            'harga_produk' => 'Mahal',
                            'kategori' => 'Tidak Memenuhi',
                            'nilai' => 2
                        ],
                        [
                            'harga_produk' => 'Sangat Mahal',
                            'kategori' => 'Sangat Tidak Memenuhi',
                            'nilai' => 1
                        ],
                    ],
                    [
                        'kriteria' => 'c3',
                        [
                            'kualitas_produk' => 'Sangat Berkualitas',
                            'kategori' => 'Sangat Memenuhi',
                            'nilai' => 5
                        ],
                        [
                            'kualitas_produk' => 'Berkualitas',
                            'kategori' => 'Memenuhi',
                            'nilai' => 4
                        ],
                        [
                            'kualitas_produk' => 'Cukup Berkualitas',
                            'kategori' => 'Cukup',
                            'nilai' => 3
                        ],
                        [
                            'kualitas_produk' => 'Tidak Berkualitas',
                            'kategori' => 'Tidak Memenuhi',
                            'nilai' => 2
                        ],
                        [
                            'kualitas_produk' => 'Sangat Tidak Berkualitas',
                            'kategori' => 'Sangat Tidak Memenuhi',
                            'nilai' => 1
                        ],
                    ],
                    [
                        'kriteria' => 'c4',
                        [
                            'masa_garansi_produk' => 'Tidak ada garansi',
                            'kategori' => 'Sangat Tidak Memenuhi',
                            'nilai' => 1
                        ],
                        [
                            'masa_garansi_produk' => 'Jangka Waktu Sebentar',
                            'kategori' => 'Tidak Memenuhi',
                            'nilai' => 2
                        ],
                        [
                            'masa_garansi_produk' => 'Jangka Waktu Cukup Lama',
                            'kategori' => 'Cukup Memenuhi',
                            'nilai' => 3
                        ],
                        [
                            'masa_garansi_produk' => 'Jangka Waktu Lama',
                            'kategori' => 'Memenuhi',
                            'nilai' => 4
                        ],
                        [
                            'masa_garansi_produk' => 'Jangka Waktu Sangat Lama',
                            'kategori' => 'Sangat Memenuhi',
                            'nilai' => 5
                        ],
                    ],
                    [
                        'kriteria' => 'c5',
                        [
                            'populasi_produk' => 'Sangat Banyak',
                            'kategori' => 'Sangat Memenuhi',
                            'nilai' => 5
                        ],
                        [
                            'populasi_produk' => 'Banyak',
                            'kategori' => 'Memenuhi',
                            'nilai' => 4
                        ],
                        [
                            'populasi_produk' => 'Cukup Banyak',
                            'kategori' => 'Cukup Memenuhi',
                            'nilai' => 3
                        ],
                        [
                            'populasi_produk' => 'Tidak ada',
                            'kategori' => 'Sangat Tidak Memenuhi',
                            'nilai' => 1
                        ],
                    ],
                ],
            ),
            'kriteria_id' => 1
        ]);
    }
}

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
        $data = [
            [
                [
                    'jenis_kriteria' => 'Spesifikasi Produk',
                    'spesifikasi_produk' => 'Tidak Sesuai',
                    'kategori' => 'Tidak Memenuhi',
                    'nilai' => 1,
                    'kriteria_id' => 1
                ],
                [
                    'jenis_kriteria' => 'Spesifikasi Produk',
                    'spesifikasi_produk' => 'Sesuai',
                    'kategori' => 'Cukup Memenuhi',
                    'nilai' => 3,
                    'kriteria_id' => 1
                ],
                [
                    'jenis_kriteria' => 'Spesifikasi Produk',
                    'spesifikasi_produk' => 'Sangat Sesuai',
                    'kategori' => 'Sangat Memenuhi',
                    'nilai' => 5,
                    'kriteria_id' => 1
                ],
            ],
            [
                [
                    'jenis_kriteria' => 'Harga Produk',
                    'harga_produk' => 'Sangat Murah',
                    'kategori' => 'Sangat Memenuhi',
                    'nilai' => 5,
                    'kriteria_id' => 2
                ],
                [
                    'jenis_kriteria' => 'Harga Produk',
                    'harga_produk' => 'Murah',
                    'kategori' => 'Memenuhi',
                    'nilai' => 4,
                    'kriteria_id' => 2
                ],
                [
                    'jenis_kriteria' => 'Harga Produk',
                    'harga_produk' => 'Terjangkau',
                    'kategori' => 'Cukup Memenuhi',
                    'nilai' => 3,
                    'kriteria_id' => 2
                ],
                [
                    'jenis_kriteria' => 'Harga Produk',
                    'harga_produk' => 'Mahal',
                    'kategori' => 'Tidak Memenuhi',
                    'nilai' => 2,
                    'kriteria_id' => 2
                ],
                [
                    'jenis_kriteria' => 'Harga Produk',
                    'harga_produk' => 'Sangat Mahal',
                    'kategori' => 'Sangat Tidak Memenuhi',
                    'nilai' => 1,
                    'kriteria_id' => 2
                ],
            ],
            [
                [
                    'jenis_kriteria' => 'Kualitas Produk',
                    'kualitas_produk' => 'Sangat Berkualitas',
                    'kategori' => 'Sangat Memenuhi',
                    'nilai' => 5,
                    'kriteria_id' => 3
                ],
                [
                    'jenis_kriteria' => 'Kualitas Produk',
                    'kualitas_produk' => 'Berkualitas',
                    'kategori' => 'Memenuhi',
                    'nilai' => 4,
                    'kriteria_id' => 3
                ],
                [
                    'jenis_kriteria' => 'Kualitas Produk',
                    'kualitas_produk' => 'Cukup Berkualitas',
                    'kategori' => 'Cukup',
                    'nilai' => 3,
                    'kriteria_id' => 3
                ],
                [
                    'jenis_kriteria' => 'Kualitas Produk',
                    'kualitas_produk' => 'Tidak Berkualitas',
                    'kategori' => 'Tidak Memenuhi',
                    'nilai' => 2,
                    'kriteria_id' => 3
                ],
                [
                    'jenis_kriteria' => 'Kualitas Produk',
                    'kualitas_produk' => 'Sangat Tidak Berkualitas',
                    'kategori' => 'Sangat Tidak Memenuhi',
                    'nilai' => 1,
                    'kriteria_id' => 3
                ],
            ],
            [
                [
                    'jenis_kriteria' => 'Masa Garansi Produk',
                    'masa_garansi_produk' => 'Tidak ada garansi',
                    'kategori' => 'Sangat Tidak Memenuhi',
                    'nilai' => 1,
                    'kriteria_id' => 4
                ],
                [
                    'jenis_kriteria' => 'Masa Garansi Produk',
                    'masa_garansi_produk' => 'Jangka Waktu Sebentar',
                    'kategori' => 'Tidak Memenuhi',
                    'nilai' => 2,
                    'kriteria_id' => 4
                ],
                [
                    'jenis_kriteria' => 'Masa Garansi Produk',
                    'masa_garansi_produk' => 'Jangka Waktu Cukup Lama',
                    'kategori' => 'Cukup Memenuhi',
                    'nilai' => 3,
                    'kriteria_id' => 4
                ],
                [
                    'jenis_kriteria' => 'Masa Garansi Produk',
                    'masa_garansi_produk' => 'Jangka Waktu Lama',
                    'kategori' => 'Memenuhi',
                    'nilai' => 4,
                    'kriteria_id' => 4
                ],
                [
                    'jenis_kriteria' => 'Masa Garansi Produk',
                    'masa_garansi_produk' => 'Jangka Waktu Sangat Lama',
                    'kategori' => 'Sangat Memenuhi',
                    'nilai' => 5,
                    'kriteria_id' => 4
                ],
            ],
            [
                [
                    'jenis_kriteria' => 'Populasi Produk',
                    'populasi_produk' => 'Sangat Banyak',
                    'kategori' => 'Sangat Memenuhi',
                    'nilai' => 5,
                    'kriteria_id' => 5
                ],
                [
                    'jenis_kriteria' => 'Populasi Produk',
                    'populasi_produk' => 'Banyak',
                    'kategori' => 'Memenuhi',
                    'nilai' => 4,
                    'kriteria_id' => 5
                ],
                [
                    'jenis_kriteria' => 'Populasi Produk',
                    'populasi_produk' => 'Cukup Banyak',
                    'kategori' => 'Cukup Memenuhi',
                    'nilai' => 3,
                    'kriteria_id' => 5
                ],
                [
                    'jenis_kriteria' => 'Populasi Produk',
                    'populasi_produk' => 'Tidak ada',
                    'kategori' => 'Sangat Tidak Memenuhi',
                    'nilai' => 1,
                    'kriteria_id' => 5
                ],
            ],
        ];
        for ($i = 0; $i < count($data); $i++) {
            // print_r($data[$i]);
            for ($j = 0; $j < count($data[$i]); $j++) {
                // print_r($data[$i][0]['jenis_kriteria']);
                \App\Models\BobotKriteria::create([
                    'jenis_kriteria' => $data[$i][$j]['jenis_kriteria'],
                    'kategori' => $data[$i][$j]['kategori'],
                    'nilai' => $data[$i][$j]['nilai'],
                    'kriteria_id' => $data[$i][$j]['kriteria_id']
                ]);
            }
        }
    }
}

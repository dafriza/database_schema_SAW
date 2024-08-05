<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataBarang = [];
        for ($i = 0; $i < 5; $i++) {
            $dataBarang[] = [
                'barang' => 'samsung' . ($i + 1),
                'data_barang' => json_encode([
                    [
                        'c1' => fake()->randomDigitNotZero(),
                        'c2' => fake()->randomDigitNotZero(),
                        'c3' => fake()->randomDigitNotZero(),
                        'c4' => fake()->randomDigitNotZero(),
                        'c5' => fake()->randomDigitNotZero(),
                    ]
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        // dd($dataBarang);
        \App\Models\DataPenelitian::insert($dataBarang);
    }
}

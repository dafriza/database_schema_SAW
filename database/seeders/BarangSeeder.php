<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Samsung',
            'Vivo',
            'Oppo',
            'POCO',
            'XiaoMI'
        ];
        for ($i = 0; $i < count($data); $i++) {
            Barang::create([
                'name' => $data[$i],
                'group' => 'Handphone'
            ]);
        }
    }
}

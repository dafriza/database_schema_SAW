<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BobotKriteria;
use App\Models\DataPenelitian;
use App\Models\Kriteria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make(1),
        ]);
        $this->call([
            KriteriaSeeder::class,
            BobotKriteriaSeeder::class,
            DataPenelitianSeeder::class,
        ]);
    }
}

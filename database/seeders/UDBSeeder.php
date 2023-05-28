<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biaya;

class UDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biaya::create([
            'nama_biaya' => 'UDB',
        ]);
    }
}

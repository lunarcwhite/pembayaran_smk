<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Angkatan;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['2020', '2021', '2022'];
        foreach ($data as $angkatan) {
            Angkatan::create(['angkatan' => $angkatan]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailBiaya;
use App\Models\Jurusan;
use App\Models\Angkatan;
use Faker\Factory as faker; 

class DetailBiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = Jurusan::all();
        $angkatans = Angkatan::all();
        $faker = Faker::create();
        $biaya = [100000, 125000, 150000, 175000, 200000, 250000];
        foreach($jurusans as $jurusan){
            foreach ($angkatans as $key => $angkatan) {
                DetailBiaya::create([
                    'jurusan_id' => $jurusan->id,
                    'angkatan_id' => $angkatan->id,
                    'biaya_id' => 1,
                    'jumlah_biaya' => $faker->randomElement($biaya)
                ]);
            }
        }

    }
}

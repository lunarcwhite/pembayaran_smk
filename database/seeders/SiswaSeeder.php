<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Angkatan;
use App\Models\Siswa;
use Faker\Factory as faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role_id', 2)->get();
        $faker = Faker::create('id_ID');
        foreach($users as $no => $user){
            $jurusan = Jurusan::inRandomOrder()->pluck('id')->first();
            $angkatan = Angkatan::inRandomOrder()->pluck('id')->first();
            $siswa = Siswa::create([
                'user_id' => $user->id,
                'jurusan_id' => $jurusan,
                'angkatan_id' => $angkatan,
                'nisn' => rand(0000000000, 9999999999),
                'nama_siswa' => $faker->name,
            ]);
        }
    }
}

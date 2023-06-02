<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Siswa;
use App\Models\DetailBiaya;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $bayar = [100000, 125000, 150000, 175000, 200000, 250000];
        for ($i=0; $i < 400; $i++) {
            $siswa = Siswa::inRandomOrder()->first(); 
            $pembayaran = DetailBiaya::where('jurusan_id', $siswa->jurusan_id)->where('tahun_ajaran_id', $siswa->tahun_ajaran_id)->inRandomOrder()->first();
            $angka = rand(00000000,99999999);
            $kwitansi = 'b/'.$pembayaran->biaya->nama_biaya.'/'.date('Y-m-d').'/'.$siswa->id.'/'.$angka;
            $data = [
                'jumlah_bayar' => $faker->randomElement($bayar),
                'no_kwitansi' => $kwitansi,
                'siswa_id' => $siswa->id,
                'biaya_id' => $pembayaran->biaya->id,
                'keterangan' => 'bayar '.$pembayaran->biaya->nama_biaya,
            ];
            Pembayaran::create($data);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TahunAjaran;
use App\Models\DetailBiaya;
use App\Models\Biaya;
use App\Models\Siswa;
use App\Models\Pembayaran;

class RekapPembayaranController extends Controller
{
    public function index()
    {
        $data['tahun_ajarans'] = TahunAjaran::orderBy('tahun_ajaran')->get();
        return view('admin.rekapan_pembayaran.index')->with($data);
    }

    public function show($id)
    {
        $data['tahunAjaran'] = TahunAjaran::where('id', $id)->first();
        $detail_biaya = DetailBiaya::where('tahun_ajaran_id', $id)->get();
        $total = 0;
        foreach ($detail_biaya as $item) {
            if ($item->biaya_id == 1) {
                $udb = $item->jumlah_biaya * 12;
                $total += $udb;
            } else {
                $total += $item->jumlah_biaya;
            }
        }
        // dd($total);
        $data['siswa'] = Siswa::where('tahun_ajaran_id', $id)->get();
        $data['sudah_bayar'] = 0;
        $data['sudah_lunas'] = 0;
        foreach ($data['siswa'] as $siswa) {
            $data['detail_biayas'] = DetailBiaya::where('jurusan_id', $siswa->jurusan_id)
                ->where('tahun_ajaran_id', $siswa->tahun_ajaran_id)
                ->get();
            $udb = $data['detail_biayas']
                ->where('biaya_id', 1)
                ->pluck('jumlah_biaya')
                ->first();
            $non_udb = $data['detail_biayas']
                ->whereNotIn('biaya_id', 1)
                ->pluck('jumlah_biaya')
                ->sum();
            $harus_bayar = $udb * 36 + $non_udb;
            $nggs_mayar = Pembayaran::where('siswa_id', $siswa->id)->pluck('jumlah_bayar')->sum();
            $ada = Pembayaran::where('siswa_id', $siswa->id)->first();
            if ($harus_bayar - $nggs_mayar == 0) {
                $data['sudah_lunas'] += 1;
            }
            if ($ada) {
                $data['sudah_bayar'] += $ada->jumlah_bayar;
            }
        }

        $data['total_pembayaran'] = $total * $data['siswa']->count();
        return view('admin.rekapan_pembayaran.show')->with($data);
    }
}

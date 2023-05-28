<?php

namespace App\Http\Controllers\Siswa;
use App\Http\Controllers\Controller;

use App\Models\DetailBiaya;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Auth;
use Illuminate\Http\Request;

class InformasiPembayaranController extends Controller
{
    public function index()
    {
        $id = Auth::user()->siswa->id;
        $data['siswa'] = Siswa::where('id', $id)->first();
        $siswa = $data['siswa'];
        $data['detail_biayas'] = DetailBiaya::where('jurusan_id', $siswa->jurusan_id)
            ->where('angkatan_id', $siswa->angkatan_id)
            ->get();
        $data['riwayat_pembayarans'] = Pembayaran::where('siswa_id', $id)->get();
        $udb = $data['detail_biayas']
            ->where('biaya_id', 1)
            ->pluck('jumlah_biaya')
            ->first();
        $total = $data['detail_biayas']
            ->whereNotIn('biaya_id', 1)
            ->pluck('jumlah_biaya')
            ->sum();
        $data['total_bayar'] = $udb * 36 + $total;
        return view('siswa.pembayaran.index')->with($data);
    }
}

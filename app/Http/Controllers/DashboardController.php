<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailBiaya;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->role_id;


        if ($role_id == 1) {
            return view('admin.dashboard.index');
        }elseif ($role_id == 2) {

            $id = Auth::user()->siswa->id;
            $data['siswa'] = Siswa::where('id', $id)->first();
            $siswa = $data['siswa'];
            $data['detail_biayas'] = DetailBiaya::where('jurusan_id', $siswa->jurusan_id)
                ->where('tahun_ajaran_id', $siswa->tahun_ajaran_id)
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

            // return view('');
            return view('siswa.dashboard.index')->with($data);
        }
    }
}

<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Auth;
use Illuminate\Http\Request;

class RiwayatPembayaranController extends Controller
{
    public function index()
    {
        $id = Auth::user()->siswa->id;
        $data['riwayat_pembayarans'] = Pembayaran::where('siswa_id', $id)->get();
        return view('siswa.riwayat_pembayaran.index')->with($data);
    }
}

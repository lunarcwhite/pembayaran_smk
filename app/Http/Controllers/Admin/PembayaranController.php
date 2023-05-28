<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\DetailBiaya;
use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Biaya;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['siswas'] = Siswa::all();
        return view('admin.pembayaran.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'biaya_id' => 'required',
            'keterangan' => 'required',
            'jumlah_bayar' => 'required',
        ]);
        $biaya = Biaya::where('id', $request->biaya_id)
            ->pluck('nama_biaya')
            ->first();
        $tanggal = date('Y-m-d');
        $data = $request->all();
        $angka = rand(00000000, 99999999);
        $data['no_kwitansi'] = 'b/' . $biaya . '/' . $tanggal . '/' . $request->siswa_id . '/' . $angka;
        try {
            Pembayaran::create($data);
            $notification = [
                'alert-type' => 'success',
                'message' => 'Pembayaran Berhasil Disimpan',
            ];
        } catch (\Throwable $th) {
            $notification = [
                'alert-type' => 'error',
                'message' => 'Gagal Menyimpan.',
            ];
        }
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['siswa'] = Siswa::where('id', $id)->first();
        $id_siswa = $data['siswa'];
        $data['detail_biayas'] = DetailBiaya::where('jurusan_id', $id_siswa->jurusan_id)
            ->where('angkatan_id', $id_siswa->angkatan_id)
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
        return view('admin.pembayaran.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}

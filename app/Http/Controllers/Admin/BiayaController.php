<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biaya;
use App\Models\TahunAjaran;
use App\Models\Jurusan;
use App\Models\DetailBiaya;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getBiaya()
    {
        return Biaya::all();
    }

    public function getOneBiaya($id)
    {
        return Biaya::where('id', $id)->first();
    }

    public function index()
    {
        $data['biayas'] = $this->getBiaya();
        return view('admin.biaya.index')->with($data);
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
            'jumlah_biaya' => 'required',
        ]);

        $id = $request->id;
        $biaya = $request->jumlah_biaya;
        foreach ($id as $index => $value) {
            try {
                DetailBiaya::where('id', $value)->update([
                    'jumlah_biaya' => $biaya[$index],
                ]);
            } catch (\Throwable $th) {
                $notification = [
                    'alert-type' => 'error',
                    'message' => 'Gagal Memperbarui UDB ',
                ];
                return redirect()
                    ->back()
                    ->with($notification);
            }
        }
        $notification = [
            'alert-type' => 'success',
            'message' => 'Berhasil Memperbarui Biaya',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['detail_biayas'] = DetailBiaya::where('biaya_id', $id)
            ->distinct('tahun_ajaran_id')
            ->orderBy('tahun_ajaran_id')
            ->get();
        return view('admin.biaya.tahun_ajaran')->with($data);
    }

    public function biaya(string $id_biaya, string $id_tahun_ajaran)
    {
        $data['detail_biayas'] = DetailBiaya::where('biaya_id', $id_biaya)
            ->where('tahun_ajaran_id', $id_tahun_ajaran)
            ->get();
        $data['biaya'] = Biaya::where('id', $id_biaya)->first();
        $data['tahun_ajaran'] = TahunAjaran::where('id', $id_tahun_ajaran)->first();
        return view('admin.biaya.jurusan')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biaya $biaya)
    {
        return $biaya;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biaya $biaya)
    {
        $validate = $request->validate([
            'nama_biaya' => 'unique:biayas,nama_biaya',
        ]);
        $this->getOneBiaya($biaya->id)->update($request->all());
        $notification = [
            'alert-type' => 'success',
            'message' => 'Update Berhasil',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biaya $biaya)
    {
        $this->getOneBiaya($biaya->id)->delete();
        $notification = [
            'alert-type' => 'success',
            'message' => 'Berhasil Menghapus',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}

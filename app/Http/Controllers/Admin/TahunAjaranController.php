<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Biaya;
use App\Models\DetailBiaya;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tahunAjarans'] = TahunAjaran::all();
        return view('admin.tahun_ajaran.index')->with($data);
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
            'tahun_ajaran' => 'required|unique:tahun_ajarans,tahun_ajaran',
        ]);
        try {
            TahunAjaran::create($request->all());
            $tahunAjaran = TahunAjaran::latest()->first();
            $jurusans = Jurusan::all();
            foreach($jurusans as $jurusan){
                $data = [
                    'tahun_ajaran_id' => $tahunAjaran->id,
                    'jurusan_id' => $jurusan->id,
                    'biaya_id' => 1,
                    'jumlah_biaya' => 0
                ];
                DetailBiaya::create($data);
            }
            $notification = [
                'alert-type' => 'success',
                'message' => 'Tahun Ajaran Berhasil Ditambahkan',
            ];
            return redirect()
            ->back()
            ->with($notification);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()
            ->back()
            ->withErrors('Gagal menambahkan tahun ajaran!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TahunAjaran $tahunAjaran)
    {
        //
    }
}

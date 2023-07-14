<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\TahunAjaran;
use App\Models\Jurusan;
use App\Models\User;
use App\Imports\ImportSiswa;
use Excel;

class KelolaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tahunAjaran()
    {
        $data['tahunAjarans'] = TahunAjaran::orderBy('tahun_ajaran')->get();
        return view('admin.siswa.tahun_ajaran')->with($data);
    }

    public function siswa(String $tahunAjaran, String $jurusan)
    {
        $data['siswas'] = Siswa::where('tahun_ajaran_id', $tahunAjaran)->where('jurusan_id', $jurusan)->orderBy('nama_siswa')->get();
        $data['tahunAjaran'] = TahunAjaran::where('id', $tahunAjaran)->first();
        $data['jurusan'] = Jurusan::where('id', $jurusan)->first();
        return view('admin.siswa.siswa')->with($data);
    }
 
    public function index()
    {
        //
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
        // dd($request->input());
        $validate = $request->validate([
            'nama_siswa' => 'required|string',
            'nisn' => 'required'
        ]);
        try {
            $id_user = User::where('role_id',2)->latest('id')->first();
            $id = $id_user->id + 1;
            $user = [
                'id' => $id,
                'username' => $request->nisn,
                'email' => null,
                'password' => bcrypt('gbghfd65#2w4512345sdghgh^$^'),
                'role_id' => 2,
            ];
            User::create($user);
            $siswa = $request->input();
            $siswa['user_id'] = $id;
            Siswa::create($siswa);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()->back()->withErrors('Gagal Menambahkan!');
        }
        $notification = [
            'alert-type' => 'success',
            'message' => 'Berhasil Ditambahkan!'
        ];
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data['jurusans'] = Jurusan::orderBy('nama_jurusan')->get();
        $data['tahunAjaran'] = $id;
        return view('admin.siswa.jurusan')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new ImportSiswa, $request->file('import_siswa'));
            $notification = [
                'alert-type' => 'success',
                'message' => 'Import Siswa Berhasil'
            ];
            return redirect()->back()->with($notification);
        } catch (Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
             return redirect()->back()->withErrors($failures);
        }
    }
}

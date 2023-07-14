<?php

namespace App\Imports;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\TahunAjaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;

class ImportSiswa implements WithHeadingRow, ToCollection, SkipsOnError, SkipsEmptyRows, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    use Importable;

    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) {
            $keyTahunAjaran = $row['tahun_ajaran'];
            $keyJurusan = $row['jurusan'];
            $tahunAjaran = TahunAjaran::where('tahun_ajaran', 'LIKE', "%$keyTahunAjaran%")->first();
            $jurusan = Jurusan::where('nama_jurusan', 'LIKE', "%$keyJurusan%")->first();
            $id_user = User::where('role_id', 2)
                ->latest('id')
                ->first();
            $id = $id_user->id + 1;
            $password = bcrypt('gbghfd65#2w4512345sdghgh^$^');
            User::create([
                'id' => $id,
                'username' => $row['nisn'],
                'password' => $password,
                'email' => null,
                'role_id' => 2,
            ]);
            Siswa::create([
                'nama_siswa' => $row['nama_siswa'],
                'nisn' => $row['nisn'],
                'jurusan_id' => $jurusan->id,
                'tahun_ajaran_id' => $tahunAjaran->id,
                'user_id' => $id
            ]);
        }
    }

    public function headingRow(): int
    {
        return 6;
    }

    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }

    public function rules(): array
    {
        return [
            'nisn' => 'required|unique:siswas,nisn|numeric',
            'jurusan' => 'required',
            'tahun_ajaran' => 'required',
            'nama_siswa' => 'required'
        ];
    }

}

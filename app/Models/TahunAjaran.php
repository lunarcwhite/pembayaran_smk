<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function detailBiaya()
    {
        return $this->hasMany(DetailBiaya::class, 'tahun_ajaran_id');
    }   
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'tahun_ajaran_id');
    } 
}

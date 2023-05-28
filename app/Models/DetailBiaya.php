<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBiaya extends Model
{
    use HasFactory;

    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class, 'angkatan_id');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
    public function biaya()
    {
        return $this->belongsTo(Biaya::class, 'biaya_id');
    }
}

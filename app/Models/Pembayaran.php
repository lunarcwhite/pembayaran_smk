<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function biaya()
    {
        return $this->belongsTo(Biaya::class, 'biaya_id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}

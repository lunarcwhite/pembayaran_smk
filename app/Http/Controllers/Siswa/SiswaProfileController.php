<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaProfileController extends Controller
{
    public function index()
    {
        return view('siswa.profile.index');
    }
}

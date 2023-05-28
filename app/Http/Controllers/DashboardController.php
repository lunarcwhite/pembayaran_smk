<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->role_id;
        if ($role_id == 1) {
            return view('admin.dashboard.index');
        }elseif ($role_id == 2) {
            return view('siswa.dashboard.index');
        }
    }
}

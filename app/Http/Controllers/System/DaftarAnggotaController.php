<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\DaftarAnggota;
use Illuminate\Http\Request;

class DaftarAnggotaController extends Controller
{
    public function index()
    {
        $daftar_anggota = DaftarAnggota::all();

        return view('daftar_anggota', compact('daftar_anggota'));
    }
}

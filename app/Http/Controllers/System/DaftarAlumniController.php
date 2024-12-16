<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\DaftarAlumni;
use Illuminate\Http\Request;

class DaftarAlumniController extends Controller
{
    public function index()
    {
        $daftar_alumni = DaftarAlumni::all();

        return view('daftar_alumni', compact('daftar_alumni'));
    }
}

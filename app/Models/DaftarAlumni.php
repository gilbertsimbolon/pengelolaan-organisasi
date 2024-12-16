<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'no_hp',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'asal',
        'stambuk',
        'tahun_bergabung',
        'program_studi',
        'fakultas',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_siswa', 'jenis_kelamin', 'no_induk', 'no_teleponsiswa', 'nama_wali', 'no_teleponwali'];
}

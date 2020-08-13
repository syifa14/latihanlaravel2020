<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    protected $table = 'skripsi';
    protected $fillable = ['nim', 'nama_mahasiswa', 'judul', 'tempat_penelitian','alamat'];
}

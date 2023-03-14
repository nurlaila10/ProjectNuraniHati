<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nis', 'nama_siswa', 'jenkel', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'agama'];

    protected $primaryKey = 'id';
}

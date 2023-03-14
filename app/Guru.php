<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['nama_guru', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp', 'email', 'jenkel', 'agama', 'pendidikan'];

    protected $primaryKey = 'id';
}

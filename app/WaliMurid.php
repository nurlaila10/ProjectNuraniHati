<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    protected $table = 'wali_murids';
    protected $fillable = ['nama_wali', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp', 'agama', 'email', 'pekerjaan', 'kewarganegaraan'];

    protected $primaryKey = 'id';
}

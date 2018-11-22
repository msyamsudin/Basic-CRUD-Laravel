<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'dt_siswa';
    protected $fillable = ['nis','nama','tempat_lahir','tgl_lahir','jenis_kelamin','agama','alamat','hp'];
    public $timestamps = false; // disable created_at or updated_at
}

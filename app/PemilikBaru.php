<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikBaru extends Model
{
    protected $table = 'pemilik_online';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_pemilik',
        'alamat_pemilik',
        'nik_pemilik',
        'no_telepon',
        'status_online',
        'created_at',
        'updated_at'
    ];
}

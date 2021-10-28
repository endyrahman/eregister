<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengelolaBaru extends Model
{
    protected $table = 'pengelola_online';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_pengelola',
        'alamat_pengelola',
        'nik_pengelola',
        'no_telepon',
        'status_online',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WajibPajakBaru extends Model
{
    protected $table = 'wajib_pajak_online';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_wp',
        'badan_usaha',
        'alamat_wp',
        'kode_pos',
        'email_wp',
        'no_telepon',
        'tgl_daftar',
        'tgl_tutup',
        'kode_provinsi',
        'kode_kota',
        'kode_kecamatan',
        'kode_kelurahan',
        'rt_wp',
        'rw_wp',
        'pemilik_id',
        'operator_daftar',
        'operator_tutup',
        'operator_edit',
        'status',
        'status_online',
        'created_at',
        'updated_at'
    ];
}

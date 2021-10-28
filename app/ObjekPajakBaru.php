<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ObjekPajakBaru extends Model
{
    protected $table = 'objek_pajak_online';
    protected $primaryKey = 'id';

    protected $fillable = [
        'wp_id',
        'jenis_pajak_id',
        'rekening_id',
        'noobjek',
        'nama_objek',
        'alamat_objek',
        'kode_pos',
        'email_objek',
        'no_telepon',
        'tgl_daftar',
        'kode_provinsi',
        'kode_kota',
        'kode_kecamatan',
        'kode_kelurahan',
        'rt_objek',
        'rw_objek',
        'pemilik_id',
        'pengelola_id',
        'foto_objek',
        'status',
        'status_online',
        'latitude_objek',
        'longitude_objek',
        'created_at',
        'updated_at'
    ];

    public function getDataRekeningByRekID($rekening_id) {
        $data = DB::table('rekening')
            ->where('id', $rekening_id)
            ->first();

        return $data;
    }

    public function getNoObjek($jenis_pajak_id) {
        $data = DB::table('objek_pajak_online')
            ->select('noobjek')
            ->where('jenis_pajak_id', $jenis_pajak_id)
            ->orderBy('noobjek', 'DESC')
            ->limit(1)
            ->first();

        if ($data == null) {
            $noobjek = 1;
        } else {
            $noobjek = $data->noobjek + 1;
        }

        return $noobjek;
    }

    public function getJenisPajak($jenis_pajak_id) {
        $data = DB::table('jenis_pajak')
            ->where('id', $jenis_pajak_id)
            ->first();

        return $data;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rekening extends Model
{
    protected $table = 'rekening';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_pajak_id',
        'tipe',
        'kelompok',
        'jenis',
        'objek',
        'rincian',
        'sub1',
        'sub2',
        'nama_rek',
        'tarif_pajak',
        'tarif_dasar',
        'status'
    ];

    public function getComboRekening($jenis_pajak_id) {
        $data = DB::table('rekening')
            ->where('status', 1)
            ->where('jenis_pajak_id', $jenis_pajak_id)
            ->where('jenis', '01')
            ->where('sub1', '001')
            ->get();

        return $data;
    }

    public function getComboJenisPajak() {
        $data = DB::table('jenis_pajak')
            ->where('status', 1)
            ->get();

        return $data;
    }
}

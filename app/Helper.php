<?php
namespace App;

use Illuminate\Support\Facades\Storage;
use DB;

class Helper
{
    public static function getKecamatan($id) {
        $result = DB::table('kecamatan')->where('id', $id)->first();

        return $result;
    }

    public static function getDataKecamatan() {
        $result = DB::table('kecamatan')->get();

        return $result;
    }

    public static function getDataKota() {
        $result = DB::table('kota')->get();

        return $result;
    }

    public static function getDataProvinsi() {
        $result = DB::table('provinsi')->get();

        return $result;
    }

    public static function getDataKelurahan($kode_kec, $kode_kota, $kode_prov) {
        $result = DB::table('kelurahan')
                ->where('kode_kecamatan', $kode_kec)
                ->where('kode_kota', $kode_kota)
                ->where('kode_provinsi', $kode_prov)
                ->get();

        return $result;
    }

    public static function getDataKecamatanSelect($kode_kota,$kode_prov) {
        $result = DB::table('kecamatan')
                ->where('kode_kota', $kode_kota)
                ->where('kode_provinsi', $kode_prov)
                ->get();

        return $result;
    }

    public static function getDataKotaSelect($kode_prov) {
        $result = DB::table('kota')
                ->where('kode_provinsi', $kode_prov)
                ->get();

        return $result;
    }

    public static function getDataKodePos($kode_prov, $kode_kota, $kode_kec, $kode_kel) {
        $result = DB::table('kelurahan')
                ->where('kode_provinsi', $kode_prov)
                ->where('kode_kota', $kode_kota)
                ->where('kode_kecamatan', $kode_kec)
                ->where('kode_kelurahan', $kode_kel)
                ->first();

        return $result;
    }

    public static function getKeteranganSurat($jenis_surat, $jenis_pajak_id) {
        $result = DB::table('keterangan_surat')
                ->where('surat_id', $jenis_surat)
                ->where('jenis_pajak_id', $jenis_pajak_id)
                ->orderBy('id', 'ASC')
                ->get();

        return $result;
    }

    public static function getDataPejabat($status) {
        $result = DB::table('pejabat')
                ->where('status', $status)
                ->orderBy('id', 'ASC')
                ->first();

        return $result;
    }
}
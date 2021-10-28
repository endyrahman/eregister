<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Helper;
use App\PemilikBaru;
use App\PengelolaBaru;
use App\WajibPajakBaru;
use App\ObjekPajakBaru;
use App\Rekening;
use DB;
use Alert;

class Pendaftaran extends Controller
{
    public function index() {
        $datakec = new Helper();

        $provinsi = $datakec->getDataProvinsi();

        return view('pendaftaran.index', compact('provinsi'));
    }

    public function getComboRekening(Request $request) {
        $datarek = new Rekening();

        $jenis_pajak_id = $request->input('jenis_pajak_id');

        $datas = $datarek->getComboRekening($jenis_pajak_id);

        $html = "<option value=''>Pilih</option>";

        foreach ($datas as $val) {
            $html .= "<option value='$val->id'>$val->nama_rek</option>";
        }

        return response()->json($html);
    }

    public function storependaftarannpwpd(Request $request) {
        $objekpajak = new ObjekPajakBaru();

        DB::beginTransaction();

        $tgldaftar = date('Y-m-d');
        $nama_wp = $request->nama_wp;
        $alamat_wp = $request->alamat_wp;
        $notel_wp = $request->notel_wp;
        $email_wp = $request->email_wp;
        $rt_wp = $request->rt_wp;
        $rw_wp = $request->rw_wp;
        $jenis_pajak_id = $request->input('jenis_pajak_id');
        $rekening_id = $request->input('rekening_id');
        $kode_kecamatan_wp = $request->input('kode_kecamatan_wp');
        $kode_kelurahan_wp = $request->input('kode_kelurahan_wp');
        $kode_kota_wp = $request->input('kode_kota_wp');
        $kode_provinsi_wp = $request->input('kode_provinsi_wp');
        $kode_pos_wp = $request->kode_pos_wp;
        $nama_pemilik = $request->nama_pemilik;
        $alamat_pemilik = $request->alamat_pemilik;
        $nik_pemilik = $request->nik_pemilik;
        $notel_pemilik = $request->notel_pemilik;
        $nama_objek = $request->nama_objek;
        $alamat_objek = $request->alamat_objek;
        $notel_objek = $request->notel_objek;
        $email_objek = $request->email_objek;
        $rt_objek = $request->rt_objek;
        $rw_objek = $request->rw_objek;
        $kode_kecamatan_objek = $request->input('kode_kecamatan_objek');
        $kode_kelurahan_objek = $request->input('kode_kelurahan_objek');
        $kode_kota_objek = $request->input('kode_kota_objek');
        $kode_provinsi_objek = $request->input('kode_provinsi_objek');
        $kode_pos_objek = $request->kode_pos_objek;
        $nama_pengelola = $request->nama_pengelola;
        $alamat_pengelola = $request->alamat_pengelola;
        $nik_pengelola = $request->nik_pengelola;
        $notel_pengelola = $request->notel_pengelola;
        $fotoobjek = $request->file('fotoobjek');
        $pathfotoobjek = $fotoobjek->store('public/objek');
        $latitude_objek = $request->latitudeobjek;
        $longitude_objek = $request->longitudeobjek;
        $file_objek = explode('/',$pathfotoobjek);
        $filenamefotobjek = $file_objek[2];
        $badan_usaha = $request->input('badan_usaha');
        $noobjek = $objekpajak->getNoObjek($jenis_pajak_id);

        try {
            $pemilik = PemilikBaru::create([
                "nama_pemilik" => $nama_pemilik,
                "alamat_pemilik" => $alamat_pemilik,
                "nik_pemilik" => $nik_pemilik,
                "no_telepon" => $notel_pemilik,
                "status_online" => 1
            ]);

            $pengelola = PengelolaBaru::create([
                "nama_pengelola" => $nama_pengelola,
                "alamat_pengelola" => $alamat_pengelola,
                "nik_pengelola" => $nik_pengelola,
                "no_telepon" => $notel_pengelola,
                "status_online" => 1
            ]);

            $wajibpajak = WajibPajakBaru::create([
                "tgl_daftar" => $tgldaftar,
                "nama_wp" => $nama_wp,
                "badan_usaha" => $badan_usaha,
                "alamat_wp" => $alamat_wp,
                "no_telepon" => $notel_wp,
                "email_wp" => $email_wp,
                "rt_wp" => $rt_wp,
                "rw_wp" => $rw_wp,
                "kode_kecamatan" => $kode_kecamatan_wp,
                "kode_kelurahan" => $kode_kelurahan_wp,
                "kode_kota" => $kode_kota_wp,
                "kode_provinsi" => $kode_provinsi_wp,
                "kode_pos" => $kode_pos_wp,
                "pemilik_id" => $pemilik->id,
                "operator_daftar" => 999,
                "status" => 1,
                "status_online" => 1
            ]);

            $objekpajak = ObjekPajakBaru::create([
                "wp_id" => $wajibpajak->id,
                "jenis_pajak_id" => $jenis_pajak_id,
                "noobjek" => $noobjek,
                "rekening_id" => $rekening_id,
                "tgl_daftar" => $tgldaftar,
                "nama_objek" => $nama_objek,
                "alamat_objek" => $alamat_objek,
                "no_telepon" => $notel_objek,
                "email_objek" => $email_objek,
                "rt_objek" => $rt_objek,
                "rw_objek" => $rw_objek,
                "kode_kecamatan" => $kode_kecamatan_objek,
                "kode_kelurahan" => $kode_kelurahan_objek,
                "kode_kota" => $kode_kota_objek,
                "kode_provinsi" => $kode_provinsi_objek,
                "kode_pos" => $kode_pos_objek,
                "latitude_objek" => $latitude_objek,
                "longitude_objek" => $longitude_objek,
                "pemilik_id" => $pemilik->id,
                "pengelola_id" => $pengelola->id,
                "foto_objek" => $filenamefotobjek,
                "operator_daftar" => 999,
                "status" => 1,
                "status_online" => 1
            ]);

            DB::commit();

            Alert::success('Berhasil', 'Data Berhasil Disimpan');

            return redirect::to('/');
        } catch (\Throwable $t) {
            DB::rollback();

            Alert::error('Gagal', 'Data Gagal Disimpan');

            return redirect::to('/');
        }
    }
}

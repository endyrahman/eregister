<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;
use DB;
use Redirect;
use Session;

class Kecamatan extends Controller
{
    public function list_kecamatan(){
        $no = 1;
        $list_kecamatan = DB::table('kecamatan')->orderby('id', 'asc')->get();

        return view('kecamatan.list_kecamatan', ["no"=>$no, "list_kecamatan"=>$list_kecamatan]);
    }

    public function tambah_kecamatan(){
        return view('kecamatan.tambah_kecamatan');
    }

    public function tambahproses_kecamatan(Request $req){
        DB::table('kecamatan')->insert([
            'kode_kecamatan' => $req->kode_kecamatan,
            'nama' => $req->nama_kecamatan,
            'kode_kota' => 23,
        ]);

        Session::flash('msg', "Kecamatan ".$req->nama_kecamatan." berhasil ditambahkan.");
        return redirect('/list-kecamatan');
    }

    public function edit_kecamatan($id){
        $list_kecamatan = DB::table('kecamatan')->where('id', $id)->first();

        return view('kecamatan.edit_kecamatan', ["list_kecamatan"=>$list_kecamatan]);
    }

    public function editproses_kecamatan(Request $req){
        DB::table('kecamatan')
              ->where('id', $req->id)
              ->update([
                'kode_kecamatan' => $req->kode_kecamatan,
                'nama' => $req->nama_kecamatan,
              ]);

        Session::flash('msg', "Kecamatan ".$req->nama_kecamatan." berhasil diedit.");
        return redirect('/list-kecamatan');
    }

    public function hapus_kecamatan(Request $req){
        DB::table('kecamatan')->where('id', $req->takenid_hapuskecamatan)->delete();
        Session::flash('msg', "Kecamatan berhasil dihapus.");
        return Redirect::back();
    }

    public function getDataKelurahan(Request $request) {
        $datakel = new Helper();

        $kode_kec = $request->input('kode_kec');
        $kode_kota = $request->input('kode_kota');
        $kode_prov = $request->input('kode_prov');
        $kode_kel = $request->input('kode_kel');

        $kelurahan = $datakel->getDataKelurahan($kode_kec, $kode_kota, $kode_prov);

        $html = "<option value=''>Pilih</option>";

        foreach ($kelurahan as $val) {
            if (isset($kode_kec) and $kode_prov == $val->kode_provinsi and $kode_kota == $val->kode_kota and $kode_kec == $val->kode_kecamatan and $kode_kel == $val->kode_kelurahan) {
                $html .= "<option value='$val->kode_kelurahan' selected>$val->nama</option>";
            } else {
                $html .= "<option value='$val->kode_kelurahan'>$val->nama</option>";
            }
        }

        return response()->json($html);
    }

    public function getDataKecamatan(Request $request) {
        $datakel = new Helper();

        $kode_kota = $request->input('kode_kota');
        $kode_prov = $request->input('kode_prov');
        $kode_kec = $request->input('kode_kec');

        $kecamatan = $datakel->getDataKecamatanSelect($kode_kota, $kode_prov);

        $html = "<option value=''>Pilih</option>";

        foreach ($kecamatan as $val) {
            if (isset($kode_kec) and $kode_prov == $val->kode_provinsi and $kode_kota == $val->kode_kota and $kode_kec == $val->kode_kecamatan) {
                $html .= "<option value='$val->kode_kecamatan' data-prov='$val->kode_provinsi' data-kota='$val->kode_kota' selected>$val->nama</option>";
            } else {
                $html .= "<option value='$val->kode_kecamatan' data-prov='$val->kode_provinsi' data-kota='$val->kode_kota'>$val->nama</option>";
            }
        }

        return response()->json($html);
    }

    public function getDataKota(Request $request) {
        $datakel = new Helper();

        $kode_prov = $request->input('kode_prov');
        $kode_kota = $request->input('kode_kota');

        $kota = $datakel->getDataKotaSelect($kode_prov);

        $html = "<option value=''>Pilih</option>";

        foreach ($kota as $val) {
            if (isset($kode_kota) and $kode_prov == $val->kode_provinsi and $kode_kota == $val->kode_kota) {
                $html .= "<option value='$val->kode_kota' data-prov='$val->kode_provinsi' selected>$val->nama</option>";
            } else {
                if ($kode_prov == '33' and $val->kode_kota == '23') {
                    $html .= "<option value='$val->kode_kota' data-prov='$val->kode_provinsi' selected>$val->nama</option>";
                } else {
                    $html .= "<option value='$val->kode_kota' data-prov='$val->kode_provinsi'>$val->nama</option>";
                }
            }
        }

        return response()->json($html);
    }

    public function getDataKodePos(Request $request) {
        $datakel = new Helper();

        $kode_prov = $request->input('kode_prov');
        $kode_kota = $request->input('kode_kota');
        $kode_kec = $request->input('kode_kec');
        $kode_kel = $request->input('kode_kel');

        $datapos = $datakel->getDataKodePos($kode_prov, $kode_kota, $kode_kec, $kode_kel);

        $data = array(
            'kode_pos' => $datapos->kode_pos
        );

        return response()->json($data);
    }
}

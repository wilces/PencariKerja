<?php

namespace App\Http\Controllers;

use App\PendaftarModel;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
    public function index(Request $request) {

        $data = array();

        if($request->isMethod('post') == "post") {

            $pendaftar = new PendaftarModel();


            $pendaftar->nama      = $request->input('nama');
            $pendaftar->email     = $request->input('email');
            $pendaftar->pekerjaan = $request->input('pekerjaan');
            $pendaftar->alamat    = $request->input('alamat');
            $pendaftar->resume    = $request->input('resume');

            if($pendaftar->save()) {

                $data["status"]  = "success";
                $data["message"] = "Selamat, Data anda berhasil disimpan";
            }else {
                $data["status"]  = "danger";
                $data["message"] = "Maaf, Data anda gagal disimpan";
            }
        }

        return view("daftar", $data);

    }
}

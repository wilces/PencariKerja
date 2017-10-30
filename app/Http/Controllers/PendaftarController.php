<?php

namespace App\Http\Controllers;

use App\PendaftarModel;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    //
    public function index() {

        $data = array(
            'pendaftar' => PendaftarModel::all()
        );

        return view('pendaftar', $data);
    }

    public function detail($id) {

        $pendaftar = PendaftarModel::find($id);

        if(count($pendaftar) > 0) {

            $data = array(
                'pendaftar' => $pendaftar
            );

            return view("detailpendaftar", $data);

        }else {
            return redirect('/pendaftarkerja');
        }
    }
}

<?php

namespace App\Controllers;
use App\Models\TransaksiModel;

class Transaksi extends BaseController {
    public function index() {
        $this->cekLogin();
        $id = session()->get('id_pengguna');
        $transaksiModel = new TransaksiModel();
        $data['transaksi'] = $transaksiModel->where('id_pengguna', $id)->findAll();
        return view('transaksi_list', $data);
    }

    private function cekLogin() {
        if (!session()->get('id_pengguna')) {
            return redirect()->to('/login')->send();
        }
    }
}

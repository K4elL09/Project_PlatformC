<?php

namespace App\Controllers;
use App\Models\ParkiranModel;

class ParkiranController extends BaseController
{
    public function index()
    {
        $model = new ParkiranModel();
        $data['parkiran'] = $model->findAll();
        dd($data);
        return view('parkiran_view', $data);
    }

    public function simpan()
    {
        $model = new ParkiranModel();
        $model->insert([
            'platnomor' => $this->request->getPost('platnomor'),
            'jenis' => $this->request->getPost('jenis'),
            'warna' => $this->request->getPost('warna'),
            'pemilik' => $this->request->getPost('pemilik')
        ]);
        return redirect()->to('/parkiran');
    }

    public function hapus($platnomor)
    {
        $model = new ParkiranModel();
        $model->delete($platnomor);
        return redirect()->to('/parkiran');
    }
}




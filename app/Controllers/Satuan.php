<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSatuan;

class Satuan extends BaseController
{

    public function __construct() 
    {
        $this->ModelSatuan = new ModelSatuan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Satuan',
            'menu' => 'masterdata',
            'submenu' => 'satuan' ,
            'page' => 'v_satuan',
            'satuan' => $this->ModelSatuan->AllData(),
        ];
        return view('v_template', $data);
    }

    public function InsertData()
    {
        $data = ['nama_satuan' => $this->request->getPost('nama_satuan')];
        $this->ModelSatuan->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil DItambahkan !!');
        return redirect()->to('Satuan');
    }
}

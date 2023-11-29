<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class ManajementMateri extends BaseController
{
    protected $DataAlamat;
    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
    }
    public function ManajementMateri()
    {   
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementMateri", $data);
        echo view('layout/footer');
        
    }
}

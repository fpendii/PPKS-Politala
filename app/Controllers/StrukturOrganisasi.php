<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;


class StrukturOrganisasi extends BaseController
{
    protected $DataAlamat;

    public function __construct(){
        $this->DataAlamat = new ProfilModel();
    }

    public function StrukturOrganisasi(){
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Galeri',
            'alamat' => $alamat
        ];

        echo view('layout/header-user', $data);
        echo view("pages/User/struktur-organisasi");
        echo view('layout/footer');
    }
}

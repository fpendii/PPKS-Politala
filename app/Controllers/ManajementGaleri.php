<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\GaleriModel;


class ManajementGaleri extends BaseController
{
    
    protected $DataAlamat;
    protected $DataGaleri;

    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
        $this->DataGaleri = new GaleriModel();
    }

    public function ManajementGaleri()
    {
        $alamat = $this->DataAlamat->findAll();
        $galeri = $this->DataGaleri->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'galeri' => $galeri
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementGaleri", $data);
        echo view('layout/footer');
    }
}

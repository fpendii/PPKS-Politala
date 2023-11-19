<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\ProfilModel;

class Galeri extends BaseController{   
    protected $DataGaleri;
    protected $DataAlamat;

    public function __construct(){
        $this->DataGaleri = new GaleriModel();
        $this->DataAlamat = new ProfilModel();
    }

    public function galeri(){
        $galeri = $this->DataGaleri->findAll();
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Galeri',
            'galeri' => $galeri,
            'alamat' => $alamat
        ];

        echo view('layout/header-user', $data);
        echo view('layout/banner');
        echo view("pages/User/galeri-photo");
        echo view('layout/footer');
    }
}



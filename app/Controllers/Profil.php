<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class Profil extends BaseController
{
    protected $dataProfil;

    public function __construct(){
        $this->dataProfil = new ProfilModel();
    }

    public function pengantar(){

        $profil = $this->dataProfil->findAll();

        $data = [
            "judul" => "Pengantar",
            "profil" => $profil
        ];

        echo view('layout/header-user', $data);
        echo view('layout/banner');
        echo view("pages/User/pengantar",$data);
        echo view('layout/footer', $this->alamat);
    }
}

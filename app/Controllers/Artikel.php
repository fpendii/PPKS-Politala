<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\ProfilModel;

class Artikel extends BaseController
{
    protected $DataArtikel;
    protected $DataAlamat;

    public function __construct(){
        $this->DataArtikel = new ArtikelModel();
        $this->DataAlamat = new ProfilModel();
    }

    public function artikel(){
        $artikel = $this->DataArtikel->getArtikel();
        $alamat = $this->DataAlamat->findAll();

        $data = [
            "judul" => "Artikel PPKS Politala",
            "artikel" => $artikel,
            "alamat" => $alamat
        ];

        echo view('layout/header-user', $data);
        echo view('layout/banner');
        echo view("pages/User/artikel");
        echo view('layout/footer');
    }

    public function detailArtikel($id){
        $artikel = $this->DataArtikel->getArtikel($id);
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Artikel PPKS Politala',
            'artikel' => $artikel,
            "alamat" => $alamat
        ];

        echo view('layout/header-user', $data);
        echo view('layout/banner');
        echo view("pages/User/detailArtikel");
        echo view('layout/footer');
    }
}

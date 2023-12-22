<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\PengaduanModel;
use App\Models\UserModel;
use App\Models\ArtikelModel;

class BerandaAdminController extends BaseController
{   
    protected $DataAlamat;
    protected $DataPengaduan;
    protected $DataUser;
    protected $DataArtikel;
    protected $filters = ['login'];

    public function __construct(){
        $this->DataAlamat = new ProfilModel();
        $this->DataPengaduan = new PengaduanModel();
        $this->DataUser = new UserModel();
        $this->DataArtikel = new ArtikelModel();
    }

    public function BerandaAdmin(){
        $alamat = $this->DataAlamat->findAll();
        $pengudanHariIni = $this->DataPengaduan->findAll();
        $pengguna = $this->DataUser->findAll();
        $artikel = $this->DataArtikel->orderBy('id_artikel', 'DESC')->findAll();
       
        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'pengaduan' => $pengudanHariIni,
            'pengguna' => $pengguna,
            'artikel' => $artikel
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/BerandaAdmin", $data);
        echo view('layout/footer');
    }
}

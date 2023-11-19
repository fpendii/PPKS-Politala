<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\PengaduanModel;
use App\Models\UserModel;

class BerandaAdminController extends BaseController
{   
    protected $DataAlamat;
    protected $DataPengaduan;
    protected $DataUser;

    public function __construct(){
        $this->DataAlamat = new ProfilModel();
        $this->DataPengaduan = new PengaduanModel();
        $this->DataUser = new UserModel();
    }

    public function BerandaAdmin(){
        $alamat = $this->DataAlamat->findAll();
        $pengudanHariIni = $this->DataPengaduan->findAll();
        $pengguna = $this->DataUser->findAll();
       
        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'pengaduan' => $pengudanHariIni,
            'pengguna' => $pengguna,
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/BerandaAdmin", $data);
        echo view('layout/footer');
    }
}

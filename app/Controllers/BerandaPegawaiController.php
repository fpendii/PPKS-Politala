<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class BerandaPegawaiController extends BaseController
{   
    protected $dataProfil;
    public function __construct()
    {
        $this->dataProfil = new ProfilModel();
    }

    public function LaporanPengguna()
    {
        $profil = $this->dataProfil->findAll();
        $data = [
            'judul' => 'Laporan Mahasiswa',
            'alamat' => $profil
        ];

        echo view('layout/header-pegawai',$data);
        echo view('pages/pegawai/LaporanPengguna');
    }
}

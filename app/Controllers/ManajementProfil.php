<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class ManajementProfil extends BaseController
{
    protected $DataProfil;
    protected $DataStruktur;

    public function __construct(){
        $this->DataProfil = new ProfilModel();
    }

    public function ManajementProfil(){
        $profil = ($this->DataProfil->findAll());

        $data = [
            "judul" => "Manajament Profil",
            "alamat" => $profil,
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementProfil", $data);
        echo view('layout/footer');
    }

    public function SimpanProfil($id){

        $this->DataProfil->save([
            'id_profil' => $id,
            'tujuan' => $this->request->getVar('tujuan'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi')
        ]);

        session('pesan','Data Berhasil Dirubah');

        return redirect()->to('/manajement-profil');
    }

}

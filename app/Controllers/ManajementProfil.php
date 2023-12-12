<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class ManajementProfil extends BaseController
{
    protected $DataProfil;
    protected $DataStruktur;

    public function __construct()
    {
        $this->DataProfil = new ProfilModel();
    }

    public function ManajementProfil()
    {
        $profil = ($this->DataProfil->findAll());

        $data = [
            "judul" => "Manajament Profil",
            "alamat" => $profil,
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementProfil", $data);
        echo view('layout/footer');
    }

    public function EditProfil($kategori)
    {
        
        $profil = ($this->DataProfil->findAll());

        $data = [
            "judul" => "Edit Profil",
            "profil" => $profil[0][$kategori],
            "kategori" => $kategori
        ];

        echo view('layout/header-admin', $data);
        echo view('pages/form/editProfil');
    }

    public function SimpanProfil($kategori)
    {
        if($kategori === 'alamat'){
            $this->DataProfil->save([
                'id_profil' => 1,
                'alamat' => $this->request->getVar('alamat')
            ]);
        } elseif($kategori === 'no_handphone'){
            $this->DataProfil->save([
                'id_profil' => 1,
                'no_handphone' => $this->request->getVar('no_handphone')
            ]);
        } elseif($kategori === 'email'){
            $this->DataProfil->save([
                'id_profil' => 1,
                'email' => $this->request->getVar('email')
            ]);
        } elseif($kategori === 'tujuan'){
            $this->DataProfil->save([
                'id_profil' => 1,
                'tujuan' => $this->request->getVar('tujuan')
            ]);
        }
        // $this->DataProfil->save([
        //     'id_profil' => 1,
        //     'alamat' => $this->request->getVar('alamat'),
        //     'tujuan' => $this->request->getVar('tujuan'),
        //     'visi' => $this->request->getVar('visi'),
        //     'misi' => $this->request->getVar('misi')
        // ]);

        session('pesan', 'Data Berhasil Dirubah');

        return redirect()->to('/manajement-profil');
    }
}

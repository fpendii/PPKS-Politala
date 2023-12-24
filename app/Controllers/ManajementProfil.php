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

    public function SimpanProfil()
    {
        // Cek Validasi
        if (!$this->validate($this->DataProfil->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Ambil file gambar
        $fileGambar = $this->request->getFile('gambar');
        // Cek Apakah gambar dirubah
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambar_lama');
        } else {
            // Ambil nama file gambar
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            // Hapus File lama
            unlink('img/'.$this->request->getVar('gambar_lama'));
        }



        $this->DataProfil->save([
            'id_profil' => $this->request->getVar('id_profil'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'tujuan' => $this->request->getVar('tujuan'),
            'no_handphone' => $this->request->getVar('no_handphone'),
            'email' => $this->request->getVar('email'),
            'struktur_organisasi' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dirubah');

        return redirect()->to('/manajement-profil');
    }
}

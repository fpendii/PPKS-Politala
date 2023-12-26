<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\ProfilModel;

class Artikel extends BaseController
{
    protected $DataArtikel;
    protected $DataAlamat;

    public function __construct()
    {
        $this->DataArtikel = new ArtikelModel();
        $this->DataAlamat = new ProfilModel();
    }

    public function artikel()
    {
        $hakAkses = session()->get('level');
        $artikel = $this->DataArtikel->paginate(5,'artikel');
        $alamat = $this->DataAlamat->findAll();

        $data = [
            "judul" => "Artikel PPKS Politala",
            "artikel" => $artikel,
            "alamat" => $alamat,
            'pager' =>$this->DataArtikel->pager
        ];
        if ($hakAkses == null) {
            echo view('layout/header-user', $data);
            echo view("pages/User/artikel");
            echo view('layout/footer');
        } elseif($hakAkses == 'pegawai'){
            echo view('layout/header-pegawai', $data);
            echo view("pages/User/artikel");
        }
    }

    public function detailArtikel($id)
    {
        $hakAkses = session()->get('level');
        $artikel = $this->DataArtikel->getArtikel($id);
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Artikel PPKS Politala',
            'artikel' => $artikel,
            "alamat" => $alamat
        ];
        if ($hakAkses == null) {
            echo view('layout/header-user', $data);
            echo view("pages/User/detailArtikel");
            echo view('layout/footer');
        } elseif($hakAkses == 'pegawai'){
            echo view('layout/header-pegawai', $data);
            echo view("pages/User/detailArtikel");
        }
    }
}

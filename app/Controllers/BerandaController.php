<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\ArtikelModel;
use App\Models\GaleriModel;
use App\Models\PengaduanModel;  
use App\Models\ProgramModel;
use App\Models\MateriModel;

class BerandaController extends BaseController
{   
    protected $DataAlamat;
    protected $DataGaleri;
    protected $DataArtikel;
    protected $DataPengaduan;
    protected $DataProgram;
    protected $DataMateri;

    public function __construct(){
        $this->DataGaleri = new GaleriModel();
        $this->DataArtikel = new ArtikelModel();  
        $this->DataAlamat = new ProfilModel(); 
        $this->DataPengaduan = new PengaduanModel();
        $this->DataProgram = new ProgramModel();
        $this->DataMateri = new MateriModel();
    }

    public function beranda()
    {
        $RandomGaleri = $this->DataGaleri->GetDataGaleriRandom();
        $alamat = $this->DataAlamat->findAll();
        $artikel = $this->DataArtikel->getRandomArtikel();
        $totalPengaduan = $this->DataPengaduan->getJumlahPengaduan();
        $totalProgram = $this->DataProgram->getJumlahProgram();
        $materi = $this->DataMateri->getRandomMateri();

        $data = [
            'judul' => 'PPKS POLITALA',
            'galeri' => $RandomGaleri,
            'alamat' => $alamat,
            'artikel' => $artikel,
            'total_pengaduan' => $totalPengaduan,
            'total_program' => $totalProgram,
            'materi' => $materi
        ];


        echo view('layout/header-user', $data);
        echo view("pages/User/beranda");
        echo view('layout/footer');
    }
}

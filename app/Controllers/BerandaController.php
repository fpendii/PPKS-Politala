<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\ArtikelModel;
use App\Models\GaleriModel;
use App\Models\PengaduanModel;  
use App\Models\ProgramModel;  

class BerandaController extends BaseController
{   
    protected $DataAlamat;
    protected $DataGaleri;
    protected $DataArtikel;
    protected $DataPengaduan;
    protected $DataProgram;

    public function __construct(){
        $this->DataGaleri = new GaleriModel();
        $this->DataArtikel = new ArtikelModel();  
        $this->DataAlamat = new ProfilModel(); 
        $this->DataPengaduan = new PengaduanModel();
        $this->DataProgram = new ProgramModel();
    }

    public function beranda()
    {
        $RandomGaleri = $this->DataGaleri->GetDataGaleriRandom();
        $alamat = $this->DataAlamat->findAll();
        $artikel = $this->DataArtikel->getRandomArtikel();
        $totalPengaduan = $this->DataPengaduan->getJumlahPengaduan();
        $totalProgram = $this->DataProgram->getJumlahProgram();



        $data = [
            'judul' => 'PPKS POLITALA',
            'galeri' => $RandomGaleri,
            'alamat' => $alamat,
            'artikel' => $artikel,
            'total_pengaduan' => $totalPengaduan,
            'total_program' => $totalProgram
        ];


        echo view('layout/header-user', $data);
        echo view("pages/User/beranda");
        echo view('layout/footer');
    }
}

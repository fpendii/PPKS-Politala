<?php
namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{
    protected $data = [
        'title' => 'Hubungi Kami',
        'alamat' => 'Jl Ahmad Yani Desa Panggung',
        'noHp' => "082150646254",
        'email' => "politalabisa@gmail.com",
    ];

    protected $DataUser;

    public function __construct()
    {
        $this->DataUser = new UserModel();
    }
    
    public function tampilkanHalaman($judul, $namaView, $caption, $hakAkses)
    {
        $judulWebsite = [
            'judul' => $judul,
            'captionBanner' => $caption
        ];

        $data = [
            'title' => 'Hubungi Kami',
            'alamat' => 'Jl Ahmad Yani Desa Panggung',
            'noHp' => "082150646254",
            'email' => "politalabisa@gmail.com",
        ];

        if ($hakAkses == 'user') {
            echo view('layout/header-user', $judulWebsite);
            echo view('layout/banner');
        } else if($hakAkses == 'admin'){
            echo view('layout/header-admin', $judulWebsite);
        } else if($hakAkses == 'pegawai'){
            echo view('layout/header-pegawai', $judulWebsite);
        }
        echo view("pages/$hakAkses/$namaView");
    }

 

    // ------------###############################--------------
    // Halaman User
    public function index()
    {
        $this->tampilkanHalaman('Website PPKS Politala', 'beranda', 'Satuan Satgas Pencegahan dan Penanganan Kekerasan Seksual Universitas Lambung Mangkurat', 'user');
    }

    public function artikel()
    {
        $this->tampilkanHalaman('Artikel', 'artikel', 'Artikel', 'user');
    }

    public function profil()
    {
        $this->tampilkanHalaman('Profil', 'profil', 'Profil', 'user');
    }

    public function program()
    {
        $this->tampilkanHalaman('Program', 'program', 'Program', 'user');
    }

    public function trackingLaporan()
    {
        $this->tampilkanHalaman('Tracking Laporan', 'tracking-laporan', 'Tracking Laporan', 'user');
    }

    public function laporkan()
    {
        $this->tampilkanHalaman('Laporkan', 'laporkan', 'Laporkan', 'user');
    }

    public function galeriPhoto()
    {
        $this->tampilkanHalaman('Galeri Foto', 'galeri-photo', 'Galeri Photo', 'user');
    }

    public function pengantar()
    {
        $this->tampilkanHalaman('Pengantar', 'pengantar', 'Pengantar', 'user');
    }

    public function strukturOrganisasi()
    {
        $this->tampilkanHalaman('Struktur Organisasi', 'struktur-organisasi', 'Struktur Organisasi', 'user');
    }

    public function sop()
    {
        $this->tampilkanHalaman('SOP', 'sop', 'SOP', 'user');
    }


    // ------------###############################--------------
    // Halaman Admin

    public function mPengaduan()
    {
        $this->tampilkanHalaman('Pengaduan', 'ManajementPengaduan', 'Pengaduan', 'admin');
    }

    public function mArtikel()
    {   
        
        $this->tampilkanHalaman('Artikel', 'ManajementArtikel', 'Artikel', 'admin');
    }

    public function mProfil()
    {   
        $profil = [
            'visi' => 'Juanikolatisko'
        ];
        $this->tampilkanHalaman('Profil', 'ManajementProfil', 'Profil', 'admin');
    }

    public function mGaleri()
    {   
        
        $this->tampilkanHalaman('Galeri', 'ManajementGaleri', 'Galeri', 'admin');
    }

    public function mAkun()
    {   
        $user = $this->DataUser->findAll();

        $judulWebsite = [
            'judul' => 'Manajement Akun',
            'captionBanner' => 'Majanement Akun'
        ];

        $data = [
            'user' => $user
        ];

        echo view('layout/header-user', $judulWebsite);
        echo view('layout/banner');
        echo view("pages/Admin/ManajementAkun",$data);
        echo view('layout/footer', $this->data);
    }

    // ------------###############################--------------
    // Halaman Pegawai

    public function LaporanPengguna()
    {
        $this->tampilkanHalaman('Laporan','laporanPengguna','Laporan', 'pegawai');
    }

    public function galeriPegawai()
    {
        $this->tampilkanHalaman('Galeri', 'galeri-photo', 'Galeri', 'pegawai');
    }

    public function artikelPegawai()
    {
        $this->tampilkanHalaman('Artikel', 'artikel', 'Artikel', 'pegawai');
    }

    public function pengaduanPegawai()
    {
        $this->tampilkanHalaman('Pengaduna', 'pengaduan', 'Pengaduan', 'pegawai');
    }
    
}

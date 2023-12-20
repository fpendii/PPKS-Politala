<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\GaleriModel;


class ManajementGaleri extends BaseController
{
    
    protected $DataAlamat;
    protected $DataGaleri;

    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
        $this->DataGaleri = new GaleriModel();
    }

    public function ManajementGaleri()
    {
        $alamat = $this->DataAlamat->findAll();
        $galeri = $this->DataGaleri->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'galeri' => $galeri
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementGaleri", $data);
        echo view('layout/footer');
    }

    public function TambahGambar(){
        $data = [
            'judul' => 'Tambah Gambar'
        ];
        echo view('layout/header-admin', $data);
        echo view("pages/form/tambahGaleri", $data);
        echo view('layout/script');
    }

    public function SimpanGaleri(){

        // Cek validasi
        if(!$this->validate($this->DataGaleri->getValidationRules())){
            session()->setFlashdata('errors' , $this->validator->listErrors());
            return redirect()->to('/manajement-galeri/tambah-gambar')->withInput();
        }

        $this->DataGaleri->save([
            'judul' => $this->request->getVar('judul'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan','Data berhasil ditambahkan');

        return redirect()->to('/manajement-galeri');
    }

    // Function untuk mengapus Data Galeri
    public function HapusGaleri($id){
        $this->DataGaleri->delete($id);

        session()->setFlashdata('pesan','Data Berhasil Dihapus');

        return redirect()->back();
    }
}

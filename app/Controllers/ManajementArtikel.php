<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\ArtikelModel;

class ManajementArtikel extends BaseController
{
    protected $DataAlamat;
    protected $DataArtikel;

    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
        $this->DataArtikel = new ArtikelModel();
    }

    public function MajanementArtikel()
    {
        $alamat = $this->DataAlamat->findAll();
        $artikel = $this->DataArtikel->orderBy('id_artikel', 'DESC')->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'artikel' => $artikel
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementArtikel", $data);
        echo view('layout/footer');
    }

    public function detailArtikel($id)
    {
        $artikel = $this->DataArtikel->getArtikel($id);
        $alamat = $this->DataAlamat->findAll();

        $data = [
            'judul' => 'Artikel PPKS Politala',
            'artikel' => $artikel,
            "alamat" => $alamat
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/User/detailArtikel", $data);
        echo view('layout/footer');
    }

    public function TambahArtikel()
    {
        session();
        $data = [
            'judul' => 'Form Tambah Artikel',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/form/tambahArtikel");
    }

    // Function Untuk Menyimpan Artikel
    public function SimpanArtikel()
    {
        
        // Cek Validasi
        if (!$this->validate($this->DataArtikel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // Mengambil gambar
        $fileGambar  = $this->request->getFile('gambar');
        // Cek apakah gambar diapload atau tida
        if($fileGambar->getError() == 4){
            $namaFile = 'default_artikel.jpg';
        }else{
            // Membuat nama random gambar
            $namaFile = $fileGambar->getRandomName();
            $fileGambar->move('img',$namaFile);
        }
        

        $this->DataArtikel->save([
            'judul' => $this->request->getVar('judul'),
            'gambar' => $namaFile,
            'isi_artikel' => $this->request->getVar('isi_artikel')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/manajement-artikel');
    }

    // Function untuk menghapus artikel
    public function HapusArtikel($id)
    {
        // Cari gambar berdasarkan id
        $artikel = $this->DataArtikel->find($id);
        // Jika jika file gambarnya default
        if($artikel['gambar'] != 'default_artikel.jpg'){
            // Hapus gambar
            unlink('img/'.$artikel['gambar']);
        }
        

        $this->DataArtikel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

        return redirect()->back();
    }

    // Function untuk mengedit data arkel
    public function EditArtikel($id)
    {
        $data = [
            'judul' => 'Form Tambah Artikel',
            'validation' => \Config\Services::validation(),
            'artikel' => $this->DataArtikel->getArtikel($id)
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/form/editArtikel");
    }

    // Function untuk menyimpan hasil perubahan
    public function UpdatedArtikel($id)
    {
        
        // Cek Validasi
        if (!$this->validate($this->DataArtikel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        // Cek apakah gambar dirubah
        if($fileGambar->getError() == 4){
            $namaGambar = $this->request->getVar('gambar_lama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img',$namaGambar);
            // Hapus file lama
            unlink('img/'.$this->request->getVar('gambar_lama'));
        }

        $this->DataArtikel->save([
            'id_artikel' => $id,
            'judul' => $this->request->getVar('judul'),
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/manajement-artikel');
    }
}

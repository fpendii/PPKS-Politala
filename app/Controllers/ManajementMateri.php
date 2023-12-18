<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\MateriModel;

class ManajementMateri extends BaseController
{
    protected $DataAlamat;
    protected $DataMateri;

    public function __construct()
    {
        $this->DataAlamat = new ProfilModel();
        $this->DataMateri = new MateriModel();
    }
    
    public function ManajementMateri()
    {   
        $alamat = $this->DataAlamat->findAll();
        $materi = $this->DataMateri->findAll();

        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'materi' => $materi
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementMateri", $data);
        echo view('layout/footer');
        
    }

    public function TambahMateri(){
        $data = [
            'judul' => 'Tambah Materi'
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/form/tambahMateri", $data);
    }

    public function SimpanMateri(){
        $judul_materi = $this->request->getVar('judul_materi');
        $link_document = $this->request->getVar('link_document');

        $this->DataMateri->save([
            'judul_materi' => $judul_materi,
            'link_document' => $link_document
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');

        return redirect()->to('/manajement-materi');
    }

    public function EditMateri($id){
        $materi = $this->DataMateri->getMateri($id);

        $data = [
            'judul' => 'Edit Materi',
            'materi' => $materi
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/form/editMateri", $data);
    }

    public function UpdateMateri($id){
        $this->DataMateri->save([
            'id_materi' => $id,
            'judul_materi' => $this->request->getVar('judul_materi'),
            'link_document' => $this->request->getVar('link_document')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dirubah');

        return redirect()->to('/manajement-materi');
    }

    public function DeleteMateri($id){
        $this->DataMateri->delete($id);

        session()->setFlashdata('pesan','Data Berhasil Dihapus');

        return redirect()->back();
    }
}

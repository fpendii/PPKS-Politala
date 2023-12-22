<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramModel;
use App\Models\ProfilModel;
use PSpell\Config;

class ManajementProgram extends BaseController
{
    protected $DataProfil;
    protected $DataProgram;

    public function __construct()
    {
        $this->DataProgram = new ProgramModel();
        $this->DataProfil = new ProfilModel();
    }

    public function ManajementProgram()
    {
        $profil = $this->DataProfil->findAll();
        $program = $this->DataProgram->getProgramTerbaru();

        $data = [
            "judul" => "Manajament Program",
            "alamat" => $profil,
            'program' => $program
        ];

        echo view('layout/header-admin', $data);
        echo view("pages/Admin/ManajementProgram", $data);
        echo view('layout/footer');
    }

    public function TambahProgram()
    {
        $data = [
            'judul' => 'Tambah Program',
            'validation' => \Config\Services::validation()
        ];
        echo view('layout/header-admin', $data);
        echo view("pages/form/tambahProgram", $data);
        echo view('layout/script');
    }

    public function SimpanProgram()
    {
        // Cek validasi
        if(!$this->validate($this->DataProgram->getValidationRules())){
            session()->setFlashdata('errors',$this->validator->listErrors());
            return redirect()->to('/manajement-program/tambah-program')->withInput();
        }

        $uraian = $this->request->getVar('uraian');
        $penyelenggara = $this->request->getVar('penyelenggara');
        $lokasi = $this->request->getVar('lokasi');
        $tanggal = $this->request->getVar('waktu');

        $this->DataProgram->save([
            'uraian' => $uraian,
            'penyelenggara' => $penyelenggara,
            'lokasi' => $lokasi,
            'waktu' => $tanggal
        ]);
        session()->setFlashdata('pesan','Data berhasil ditambah');
        return redirect()->to('/manajement-program');
    }

    public function EditProgram($id)
    {   
        $program = $this->DataProgram->getProgram($id);
        $data = [
            'judul' => 'Edit Program',
            'program' => $program
        ];

        echo view('layout/header-admin', $data);
        echo view('pages/form/editProgram');
    }

    public function UpdateProgram($id){

        // Cek validasi
        if(!$this->validate($this->DataProgram->getValidationRules())){
            session()->setFlashdata('errors',$this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $uraian = $this->request->getVar('uraian');
        $penyelenggara = $this->request->getVar('penyelenggara');
        $lokasi = $this->request->getVar('lokasi');
        $tanggal = $this->request->getVar('waktu');

        $this->DataProgram->save([
            'id_program' => $id,
            'uraian' => $uraian,
            'penyelenggara' => $penyelenggara,
            'lokasi' => $lokasi,
            'waktu' => $tanggal
        ]);

        session()->setFlashdata('pesan','Data berhasil diubah');
        return redirect()->to('/manajement-program');
    }

    public function DeleteProgram($id)
    {
        $this->DataProgram->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}

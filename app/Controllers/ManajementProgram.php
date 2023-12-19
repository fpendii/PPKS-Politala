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
        $program = $this->DataProgram->findAll();

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
    }

    public function SimpanProgram()
    {
        // Validasi Input
        if (!$this->validate([
            '' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            $data = [
                'judul' => 'Tambah Program',
                'validation' => $validation
            ];
            return view('layout/header-admin', $data) . view("pages/form/tambahProgram", $data);
        }

        $uraian = $this->request->getVar('uraian');
        $penyelenggara = $this->request->getVar('penyelenggara');
        $lokasi = $this->request->getVar('lokasi');
        $tanggal = $this->request->getVar('tanggal');

        $this->DataProgram->save([
            'uraian' => $uraian,
            'penyelenggara' => $penyelenggara,
            'lokasi' => $lokasi,
            'waktu' => $tanggal
        ]);

        return redirect()->to('/manajement-program');
    }

    public function EditProgram($id)
    {
        dd($this->DataProgram->getProgram($id));
        $data = [
            'judul' => 'Edit Program'
        ];

        echo view('layout/header-admin', $data);
        echo view('pages/form/editProgram');
    }

    public function DeleteProgram($id)
    {
        $this->DataProgram->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}

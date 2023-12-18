<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramModel;
use App\Models\ProfilModel;

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

    public function EditProgram($id){
        dd($this->DataProgram->getProgram($id));
        $data = [
            'judul' => 'Edit Program'
        ];

        echo view('layout/header-admin',$data);
        echo view('pages/form/editProgram');
    }

    public function DeleteProgram($id)
    {
        $this->DataProgram->delete($id);

        session()->setFlashdata('pesan','Data Berhasil Di Hapus');

        return redirect()->back();
    }
}

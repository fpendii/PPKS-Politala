<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use App\Models\ProgramModel;


class ProgramController extends BaseController
{
    protected $DataAlamat;
    protected $DataProgram;

    public function __construct(){
        $this->DataAlamat = new ProfilModel();
        $this->DataProgram = new ProgramModel();
    }

    public function program(){
        $alamat = $this->DataAlamat->findAll();
        $program = $this->DataProgram->findAll();

        $data = [
            'judul' => 'Program PPKS Politala',
            'program' => $program,
            'alamat' => $alamat
        ];

        echo view('layout/header-user', $data);
        echo view("pages/User/program");
        echo view('layout/footer');
    }
}

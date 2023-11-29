<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ProfilModel;

class ManajementAkun extends BaseController
{
    protected $DataAlamat;
    protected $DataAkun;
    
    public function __construct(){
        $this->DataAlamat = new ProfilModel();
        $this->DataAkun = new UserModel();
    }

    public function ManajementAkun(){
        $alamat = $this->DataAlamat->findAll();
        $akun = $this->DataAkun->findAll();

        $data = [
            'judul' => 'Akun',
            'akun' => $akun,
            'alamat' => $alamat
        ];
        
        echo view('layout/header-admin',$data);
        echo view('pages/Admin/ManajementAkun', $data);
        echo view('layout/footer');
    }

    public function SimpanAkun(){
        
        $this->DataAkun->save([
            'username' => $this->request->getVar('username'),
            'level' => $this->request->getVar('level'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan');

        return redirect()->to('/manajement-akun');
    }

    // Function untuk menghapus akun
    public function HapusAkun($id){
        $this->DataAkun->delete($id);

        session()->setFlashdata('pesan','Data Berhasil Dihapus');

        return redirect()->back();
    }

    // Function untuk mengudpdate akun
    public function UpdateAkun($id){
        
        $this->DataAkun->save([
            'id_user' => $id,
            'username' => $this->request->getVar('username'),
            'level' => $this->request->getVar('level'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashdata('pesan','Data Berhasil Diubah');

        return redirect()->back();
    }
}

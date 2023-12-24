<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Login extends BaseController
{
    protected $DataUser;

    public function __construct()
    {
        $this->DataUser = new UserModel();
    }

    public function login()
    {
        echo view("Pages/User/login");
    }

    public function verifikasiLogin(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->DataUser->where('username', $username)->where('password', $password)->first();

        if($user){

            $session = session();
            $session->set('username',$user['username']);
            $session->set('level',$user['level']);

            
            // Mengarahkan pengguna sesuai level
            if($user['level'] === 'admin'){
                return redirect()->to('/beranda-admin');
            } else{
                return redirect()->to('/pegawai');
            }
        }else{
            // Login Gagal
            session()->setFlashdata('error','password atau username salah!!');
            return redirect()->back()->withInput();
        }
    }
}

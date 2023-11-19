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
        $user = $this->DataUser->findAll();
    
        $data = [
            "user" => $user
        ];
        echo view("Pages/User/login", $data);
    }
}

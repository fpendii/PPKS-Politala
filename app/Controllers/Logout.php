<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function logout()
    {
        // Hapus session pengguna
        $sesssion = session();
        $sesssion->destroy();

        return redirect()->to('/beranda');
    }
}

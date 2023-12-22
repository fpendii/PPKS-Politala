<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BerandaPegawaiController extends BaseController
{
    public function LaporanPengguna()
    {
        echo  "Halaman ".(session()->get('level'));
    }
}

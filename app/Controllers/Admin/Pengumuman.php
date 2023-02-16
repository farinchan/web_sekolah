<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    protected $Pengumuman;
    public function __construct()
    {
        $this->Pengumuman = new PengumumanModel();
    }

    public function index()
    {
        $Pengumuman = $this->Pengumuman->findAll();
        $data = [
            "active" => "pengumuman",
            "pengumuman" => $Pengumuman
        ];
        return view("admin/pengumuman", $data);
    }
}

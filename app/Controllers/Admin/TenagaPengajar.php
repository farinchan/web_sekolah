<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TenagaPengajarModel;

class TenagaPengajar extends BaseController
{

    protected $TenagaPengajar;
    public function __construct()
    {
        $this->TenagaPengajar = new TenagaPengajarModel();
    }

    public function index()
    {
        $TenagaPengajar = $this->TenagaPengajar->findAll();
        $data = [
            "active" => "pengajar",
            "TenagaPengajar" => $TenagaPengajar
        ];
        return view("admin/tenaga_pengajar", $data);
    }
}

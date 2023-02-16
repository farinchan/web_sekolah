<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TenagaPengajar as ModelsTenagaPengajar;

class TenagaPengajar extends BaseController
{

    protected $TenagaPengajar;
    public function __construct()
    {
        $this->TenagaPengajar = new ModelsTenagaPengajar();
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

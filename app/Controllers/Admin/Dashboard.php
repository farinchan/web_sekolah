<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $config = [
            "active" => "dashboard"
        ];
        return view("admin/dashboard", $config);
    }
}

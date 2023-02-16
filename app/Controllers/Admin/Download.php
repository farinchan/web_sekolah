<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DownloadModel;

class Download extends BaseController
{

    protected $Download;
    public function __construct()
    {
        $this->Download = new DownloadModel();
    }
    public function index()
    {
        $Download = $this->Download->findAll();
        $data = [
            "active" => "download",
            "download" => $Download
        ];
        return view("admin/download", $data);
    }
}

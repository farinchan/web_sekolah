<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AgendaModel;

class Agenda extends BaseController
{
    protected $Agenda;
    public function __construct()
    {
        $this->Agenda = new AgendaModel();
    }
    public function index()
    {
        $Agenda = $this->Agenda->findAll();
        $data = [
            "active" => "agenda",
            "agenda" => $Agenda
        ];
        return view("admin/agenda", $data);
    }
}

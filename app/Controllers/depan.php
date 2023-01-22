<?php

namespace App\Controllers;

class Depan extends BaseController
{
    public function index()
    {
        $config = [
            "title" => "Beranda"
        ];
        return view('depan/home_depan', $config);
    }

    public function About()
    {
        $config = [
            "title" => "about"
        ];
        return view('depan/about_depan', $config);
    }

    public function Guru()
    {
        $config = [
            "title" => "Guru"
        ];
        return view('depan/guru_depan', $config);
    }

    public function Contact()
    {
        $config = [
            "title" => "Contact"
        ];
        return view('depan/contact_depan', $config);
    }
}

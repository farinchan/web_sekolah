<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Berita extends BaseController
{
    protected $Kategori, $Artikel;
    public function __construct()
    {
        $this->Kategori = new KategoriModel();
        $this->Artikel = new ArtikelModel();
    }
    public function index()
    {
        return redirect()->to("/admin/dashboard/artikel");
    }

    //KATEGORI
    public function kategori()
    {
        $Kategori = $this->Kategori->findAll();
        $data = [
            'active' => 'kategori',
            'Kategori' => $Kategori
        ];
        return view("admin/kategori", $data);
    }

    public function tambahKategori()
    {
        $slug = strtolower(trim(str_replace('/[^A-Za-z0-9-]+/', '-', $this->request->getVar('nama'))));
        $this->Kategori->save([
            'name' => $this->request->getVar('nama'),
            'slug' => $slug,
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/berita/kategori');
    }

    public function hapusKategori($id)
    {
        $this->Kategori->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/berita/kategori');
    }

    //Artikel
    public function artikel()
    {
        $artikel = $this->Artikel->findAll();
        $data = [
            'active' => 'kategori',
            'artikel' => $artikel
        ];
        return view("admin/artikel", $data);
    }

    public function tambahartikel()
    {
        $Kategori = $this->Kategori->findAll();
        $data = [
            'active' => 'kategori',
            'KategoriBlog' => $Kategori
        ];
        return view("admin/artikel_tambah", $data);
    }

    public function hapusartikel($id)
    {
        $this->Kategori->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/berita/kategori');
    }
}

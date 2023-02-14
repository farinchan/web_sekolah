<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Berita extends BaseController
{
    protected $Objek;
    public function __construct()
    {
        $this->Objek = new KategoriModel();
    }
    public function index()
    {
        //
    }

    //KATEGORI
    public function kategori()
    {
        $Objek = $this->Objek->findAll();
        $data = [
            'active' => 'kategori',
            'objek' => $Objek
        ];
        return view("admin/kategori", $data);
    }

    public function tambahKategori()
    {
        $slug = strtolower(trim(str_replace('/[^A-Za-z0-9-]+/', '-', $this->request->getVar('nama'))));
        $this->Objek->save([
            'name' => $this->request->getVar('nama'),
            'slug' => $slug,
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/berita/kategori');
    }

    public function hapusKategori($id)
    {
        $this->Objek->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/berita/kategori');
    }
}

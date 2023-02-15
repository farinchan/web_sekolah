<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Berita extends BaseController
{
    protected $Objek;
    public function __construct()
    {
        $this->Objek = new KategoriModel();
    }
    public function kategori()
    {
        $Objek = $this->Objek->findAll();
        $data = [
            'active' => 'finances',
            'objek' => $Objek
        ];
        return view("admin/kategori", $data);
    }

    public function tambahKategori()
    {
        $this->Objek->save([
            'name' => $this->request->getVar('name'),
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

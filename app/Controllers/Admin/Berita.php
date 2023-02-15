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
        $this->Kategori->save([
            'name' => $this->request->getVar('nama'),
            'slug' => slugify($this->request->getVar('nama')),
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/berita/kategori');
    }

    public function editKategori($id)
    {
        $this->Kategori->update($id, [
            'name' => $this->request->getVar('nama'),
            'slug' => slugify($this->request->getVar('nama')),
        ]);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Edit');
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

    public function saveartikel()
    {
        $thumb = $this->request->getFile("thumb");
        $thumb->move("thumbnail");

        $session = session();
        $this->Artikel->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('editor1'),
            'kategori_id' => $this->request->getVar('kategori'),
            'thumbnail' => $thumb->getName(),
            'user_id' => $session->get("user_id"),
            'author' => $session->get("user_name"),
            'slug' => slugify($this->request->getVar('judul')),
            'meta_description' => $this->request->getVar('deskripsi'),
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/berita/artikel');
    }

    public function hapusartikel($id)
    {
        $this->Kategori->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/berita/kategori');
    }
}

function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, $divider);
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
    // lowercase
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}

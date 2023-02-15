<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'judul', 'isi', 'tanggal', 'kategori_id', 'views', 'thumbnail', 'user_id', 'author', 'slug', 'meta_description'];
}

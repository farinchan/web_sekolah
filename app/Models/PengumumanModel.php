<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table            = 'pengumuman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'pengumuman_judul', 'pengumuman_deskripsi', 'pengumuman_tanggal', 'pengumuman_author'];
}

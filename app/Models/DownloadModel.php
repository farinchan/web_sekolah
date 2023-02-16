<?php

namespace App\Models;

use CodeIgniter\Model;

class DownloadModel extends Model
{
    protected $table            = 'download';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'download_judul', 'download_deskripsi', 'download_tanggal', 'download_author' , "download_total", "download_file"];
}

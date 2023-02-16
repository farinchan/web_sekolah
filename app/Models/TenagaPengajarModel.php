<?php

namespace App\Models;

use CodeIgniter\Model;

class TenagaPengajarModel extends Model
{
    protected $table            = 'tenaga_pengajar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'nip', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'mata_pelajaran', 'foto'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table            = 'agenda';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'agenda_nama', 'agenda_tanggal', 'agenda_deskripsi', 'agenda_mulai', 'agenda_selesai', 'agenda_tempat', 'agenda_waktu', 'agenda_keterangan', 'agenda_author'];
}

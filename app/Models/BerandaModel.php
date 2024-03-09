<?php

namespace App\Models;

use CodeIgniter\Model;

class BerandaModel extends Model
{
    protected $table            = 'beranda';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('beranda')->Like('value', $keyword);
    }

    public function jumlahDokter()
    {
        return $this->table('beranda')->get()->getNumRows();
    }
}

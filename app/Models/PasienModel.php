<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table            = 'pasien';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pasien')->like('key', $keyword)->orLike('value', $keyword);
    }

    public function jumlahPasien()
    {
        return $this->table('pasien')->get()->getNumRows();
    }
}

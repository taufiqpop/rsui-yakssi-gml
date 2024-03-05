<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table            = 'pelayanan';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pelayanan')->like('key', $keyword)->orLike('value', $keyword);
    }

    public function jumlahPelayanan()
    {
        return $this->table('pelayanan')->get()->getNumRows();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PoliklinikModel extends Model
{
    protected $table            = 'poliklinik';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('poliklinik')->like('key', $keyword)->orLike('value', $keyword);
    }

    public function jumlahPoliklinik()
    {
        return $this->table('poliklinik')->get()->getNumRows();
    }
}

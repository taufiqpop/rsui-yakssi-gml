<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menu';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'link', 'parent', 'posisi', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('menu')->like('judul', $keyword)->orLike('parent', $keyword)->orLike('posisi', $keyword);
    }

    public function jumlahMenu()
    {
        return $this->table('menu')->get()->getNumRows();
    }
}

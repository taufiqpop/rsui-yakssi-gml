<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'category';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['parent', 'judul', 'images', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('category')->like('parent', $keyword)->orLike('judul', $keyword);
    }

    public function jumlahCategory()
    {
        return $this->table('category')->get()->getNumRows();
    }
}

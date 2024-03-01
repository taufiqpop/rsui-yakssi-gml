<?php

namespace App\Models;

use CodeIgniter\Model;

class WidgetModel extends Model
{
    protected $table            = 'widget';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'subjudul', 'link', 'images', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('widget')->like('judul', $keyword)->orLike('subjudul', $keyword)->orLike('link', $keyword);
    }

    public function jumlahWidget()
    {
        return $this->table('widget')->get()->getNumRows();
    }
}

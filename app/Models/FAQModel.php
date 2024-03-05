<?php

namespace App\Models;

use CodeIgniter\Model;

class FAQModel extends Model
{
    protected $table            = 'faq';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('faq')->Like('value', $keyword);
    }

    public function jumlahFAQ()
    {
        return $this->table('faq')->get()->getNumRows();
    }
}

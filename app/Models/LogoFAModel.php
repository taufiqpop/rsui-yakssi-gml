<?php

namespace App\Models;

use CodeIgniter\Model;

class LogoFAModel extends Model
{
    protected $table            = 'logofa';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['value'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('logofa')->like('value', $keyword);
    }
}

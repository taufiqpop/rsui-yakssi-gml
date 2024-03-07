<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table            = 'pesan';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['name', 'email', 'subject', 'message', 'created_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pesan')->like('name', $keyword)->orLike('email', $keyword)->orLike('subject', $keyword)->orLike('message', $keyword)->orLike('created_at', $keyword);
    }

    public function jumlahPesan()
    {
        return $this->table('pesan')->get()->getNumRows();
    }
}

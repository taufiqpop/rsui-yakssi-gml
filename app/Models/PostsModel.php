<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'kategori', 'tag', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('posts')->like('value', $keyword)->orLike('kategori', $keyword)->orLike('tag', $keyword);
    }

    public function jumlahPosts()
    {
        return $this->table('posts')->get()->getNumRows();
    }
}

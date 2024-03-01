<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'kategori', 'seo', 'tag', 'images', 'deskripsi', 'content', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('posts')->like('judul', $keyword)->orLike('kategori', $keyword)->orLike('seo', $keyword);
    }

    public function jumlahPosts()
    {
        return $this->table('posts')->get()->getNumRows();
    }
}

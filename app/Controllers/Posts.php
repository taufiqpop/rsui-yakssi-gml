<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Posts extends BaseController
{
    protected $postsModel;
    public function __construct()
    {
        $this->postsModel = new \App\Models\PostsModel();
    }

    // List Posts
    public function index()
    {
        $currentPage = $this->request->getVar('page_posts') ? $this->request->getVar('page_posts') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $posts = $this->postsModel->search($keyword);
        } else {
            $posts = $this->postsModel;
        }

        $this->postsModel->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Posts',
            'posts'       => $posts->paginate(5, 'posts'),
            'pager'       => $this->postsModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/posts/index', $data);
    }

    // Detail Posts
    public function details($id)
    {
        $postsMod = $this->postsModel->find($id);

        $data = [
            'title' => 'RSUI YAKSSI | Detail Posts',
            'posts' => $postsMod,
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/details', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Posts',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/form', $data);
    }

    // Save Data
    public function save()
    {
        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules'  => 'uploaded[images]|max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'uploaded' => 'Pilih Gambar Terlebih Dahulu',
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('control/posts/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarPosts = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarPosts->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Pindahkan File Ke Folder Img
            $gambarPosts->move('img');

            // Ambil Nama File
            $namaGambar = $gambarPosts->getName();
        }
        $this->postsModel->save([
            'judul'     => $this->request->getVar('judul'),
            'kategori'  => $this->request->getVar('kategori'),
            'seo'       => $this->request->getVar('seo'),
            'tag'       => $this->request->getVar('tag'),
            'images'    => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'content'   => $this->request->getVar('content')
        ]);

        session()->setFlashdata('pesan', 'Data Posts Berhasil Ditambahkan!');
        return redirect('control/posts/index');
    }

    // Edit Data
    public function formEdit($id)
    {
        $postsMod = $this->postsModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Posts',
            'posts'      => $postsMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/formEdit', $data);
    }

    // Update Data
    public function update($id)
    {
        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('control/posts/formEdit')->withInput()->with('validation', $validation);
        }

        $fileImgPosts = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgPosts->getError() == 4) {
            $namaImgPosts = $this->request->getVar('imgPostsLama');
        } else {
            // Generate Nama File Random
            $namaImgPosts = $fileImgPosts->getRandomName();

            // Pindahkan Gambar
            $fileImgPosts->move('img', $namaImgPosts);

            // Hapus File Yang Lama
            unlink('img/' . $this->request->getVar('imgPostsLama'));
        }

        $this->postsModel->save([
            'id'        => $id,
            'judul'     => $this->request->getVar('judul'),
            'kategori'  => $this->request->getVar('kategori'),
            'seo'       => $this->request->getVar('seo'),
            'tag'       => $this->request->getVar('tag'),
            'images'    => $namaImgPosts,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'content'   => $this->request->getVar('content')
        ]);

        session()->setFlashdata('pesan', 'Data Posts Berhasil Diubah!');
        return redirect('control/posts/index');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $postsMod = $this->postsModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($postsMod['images'] != 'default.svg') {

            // Hapus Gambar Permanen
            unlink('img/' . $postsMod['images']);
        }

        $this->postsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Posts Berhasil Dihapus!');
        return redirect('control/posts/index');
    }
}

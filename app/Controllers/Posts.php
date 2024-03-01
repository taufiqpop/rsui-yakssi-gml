<?php

namespace App\Controllers;

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
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | Detail Posts',
            'posts' => $this->postsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/detail', $data);
    }

    // Create Data
    public function form($id = '')
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Posts',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content');
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/form', $data);
    }

    // Insert Data
    public function insert()
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
            // Generate Nama File Random
            $namaGambar = $gambarPosts->getRandomName();

            // Pindahkan Gambar
            $gambarPosts->move('img', $namaGambar);
        }
        $this->postsModel->save([
            'judul'     => $this->request->getVar('judul'),
            'kategori'  => $this->request->getVar('kategori'),
            'seo'       => $this->request->getVar('seo'),
            'tag'       => $this->request->getVar('tag'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'content'   => $this->request->getVar('content'),
            'images'    => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Posts Berhasil Ditambahkan!');
        return redirect('control/posts');
    }

    // Edit Data
    public function edit($id)
    {
        $postsMod = $this->postsModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Posts',
            'posts'      => $postsMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, judul, kategori, seo, tag, images, deskripsi, content');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/edit', $data);
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
            return redirect()->to('control/posts/edit')->withInput()->with('validation', $validation);
        }

        $gambarPosts = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($gambarPosts->getError() == 4) {
            $namaGambar = $this->request->getVar('imgPostsLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPosts->getRandomName();

            // Pindahkan Gambar
            $gambarPosts->move('img', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/' . $this->request->getVar('imgPostsLama'));
        }

        $this->postsModel->save([
            'id'        => $id,
            'judul'     => $this->request->getVar('judul'),
            'kategori'  => $this->request->getVar('kategori'),
            'seo'       => $this->request->getVar('seo'),
            'tag'       => $this->request->getVar('tag'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'content'   => $this->request->getVar('content'),
            'images'    => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Posts Berhasil Diubah!');

        return redirect('control/posts');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $posts = $this->postsModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($posts['images'] != 'default.svg') {
            // Hapus Gambar Permanen
            unlink('img/' . $posts['images']);
        }

        $this->postsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Posts Berhasil Dihapus!');

        return redirect('control/posts');
    }
}

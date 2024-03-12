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

        $posts->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Posts',
            'posts'       => $posts->paginate(5, 'posts'),
            'pager'       => $posts->pager,
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
        $builder->select('id, key, value, kategori, tag');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/detail', $data);
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
        $builder->select('id, key, value, kategori, tag');
        $query   = $builder->get();

        $data['posts'] = $query->getResultArray();

        return view('control/posts/form', $data);
    }

    // Insert Data
    public function insert($id = '')
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
            $gambarPosts->move('img/posts', $namaGambar);
        }

        $input = [
            'judul'        => $this->request->getPost('judul'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'content'      => $this->request->getPost('content'),
            'images'       => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'kategori'  => $this->request->getPost('kategori'),
            'tag'       => $this->request->getPost('tag'),
        ];

        $this->postsModel->save($data);
        session()->setFlashdata('pesan', 'Data Posts Berhasil Ditambahkan!');

        return redirect('control/posts');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Posts',
            'posts' => $this->postsModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->select('id, key, value, kategori, tag, created_at, updated_at, deleted_at');
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
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPosts->getRandomName();

            // Pindahkan Gambar
            $gambarPosts->move('img/posts', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/posts/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'judul'        => $this->request->getPost('judul'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'content'      => $this->request->getPost('content'),
            'images'       => $namaGambar,
        ];

        $data = [
            'id'        => $id,
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'kategori'  => $this->request->getPost('kategori'),
            'tag'       => $this->request->getPost('tag'),
        ];

        $this->postsModel->save($data);
        session()->setFlashdata('pesan', 'Data Posts Berhasil Diubah!');

        return redirect('control/posts');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $posts     = $this->postsModel->find($id);
        $postsJSON = json_decode($posts['value']);

        // Hapus Gambar Permanen
        unlink('img/posts/' . $postsJSON->images);

        $this->postsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Posts Berhasil Dihapus!');

        return redirect('control/posts');
    }
}

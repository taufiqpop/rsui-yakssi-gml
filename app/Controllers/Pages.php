<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $pagesModel;

    public function __construct()
    {
        $this->pagesModel = new \App\Models\PagesModel();
    }

    // List Pages
    public function index()
    {
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pages = $this->pagesModel->search($keyword);
        } else {
            $pages = $this->pagesModel;
        }

        $pages->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Pages',
            'pages'       => $pages->paginate(5, 'pages'),
            'pager'       => $pages->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/pages/index', $data);
    }

    // Detail Pages
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | Detail Pages',
            'pages' => $this->pagesModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->select('id, judul, content, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Pages',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->select('id, judul, content, images');
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/form', $data);
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
            return redirect()->to('control/pages/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarPages = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarPages->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPages->getRandomName();

            // Pindahkan Gambar
            $gambarPages->move('img/pages', $namaGambar);
        }

        $this->pagesModel->save([
            'judul'     => $this->request->getVar('judul'),
            'content'   => $this->request->getVar('content'),
            'images'    => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Pages Berhasil Ditambahkan!');

        return redirect('control/pages');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Pages',
            'pages'      => $this->pagesModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->select('id, judul, content, images');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/edit', $data);
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
            return redirect()->to('control/pages/formEdit')->withInput()->with('validation', $validation);
        }

        $gambarPages = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($gambarPages->getError() == 4) {
            $namaGambar = $this->request->getVar('imgPagesLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPages->getRandomName();

            // Pindahkan Gambar
            $gambarPages->move('img/pages', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/pages/' . $this->request->getVar('imgPagesLama'));
        }

        $this->pagesModel->save([
            'id'      => $id,
            'judul'   => $this->request->getVar('judul'),
            'content' => $this->request->getVar('content'),
            'images'  => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Pages Berhasil Diubah!');

        return redirect('control/pages');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $pages = $this->pagesModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($pages['images'] != 'default.svg') {
            // Hapus Gambar Permanen
            unlink('img/pages/' . $pages['images']);
        }

        $this->pagesModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pages Berhasil Dihapus!');

        return redirect('control/pages');
    }
}

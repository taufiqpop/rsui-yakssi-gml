<?php

namespace App\Controllers;

use App\Models\PagesModel;

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

        $this->pagesModel->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Pages',
            'pages'       => $pages->paginate(5, 'pages'),
            'pager'       => $this->pagesModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/pages/index', $data);
    }

    // Detail Pages
    public function details($id)
    {
        $pagesMod = $this->pagesModel->find($id);

        $data = [
            'title' => 'RSUI YAKSSI | Detail Pages',
            'pages' => $pagesMod,
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->select('id, judul, content, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/details', $data);
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
        $builder->select('id, judul, content, images, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/form', $data);
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
            return redirect()->to('control/pages/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarPages = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarPages->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Pindahkan File Ke Folder Img
            $gambarPages->move('img');

            // Ambil Nama File
            $namaGambar = $gambarPages->getName();
        }

        $this->pagesModel->save([
            'judul'     => $this->request->getVar('judul'),
            'content'   => $this->request->getVar('content'),
            'images'    => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Pages Berhasil Ditambahkan!');
        return redirect('control/pages/index');
    }

    // Edit Data
    public function formEdit($id)
    {
        $pagesMod = $this->pagesModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Pages',
            'pages'      => $pagesMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->select('id, judul, content, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pages'] = $query->getResultArray();

        return view('control/pages/formEdit', $data);
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

        $fileImgPages = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgPages->getError() == 4) {
            $namaImgPages = $this->request->getVar('imgPagesLama');
        } else {
            // Generate Nama File Random
            $namaImgPages = $fileImgPages->getRandomName();

            // Pindahkan Gambar
            $fileImgPages->move('img', $namaImgPages);

            // Hapus File Yang Lama
            unlink('img/' . $this->request->getVar('imgPagesLama'));
        }

        $this->pagesModel->save([
            'id'      => $id,
            'judul'   => $this->request->getVar('judul'),
            'content' => $this->request->getVar('content'),
            'images'  => $namaImgPages,
        ]);

        session()->setFlashdata('pesan', 'Data Pages Berhasil Diubah!');
        return redirect('control/pages/index');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $pagesMod = $this->pagesModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($pagesMod['images'] != 'default.svg') {

            // Hapus Gambar Permanen
            unlink('img/' . $pagesMod['images']);
        }

        $this->pagesModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pages Berhasil Dihapus!');
        return redirect('control/pages/index');
    }
}

<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new \App\Models\GalleryModel();
    }

    // List Gallery
    public function index()
    {
        $currentPage = $this->request->getVar('page_gallery') ? $this->request->getVar('page_gallery') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gallery = $this->galleryModel->search($keyword);
        } else {
            $gallery = $this->galleryModel;
        }

        $gallery->orderBy('id', 'ASC');

        $data = [
            'title'       => 'RSUI YAKSSI | Gallery',
            'gallery'     => $gallery->paginate(10, 'gallery'),
            'pager'       => $gallery->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/gallery/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Gallery',
            'validation' => \Config\Services::validation()
        ];

        return view('control/gallery/form', $data);
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
            return redirect()->to('control/gallery/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $ambilGambar = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($ambilGambar->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/gallery', $namaGambar);
        }

        $input = [
            'deskripsi' => $this->request->getPost('deskripsi'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'   => $this->request->getPost('deskripsi'),
            'value' => json_encode($input),
        ];

        $this->galleryModel->insert($data);
        session()->setFlashdata('pesan', 'Data Gallery Berhasil Ditambahkan!');

        return redirect('control/gallery');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Edit Data Gallery',
            'gallery'    => $this->galleryModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('gallery');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['gallery'] = $query->getResultArray();

        return view('control/gallery/edit', $data);
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
            return redirect()->to('control/gallery/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/gallery', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/gallery/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'deskripsi' => $this->request->getPost('deskripsi'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'   => $this->request->getPost('deskripsi'),
            'value' => json_encode($input),
        ];

        $this->galleryModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Gallery Berhasil Diubah!');

        return redirect('control/gallery');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $gallery = $this->galleryModel->find($id);
        $galleryJSON = json_decode($gallery['value']);

        // Hapus Gambar Permanen
        unlink('img/gallery/' . $galleryJSON->images);

        $this->galleryModel->delete($id);
        session()->setFlashdata('pesan', 'Data Gallery Berhasil Dihapus!');

        return redirect('control/gallery');
    }
}

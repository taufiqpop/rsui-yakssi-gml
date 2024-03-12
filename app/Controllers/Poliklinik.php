<?php

namespace App\Controllers;

class Poliklinik extends BaseController
{
    protected $poliklinikModel;

    public function __construct()
    {
        $this->poliklinikModel = new \App\Models\PoliklinikModel();
    }

    // List Poliklinik
    public function index()
    {
        $currentPage = $this->request->getVar('page_poliklinik') ? $this->request->getVar('page_poliklinik') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $poliklinik = $this->poliklinikModel->search($keyword);
        } else {
            $poliklinik = $this->poliklinikModel;
        }

        $poliklinik->orderBy('id', 'ASC');

        $data = [
            'title'       => 'RSUI YAKSSI | Poliklinik',
            'poliklinik'  => $poliklinik->paginate(10, 'poliklinik'),
            'pager'       => $poliklinik->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/poliklinik/index', $data);
    }

    // Detail Poliklinik
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | Detail Poliklinik',
            'poliklinik' => $this->poliklinikModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('poliklinik');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['poliklinik'] = $query->getResultArray();

        return view('control/poliklinik/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Poliklinik',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('poliklinik');
        $builder->select('id, key, value');
        $query   = $builder->get();

        $data['poliklinik'] = $query->getResultArray();

        return view('control/poliklinik/form', $data);
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
            return redirect()->to('control/poliklinik/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarPoliklinik = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarPoliklinik->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPoliklinik->getRandomName();

            // Pindahkan Gambar
            $gambarPoliklinik->move('img/poliklinik', $namaGambar);
        }

        $input = [
            'status'        => $this->request->getPost('status'),
            'poliklinik'    => $this->request->getPost('poliklinik'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'konten'        => $this->request->getPost('konten'),
            'images'        => $namaGambar,
        ];

        $data = [
            'key'   => $this->request->getPost('poliklinik'),
            'value' => json_encode($input),
        ];

        $this->poliklinikModel->save($data);
        session()->setFlashdata('pesan', 'Data Poliklinik Berhasil Ditambahkan!');

        return redirect('control/poliklinik');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Poliklinik',
            'poliklinik' => $this->poliklinikModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('poliklinik');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['poliklinik'] = $query->getResultArray();

        return view('control/poliklinik/edit', $data);
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
            return redirect()->to('control/poliklinik/edit')->withInput()->with('validation', $validation);
        }

        $gambarPoliklinik = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($gambarPoliklinik->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarPoliklinik->getRandomName();

            // Pindahkan Gambar
            $gambarPoliklinik->move('img/poliklinik', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/poliklinik/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'status'        => $this->request->getPost('status'),
            'poliklinik'    => $this->request->getPost('poliklinik'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'konten'        => $this->request->getPost('konten'),
            'images'        => $namaGambar,
        ];

        $data = [
            'id'    => $id,
            'key'   => $this->request->getPost('poliklinik'),
            'value' => json_encode($input),
        ];

        $this->poliklinikModel->save($data);
        session()->setFlashdata('pesan', 'Data Poliklinik Berhasil Diubah!');

        return redirect('control/poliklinik');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $poliklinik     = $this->poliklinikModel->find($id);
        $poliklinikJSON = json_decode($poliklinik['value']);

        // Hapus Gambar Permanen
        unlink('img/poliklinik/' . $poliklinikJSON->images);

        $this->poliklinikModel->delete($id);
        session()->setFlashdata('pesan', 'Data Poliklinik Berhasil Dihapus!');

        return redirect('control/poliklinik');
    }
}

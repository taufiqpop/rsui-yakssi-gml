<?php

namespace App\Controllers;

class Dokter extends BaseController
{
    protected $dokterModel;

    public function __construct()
    {
        $this->dokterModel = new \App\Models\DokterModel();
    }

    // List Dokter
    public function index()
    {
        $currentPage = $this->request->getVar('page_dokter') ? $this->request->getVar('page_dokter') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dokter = $this->dokterModel->search($keyword);
        } else {
            $dokter = $this->dokterModel;
        }

        $dokter->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Dokter',
            'dokter'      => $dokter->paginate(10, 'dokter'),
            'pager'       => $dokter->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/dokter/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Dokter',
            'validation' => \Config\Services::validation()
        ];

        return view('control/dokter/form', $data);
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
            return redirect()->to('control/dokter/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/doctors', $namaGambar);
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'spesialis' => $this->request->getPost('spesialis'),
            'photo'     => $namaGambar,
        ];

        $data = [
            'key'   => $this->request->getPost('nama'),
            'value' => json_encode($input),
        ];

        $this->dokterModel->insert($data);
        session()->setFlashdata('pesan', 'Data Dokter Berhasil Ditambahkan!');

        return redirect('control/dokter');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Edit Data Dokter',
            'dokter'     => $this->dokterModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('dokter');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['dokter'] = $query->getResultArray();

        return view('control/dokter/edit', $data);
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
            return redirect()->to('control/dokter/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/doctors', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/doctors/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'spesialis' => $this->request->getPost('spesialis'),
            'photo'     => $namaGambar,
        ];

        $data = [
            'key'   => $this->request->getPost('nama'),
            'value' => json_encode($input),
        ];

        $this->dokterModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Dokter Berhasil Diubah!');

        return redirect('control/dokter');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $dokter = $this->dokterModel->find($id);
        $dokterJSON = json_decode($dokter['value']);

        // Hapus Gambar Permanen
        unlink('img/doctors/' . $dokterJSON->photo);

        $this->dokterModel->delete($id);
        session()->setFlashdata('pesan', 'Data Dokter Berhasil Dihapus!');

        return redirect('control/dokter');
    }
}

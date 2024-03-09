<?php

namespace App\Controllers;

class About extends BaseController
{
    protected $aboutModel;

    public function __construct()
    {
        $this->aboutModel = new \App\Models\AboutModel();
    }

    // About
    public function index()
    {
        $data = [
            'title'      => 'RSUI YAKKSI | About',
            'about'      => $this->aboutModel->paginate(5, 'about'),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('about');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['about'] = $query->getResultArray();

        return view('control/about/index', $data);
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
            return redirect()->to('control/about/edit')->withInput()->with('validation', $validation);
        }

        $gambarAbout = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($gambarAbout->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarAbout->getRandomName();

            // Pindahkan Gambar
            $gambarAbout->move('img/about', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/about/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'header'    => $this->request->getPost('header'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'konten'    => $this->request->getPost('konten'),
            'images'    => $namaGambar,
        ];

        $data = [
            'id'    => $id,
            'key'   => $this->request->getPost('header'),
            'value' => json_encode($input),
        ];

        $this->aboutModel->save($data);
        session()->setFlashdata('pesan', 'Data About Berhasil Diubah!');

        return redirect('control/about');
    }
}

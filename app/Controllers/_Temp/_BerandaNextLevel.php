<?php

namespace App\Controllers;

use App\Models\BerandaModel;

class Beranda extends BaseController
{
    protected $berandaModel;
    public function __construct()
    {
        $this->berandaModel = new \App\Models\BerandaModel();
    }

    // List Beranda
    public function index()
    {
        $currentPage = $this->request->getVar('page_beranda') ? $this->request->getVar('page_beranda') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $beranda = $this->berandaModel->search($keyword);
        } else {
            $beranda = $this->berandaModel;
        }

        $this->berandaModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'RSUI YAKSSI | Beranda',
            'beranda'       => $beranda->paginate(5, 'beranda'),
            'pager'         => $this->berandaModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/beranda/index', $data);
    }

    // Detail Beranda
    public function details($id)
    {
        $berandaMod = $this->berandaModel->find($id);

        $data = [
            'title'    => 'RSUI YAKSSI | Detail Beranda',
            'beranda'  => $berandaMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('beranda');
        $builder->select('id, blok, tipe, blok, tipe, content, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['beranda'] = $query->getResultArray();

        return view('control/beranda/details', $data);
    }

    // Create & Edit Data
    public function form($id = '')
    {
        $gambarBeranda = $this->request->getFile('images');

        $berandaMod = [
            'id'        => '',
            'blok'      => $this->request->getVar('blok'),
            'tipe'      => $this->request->getVar('tipe'),
            'content'   => $this->request->getVar('content'),
            'images'    => $gambarBeranda,
        ];

        $queryResult = $this->berandaModel->find($id);

        if ($queryResult) {
            $berandaMod = $queryResult;
        } else {
        }

        $data = [
            'title'      => 'RSUI YAKSSI | Form Beranda',
            'beranda'    => $berandaMod,
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('beranda');
        $builder->select('id, blok, tipe, blok, tipe, content, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['beranda'] = $query->getResultArray();

        return view('control/beranda/form', $data);
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
            return redirect()->to('control/beranda/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarBeranda = $this->request->getFile('images');

        // Cek Gambar, Apakah Ada Gambar Lama Atau Tidak        
        if ($gambarBeranda->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarBeranda->getRandomName();

            // Pindahkan File Ke Folder img
            $gambarBeranda->move('img', $namaGambar);
        }

        // dd($this->request->getVar());
        $data = [
            'id'        => $id,
            'blok'      => $this->request->getVar('blok'),
            'tipe'      => $this->request->getVar('tipe'),
            'content'   => $this->request->getVar('content'),
            'images'    => $namaGambar,
        ];

        $this->berandaModel->insert($data, false);

        session()->setFlashdata('pesan', 'Data Beranda Berhasil Ditambahkan!');
        return redirect('control/beranda/index');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $berandaMod = $this->berandaModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($berandaMod['images'] != 'default.svg') {

            // Hapus Gambar Permanen
            unlink('img/' . $berandaMod['images']);
        }

        $this->berandaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Beranda Berhasil Dihapus!');
        return redirect('control/beranda/index');
    }
}

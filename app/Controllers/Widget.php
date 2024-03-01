<?php

namespace App\Controllers;

use App\Models\WidgetModel;

class Widget extends BaseController
{
    protected $widgetModel;
    public function __construct()
    {
        $this->widgetModel = new \App\Models\WidgetModel();
    }

    // List Widget
    public function index()
    {
        $currentPage = $this->request->getVar('page_widget') ? $this->request->getVar('page_widget') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $widget = $this->widgetModel->search($keyword);
        } else {
            $widget = $this->widgetModel;
        }

        $this->widgetModel->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Widget',
            'widget'      => $widget->paginate(5, 'widget'),
            'pager'       => $this->widgetModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/widget/index', $data);
    }

    // Detail Widget
    public function details($id)
    {
        $widgetMod = $this->widgetModel->find($id);

        $data = [
            'title'  => 'RSUI YAKSSI | Detail Widget',
            'widget' => $widgetMod,
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('widget');
        $builder->select('id, judul, subjudul, link, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['widget'] = $query->getResultArray();

        return view('control/widget/details', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title' => 'RSUI YAKSSI | Form Widget',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('widget');
        $builder->select('id, judul, subjudul, link, images, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['widget'] = $query->getResultArray();

        return view('control/widget/form', $data);
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
            return redirect()->to('control/widget/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarWidget = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarWidget->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Pindahkan File Ke Folder Img
            $gambarWidget->move('img');

            // Ambil Nama File
            $namaGambar = $gambarWidget->getName();
        }

        $this->widgetModel->save([
            'judul'     => $this->request->getVar('judul'),
            'subjudul'  => $this->request->getVar('subjudul'),
            'link'      => $this->request->getVar('link'),
            'images'    => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Widget Berhasil Ditambahkan!');
        return redirect('control/widget/index');
    }

    // Edit Data
    public function formEdit($id)
    {
        $widgetMod = $this->widgetModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Widget',
            'widget'     => $widgetMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('widget');
        $builder->select('id, judul, subjudul, link, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['widget'] = $query->getResultArray();

        return view('control/widget/formEdit', $data);
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
            return redirect()->to('control/widget/formEdit')->withInput()->with('validation', $validation);
        }

        $fileImgWidget = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgWidget->getError() == 4) {
            $namaImgWidget = $this->request->getVar('imgWidgetLama');
        } else {
            // Generate Nama File Random
            $namaImgWidget = $fileImgWidget->getRandomName();

            // Pindahkan Gambar
            $fileImgWidget->move('img', $namaImgWidget);

            // Hapus File Yang Lama
            unlink('img/' . $this->request->getVar('imgWidgetLama'));
        }

        $this->widgetModel->save([
            'id'        => $id,
            'judul'     => $this->request->getVar('judul'),
            'subjudul'  => $this->request->getVar('subjudul'),
            'link'      => $this->request->getVar('link'),
            'images'    => $namaImgWidget,
        ]);

        session()->setFlashdata('pesan', 'Data Widget Berhasil Diubah!');
        return redirect('control/widget/index');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $widgetMod = $this->widgetModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($widgetMod['images'] != 'default.svg') {

            // Hapus Gambar Permanen
            unlink('img/' . $widgetMod['images']);
        }

        $this->widgetModel->delete($id);
        session()->setFlashdata('pesan', 'Data Widget Berhasil Dihapus!');
        return redirect('control/widget/index');
    }
}

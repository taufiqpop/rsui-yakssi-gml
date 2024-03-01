<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new \App\Models\CategoryModel();
    }

    // List Category
    public function index()
    {
        $currentPage = $this->request->getVar('page_category') ? $this->request->getVar('page_category') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $category = $this->categoryModel->search($keyword);
        } else {
            $category = $this->categoryModel;
        }

        $this->categoryModel->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Category',
            'category'    => $category->paginate(5, 'category'),
            'pager'       => $this->categoryModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/category/index', $data);
    }

    // Detail Category
    public function details($id)
    {
        $categoryMod = $this->categoryModel->find($id);

        $data = [
            'title'    => 'RSUI YAKSSI | Detail Category',
            'category' => $categoryMod,
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->select('id, parent, judul, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['category'] = $query->getResultArray();

        return view('control/category/details', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Category',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->select('id, parent, judul, images, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['category'] = $query->getResultArray();

        return view('control/category/form', $data);
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
            return redirect()->to('control/category/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarCategory = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarCategory->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Pindahkan File Ke Folder Img
            $gambarCategory->move('img');

            // Ambil Nama File
            $namaGambar = $gambarCategory->getName();
        }

        $this->categoryModel->save([
            'parent' => $this->request->getVar('parent'),
            'judul'  => $this->request->getVar('judul'),
            'images' => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Category Berhasil Ditambahkan!');
        return redirect('control/category/index');
    }

    // Edit Data
    public function formEdit($id)
    {
        $categoryMod = $this->categoryModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Category',
            'category'   => $categoryMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->select('id, parent, judul, images, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['category'] = $query->getResultArray();

        return view('control/category/formEdit', $data);
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
            return redirect()->to('control/category/formEdit')->withInput()->with('validation', $validation);
        }

        $fileImgCategory = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgCategory->getError() == 4) {
            $namaImgCategory = $this->request->getVar('imgCategoryLama');
        } else {
            // Generate Nama File Random
            $namaImgCategory = $fileImgCategory->getRandomName();

            // Pindahkan Gambar
            $fileImgCategory->move('img', $namaImgCategory);

            // Hapus File Yang Lama
            unlink('img/' . $this->request->getVar('imgCategoryLama'));
        }


        $this->categoryModel->save([
            'id'     => $id,
            'parent' => $this->request->getVar('parent'),
            'judul'  => $this->request->getVar('judul'),
            'images' => $namaImgCategory,
        ]);

        session()->setFlashdata('pesan', 'Data Category Berhasil Diubah!');
        return redirect('control/category/index');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $categoryMod = $this->categoryModel->find($id);

        // Cek Jika File Gambar default.svg
        if ($categoryMod['images'] != 'default.svg') {

            // Hapus Gambar Permanen
            unlink('img/' . $categoryMod['images']);
        }

        $this->categoryModel->delete($id);
        session()->setFlashdata('pesan', 'Data Category Berhasil Dihapus!');
        return redirect('control/category/index');
    }
}

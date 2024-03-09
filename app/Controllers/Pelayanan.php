<?php

namespace App\Controllers;

class Pelayanan extends BaseController
{
    protected $pelayananModel;
    protected $logoFAModel;

    public function __construct()
    {
        $this->pelayananModel = new \App\Models\PelayananModel();
        $this->logoFAModel = new \App\Models\LogoFAModel();
    }

    // List Pelayanan
    public function index()
    {
        $currentPage = $this->request->getVar('page_pelayanan') ? $this->request->getVar('page_pelayanan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pelayanan = $this->pelayananModel->search($keyword);
        } else {
            $pelayanan = $this->pelayananModel;
        }

        $pelayanan->orderBy('id', 'ASC');

        $data = [
            'title'       => 'RSUI YAKSSI | Pelayanan',
            'pelayanan'   => $pelayanan->paginate(5, 'pelayanan'),
            'pager'       => $pelayanan->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/pelayanan/index', $data);
    }

    // Detail Pelayanan
    public function detail($id)
    {
        $data = [
            'title'     => 'RSUI YAKSSI | Detail Pelayanan',
            'pelayanan' => $this->pelayananModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pelayanan');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pelayanan'] = $query->getResultArray();

        return view('control/pelayanan/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Pelayanan',
            'logoFA'     => $this->logoFAModel->paginate(5, 'logoFA'),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pelayanan');
        $builder->select('id, key, value');
        $query   = $builder->get();

        $data['pelayanan'] = $query->getResultArray();

        return view('control/pelayanan/form', $data);
    }

    // Insert Data
    public function insert($id = '')
    {
        $input = [
            'jenis'     => $this->request->getPost('jenis'),
            'logo'      => $this->request->getPost('logo'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $data = [
            'key'   => $this->request->getPost('jenis'),
            'value' => json_encode($input),
        ];

        $this->pelayananModel->save($data);
        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil Ditambahkan!');

        return redirect('control/pelayanan');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Pelayanan',
            'pelayanan'  => $this->pelayananModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pelayanan');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pelayanan'] = $query->getResultArray();

        return view('control/pelayanan/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'jenis'     => $this->request->getPost('jenis'),
            'logo'      => $this->request->getPost('logo'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $data = [
            'id'    => $id,
            'key'   => $this->request->getPost('jenis'),
            'value' => json_encode($input),
        ];

        $this->pelayananModel->save($data);
        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil Diubah!');

        return redirect('control/pelayanan');
    }

    // Delete Data
    public function delete($id)
    {
        $this->pelayananModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil Dihapus!');

        return redirect('control/pelayanan');
    }
}

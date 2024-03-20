<?php

namespace App\Controllers;

class LogoFA extends BaseController
{
    protected $logoFAModel;

    public function __construct()
    {
        $this->logoFAModel = new \App\Models\LogoFAModel();
    }

    // List LogoFA
    public function index()
    {
        $currentPage = $this->request->getVar('page_logofa') ? $this->request->getVar('page_logofa') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $logoFA = $this->logoFAModel->search($keyword);
        } else {
            $logoFA = $this->logoFAModel;
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('logoFA');
        $builder->select('id, value');

        $logoFA->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Logo FA',
            'logoFA'      => $logoFA->paginate(100, 'logofa'),
            'pager'       => $logoFA->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/logoFA/index', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'logo'      => $this->request->getPost('logo'),
            'value'     => $this->request->getPost('value'),
        ];

        $data = [
            'value'     => json_encode($input),
        ];

        $this->logoFAModel->insert($data);
        session()->setFlashdata('pesan', 'Data Logo FA Berhasil Ditambahkan!');

        return redirect('control/logofa');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Edit Data Logo FA',
            'logoFA'     => $this->logoFAModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('logoFA');
        $builder->select('id, value', 'created_at', 'updated_at', 'deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['logoFA'] = $query->getResultArray();

        return view('control/logoFA/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'logo'      => $this->request->getPost('logo'),
            'value'     => $this->request->getPost('value'),
        ];

        $data = [
            'value'     => json_encode($input),
        ];

        $this->logoFAModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Logo FA Berhasil Diubah!');

        return redirect('control/logofa');
    }

    // Delete Data
    public function delete($id)
    {
        $this->logoFAModel->delete($id);
        session()->setFlashdata('pesan', 'Data Logo FA Berhasil Dihapus!');

        return redirect('control/logofa');
    }
}

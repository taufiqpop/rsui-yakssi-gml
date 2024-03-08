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
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $logoFA = $this->logoFAModel->search($keyword);
        } else {
            $logoFA = $this->logoFAModel;
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('logoFA');
        $builder->select('id, value');
        $query   = $builder->get();

        $data['logoFA'] = $query->getResultArray();

        $logoFA->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Logo FA',
            'logoFA'      => $logoFA->paginate(5, 'logoFA'),
            'pager'       => $logoFA->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/logoFA/index', $data);
    }

    // Insert Data
    public function insert($id = '')
    {
        $input = [
            'logo'      => $this->request->getPost('logo'),
            'value'     => $this->request->getPost('value'),
        ];

        $data = [
            'value' => json_encode($input),
        ];

        $this->logoFAModel->save($data);
        session()->setFlashdata('pesan', 'Data Logo Berhasil Ditambahkan!');

        return redirect('control/logofa');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Logo FA',
            'logoFA'     => $this->logoFAModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('logoFA');
        $builder->select('id, value');
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
            'id'    => $id,
            'value' => json_encode($input),
        ];

        $this->logoFAModel->save($data);
        session()->setFlashdata('pesan', 'Data Logo Berhasil Diubah!');

        return redirect('control/logofa');
    }

    // Delete Data
    public function delete($id)
    {
        $this->logoFAModel->delete($id);
        session()->setFlashdata('pesan', 'Data Logo Berhasil Dihapus!');

        return redirect('control/logofa');
    }
}

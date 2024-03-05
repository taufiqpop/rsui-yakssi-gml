<?php

namespace App\Controllers;

class Pelayanan extends BaseController
{
    protected $pelayananModel;

    public function __construct()
    {
        $this->pelayananModel = new \App\Models\PelayananModel();
    }

    // List Pelayanan
    public function index()
    {
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pelayanan = $this->pelayananModel->search($keyword);
        } else {
            $pelayanan = $this->pelayananModel;
        }

        $pelayanan->orderBy('id', 'DESC');

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
            'title' => 'RSUI YAKSSI | Detail Pelayanan',
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
}

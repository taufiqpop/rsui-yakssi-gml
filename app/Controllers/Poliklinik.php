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
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $poliklinik = $this->poliklinikModel->search($keyword);
        } else {
            $poliklinik = $this->poliklinikModel;
        }

        $poliklinik->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Poliklinik',
            'poliklinik'  => $poliklinik->paginate(5, 'poliklinik'),
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
}

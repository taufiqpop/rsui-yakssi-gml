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
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dokter = $this->dokterModel->search($keyword);
        } else {
            $dokter = $this->dokterModel;
        }

        $dokter->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Dokter',
            'dokter'      => $dokter->paginate(5, 'dokter'),
            'pager'       => $dokter->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/dokter/index', $data);
    }
}

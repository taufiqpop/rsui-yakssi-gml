<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    protected $pesanModel;

    public function __construct()
    {
        $this->pesanModel    = new \App\Models\PesanModel();
    }

    // Pesan
    public function index()
    {
        $currentPage = $this->request->getVar('page_pesan') ? $this->request->getVar('page_pesan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pesan = $this->pesanModel->search($keyword);
        } else {
            $pesan = $this->pesanModel;
        }

        $this->pesanModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'RSUI YAKSSI | Pesan',
            'pesan'         => $pesan->paginate(5, 'pesan'),
            'pager'         => $this->pesanModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('user/pesan', $data);
    }
}

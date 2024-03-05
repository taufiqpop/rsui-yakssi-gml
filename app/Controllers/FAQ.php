<?php

namespace App\Controllers;

class FAQ extends BaseController
{
    protected $faqModel;

    public function __construct()
    {
        $this->faqModel = new \App\Models\FAQModel();
    }

    // List FAQ
    public function index()
    {
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $faq = $this->faqModel->search($keyword);
        } else {
            $faq = $this->faqModel;
        }

        $faq->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | FAQ',
            'faq'         => $faq->paginate(5, 'faq'),
            'pager'       => $faq->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/faq/index', $data);
    }

    // Detail FAQ
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | Detail FAQ',
            'faq' => $this->faqModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('faq');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['faq'] = $query->getResultArray();

        return view('control/faq/detail', $data);
    }
}

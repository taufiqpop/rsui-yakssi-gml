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

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form FAQ',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('faq');
        $builder->select('id, key, value');
        $query   = $builder->get();

        $data['faq'] = $query->getResultArray();

        return view('control/faq/form', $data);
    }

    // Insert Data
    public function insert($id = '')
    {
        $input = [
            'pertanyaan'     => $this->request->getPost('pertanyaan'),
            'jawaban'      => $this->request->getPost('jawaban'),
        ];

        $data = [
            'key'   => $this->request->getPost('pertanyaan'),
            'value' => json_encode($input),
        ];

        $this->faqModel->save($data);
        session()->setFlashdata('pesan', 'Data FAQ Berhasil Ditambahkan!');

        return redirect('control/faq');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'   => 'RSUI YAKKSI | Edit Data FAQ',
            'faq'     => $this->faqModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('faq');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['faq'] = $query->getResultArray();

        return view('control/faq/edit', $data);
    }


    // Update Data
    public function update($id)
    {
        $input = [
            'pertanyaan'   => $this->request->getPost('pertanyaan'),
            'jawaban'      => $this->request->getPost('jawaban'),
        ];

        $data = [
            'id'    => $id,
            'key'   => $this->request->getPost('pertanyaan'),
            'value' => json_encode($input),
        ];

        $this->faqModel->save($data);
        session()->setFlashdata('pesan', 'Data Logo Berhasil Diubah!');

        return redirect('control/faq');
    }

    // Delete Data
    public function delete($id)
    {
        $this->faqModel->delete($id);
        session()->setFlashdata('pesan', 'Data Logo Berhasil Dihapus!');

        return redirect('control/faq');
    }
}

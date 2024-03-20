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
        $currentPage = $this->request->getVar('page_faq') ? $this->request->getVar('page_faq') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $faq = $this->faqModel->search($keyword);
        } else {
            $faq = $this->faqModel;
        }

        $faq->orderBy('id', 'ASC');

        $data = [
            'title'       => 'RSUI YAKSSI | FAQ',
            'faq'         => $faq->paginate(10, 'faq'),
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

        return view('control/faq/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'href'         => $this->request->getPost('href'),
            'pertanyaan'   => $this->request->getPost('pertanyaan'),
            'jawaban'      => $this->request->getPost('jawaban'),
        ];

        $data = [
            'key'   => $this->request->getPost('href'),
            'value' => json_encode($input),
        ];

        $this->faqModel->insert($data);
        session()->setFlashdata('pesan', 'Data FAQ Berhasil Ditambahkan!');

        return redirect('control/faq');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'   => 'RSUI YAKSSI | Edit Data FAQ',
            'faq'     => $this->faqModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('faq');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['faq'] = $query->getResultArray();

        return view('control/faq/edit', $data);
    }


    // Update Data
    public function update($id)
    {
        $input = [
            'href'         => $this->request->getPost('href'),
            'pertanyaan'   => $this->request->getPost('pertanyaan'),
            'jawaban'      => $this->request->getPost('jawaban'),
        ];

        $data = [
            'key'   => $this->request->getPost('href'),
            'value' => json_encode($input),
        ];

        $this->faqModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data FAQ Berhasil Diubah!');

        return redirect('control/faq');
    }

    // Delete Data
    public function delete($id)
    {
        $this->faqModel->delete($id);
        session()->setFlashdata('pesan', 'Data FAQ Berhasil Dihapus!');

        return redirect('control/faq');
    }
}

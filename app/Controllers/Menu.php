<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new \App\Models\MenuModel();
    }

    // List Menu
    public function index()
    {
        $currentPage = $this->request->getVar('page_menu') ? $this->request->getVar('page_menu') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $menu = $this->menuModel->search($keyword);
        } else {
            $menu = $this->menuModel;
        }

        $this->menuModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'RSUI YAKSSI | Menu',
            'menu'          => $menu->paginate(5, 'menu'),
            'pager'         => $this->menuModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/menu/index', $data);
    }

    // Detail Menu
    public function details($id)
    {
        $menuMod = $this->menuModel->find($id);

        $data = [
            'title' => 'RSUI YAKSSI | Detail Menu',
            'menu'  => $menuMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('menu');
        $builder->select('id, judul, link, parent, posisi, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['menu'] = $query->getResultArray();

        return view('control/menu/details', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title' => 'RSUI YAKSSI | Form Menu',
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('menu');
        $builder->select('id, judul, link, parent, posisi, created_at, updated_at, deleted_at');
        $query = $builder->get();

        $data['menu'] = $query->getResultArray();

        return view('control/menu/form', $data);
    }

    // Save Data
    public function save()
    {
        $this->menuModel->save([
            'judul'  => $this->request->getVar('judul'),
            'link'   => $this->request->getVar('link'),
            'parent' => $this->request->getVar('parent'),
            'posisi' => $this->request->getVar('posisi')
        ]);

        session()->setFlashdata('pesan', 'Data Menu Berhasil Ditambahkan!');
        return redirect('control/menu/index');
    }

    // Edit Data
    public function formEdit($id)
    {
        $menuMod = $this->menuModel->find($id);

        $data = [
            'title'      => 'RSUI YAKKSI | Form Edit Data Menu',
            'menu'       => $menuMod,
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('menu');
        $builder->select('id, judul, link, parent, posisi, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['menu'] = $query->getResultArray();

        return view('control/menu/formEdit', $data);
    }

    // Update Data
    public function update($id)
    {
        $this->menuModel->save([
            'id'     => $id,
            'judul'  => $this->request->getVar('judul'),
            'link'   => $this->request->getVar('link'),
            'parent' => $this->request->getVar('parent'),
            'posisi' => $this->request->getVar('posisi'),
        ]);

        session()->setFlashdata('pesan', 'Data Menu Berhasil Diubah!');
        return redirect('control/menu/index');
    }

    // Delete Data
    public function delete($id)
    {
        $this->menuModel->delete($id);
        session()->setFlashdata('pesan', 'Data Menu Berhasil Dihapus!');
        return redirect('control/menu/index');
    }
}

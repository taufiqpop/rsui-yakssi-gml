<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        // $this->usersModel = new \Myth\Auth\Models\UserModel();
        $this->usersModel = new \App\Models\UsersModel();
    }

    // User List
    public function index()
    {
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $users = $this->usersModel->search($keyword);
        } else {
            $users = $this->usersModel;
        }

        $this->usersModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'RSUI YAKSSI | User List',
            'users'         => $users->paginate(5, 'users'),
            'pager'         => $this->usersModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('admin/index', $data);
    }

    // Details Data
    public function detail($id)
    {
        $usMod = $this->usersModel->findAll();
        // dd($usMod);

        $data = [
            'title' => 'RSUI YAKSSI | User Detail',
            'users' => $usMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getResultArray();

        return view('admin/detail', $data);
    }

    // Save Data
    public function save()
    {
        $this->usersModel->save([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'password_hash' => $this->request->getVar('password_hash'),
            'user_image' => $this->request->getVar('user_image'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect('admin');
    }

    // Edit Data
    public function edit($id)
    {
        $usMod = $this->usersModel->find($id);

        $data = [
            'title' => 'RSUI YAKSSI | Form Edit Data',
            'users' => $usMod,
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('id, username, email, fullname, user_image');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['user'] = $query->getResultArray();

        return view('admin/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $usMod = $this->usersModel->find($id);

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('id, username, email, fullname, user_image');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['user'] = $query->getResultArray();

        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/edit')->withInput()->with('validation', $validation);
        }

        $fileImgUser = $this->request->getFile('images');

        // Cek gambar, apakah tetap gambar lama
        if ($fileImgUser->getError() == 4) {
            $namaImgUser = $this->request->getVar('imgUserLama');
        } else {
            // Generate nama file random
            $namaImgUser = $fileImgUser->getRandomName();

            // Pindahkan gambar
            $fileImgUser->move('img', $namaImgUser);

            // Jangan Hapus File Default
            if ($usMod['user_image'] != 'default.svg') {
                unlink('img/' . $this->request->getVar('imgUserLama'));
                // unlink('img/' . $usMod['user_image']);
            }
        }

        $this->usersModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'user_image' => $namaImgUser,
            'name' => $this->request->getVar('name'),
        ]);
        // dd($this->request->getVar());

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
        return redirect('admin/index');
    }

    // Delete Data 
    public function delete($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $hapus = $usersModel->find($id);

        if ($hapus['user_image'] != 'default.svg') {
            unlink('img/' . $hapus['user_image']);
        }

        $usersModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect('admin/index');
    }
}

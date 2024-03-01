<?php

namespace App\Controllers;

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
            'title'       => 'RSUI YAKSSI | User List',
            'users'       => $users->paginate(5, 'users'),
            'pager'       => $this->usersModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('user/admin/index', $data);
    }

    // Detail User
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | User Detail',
            'users' => $this->usersModel->findAll(),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query   = $builder->get();

        $data['user'] = $query->getResultArray();

        return view('user/admin/detail', $data);
    }

    // Delete Data 
    public function delete($id)
    {
        $hapusUser = $this->usersModel->find($id);

        if ($hapusUser['user_image'] != 'default.svg') {
            unlink('img/' . $hapusUser['user_image']);
        }

        $this->usersModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');

        return redirect('user/admin/index');
    }
}

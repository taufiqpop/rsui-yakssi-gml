<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\WidgetModel;
use App\Models\PagesModel;
use App\Models\PostsModel;
use App\Models\CategoryModel;
use App\Models\PesanModel;

class User extends BaseController
{
    protected $usersModel;
    protected $widgetModel;
    protected $pagesModel;
    protected $postsModel;
    protected $categoryModel;
    protected $pesanModel;

    public function __construct()
    {
        $this->usersModel    = new \App\Models\UsersModel();
        $this->widgetModel   = new \App\Models\WidgetModel();
        $this->pagesModel    = new \App\Models\PagesModel();
        $this->postsModel    = new \App\Models\PostsModel();
        $this->categoryModel = new \App\Models\CategoryModel();
        $this->pesanModel    = new \App\Models\PesanModel();
    }

    // Dashboard
    public function index()
    {
        $data = [
            'title'         => 'RSUI YAKSSI | Dashboard',
            'jmlUsers'      => $this->usersModel->jumlahUsers(),
            'jmlWidget'     => $this->widgetModel->jumlahWidget(),
            'jmlPages'      => $this->pagesModel->jumlahPages(),
            'jmlPosts'      => $this->postsModel->jumlahPosts(),
            'jmlCategory'   => $this->categoryModel->jumlahCategory(),
            'jmlPesan'      => $this->pesanModel->jumlahPesan(),
        ];
        return view('user/index', $data);
    }

    // My Profile
    public function profile()
    {
        $data = [
            'title' => 'RSUI YAKSSI| My Profile',
        ];
        return view('user/profile', $data);
    }

    // Pesan
    public function pesan()
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

<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new \App\Models\GalleryModel();
    }

    // List Gallery
    public function index()
    {
        $currentPage = $this->request->getVar('page_pages') ? $this->request->getVar('page_pages') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gallery = $this->galleryModel->search($keyword);
        } else {
            $gallery = $this->galleryModel;
        }

        $gallery->orderBy('id', 'DESC');

        $data = [
            'title'       => 'RSUI YAKSSI | Gallery',
            'gallery'  => $gallery->paginate(5, 'gallery'),
            'pager'       => $gallery->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/gallery/index', $data);
    }

    // Detail Gallery
    public function detail($id)
    {
        $data = [
            'title' => 'RSUI YAKSSI | Detail Gallery',
            'gallery' => $this->galleryModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('gallery');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['gallery'] = $query->getResultArray();

        return view('control/gallery/detail', $data);
    }
}

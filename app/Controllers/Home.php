<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $settingsModel;
    protected $dokterModel;
    protected $faqModel;
    protected $galleryModel;
    protected $pagesModel;
    protected $pasienModel;
    protected $pelayananModel;
    protected $poliklinikModel;
    protected $postsModel;

    public function __construct()
    {
        $this->settingsModel    = new \App\Models\SettingsModel();
        $this->dokterModel      = new \App\Models\DokterModel();
        $this->faqModel         = new \App\Models\FAQModel();
        $this->galleryModel     = new \App\Models\GalleryModel();
        $this->pagesModel       = new \App\Models\PagesModel();
        $this->pasienModel      = new \App\Models\PasienModel();
        $this->pelayananModel   = new \App\Models\PelayananModel();
        $this->poliklinikModel  = new \App\Models\PoliklinikModel();
        $this->postsModel       = new \App\Models\PostsModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'RSUI YAKSSI Gemolong',
            'settings'      => $this->settingsModel->paginate(4, 'settings'),
            'faq'           => $this->faqModel->paginate(4, 'faq'),
            'gallery'       => $this->galleryModel->paginate(4, 'gallery'),
            'pages'         => $this->pagesModel->paginate(4, 'pages'),
            'pasien'        => $this->pasienModel->paginate(4, 'pasien'),
            'pelayanan'     => $this->pelayananModel->paginate(4, 'pelayanan'),
            'poliklinik'    => $this->poliklinikModel->paginate(4, 'poliklinik'),
            'posts'         => $this->postsModel->paginate(4, 'posts'),
        ];

        return view('home/index', $data);
    }

    public function doctors()
    {
        $data = [
            'title'     => 'RSUI YAKSSI | Dokter',
            'settings'  => $this->settingsModel->paginate(5, 'settings'),
        ];

        return view('home/doctors', $data);
    }
}

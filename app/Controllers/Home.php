<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $berandaModel;
    protected $dokterModel;
    protected $faqModel;
    protected $galleryModel;
    protected $pagesModel;
    protected $pasienModel;
    protected $pelayananModel;
    protected $poliklinikModel;
    protected $postsModel;
    protected $settingsModel;

    public function __construct()
    {
        $this->berandaModel     = new \App\Models\BerandaModel();
        $this->dokterModel      = new \App\Models\DokterModel();
        $this->faqModel         = new \App\Models\FAQModel();
        $this->galleryModel     = new \App\Models\GalleryModel();
        $this->pagesModel       = new \App\Models\PagesModel();
        $this->pasienModel      = new \App\Models\PasienModel();
        $this->pelayananModel   = new \App\Models\PelayananModel();
        $this->poliklinikModel  = new \App\Models\PoliklinikModel();
        $this->postsModel       = new \App\Models\PostsModel();
        $this->settingsModel    = new \App\Models\SettingsModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'RSUI YAKSSI Gemolong',
            'beranda'       => $this->berandaModel->paginate(4, 'beranda'),
            'dokter'        => $this->dokterModel->paginate(4, 'dokter'),
            'faq'           => $this->faqModel->paginate(4, 'faq'),
            'gallery'       => $this->galleryModel->paginate(4, 'gallery'),
            'pasien'        => $this->pasienModel->paginate(4, 'pasien'),
            'pelayanan'     => $this->pelayananModel->paginate(4, 'pelayanan'),
            'poliklinik'    => $this->poliklinikModel->paginate(4, 'poliklinik'),
            'posts'         => $this->postsModel->paginate(4, 'posts'),
            'settings'      => $this->settingsModel->paginate(4, 'settings'),
        ];

        return view('home/index', $data);
    }

    public function doctors()
    {
        $data = [
            'title'     => 'RSUI YAKSSI | Dokter',
            'dokter'    => $this->dokterModel->paginate(4, 'dokter'),
            'settings'  => $this->settingsModel->paginate(5, 'settings'),
        ];

        return view('home/doctors', $data);
    }
}

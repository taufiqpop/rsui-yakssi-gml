<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $aboutModel;
    protected $berandaModel;
    protected $dokterModel;
    protected $faqModel;
    protected $galleryModel;
    protected $pasienModel;
    protected $pelayananModel;
    protected $pesanModel;
    protected $poliklinikModel;
    protected $settingsModel;

    public function __construct()
    {
        $this->aboutModel       = new \App\Models\AboutModel();
        $this->berandaModel     = new \App\Models\BerandaModel();
        $this->dokterModel      = new \App\Models\DokterModel();
        $this->faqModel         = new \App\Models\FAQModel();
        $this->galleryModel     = new \App\Models\GalleryModel();
        $this->pasienModel      = new \App\Models\PasienModel();
        $this->pelayananModel   = new \App\Models\PelayananModel();
        $this->pesanModel       = new \App\Models\PesanModel();
        $this->poliklinikModel  = new \App\Models\PoliklinikModel();
        $this->settingsModel    = new \App\Models\SettingsModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'RSUI YAKSSI Gemolong',
            'about'         => $this->aboutModel->paginate(1, 'about'),
            'beranda'       => $this->berandaModel->paginate(10, 'beranda'),
            'dokter'        => $this->dokterModel->paginate(4, 'dokter'),
            'faq'           => $this->faqModel->paginate(100, 'faq'),
            'gallery'       => $this->galleryModel->paginate(100, 'gallery'),
            'pasien'        => $this->pasienModel->paginate(4, 'pasien'),
            'pelayanan'     => $this->pelayananModel->paginate(100, 'pelayanan'),
            'poliklinik'    => $this->poliklinikModel->paginate(100, 'poliklinik'),
            'settings'      => $this->settingsModel->paginate(1, 'settings'),

            // Jumlah
            'jmlDokter'     => $this->dokterModel->jumlahDokter(),
            'jmlPelayanan'  => $this->pelayananModel->jumlahPelayanan(),
            'jmlPoliklinik' => $this->poliklinikModel->jumlahPoliklinik(),
            'jmlGallery'    => $this->galleryModel->jumlahGallery(),
        ];

        return view('home/index', $data);
    }

    // List Dokter
    public function doctors()
    {
        $data = [
            'title'     => 'RSUI YAKSSI | Dokter',
            'dokter'    => $this->dokterModel->paginate(100, 'dokter'),
            'settings'  => $this->settingsModel->paginate(1, 'settings'),
        ];

        return view('home/doctors', $data);
    }

    // Save Contact Data
    public function contact()
    {
        $data = [
            'name'    => $this->request->getVar('name'),
            'email'   => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ];

        $this->pesanModel->insert($data);
        session()->setFlashdata('pesan', 'Pesan Berhasil Dikirim! Terima Kasih!');

        return redirect('index');
    }
}

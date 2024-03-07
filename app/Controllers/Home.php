<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $settingsModel;
    protected $pasienModel;
    protected $dokterModel;

    public function __construct()
    {
        $this->settingsModel = new \App\Models\SettingsModel();
        $this->pasienModel = new \App\Models\PasienModel();
        $this->dokterModel = new \App\Models\DokterModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'RSUI YAKSSI Gemolong',
            'settings'  => $this->settingsModel->paginate(5, 'settings'),
            'pasien'    => $this->pasienModel->paginate(5, 'pasien'),
            'dokter'    => $this->dokterModel->paginate(5, 'dokter'),
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

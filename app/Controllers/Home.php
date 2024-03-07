<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $settingsModel;
    protected $pasienModel;

    public function __construct()
    {
        $this->settingsModel = new \App\Models\SettingsModel();
        $this->pasienModel = new \App\Models\PasienModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'RSUI YAKSSI Gemolong',
            'settings'  => $this->settingsModel->paginate(5, 'settings'),
            'pasien'    => $this->pasienModel->paginate(5, 'pasien'),
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

<?php

namespace App\Controllers;

use App\Models\SettingsModel;

class RSUIYAKSSI extends BaseController
{
    protected $settingsModel;
    public function __construct()
    {
        $this->settingsModel = new \App\Models\SettingsModel();
    }

    public function index()
    {
        $settings = $this->settingsModel;

        $data = [
            'title'     => 'RSUI YAKSSI Gemolong',
            'settings'  => $settings->paginate(5, 'settings'),
        ];
        return view('rsuiyakssi/index', $data);
    }

    public function doctors()
    {
        $settings = $this->settingsModel;

        $data = [
            'title'     => 'RSUI YAKSSI | Dokter',
            'settings'  => $settings->paginate(5, 'settings'),
        ];

        return view('rsuiyakssi/doctors', $data);
    }
}

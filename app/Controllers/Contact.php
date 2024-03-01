<?php

namespace App\Controllers;

use App\Models\PesanModel;
use App\Models\SettingsModel;

class Contact extends BaseController
{
    protected $pesanModel;
    protected $settingsModel;

    public function __construct()
    {
        $this->pesanModel    = new \App\Models\PesanModel();
        $this->settingsModel = new \App\Models\SettingsModel();
    }

    public function contact()
    {
        $settings = $this->settingsModel;

        $data = [
            'title'       => 'RSUI YAKSSI | Contact',
            'settings'    => $settings->paginate(5, 'settings'),
        ];

        return view('rsuiyakssi/contact', $data);
    }

    // Save Data
    public function save()
    {
        $this->pesanModel->save([
            'name'    => $this->request->getVar('name'),
            'email'   => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ]);

        session()->setFlashdata('pesan', 'Pesan Berhasil Dikirim! Terima Kasih!');
        return redirect('rsuiyakssi/contact');
    }
}

<?php

namespace App\Controllers;

use App\Models\SettingsModel;

class Settings extends BaseController
{
    protected $settingsModel;
    public function __construct()
    {
        $this->settingsModel = new \App\Models\SettingsModel();
    }

    // List Settings
    public function index()
    {
        $settings = $this->settingsModel;

        $data = [
            'title'       => 'RSUI YAKSSI | Settings',
            'settings'    => $settings->paginate(5, 'settings'),
        ];

        return view('control/settings/index', $data);
    }

    // Update Data
    public function update($id)
    {
        $this->settingsModel->save([
            'id'         => $id,
            'nama'       => $this->request->getVar('nama'),
            'owner'      => $this->request->getVar('owner'),
            'telepon'    => $this->request->getVar('telepon'),
            'author'     => $this->request->getVar('author'),
            'email'      => $this->request->getVar('email'),
            'fax'        => $this->request->getVar('fax'),
            'instagram'  => $this->request->getVar('instagram'),
            'facebook'   => $this->request->getVar('facebook'),
            'alamat'     => $this->request->getVar('alamat'),
            'jadwal'     => $this->request->getVar('jadwal'),
        ]);

        session()->setFlashdata('pesan', 'Data Settings Berhasil Diubah!');
        return redirect('control/settings/index');
    }
}

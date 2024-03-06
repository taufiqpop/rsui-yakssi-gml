<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;

class ChangePassword extends BaseController
{
    public function index($id = null)
    {
        if ($id == null) {
            return redirect()->to(base_url('user/profile'));
        } else {
            $data = [
                'title' => 'RSUI YAKSSI | Change Password',
                'id'    => $id,
            ];

            return view('user/password/index', $data);
        }
    }

    public function setPassword()
    {
        $id = $this->request->getVar('id');
        $rules = [
            'password'     => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            $data = [
                'id' => $id,
                'title' => 'Update Password',
                'validation' => $this->validator,
            ];

            return view('user/password/index', $data);
        } else {
            $userModel = new UserModel();
            $data = [
                'password_hash' => Password::hash($this->request->getVar('password')),
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
            ];
            $userModel->update($this->request->getVar('id'), $data);
            session()->setFlashdata('pesan', 'Password Berhasil Diubah!');

            return redirect()->to(base_url('profile'));
        }
    }
}

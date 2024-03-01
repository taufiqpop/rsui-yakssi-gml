<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Login Page
    public function login()
    {
        $data['title'] = 'RSUI YAKSSI | Login';
        return view('auth/login', $data);
    }
}

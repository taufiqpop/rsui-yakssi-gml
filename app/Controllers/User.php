<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $usersModel;
    protected $dokterModel;
    protected $faqModel;
    protected $galleryModel;
    protected $pagesModel;
    protected $pasienModel;
    protected $pelayananModel;
    protected $pesanModel;
    protected $poliklinikModel;
    protected $postsModel;

    public function __construct()
    {
        $this->usersModel       = new \App\Models\UsersModel();
        $this->dokterModel      = new \App\Models\DokterModel();
        $this->faqModel         = new \App\Models\FAQModel();
        $this->galleryModel     = new \App\Models\GalleryModel();
        $this->pagesModel       = new \App\Models\PagesModel();
        $this->pasienModel      = new \App\Models\PasienModel();
        $this->pelayananModel   = new \App\Models\PelayananModel();
        $this->pesanModel       = new \App\Models\PesanModel();
        $this->poliklinikModel  = new \App\Models\PoliklinikModel();
        $this->postsModel       = new \App\Models\PostsModel();
    }

    // Dashboard
    public function index()
    {
        $data = [
            'title'         => 'RSUI YAKSSI | Dashboard',
            'jmlUsers'      => $this->usersModel->jumlahUsers(),
            'jmlDokter'     => $this->dokterModel->jumlahDokter(),
            'jmlFAQ'        => $this->faqModel->jumlahFAQ(),
            'jmlGallery'    => $this->galleryModel->jumlahGallery(),
            'jmlPages'      => $this->pagesModel->jumlahPages(),
            'jmlPasien'     => $this->pasienModel->jumlahPasien(),
            'jmlPelayanan'  => $this->pelayananModel->jumlahPelayanan(),
            'jmlPesan'      => $this->pesanModel->jumlahPesan(),
            'jmlPoliklinik' => $this->poliklinikModel->jumlahPoliklinik(),
            'jmlPosts'      => $this->postsModel->jumlahPosts(),
        ];

        return view('user/index', $data);
    }

    // My Profile
    public function profile()
    {
        $data = [
            'title' => 'RSUI YAKSSI| My Profile',
        ];

        return view('user/profile', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKSSI | Form Edit Data',
            'users'      => $this->usersModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('id, username, email, fullname, user_image');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('user/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $users = $this->usersModel->find($id);

        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('user/edit')->withInput()->with('validation', $validation);
        }

        $fileImgUser = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgUser->getError() == 4) {
            $namaImgUser = $this->request->getVar('imgUserLama');
        } else {
            // Generate Nama File Random
            $namaImgUser = $fileImgUser->getRandomName();

            // Pindahkan Gambar
            $fileImgUser->move('img/user', $namaImgUser);

            // Jangan Hapus File default.svg
            if ($users['user_image'] != 'default.svg') {
                unlink('img/user/' . $this->request->getVar('imgUserLama'));
            }
        }

        $this->usersModel->save([
            'id'            => $id,
            'email'         => $this->request->getVar('email'),
            'username'      => $this->request->getVar('username'),
            'fullname'      => $this->request->getVar('fullname'),
            'user_image'    => $namaImgUser,
        ]);

        session()->setFlashdata('pesan', 'Data User Berhasil Diubah!');

        return redirect('profile');
    }
}

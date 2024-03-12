<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>vendor-frontend/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>css/style-frontend.css" rel="stylesheet">

    <!-- My CSS Frontend -->
    <link href="<?= base_url(); ?>css/my-style-frontend.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar -->
    <?php foreach ($settings as $setting) : ?>
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="align-items-center d-none d-md-flex">
                    <i class="bi bi-clock"></i> <?= $setting['jadwal']; ?>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-clock d-flex align-items-center ms-4"></i>
                    <span>
                        <?php
                        // Time Zone
                        date_default_timezone_set('Asia/Jakarta');
                        $hariIni = new DateTime();
                        echo $hariIni->format('l, d F Y')
                        ?>
                        (<span id="jam"></span>
                        <?= $hariIni->format('A') ?>)
                    </span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <!-- Logo RSUI -->
                <a href="<?= base_url(); ?>" class="logo me-auto"><img src="<?= base_url(); ?>img/logo.png" alt=""> <?= $setting['nama']; ?></a>

                <!-- Navbar -->
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#about">About</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#services">Pelayanan</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#departments">Poliklinik</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#doctors">Dokter</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#faq">FAQ</a></li>
                        <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url(); ?>berita/umum">Umum</a></li>
                                <li><a href="<?= base_url(); ?>berita/event">Event</a></li>
                                <li><a href="<?= base_url(); ?>berita/karir">Karir</a></li>
                                <li><a href="<?= base_url(); ?>berita/kerjasama">Kerja Sama</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>index#contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <a href="https://api.whatsapp.com/send?phone=<?= $setting['telepon']; ?>&text=Halo%20Admin%20Saya%20Mau%20Booking%20Daftar" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline"><strong>Booking</span> Online</strong></a>
            </div>

            <!-- Messages -->
            <div class="container mt-4">
                <div class="row">
                    <center>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                    </center>
                </div>
            </div>
        </header>


        <!-- Main Content -->
        <div id="content">

            <?= $this->renderSection('page-content'); ?>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    Copyright <strong><?= date('Y'); ?> <a href="<?= base_url(); ?>user" style="color:black;" target="_blank">&copy;</a> <span><?= $setting['owner']; ?></span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
    <?php endforeach; ?>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>vendor-frontend/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url(); ?>vendor-frontend/aos/aos.js"></script>
    <script src="<?= base_url(); ?>vendor-frontend/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>vendor-frontend/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>vendor-frontend/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>js/main-frontend.js"></script>

    <!-- My JS Frontend -->
    <script src="<?= base_url(); ?>js/my-scripts-frontend.js"></script>
</body>

</html>
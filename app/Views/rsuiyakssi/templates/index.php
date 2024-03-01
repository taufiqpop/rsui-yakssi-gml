<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>vendor-frontend/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor-frontend/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>css/style-frontend.css" rel="stylesheet">

    <!-- My CSS Frontend -->
    <link href="<?= base_url(); ?>css/my-style-frontend.css" rel="stylesheet">
</head>

<body>

    <!-- Top Bar -->
    <?php foreach ($settings as $settings) : ?>
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="align-items-center d-none d-md-flex">
                    <i class="bi bi-clock"></i> <?= $settings['jadwal']; ?>
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
                        <?php echo $hariIni->format('A') ?>)
                    </span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <!-- Logo RSUI -->
                <a href="<?= base_url(); ?>rsuiyakssi" class="logo me-auto"><img src="<?= base_url(); ?>img/logo.png" alt=""> <?= $settings['nama']; ?></a>
            <?php endforeach; ?>
            <!-- Navbar -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="index#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="index#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index#services">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="index#departments">Poliklinik</a></li>
                    <li><a class="nav-link scrollto" href="index#doctors">Dokter</a></li>
                    <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Umum</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href="#">Karir</a></li>
                            <li><a href="#">Kerja Sama</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>rsuiyakssi/contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="https://api.whatsapp.com/send?phone=<?= $settings['telepon']; ?>&text=Halo%20Admin%20Saya%20Mau%20Booking%20Daftar" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline"><strong>Booking</span> Online</strong></a>
            </div>
        </header>


        <!-- Main Content -->
        <div id="content">

            <?= $this->renderSection('page-content'); ?>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    Copyright <strong><?= date('Y'); ?> <a href="<?= base_url(); ?>admin" style="color:black;" target="_blank">&copy;</a> <span><?= $settings['owner']; ?></span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- JavaScript -->
        <script src="<?= base_url(); ?>vendor-frontend/purecounter/purecounter_vanilla.js"></script>
        <script src="<?= base_url(); ?>vendor-frontend/aos/aos.js"></script>
        <script src="<?= base_url(); ?>vendor-frontend/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>vendor-frontend/glightbox/js/glightbox.min.js"></script>
        <script src="<?= base_url(); ?>vendor-frontend/swiper/swiper-bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Main JS -->
        <script src="<?= base_url(); ?>js/main-frontend.js"></script>

        <!-- My JS Frontend -->
        <script src="<?= base_url(); ?>js/my-scripts-frontend.js"></script>
</body>

</html>
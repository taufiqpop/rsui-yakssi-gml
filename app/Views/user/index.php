<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Dashboard -->
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">

            <!-- Dashboard -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <div class="row">
                <!-- Total Users -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUsers; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>admin">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pesan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pesan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPesan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>pesan">
                                        <i class="fas fa-envelope fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Dokter -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dokter</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlDokter; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/dokter">
                                        <i class="fas fa-hand-holding-medical fa-2x text-info"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Poliklinik -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Poliklinik</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPoliklinik; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/poliklinik">
                                        <i class="fas fa-clinic-medical fa-2x text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Gallery -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gallery</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlGallery; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/gallery">
                                        <i class="fas fa-images fa-2x text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total FAQ -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">FAQ</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlFAQ; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/faq">
                                        <i class="fas fa-list fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pasien -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jenis Pasien</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPasien; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/pasien">
                                        <i class="fas fa-child fa-2x text-info"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pelayanan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pelayanan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPelayanan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>control/pelayanan">
                                        <i class="fas fa-file-medical fa-2x text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Dashboard -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
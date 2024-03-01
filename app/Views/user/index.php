<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Total Users -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Users
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUsers; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('admin/index'); ?>">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Widget -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Widget
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlWidget; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('control/widget'); ?>">
                                        <i class="fas fa-images fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pages -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pages
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPages; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('control/pages'); ?>">
                                        <i class="fas fa-file fa-2x text-warning"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Posts -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Posts
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPosts; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('control/posts'); ?>">
                                        <i class="fas fa-book fa-2x text-info"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Category -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Category
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlCategory; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('control/category'); ?>">
                                        <i class="fas fa-tasks fa-2x text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pesan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                        Pesan
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPesan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user/pesan'); ?>">
                                        <i class="fas fa-envelope fa-2x text-dark"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
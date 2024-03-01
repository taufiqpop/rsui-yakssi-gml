<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="card-img user-details" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item">
                                        <h4><?= user()->fullname; ?></h4>
                                    </li>
                                <?php endif; ?>

                                <li class="list-group-item">
                                    Username : <?= user()->username; ?>
                                </li>

                                <li class="list-group-item">
                                    Email : <?= user()->email; ?>
                                </li>

                                <li class="list-group-item">
                                    <a href="<?= base_url('admin/edit/' . user()->id); ?>" class="btn btn-info">Edit Profile</a>
                                    <?php if (in_groups('admin') || in_groups('jurnalistik') || in_groups('produksi') || in_groups('user')) : ?>
                                        <a href="<?= base_url('changepassword/index/' . user()->id); ?>" class="btn btn-danger">Change Password</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
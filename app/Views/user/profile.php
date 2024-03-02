<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- My Profile -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <!-- Message -->
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
                        <!-- User Image -->
                        <img src="<?= base_url('/img/user/' . user()->user_image); ?>" class="card-img user-details" alt="<?= user()->username; ?>">
                    </div>

                    <!-- Card -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <!-- Fullname -->
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item">
                                        <h4><?= user()->fullname; ?></h4>
                                    </li>
                                <?php endif; ?>

                                <!-- Username -->
                                <li class="list-group-item">Username : <?= user()->username; ?></li>

                                <!-- Email -->
                                <li class="list-group-item">Email : <?= user()->email; ?></li>

                                <!-- Action -->
                                <li class="list-group-item">
                                    <a href="<?= base_url('user/edit/' . user()->id); ?>" class="btn btn-info">Edit Profile</a>
                                    <a href="<?= base_url('password/' . user()->id); ?>" class="btn btn-danger">Change Password</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
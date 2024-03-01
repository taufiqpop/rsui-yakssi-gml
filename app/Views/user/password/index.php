<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Change Password -->
<div class="container ml-2">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 ml-2 text-gray-800">Form Change Password</h1>

            <!-- Messages -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Validation -->
            <?php if (isset($validation)) { ?>
                <div class="col-md-12">
                    <?php foreach ($validation->getErrors() as $error) : ?>
                        <div class="alert alert-warning" role="alert">
                            <i class="mdi mdi-alert-outline me-2"></i>
                            <?= esc($error) ?>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php } ?>

            <!-- Forms -->
            <form action="<?= base_url(); ?>ChangePassword/setPassword" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" class="id" value="<?= $id; ?>">

                <!-- New Password -->
                <div class="form-group row">
                    <div class="col-6">
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="New Password" autocomplete="off" autofocus required>
                        </div>
                    </div>
                </div>

                <!-- New Password Confirm -->
                <div class="form-group row">
                    <div class="col-6">
                        <div class="col-sm-10">
                            <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Confirm New Password" autocomplete="off" required>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <a href="<?= base_url(); ?>user/profile" class="btn btn-dark ml-2">Back</a>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Change Password</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
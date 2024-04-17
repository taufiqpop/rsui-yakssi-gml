<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Pelayanan -->
<?php foreach ($pelayanan as $service) : ?>
    <?php $data = json_decode($service['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Pelayanan</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>pelayanan/update/<?= $service['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Jenis Pelayanan -->
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="jenis" value="<?= $data->jenis ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="logo" value="<?= $data->logo ?>" required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $data->deskripsi ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/pelayanan" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Confirm Changes</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
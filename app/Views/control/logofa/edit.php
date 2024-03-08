<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit LogoFA -->
<?php foreach ($logoFA as $logo) : ?>
    <?php $data = json_decode($logo['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data LogoFA</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>logofa/update/<?= $logo['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Jenis LogoFA -->
                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Nama Logo</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="logo" value="<?= $data->logo ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="value" class="col-sm-2 col-form-label">Value</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="value" value="<?= $data->value ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/logofa" class="btn btn-dark mb-1">Back</a>
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
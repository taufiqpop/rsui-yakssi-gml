<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Dokter -->
<?php foreach ($dokter as $doctors) : ?>
    <?php $data = json_decode($doctors['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Dokter</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>dokter/update/<?= $doctors['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->photo ?>">

                    <!-- Jenis Dokter -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="spesialis" class="col-sm-2 col-form-label">Spesialis Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="spesialis" value="<?= $data->spesialis ?>" required>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-4">
                            <img src="<?= base_url(); ?>img/doctors/<?= $data->photo ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPasien" name="images" onchange="previewImgPasien()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $data->photo ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/dokter" class="btn btn-dark mb-1">Back</a>
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
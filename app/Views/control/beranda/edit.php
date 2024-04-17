<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Beranda -->
<?php foreach ($beranda as $slider) : ?>
    <?php $data = json_decode($slider['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Beranda</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>beranda/update/<?= $slider['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" id="status">
                                <option value="<?= $data->status; ?>" selected><?= $data->status; ?></option>
                                <option value=" active">active</option>
                                <option value="">inactive</option>
                            </select>
                        </div>
                    </div>

                    <!-- Header -->
                    <div class="form-group row">
                        <label for="header" class="col-sm-2 col-form-label">Header</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="header" value="<?= $data->header ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $data->deskripsi ?>" required>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-4">
                            <img src="<?= base_url(); ?>img/beranda/<?= $data->images ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgContent" name="images" onchange="previewImgContent()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $data->images ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/beranda" class="btn btn-dark mb-1">Back</a>
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
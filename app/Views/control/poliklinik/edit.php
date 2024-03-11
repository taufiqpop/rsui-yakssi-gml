<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Poliklinik -->
<?php foreach ($poliklinik as $poli) : ?>
    <?php $data = json_decode($poli['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Poliklinik</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>poliklinik/update/<?= $poli['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="status" value="<?= $data->status ?>" required>
                        </div>
                    </div>

                    <!-- Poliklinik -->
                    <div class="form-group row">
                        <label for="poliklinik" class="col-sm-2 col-form-label">Poliklinik</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="poliklinik" value="<?= $data->poliklinik ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $data->deskripsi ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-4">
                            <img src="<?= base_url(); ?>img/poliklinik/<?= $data->images ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPasien" name="images" onchange="previewImgPasien()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $data->images ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Konten -->
                    <div class="form-group row">
                        <label for="konten" class="col-sm-2 col-form-label">Konten</label>
                        <div class="col-sm-10">
                            <textarea class="tinymce" name="konten"><?= $data->konten; ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/poliklinik" class="btn btn-dark mb-1">Back</a>
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
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Pasien -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Pasien</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>pasien/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Jenis Pasien -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Jenis Pasien" name="jenis" required>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" required>
                    </div>
                </div>

                <!-- Images -->
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPasien" name="images" onchange="previewImgPasien()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Image</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/pasien" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
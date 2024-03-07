<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Dokter -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Dokter</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>dokter/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Jenis Dokter -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama Dokter" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="form-group row">
                    <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Spesialis" name="spesialis" required>
                    </div>
                </div>

                <!-- Images -->
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPasien" name="images" onchange="previewImgPasien()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Photo</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/dokter" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
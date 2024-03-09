<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Beranda -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Beranda</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>beranda/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="status">
                            <option value=" active">Active</option>
                            <option value="">Not Active</option>
                        </select>
                    </div>
                </div>

                <!-- Header -->
                <div class="form-group row">
                    <label for="header" class="col-sm-2 col-form-label">Header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Header" name="header" required autofocus>
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
                            <label class="custom-file-label" for="images">Choose Photo</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/beranda" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Pages -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Pages</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>pages/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Judul" name="judul" autofocus required>
                    </div>
                </div>

                <!-- Content -->
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea class="tinymce" name="content"></textarea>
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
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPages" name="images" onchange="previewImgPages()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label col-6" for="images">Choose Image</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/pages" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
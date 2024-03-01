<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<?php $i = 1; ?>
<?php foreach ($category as $category) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Category</h1>
                <form action="<?= base_url(); ?>category/update/<?= $category['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgCategoryLama" value="<?= $category['images']; ?>">
                    <div class="form-group row">
                        <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="parent" value="<?= $category['parent']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" value="<?= $category['judul']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-2">
                            <img src="<?= base_url(); ?>img/<?= $category['images']; ?>" class="img-thumbnail img-preview" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgCategory" name="images" onchange="previewImgCategory()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $category['images']; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/category/details/<?= $category['id']; ?>" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
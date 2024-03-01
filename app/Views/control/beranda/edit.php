<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<?php $i = 1; ?>
<?php foreach ($beranda as $beranda) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Beranda</h1>
                <form action="/beranda/update/<?= $beranda['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgBerandaLama" value="<?= $beranda['images']; ?>">
                    <div class="form-group row">
                        <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tipe" value="<?= $beranda['tipe']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="tinymce" placeholder="write here.." name="content">
                                <?= $beranda['content']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blok" class="col-sm-2 col-form-label">Blok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="blok" value="<?= $beranda['blok']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-2">
                            <img src="/img/<?= $beranda['images']; ?>" class="img-thumbnail img-preview" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgBeranda" name="images" onchange="previewImgBeranda()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $beranda['images']; ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/beranda/details/<?= $beranda['id']; ?>" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Posts -->
<?php foreach ($posts as $post) : ?>
    <?php $data = json_decode($post['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Posts</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>posts/update/<?= $post['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images; ?>">

                    <!-- Judul -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul; ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" value="<?= $post['kategori']; ?>" required>
                        </div>
                    </div>

                    <!-- Tag -->
                    <div class="form-group row">
                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tag" value="<?= $post['tag']; ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-2">
                            <img src="<?= base_url(); ?>img/posts/<?= $data->images; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPosts" name="images" onchange="previewImgPosts()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $data->images; ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi Foto -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Foto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $data->deskripsi; ?>" required>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="tinymce" name="content">
                                <?= $data->content; ?>
                            </textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/posts/detail/<?= $post['id']; ?>" class="btn btn-dark mb-1">Back</a>
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
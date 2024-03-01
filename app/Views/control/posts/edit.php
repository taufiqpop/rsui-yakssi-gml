<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Posts -->
<?php $i = 1; ?>
<?php foreach ($posts as $posts) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Posts</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>posts/update/<?= $posts['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgPostsLama" value="<?= $posts['images']; ?>">

                    <!-- Judul -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" value="<?= $posts['judul']; ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" value="<?= $posts['kategori']; ?>" required>
                        </div>
                    </div>

                    <!-- SEO -->
                    <div class="form-group row">
                        <label for="seo" class="col-sm-2 col-form-label">SEO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="seo" value="<?= $posts['seo']; ?>" required>
                        </div>
                    </div>

                    <!-- Tag -->
                    <div class="form-group row">
                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tag" value="<?= $posts['tag']; ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-2">
                            <img src="<?= base_url(); ?>img/<?= $posts['images']; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPosts" name="images" onchange="previewImgPosts()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $posts['images']; ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi Foto -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Foto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $posts['deskripsi']; ?>" required>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="tinymce" name="content">
                                <?= $posts['content']; ?>
                            </textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/posts/detail/<?= $posts['id']; ?>" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Posts</h1>
            <form action="<?= base_url(); ?>posts/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Judul" name="judul" value="" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="kategori" id="kategori">
                            <option value="Berita">Berita</option>
                            <option value="Publikasi">Publikasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="seo" class="col-sm-2 col-form-label">SEO</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="SEO" name="seo" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Tag" name="tag" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPosts" name="images" onchange="previewImgPosts()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Image</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea class="tinymce" placeholder="write here.." name="content"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/posts/index" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
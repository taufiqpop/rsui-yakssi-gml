<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Data Beranda</h1>
            <form action="<?= base_url(); ?>beranda/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="blok" class="col-sm-2 col-form-label">Blok</label>
                    <div class="col-sm-10">
                        <select name="blok">
                            <option value="1 Blok">1 Blok</option>
                            <option value="2 Blok">2 Blok</option>
                            <option value="3 Blok">3 Blok</option>
                            <option value="4 Blok">4 Blok</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                        <select name="tipe">
                            <option value="Dokter">Dokter</option>
                            <option value="Berita">Berita</option>
                            <option value="Jadwal">Jadwal</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgBeranda" name="images" onchange="previewImgBeranda()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Image</label>
                        </div>
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
                        <a href="<?= base_url(); ?>control/beranda/index" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
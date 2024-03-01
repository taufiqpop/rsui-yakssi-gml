<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Menu</h1>
            <form action="<?= base_url(); ?>menu/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Judul" name="judul" value="" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="https://" name="link" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                    <div class="col-sm-10">
                        <select name="parent" id="parent">
                            <option value="Berita">Berita</option>
                            <option value="Publikasi">Publikasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="0" name="posisi" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/menu/index" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
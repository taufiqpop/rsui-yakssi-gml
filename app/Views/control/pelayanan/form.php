<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Pelayanan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Pelayanan</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>pelayanan/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Jenis Pelayanan -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Jenis Pelayanan" name="jenis" required autofocus>
                    </div>
                </div>

                <!-- Logo -->
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <select name="logo" id="logo" class="form-select form-select-lg mb-3" required>
                            <?php foreach ($logoFA as $logo) : ?>
                                <?php $data = json_decode($logo['value']) ?>
                                <option value="<?= $data->value; ?>"><?= $data->logo; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <!-- Deskripsi -->
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/pelayanan" class="btn btn-dark mb-1">Back</a>
                        <a href="<?= base_url(); ?>control/logofa" class="btn btn-info mb-1">Daftar Logo</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
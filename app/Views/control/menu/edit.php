<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<?php $i = 1; ?>
<?php foreach ($menu as $menu) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Menu</h1>
                <form action="<?= base_url(); ?>menu/update/<?= $menu['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" value="<?= $menu['judul']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" value="<?= $menu['link']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="parent" value="<?= $menu['parent']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="posisi" value="<?= $menu['posisi']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/menu/details/<?= $menu['id']; ?>" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
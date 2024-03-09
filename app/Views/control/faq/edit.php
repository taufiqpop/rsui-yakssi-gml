<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit FAQ -->
<?php foreach ($faq as $FAQ) : ?>
    <?php $data = json_decode($FAQ['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data FAQ</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>faq/update/<?= $FAQ['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Href -->
                    <div class="form-group row">
                        <label for="href" class="col-sm-2 col-form-label">Href</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="href" value="<?= $data->href ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Pertanyaan -->
                    <div class="form-group row">
                        <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pertanyaan" value="<?= $data->pertanyaan ?>" required>
                        </div>
                    </div>

                    <!-- Jawaban -->
                    <div class="form-group row">
                        <label for="jawaban" class="col-sm-2 col-form-label">Jawaban</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jawaban" value="<?= $data->jawaban ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/faq" class="btn btn-dark mb-1">Back</a>
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
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form FAQ -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data FAQ</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>faq/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Pertanyaan -->
                <div class="form-group row">
                    <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Pertanyaan" name="pertanyaan" required autofocus>
                    </div>
                </div>

                <!-- Jawaban -->
                <div class="form-group row">
                    <label for="jawaban" class="col-sm-2 col-form-label">Jawaban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Jawaban" name="jawaban" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/faq" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
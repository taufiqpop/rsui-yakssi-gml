<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Pasien -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pasien</h1>

    <?php $i = 1; ?>
    <?php foreach ($pasien as $pasien) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url(); ?>img/pasien/#" class="card-img pasien-img img-thumbnail">
                            <center>

                                <!-- Button -->
                                <div class="container tombol-pasien">
                                    <a href="<?= base_url(); ?>control/pasien" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url(); ?>control/pasien/edit/<?= $pasien['id']; ?>" class="btn btn-warning col-3">Edit</a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/pasien/<?= $pasien['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Poliklinik -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Poliklinik</h1>

    <?php foreach ($poliklinik as $poli) : ?>
        <?php $data = json_decode($poli['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1500px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>img/departments/<?= $data->images; ?>" class="card-img detail-img img-thumbnail">

                            <center>
                                <!-- Deskripsi Foto -->
                                <p><?= $data->images ?></p>

                                <!-- Button -->
                                <div class=" container tombol-detail">
                                    <a href="<?= base_url(); ?>control/poliklinik" class="btn btn-dark col-3"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url(); ?>control/poliklinik/edit/<?= $poli['id']; ?>" class="btn btn-warning col-3"><i class="fas fa-edit"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/poliklinik/<?= $poli['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h1><?= $data->poliklinik; ?></h4>
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Deskripsi</h4>
                                        <p><?= $data->deskripsi ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Content</h4>
                                        <p><?= $data->konten ?></p>
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
<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Pelayanan -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pelayanan</h1>

    <?php foreach ($beranda as $slider) : ?>
        <?php $data = json_decode($slider['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <!-- Images -->
                            <img src="<?= base_url(); ?>img/beranda/<?= $data->images ?>" class="card-img detail-img img-thumbnail">

                            <center>
                                <!-- Deskripsi Foto -->
                                <p><?= $data->images ?></p>

                                <!-- Button -->
                                <div class=" container tombol-detail">
                                    <a href="<?= base_url(); ?>control/beranda" class="btn btn-dark col-3"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url(); ?>control/beranda/edit/<?= $slider['id']; ?>" class="btn btn-warning col-3"><i class="fas fa-edit"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/beranda/<?= $slider['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $data->header; ?></h4>
                                    </li>
                                    <li class="list-group-item">
                                        <p><?= $data->deskripsi ?></p>
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
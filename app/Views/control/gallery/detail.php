<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Gallery -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Gallery</h1>

    <?php foreach ($gallery as $galeri) : ?>
        <?php $data = json_decode($galeri['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url(); ?>img/gallery/<?= $data->images; ?>" class="card-img detail-img img-thumbnail">

                            <center>
                                <!-- Deskripsi Foto -->
                                <p><?= $data->images ?></p>

                                <!-- Button -->
                                <div class=" container tombol-detail">
                                    <a href="<?= base_url(); ?>control/gallery" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url(); ?>control/gallery/edit/<?= $galeri['id']; ?>" class="btn btn-warning col-3">Edit</a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/gallery/<?= $galeri['id']; ?>" method="post" class="d-inline">
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
                                        <h1>Deskripsi</h4>
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
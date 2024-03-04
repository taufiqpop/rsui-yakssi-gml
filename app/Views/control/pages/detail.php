<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Pages -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pages</h1>

    <!-- Card -->
    <?php foreach ($pages as $page) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url(); ?>img/pages/<?= $page['images']; ?>" class="card-img detail-img img-thumbnail">
                            <center>
                                <div class="container tombol-pages">
                                    <a href="<?= base_url(); ?>control/pages" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url(); ?>control/pages/edit/<?= $page['id']; ?>" class="btn btn-warning col-3">Edit</a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/pages/<?= $page['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>

                        <!-- Card Body -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $page['judul']; ?></h4>
                                    </li>
                                    <li class="list-group-item">
                                        <p><?= $page['content']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Card Body -->
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>
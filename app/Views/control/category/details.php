<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Details Category</h1>

    <!-- Table -->
    <?php $i = 1; ?>
    <?php foreach ($category as $category) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url(); ?>img/<?= $category['images']; ?>" class="card-img category-img img-thumbnail">
                            <center>
                                <div class="container tombol-category">
                                    <a href="<?= base_url(); ?>control/category/index" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url(); ?>control/formEdit/<?= $category['id']; ?>" class="btn btn-warning col-3">Edit</a>

                                    <form action="<?= base_url(); ?>control/category/index/<?= $category['id']; ?>" method="post" class="d-inline">
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
                                        <h4>
                                            <?= $category['judul']; ?>
                                        </h4>
                                    </li>
                                    <li class="list-group-item">
                                        <table class="table table-md table-bordered">
                                            <tr>
                                                <td><?= $category['parent']; ?></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endSection(); ?>
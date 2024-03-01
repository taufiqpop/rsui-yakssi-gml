<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Details Menu</h1>

    <!-- Table -->
    <?php $i = 1; ?>
    <?php foreach ($menu as $menu) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 500px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4>
                                <?= $menu['judul']; ?>
                            </h4>
                        </li>
                        <li class="list-group-item">
                            <h6>
                                <?= $menu['link']; ?>
                            </h6>
                        </li>
                        <li class="list-group-item">
                            <table class="table table-md table-bordered">
                                <tr>
                                    <td><?= $menu['parent']; ?></td>
                                    <td><?= $menu['posisi']; ?></td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    <center style="margin: 10px;">
                        <a href="<?= base_url(); ?>control/menu/index" class="btn btn-dark col-3">Back</a>
                        <a href="<?= base_url(); ?>control/menu/formEdit/<?= $menu['id']; ?>" class="btn btn-warning col-3">Edit</a>

                        <form action="<?= base_url(); ?>control/menu/index/<?= $menu['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>
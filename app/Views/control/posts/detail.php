<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Posts -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Posts</h1>

    <?php $i = 1; ?>
    <?php foreach ($posts as $posts) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url(); ?>img/<?= $posts['images']; ?>" class="card-img posts-img img-thumbnail">
                            <center>
                                <!-- Deskripsi Foto -->
                                <?= $posts['deskripsi']; ?>

                                <!-- Button -->
                                <div class="container tombol-posts">
                                    <a href="<?= base_url(); ?>control/posts" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url(); ?>control/posts/edit/<?= $posts['id']; ?>" class="btn btn-warning col-3">Edit</a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/posts/<?= $posts['id']; ?>" method="post" class="d-inline">
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
                                            <?= $posts['judul']; ?>
                                        </h4>
                                    </li>
                                    <li class="list-group-item">
                                        <table class="table table-md table-bordered">
                                            <tr>
                                                <td><?= $posts['kategori']; ?></td>
                                                <td><?= $posts['seo']; ?></td>
                                                <td><?= $posts['tag']; ?></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="list-group-item">
                                        <p>
                                            <?= $posts['content']; ?>
                                        </p>
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
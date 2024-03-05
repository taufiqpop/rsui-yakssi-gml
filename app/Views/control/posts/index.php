<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Posts -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Posts</h1>
            <a href="<?= base_url(); ?>control/posts/form" class="btn btn-primary">Add Posts</a>
            <br><br>

            <!-- Search Bar -->
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Messages -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Table -->
            <div class="row card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col" class="cursor-active">No</th>
                                    <th scope="col" class="cursor-stop">Photo</th>
                                    <th scope="col" class="cursor-active">Judul</th>
                                    <th scope="col" class="cursor-active">Kategori</th>
                                    <th scope="col" class="cursor-active">SEO</th>
                                    <th scope="col" class="cursor-active">Tag</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $index => $post) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td>
                                            <img src="<?= base_url(); ?>img/posts/<?= $post['images']; ?>" class="thumbnail">
                                        </td>
                                        <td><?= $post['judul']; ?></td>
                                        <td><?= $post['kategori']; ?></td>
                                        <td><?= $post['seo']; ?></td>
                                        <td><?= $post['tag']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>control/posts/detail/<?= $post['id']; ?>" class="btn btn-info"><i class="fas fa-info"></i></a>
                                            <a href="<?= base_url(); ?>control/posts/edit/<?= $post['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <form action="<?= base_url(); ?>control/posts/<?= $post['id']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('posts', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
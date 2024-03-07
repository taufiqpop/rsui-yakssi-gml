<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Pesan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Pesan</h1>

            <!-- Search Bar -->
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Message -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- List Pesan -->
            <div class="row card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col" class="cursor-active">No</th>
                                    <th scope="col" class="cursor-active">Nama</th>
                                    <th scope="col" class="cursor-active">Email</th>
                                    <th scope="col" class="cursor-active">Judul</th>
                                    <th scope="col" class="cursor-active">Pesan</th>
                                    <th scope="col" class="cursor-active">Tanggal Dikirim</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pesan as $index => $message) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $message['name']; ?></td>
                                        <td><?= $message['email']; ?></td>
                                        <td><?= $message['subject']; ?></td>
                                        <td><?= $message['message']; ?></td>
                                        <td>
                                            <?= date('l, d F Y', strtotime($message['created_at'])); ?>
                                            <br>
                                            (<?= date('H:m:s', strtotime($message['created_at'])); ?>)
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('pesan', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End List Pesan -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
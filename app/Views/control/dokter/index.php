<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Dokter -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Dokter</h1>
            <a href="<?= base_url(); ?>control/dokter/form" class="btn btn-primary">Add Dokter</a>
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
                                    <th scope="col" class="cursor-active">Nama Dokter</th>
                                    <th scope="col" class="cursor-active">Spesialis</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dokter as $doctor) : ?>
                                    <?php $data = json_decode($doctor['value']) ?>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url(); ?>img/doctors/<?= $data->photo ?>" class=" thumbnail">
                                        </td>
                                        <td><?= $doctor['key'] ?></td>
                                        <td style="max-width: 500px;"><?= $data->spesialis ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>control/dokter/edit/<?= $doctor['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                            <form action="<?= base_url(); ?>control/dokter/<?= $doctor['id']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <!-- Pagers -->
                                <?= $pager->links('dokter', 'data_pagination'); ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('dokter', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
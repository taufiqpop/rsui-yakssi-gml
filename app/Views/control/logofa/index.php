<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form LogoFA -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Daftar Logo</h1>

            <?php if (in_groups('admin')) : ?>
                <!-- Forms -->
                <form action="<?= base_url(); ?>logofa/insert" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Logo -->
                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Nama Logo</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Nama Logo" name="logo" required>
                        </div>
                    </div>

                    <!-- Value -->
                    <div class="form-group row">
                        <label for="value" class="col-sm-2 col-form-label">Value</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Value" name="value" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/pelayanan" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Publish</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- List Logo -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">

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
                                    <th scope="col" class="cursor-active" style="max-width: 0px;">No</th>
                                    <th scope="col" class="cursor-active">Nama Logo</th>
                                    <th scope="col" class="cursor-stop">Logo</th>
                                    <?php if (in_groups('admin')) : ?>
                                        <th scope="col" class="cursor-active">Value</th>
                                        <th scope="col" class="cursor-stop">Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($logoFA as $index => $logo) : ?>
                                    <?php $data = json_decode($logo['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->logo; ?></td>
                                        <td>
                                            <i class="<?= $data->value; ?> thumbnail" style="font-size: 5em; color: #01ab5a"></i>
                                        </td>
                                        <?php if (in_groups('admin')) : ?>
                                            <td><?= $data->value; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>control/logofa/edit/<?= $logo['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/logofa/<?= $logo['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('logofa', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
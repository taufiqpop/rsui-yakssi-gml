<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Settings -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Settings</h1>

            <!-- Messages -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Forms -->
            <?php foreach ($settings as $setting) : ?>
                <form action="<?= base_url(); ?>settings/update/<?= $setting['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label for="nama">Nama Website</label>
                                                <input type="text" class="form-control" name="nama" value="<?= $setting['nama']; ?>" autofocus required>
                                            </td>
                                            <td>
                                                <label for="author">Author Website</label>
                                                <input type="text" class="form-control" name="author" value="<?= $setting['author']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="owner">Owner Website</label>
                                                <input type="text" class="form-control" name="owner" value="<?= $setting['owner']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" name="email" value="<?= $setting['email']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="telepon">Telepon</label>
                                                <input type="text" class="form-control" name="telepon" value="<?= $setting['telepon']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="fax">Fax</label>
                                                <input type="text" class="form-control" name="fax" value="<?= $setting['fax']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="jadwal">Jadwal</label>
                                                <input type="text" class="form-control" name="jadwal" value="<?= $setting['jadwal']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="instagram">Instagram</label>
                                                <input type="text" class="form-control" name="instagram" value="<?= $setting['instagram']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="facebook">Facebook</label>
                                                <input type="text" class="form-control" name="facebook" value="<?= $setting['facebook']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?= $setting['alamat']; ?>" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Button -->
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Confirm Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
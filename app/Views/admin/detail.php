<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Details</h1>

    <!-- Table -->
    <?php $i = 1; ?>
    <?php foreach ($user as $user) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('/img/' . $user['user_image']); ?>" class="card-img user-details" alt="<?= $user['username']; ?>">
                            <div class="role-profile">
                                <?php if ($user['name'] == 'admin') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <?php if ($user['name'] == 'publisher') : ?>
                                    <span class="badge badge-warning"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <?php if ($user['name'] == 'umum') : ?>
                                    <span class="badge badge-success"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <?php if ($user['name'] == 'user') : ?>
                                    <span class="badge badge-primary"><?= $user['name']; ?></span>
                                <?php endif; ?>
                                <?php if ($user['name'] == null) : ?>
                                    <span class="badge badge-dark">none</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <?php if ($user['fullname']) : ?>
                                        <li class="list-group-item">
                                            <h4>
                                                <?= $user['fullname']; ?>
                                            </h4>
                                        </li>
                                    <?php endif; ?>

                                    <li class="list-group-item">
                                        Username : <?= $user['username']; ?>
                                    </li>

                                    <li class="list-group-item">
                                        Email : <?= $user['email']; ?>
                                    </li>
                                </ul>
                                <a href="<?= base_url('admin'); ?>" class="btn btn-dark col-3">Back</a>
                                <a href="<?= base_url('admin/edit/' . $user['userid']); ?>" class="btn btn-warning col-3">Edit</a>

                                <form action="/admin/<?= $user['userid']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endSection(); ?>
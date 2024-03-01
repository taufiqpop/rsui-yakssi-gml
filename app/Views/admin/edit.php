<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <?php $i = 1; ?>
    <?php foreach ($user as $user) : ?>
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data</h1>
                <form action="/admin/update/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgUserLama" value="<?= $user['user_image']; ?>">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="<?= (old('email')) ? old('email') : $user['email']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" value="<?= (old('username')) ? old('username') : $user['username']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fullname" id="fullname" value="<?= (old('fullname')) ? old('fullname') : $user['fullname']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_image" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-2">
                            <img src="/img/<?= $user['user_image']; ?>" class="img-thumbnail img-preview" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('user_image')) ? 'is invalid' : ''; ?>" id="imgUser" name="images" onchange="previewImgUser()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('user_image'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $user['user_image']; ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="\user" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>
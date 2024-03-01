<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <!-- Message -->
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <!-- Form -->
                        <form class="user" action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>

                            <!-- Username -->
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                </div>
                            </div>

                            <!-- Register Button -->
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </form>
                        <hr>

                        <!-- Login -->
                        <div class="text-center">
                            <a class="small" href="<?= url_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?></a>
                        </div>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
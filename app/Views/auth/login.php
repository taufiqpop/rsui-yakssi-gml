<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <!-- Message -->
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <!-- Form -->
                                <form class="user" action="<?= url_to('login') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <!-- Email/Username -->
                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                        </div>
                                    <?php endif; ?>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <!-- Remember Me -->
                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Login Button -->
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?= lang('Auth.loginAction') ?>
                                    </button>
                                </form>
                                <hr>

                                <!-- Forgot Password -->
                                <?php if ($config->activeResetter) : ?>
                                    <div class="text-center">
                                        <a class="small" href="<?= url_to('forgot') ?>">Forgot Password?</a>
                                    </div>
                                <?php endif; ?>

                                <!-- Register -->
                                <?php if ($config->allowRegistration) : ?>
                                    <div class="text-center">
                                        <a class="small" href="<?= url_to('register') ?>">Create an Account!</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
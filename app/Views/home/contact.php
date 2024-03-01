<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Contact -->
<?php foreach ($settings as $settings) : ?>
    <main>
        <div class="container mt-5">
            <br><br>
        </div>
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Address</h3>
                                    <div class="container">
                                        <p><?= $settings['alamat']; ?></p>
                                    </div>
                                    <br>
                                    <div class="container">
                                        <center>
                                            <iframe style="border:0; width: 75%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5517459393545!2d110.8230696!3d-7.4040156999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0e89d0226707%3A0x52e879d69c14a79f!2sRumah%20Sakit%20Umum%20Islam%20Yakssi%2C%20Jl.%20Solo%2C%20Ngembatpadas%2C%20Ngembat%20Padas%2C%20Kec.%20Gemolong%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah%2050274!5e0!3m2!1sen!2sid!4v1706668744082!5m2!1sen!2sid" allowfullscreen></iframe>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <a href="mailto:<?= $settings['email']; ?>" target="_blank">
                                        <i class="bx bx-envelope"></i>
                                    </a>
                                    <h3>Email</h3>
                                    <p><?= $settings['email']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <a href="https://wa.me/<?= $settings['telepon']; ?>" target="_blank">
                                        <i class="bx bx-phone-call"></i>
                                    </a>
                                    <h3>Whatsapp</h3>
                                    <p><?= $settings['telepon']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Forms -->
                    <div class="col-lg-6">
                        <form action="<?= base_url(); ?>contact/save" method="post" role="form" class="php-email-form">
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pesan') ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box mt-4">
                                    <i class="bx bx-printer"></i>
                                    <h3>Fax</h3>
                                    <p><?= $settings['fax']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box mt-4">
                                    <a href="https://www.instagram.com/<?= $settings['instagram']; ?>" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                    <h3>Instagram</h3>
                                    <p>@<?= $settings['instagram']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box mt-4">
                                    <a href="https://www.facebook.com/<?= $settings['facebook']; ?>" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                    <h3>Facebook</h3>
                                    <p>@<?= $settings['facebook']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php endforeach; ?>

<?= $this->endSection(); ?>
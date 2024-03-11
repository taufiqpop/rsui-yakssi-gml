<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Dokter Page -->
<section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Doctors</h2>
        </div>
        <div class="row">

            <!-- List Dokter -->
            <?php foreach ($dokter as $doctor) : ?>
                <?php $data = json_decode($doctor['value']) ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?= base_url(); ?>img/doctors/<?= $data->photo; ?>" class="img-fluid">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= $data->nama; ?></h4>
                            <span><?= $data->spesialis; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
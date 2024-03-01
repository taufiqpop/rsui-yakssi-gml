<?= $this->extend('rsuiyakssi/templates/index'); ?>
<?= $this->section('page-content'); ?>
<section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Doctors</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?= base_url(); ?>img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                        <div class="social">

                            <a href=""><i class="bi bi-instagram"></i></a>

                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Medical Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
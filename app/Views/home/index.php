<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Home -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">

      <!-- Slider -->
      <?php foreach ($beranda as $index => $slider) : ?>
        <?php $data = json_decode($slider['value']) ?>
        <div class="carousel-item <?= $data->status; ?>" style="background-image: url(<?= base_url(); ?>img/beranda/<?= $data->images ?>)">
          <div class="container">
            <h2><?= $data->header; ?></h2>
            <p><?= $data->deskripsi; ?></p>
            <a href="#about" class="btn-get-started scrollto">Read More..</a>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Previous -->
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <!-- Next -->
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
</section>

<main id="main">

  <!-- Jenis Pasien -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <?php foreach ($pasien as $patient) : ?>
          <?php $data = json_decode($patient['value']) ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon">
                <img src="<?= base_url(); ?>img/pasien/<?= $data->images ?>" class="img-fluid">
              </div>
              <hr>
              <h4 class="title"><?= $data->jenis; ?></h4>
              <p class="description"><?= $data->deskripsi ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Emergency -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
      <div class="text-center">
        <h3>In an Emergency? Need Help?</h3>
        <?php foreach ($settings as $nowa) : ?>
          <a class="cta-btn scrollto" target="_blank" href="https://wa.me/<?= $nowa['telepon']; ?>">CLICK HERE NOW !!</a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- About Us -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <?php foreach ($about as $tentang) : ?>
        <?php $data = json_decode($tentang['value']) ?>
        <div class="section-title">
          <h2><?= $data->header; ?></h2>
          <div style="text-align: justify;"><?= $data->deskripsi; ?></div>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="<?= base_url(); ?>img/about/<?= $data->images; ?>" class="img-fluid" alt="<?= $data->images; ?>">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <?= $data->konten; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Counts -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlDokter; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Dokter</strong></p>
            <a href="#doctors">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlPelayanan; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Pelayanan</strong></p>
            <a href="#services">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-clinic-medical"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlPoliklinik; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Poliklinik</strong></p>
            <a href="#departments">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-images"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlGallery; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Gallery</strong></p>
            <a href="#gallery">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pelayanan -->
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Pelayanan</h2>
      </div>
      <div class="row">
        <?php foreach ($pelayanan as $service) : ?>
          <?php $data = json_decode($service['value']) ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="<?= $data->logo; ?>"></i></div>
            <h4 class="title"><?= $data->jenis; ?></h4>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    </div>
  </section>

  <!-- Poliklinik -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Poliklinik</h2>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            <?php foreach ($poliklinik as $poli) : ?>
              <?php $data = json_decode($poli['value']) ?>
              <li class="nav-item">
                <a class="nav-link <?= $data->status; ?> show" data-bs-toggle="tab" data-bs-target="#tab-<?= $poli['id'] ?>">
                  <h4><?= $data->poliklinik; ?></h4>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <?php foreach ($poliklinik as $poli) : ?>
              <?php $data = json_decode($poli['value']) ?>
              <div class="tab-pane <?= $data->status; ?> show" id="tab-<?= $poli['id'] ?>">
                <h3><?= $data->poliklinik; ?></h3>
                <p class="fst-italic"><?= $data->deskripsi; ?></p>
                <img src="<?= base_url(); ?>img/poliklinik/<?= $data->images; ?>" class="img-fluid">
                <div><?= $data->konten; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Doctors -->
  <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Doctors</h2>
        <center>
          <a href="<?= base_url(); ?>doctors" class="btn btn-success" style="width: 25%;">Daftar Semua Dokter</a>
        </center>
      </div>
      <div class="row">
        <?php foreach ($dokter as $doctor) : ?>
          <?php $data = json_decode($doctor['value']) ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?= base_url(); ?>img/doctors/<?= $data->photo; ?>" class="img-fluid">
                <div class="social">
                  <i class="bi bi-plus"></i>
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

  <!-- Gallery -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
      </div>
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($gallery as $galeri) : ?>
            <?php $data = json_decode($galeri['value']) ?>
            <div class="swiper-slide">
              <a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/<?= $data->images; ?>">
                <img src="<?= base_url(); ?>img/gallery/<?= $data->images; ?>" class="img-fluid" alt="<?= $data->deskripsi; ?>">
              </a>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questioins (FAQ) -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Frequently Asked Question</h2>
      </div>
      <ul class="faq-list">
        <?php foreach ($faq as $question) : ?>
          <?php $data = json_decode($question['value']) ?>
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq-<?= $question['id']; ?>"><?= $data->pertanyaan; ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq-<?= $question['id']; ?>" class="collapse" data-bs-parent=".faq-list">
              <p><?= $data->jawaban; ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- Contact -->
  <?php foreach ($settings as $setting) : ?>
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <!-- Information -->
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Address</h3>
                  <div class="container">
                    <p><?= $setting['alamat']; ?></p>
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
                  <a href="mailto:<?= $setting['email']; ?>" target="_blank">
                    <i class="bx bx-envelope"></i>
                  </a>
                  <h3>Email</h3>
                  <p><?= $setting['email']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <a href="https://wa.me/<?= $setting['telepon']; ?>" target="_blank">
                    <i class="bx bx-phone-call"></i>
                  </a>
                  <h3>Whatsapp</h3>
                  <p><?= $setting['telepon']; ?></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Forms -->
          <div class="col-lg-6">
            <form action="<?= base_url(); ?>contact/save" method="post" role="form" class="php-email-form">

              <!-- Messages -->
              <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashdata('pesan') ?>
                </div>
              <?php endif; ?>

              <!-- Form Pesan -->
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

            <!-- Information -->
            <div class="row">
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <i class="bx bx-printer"></i>
                  <h3>Fax</h3>
                  <p><?= $setting['fax']; ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <a href="https://www.instagram.com/<?= $setting['instagram']; ?>" target="_blank">
                    <i class="bx bxl-instagram"></i>
                  </a>
                  <h3>Instagram</h3>
                  <p>@<?= $setting['instagram']; ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <a href="https://www.facebook.com/<?= $setting['facebook']; ?>" target="_blank">
                    <i class="bx bxl-facebook"></i>
                  </a>
                  <h3>Facebook</h3>
                  <p>@<?= $setting['facebook']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</main>

<?= $this->endSection(); ?>
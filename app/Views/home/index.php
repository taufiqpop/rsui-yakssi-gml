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

  <!-- CTA -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>In an Emergency? Need Help?</h3>
        <a class="cta-btn scrollto" href="#">CLICK HERE NOW !!</a>
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
          <div><?= $data->deskripsi; ?></div>
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
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlPoliklinik; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Poliklinik</strong></p>
            <a href="#departments">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $jmlPosts; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Penghargaan</strong></p>
            <a href="#">Info Lebih Lengkap &raquo;</a>
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
            <h4 class="title"><a href=""><?= $data->jenis; ?></a></h4>
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
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>THT</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Kejiwaan</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Rehab Medis</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Saraf</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                <h4>Gigi</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                <h4>Anak</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
                <h4>Penyakit Dalam</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-8">
                <h4>Urologi</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-9">
                <h4>Ortopedi</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-10">
                <h4>Kandungan</h4>
                <p>content</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-11">
                <h4>Bedah Umum</h4>
                <p>content</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>THT (Telinga, Hidung, Tenggorokan)</h3>
              <p class="fst-italic">Dokter spesialis THT adalah dokter yang memiliki keahlian khusus dalam mengobati penyakit yang berkaitan dengan telinga, hidung, dan tenggorokan. Selain itu, dokter spesialis ini juga bertugas untuk mengatasi sejumlah penyakit yang terjadi di kepala dan leher.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-1.jpg" alt="" class="img-fluid">
              <p>Ada beberapa jenis penyakit yang dapat ditangani oleh dokter spesialis THT, antara lain :</p>
              <h6>1. Gangguan Telinga</h6>
              <h6>2. Gangguan Hidung</h6>
              <h6>3. Gangguan Tenggorokan</h6>
              <h6>4. Gangguan Tidur</h6>
              <h6>5. Gangguan Di Leher & Kepala</h6>
            </div>
            <div class="tab-pane" id="tab-2">
              <h3>Kejiwaan</h3>
              <p class="fst-italic">Psikiater adalah seorang dokter spesialis yang mendalami ilmu kesehatan jiwa dan perilaku atau psikiatri. Psikiatri sendiri merupakan cabang keilmuan medis yang memiliki fokus pada diagnosis, pengobatan, dan pencegahan terhadap gangguan emosional, kejiwaan, maupun perilaku.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-3">
              <h3>Rehab Medis</h3>
              <p class="fst-italic">Dokter spesialis rehabilitasi medik dan kedokteran fisik adalah dokter yang memiliki keahlian khusus dalam pengobatan fisik dan rehabilitasi. Dokter spesialis ini bertugas menangani berbagai masalah pada fisik, mulai dari cedera tulang belakang hingga keseleo pergelangan kaki.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-3.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-4">
              <h3>Saraf</h3>
              <p class="fst-italic">Dokter spesialis neurologi atau spesialis saraf merupakan dokter yang bertugas menangani berbagai keluhan terkait dengan gangguan otak dan saraf, seperti penyakit Parkinson, penyakit Alzheimer, kejang, demensia, cedera otak, stroke, dan lain-lain</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-5">
              <h3>Gigi</h3>
              <p class="fst-italic">Dokter gigi adalah seorang dokter yang khusus mempelajari ilmu kesehatan dan penyakit pada gigi dan mulut. Seorang dokter gigi memiliki kompetensi atau keahlian dalam mendiagnosis, mengobati, dan memberikan edukasi tentang pencegahan berbagai masalah kesehatan gigi, gusi, dan mulut.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-6">
              <h3>Anak</h3>
              <p class="fst-italic">Dokter anak atau spesialis pediatri adalah dokter yang berfokus pada perawatan kesehatan fisik, mental, serta perkembangan sosial anak, mulai dari usia anak 0–18 tahun. Selain melakukan pemeriksaan dan perawatan, dokter anak juga dapat memberikan tindakan pencegahan penyakit pada bayi, anak, maupun remaja yang sehat.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-7">
              <h3>Penyakit Dalam</h3>
              <p class="fst-italic">Dokter spesialis penyakit dalam atau umumnya dikenal dengan sebutan internis merupakan dokter yang bertanggung jawab dalam menangani berbagai kondisi medis terkait dengan banyak organ dalam tubuh, seperti jantung, paru-paru, ginjal, hati, dan lain-lain.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-8">
              <h3>Urologi</h3>
              <p class="fst-italic">Dokter spesialis urologi adalah dokter yang mengkhususkan diri dalam mendiagnosis dan mengobati penyakit pada sistem saluran kemih. Sistem ini menjaga tubuh tetap bersih dengan menyaring limbah dan racun dan mengeluarkannya dari tubuh. Saluran kemih meliputi kandung kemih, ginjal, ureter, dan uretra.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-9">
              <h3>Ortopedi</h3>
              <p class="fst-italic">Dokter spesialis tulang atau yang secara resmi disebut juga sebagai dokter spesialis orthopaedi dan traumatologi adalah sebutan bagi dokter yang khusus menangani masalah pada sistem muskuloskeletal, meliputi tulang, otot, sendi, saraf, ligamen, serta jaringan yang menghubungkan tulang dan tendon (sendi).</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-10">
              <h3>Kandungan</h3>
              <p class="fst-italic">Dokter spesialis Obstetri dan Ginekologi atau dikenal juga Obgyn serta dokter kandungan adalah seorang dokter yang mengkhususkan diri dalam kesehatan reproduksi wanita, termasuk menstruasi, kehamilan, persalinan, dan menopause.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-11">
              <h3>Bedah Umum</h3>
              <p class="fst-italic">Bedah umum adalah disiplin medis yang melibatkan berbagai jenis tindakan bedah untuk mengobati berbagai masalah kesehatan dan penyakit. Dalam bedah umum, ahli bedah diharapkan mampu melakukan perawatan pra operasi maupun pasca operasi, dan manajemennya, selain tindakan bedah itu sendiri.</p>
              <img src="<?= base_url(); ?>img/poliklinik/departments-4.jpg" alt="" class="img-fluid">
            </div>
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
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
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
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-1.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-2.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-3.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-4.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-5.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-6.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-7.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url(); ?>img/gallery/gallery-8.jpg"><img src="<?= base_url(); ?>img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pricing</h2>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="fade-up" data-aos-delay="200">
            <h3>Business</h3>
            <h4><sup>$</sup>19<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Developer</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <span class="advanced">Advanced</span>
            <h3>Ultimate</h3>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

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
            <div data-bs-toggle="collapse" class="collapsed question" href="#<?= $data->href; ?>"><?= $data->pertanyaan; ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="<?= $data->href; ?>" class="collapse" data-bs-parent=".faq-list">
              <p><?= $data->jawaban; ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</main>
<?= $this->endSection(); ?>
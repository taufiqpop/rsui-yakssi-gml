<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Home -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(<?= base_url(); ?>img/slide/slide-1.png)">
        <div class="container">
          <h2>Welcome To <span>RSUI YAKSSI Gemolong</span></h2>
          <p>RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong.
            <br>RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.
          </p>
          <a href="#about" class="btn-get-started scrollto">Read More..</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(<?= base_url(); ?>img/slide/slide-2.jpg)">
        <div class="container">
          <h2>Welcome To <span>RSUI YAKSSI Gemolong</span></h2>
          <p>RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong.
            <br>RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.
          </p>
          <a href="#about" class="btn-get-started scrollto">Read More..</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(<?= base_url(); ?>img/slide/slide-3.jpg)">
        <div class="container">
          <h2>Welcome To <span>RSUI YAKSSI Gemolong</span></h2>
          <p>RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong.
            <br>RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.
          </p>
          <a href="#about" class="btn-get-started scrollto">Read More..</a>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>

<main id="main">

  <!-- Featured Services -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon">
              <img src="<?= base_url(); ?>img/pasien/logo-pasien-umum.png" alt="" class="img-fluid">
            </div>
            <hr>
            <h4 class="title"><a href="">Pasien Umum</a></h4>
            <p class="description">Pasien umum adalah pasien yang berobat membayar sendiri segala biaya perobatan dan perawatan sesuai dengan ketentuan ketentuan yang berlaku.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon">
              <img src="<?= base_url(); ?>img/pasien/logo-bpjs-kesehatan.png" alt="" class="img-fluid">
            </div>
            <hr>
            <h4 class="title"><a href="">Pasien BPJS Kesehatan</a></h4>
            <p class="description">Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan adalah badan hukum yang dibentuk untuk menyelenggarakan program jaminan kesehatan.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon">
              <img src="<?= base_url(); ?>img/pasien/logo-bpjs-ketenagakerjaan.png" alt="" class="img-fluid">
            </div>
            <hr>
            <h4 class="title"><a href="">BPJS Ketenagakerjaan</a></h4>
            <p class="description">BPJS Ketenagakerjaan adalah singkatan dari Badan Penyelenggara Jaminan Sosial yang merupakan badan hukum publik yang bertugas melindungi seluruh pekerja melalaui 4 program jaminan sosial ketenagakerjaan.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon">
              <img src="<?= base_url(); ?>img/pasien/logo-jasa-raharja.png" alt="" class="img-fluid">
            </div>
            <hr>
            <h4 class="title"><a href="">Jasa Raharja</a></h4>
            <p class="description">Asuransi Jasa Raharja adalah asuransi sosial milik negara (BUMN) yang bertanggung jawab mengelola asuransi kecelakaan lalu lintas bagi penumpang baik angkutan umum, kendaraan pribadi, maupun pejalan kaki.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cta -->
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

      <div class="section-title">
        <h2>About Us</h2>
        <p style="text-align: justify; text-indent: 60px;">RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI. Berawal mula dari sebuah klinik kesehatan di Gemolong, Rumah Sakit Umum YAKSSI selalu mengalami perubahan besar maupun kecil dalam upayanya melayani masyarakat. Berbagai tantangan dan halangan berhasil dilewati dalam keberlangsungan rumah sakit. RSUI YAKSSI masih sadar bahwasanya pelayanan kepada masyarakat tiada hentinya, dan selamanya RSUI YAKSSI tidak bisa sempurna. Namun, itu tidak menghentikan upaya RSUI YAKSSI untuk selalu berbenah diri.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="<?= base_url(); ?>img/about/about.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>konten</h3>
          <p class="fst-italic">
            konten
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet.</li>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet.</li>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet.</li>
          </ul>
          <p>konten</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Counts -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Dokter</strong></p>
            <a href="#doctors">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Pelayanan</strong></p>
            <a href="#services">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Poliklinik</strong></p>
            <a href="#departments">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Penghargaan</strong></p>
            <a href="#">Info Lebih Lengkap &raquo;</a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Services -->
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pelayanan</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-heartbeat"></i></div>
          <h4 class="title"><a href="">IGD (24 Jam)</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Radiologi/Rontgen (24 Jam)</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Ruang Bersalin (24 Jam)</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-dna"></i></div>
          <h4 class="title"><a href="">Instalasi Farmasi (24 Jam)</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Laboratorium (24 Jam)</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-pills"></i></div>
          <h4 class="title"><a href="">Fisioterapi</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-hospital-user"></i></div>
          <h4 class="title"><a href="">ICU, PICU, & NICU</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-wheelchair"></i></div>
          <h4 class="title"><a href="">Kamar Operasi</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Rawat Inap</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">USG</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Layanan Bank Darah</a></h4>
          <p class="description">content</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-notes-medical"></i></div>
          <h4 class="title"><a href="">Endoskopi THT</a></h4>
          <p class="description">content</p>
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
              <img src="<?= base_url(); ?>img/departments/departments-1.jpg" alt="" class="img-fluid">
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
              <img src="<?= base_url(); ?>img/departments/departments-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-3">
              <h3>Rehab Medis</h3>
              <p class="fst-italic">Dokter spesialis rehabilitasi medik dan kedokteran fisik adalah dokter yang memiliki keahlian khusus dalam pengobatan fisik dan rehabilitasi. Dokter spesialis ini bertugas menangani berbagai masalah pada fisik, mulai dari cedera tulang belakang hingga keseleo pergelangan kaki.</p>
              <img src="<?= base_url(); ?>img/departments/departments-3.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-4">
              <h3>Saraf</h3>
              <p class="fst-italic">Dokter spesialis neurologi atau spesialis saraf merupakan dokter yang bertugas menangani berbagai keluhan terkait dengan gangguan otak dan saraf, seperti penyakit Parkinson, penyakit Alzheimer, kejang, demensia, cedera otak, stroke, dan lain-lain</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-5">
              <h3>Gigi</h3>
              <p class="fst-italic">Dokter gigi adalah seorang dokter yang khusus mempelajari ilmu kesehatan dan penyakit pada gigi dan mulut. Seorang dokter gigi memiliki kompetensi atau keahlian dalam mendiagnosis, mengobati, dan memberikan edukasi tentang pencegahan berbagai masalah kesehatan gigi, gusi, dan mulut.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-6">
              <h3>Anak</h3>
              <p class="fst-italic">Dokter anak atau spesialis pediatri adalah dokter yang berfokus pada perawatan kesehatan fisik, mental, serta perkembangan sosial anak, mulai dari usia anak 0–18 tahun. Selain melakukan pemeriksaan dan perawatan, dokter anak juga dapat memberikan tindakan pencegahan penyakit pada bayi, anak, maupun remaja yang sehat.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-7">
              <h3>Penyakit Dalam</h3>
              <p class="fst-italic">Dokter spesialis penyakit dalam atau umumnya dikenal dengan sebutan internis merupakan dokter yang bertanggung jawab dalam menangani berbagai kondisi medis terkait dengan banyak organ dalam tubuh, seperti jantung, paru-paru, ginjal, hati, dan lain-lain.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-8">
              <h3>Urologi</h3>
              <p class="fst-italic">Dokter spesialis urologi adalah dokter yang mengkhususkan diri dalam mendiagnosis dan mengobati penyakit pada sistem saluran kemih. Sistem ini menjaga tubuh tetap bersih dengan menyaring limbah dan racun dan mengeluarkannya dari tubuh. Saluran kemih meliputi kandung kemih, ginjal, ureter, dan uretra.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-9">
              <h3>Ortopedi</h3>
              <p class="fst-italic">Dokter spesialis tulang atau yang secara resmi disebut juga sebagai dokter spesialis orthopaedi dan traumatologi adalah sebutan bagi dokter yang khusus menangani masalah pada sistem muskuloskeletal, meliputi tulang, otot, sendi, saraf, ligamen, serta jaringan yang menghubungkan tulang dan tendon (sendi).</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-10">
              <h3>Kandungan</h3>
              <p class="fst-italic">Dokter spesialis Obstetri dan Ginekologi atau dikenal juga Obgyn serta dokter kandungan adalah seorang dokter yang mengkhususkan diri dalam kesehatan reproduksi wanita, termasuk menstruasi, kehamilan, persalinan, dan menopause.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane" id="tab-11">
              <h3>Bedah Umum</h3>
              <p class="fst-italic">Bedah umum adalah disiplin medis yang melibatkan berbagai jenis tindakan bedah untuk mengobati berbagai masalah kesehatan dan penyakit. Dalam bedah umum, ahli bedah diharapkan mampu melakukan perawatan pra operasi maupun pasca operasi, dan manajemennya, selain tindakan bedah itu sendiri.</p>
              <img src="<?= base_url(); ?>img/departments/departments-4.jpg" alt="" class="img-fluid">
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
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?= base_url(); ?>img/doctors/doctors-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="<?= base_url(); ?>img/doctors/doctors-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Anesthesiologist</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?= base_url(); ?>img/doctors/doctors-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>Cardiology</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="<?= base_url(); ?>img/doctors/doctors-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Neurosurgeon</span>
            </div>
          </div>
        </div>

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
        <h2>Frequently Asked Questioins</h2>
      </div>
      <ul class="faq-list">
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section>
</main>
<?= $this->endSection(); ?>
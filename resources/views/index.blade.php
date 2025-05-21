<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Web-Based Collaborative Learning App</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('landing-page/img/logo.png') }}" rel="icon" />
    <link href="{{ asset('landing-page/img/logo.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing-page/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('landing-page/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('landing-page/img/logo.png') }}" alt="SIBEE Logo" />
                <h1 class="sitename">SIBEE</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#">Coba Sekarang</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="badge-wrapper mb-3">
                            <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                                <div class="icon-circle me-2">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <span class="badge-text me-3">Platform Kolaborasi Belajar</span>
                            </div>
                        </div>

                        <h1 class="hero-title mb-4">
                            Belajar Bareng Lebih Mudah & Seru Bersama SIBEE
                        </h1>

                        <p class="hero-description mb-4">
                            Temukan teman belajar sefrekuensi, atur jadwal belajar bersama,
                            dan diskusi langsung dari satu platform terpadu. Cocok untuk
                            pelajar dan mahasiswa yang ingin lebih produktif!
                        </p>

                        <div class="cta-wrapper">
                            <a href="#" class="btn btn-primary">Coba Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="{{ asset('landing-page/img/copy-hero.png') }}" alt="Belajar Kolaboratif"
                                class="img-fluid" loading="lazy" />
                        </div>
                    </div>
                </div>

                <div class="row feature-boxes">
                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Temukan Teman Belajar</h3>
                                <p class="feature-text">
                                    Sistem matching bantu kamu menemukan teman belajar dengan
                                    topik atau kesulitan yang sama.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Diskusi Interaktif</h3>
                                <p class="feature-text">
                                    Sediakan ruang diskusi berbasis teks atau forum grup agar
                                    belajar makin efektif dan kolaboratif.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Atur Jadwal Belajar</h3>
                                <p class="feature-text">
                                    Rencanakan sesi belajar bareng dengan fitur penjadwalan
                                    otomatis agar belajar jadi lebih terstruktur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Tentang Kami</p>
                        <h3>Menghubungkan Teman Belajar Melalui Teknologi Kolaboratif</h3>
                        <p class="fst-italic">
                            SIBEE adalah platform digital yang dirancang untuk membantu
                            pelajar dan mahasiswa menemukan teman belajar, berdiskusi, dan
                            meningkatkan pemahaman secara kolaboratif.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Fitur pencocokan pengguna berdasarkan minat belajar dan
                                    tingkat kesulitan materi.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Ruang diskusi interaktif berbasis teks untuk kolaborasi
                                    akademik.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Penjadwalan belajar bersama dan kuis interaktif untuk
                                    mengukur pemahaman pengguna secara real-time.</span>
                            </li>
                        </ul>
                        <a href="#" class="read-more">
                            <span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="{{ asset('landing-page/img/about1.png') }}" class="img-fluid"
                                    alt="Ilustrasi Diskusi Mahasiswa" />
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('landing-page/img/about.png') }}" class="img-fluid"
                                            alt="Belajar Online Bersama" />
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="{{ asset('landing-page/img/about2.png') }}" class="img-fluid"
                                            alt="Kolaborasi dalam Tim" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- How We Work Section -->
        <section id="how-we-work" class="how-we-work section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bagaimana Kami Bekerja</h2>
                <p>
                    Kami membangun SIBEE dengan tahapan sistematis agar memberikan
                    pengalaman belajar kolaboratif yang optimal dan mudah digunakan.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="steps-5">
                    <div class="process-container">
                        <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <span class="step-number">01</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>Identifikasi Masalah</h3>
                                        <p>
                                            Kami memulai dengan memahami permasalahan yang sering
                                            dialami pelajar, terutama dalam mencari teman belajar
                                            dan menjaga motivasi belajar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="content">
                                <span class="step-number">02</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>Perencanaan Solusi</h3>
                                        <p>
                                            Kami menyusun rancangan fitur seperti matching teman
                                            belajar, diskusi interaktif, dan kuis bersama untuk
                                            menjawab kebutuhan tersebut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="process-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="content">
                                <span class="step-number">03</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>Pengembangan Sistem</h3>
                                        <p>
                                            Proses coding dan desain antarmuka dilakukan dengan
                                            teknologi modern (Laravel & Tailwind) agar platform
                                            responsif dan user-friendly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="process-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="content">
                                <span class="step-number">04</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-bug"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>Uji Coba & Validasi</h3>
                                        <p>
                                            Kami melakukan pengujian internal dan uji coba pengguna
                                            untuk memastikan semua fitur berjalan sesuai kebutuhan
                                            dan bebas dari bug.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="process-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="content">
                                <span class="step-number">05</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-rocket-takeoff"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>Peluncuran & Dukungan</h3>
                                        <p>
                                            Setelah sistem siap, kami luncurkan ke publik dan
                                            memberikan dokumentasi serta dukungan kepada pengguna
                                            untuk pengalaman belajar terbaik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /How We Work Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Utama</h2>
                <p>
                    SIBEE menyediakan layanan digital untuk mendukung proses belajar
                    bareng yang lebih efektif, terstruktur, dan menyenangkan.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center g-5">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="service-content">
                                <h3>Pencocokan Teman Belajar</h3>
                                <p>
                                    Sistem akan mencocokkan kamu dengan teman belajar yang
                                    memiliki minat atau kesulitan topik yang sama untuk
                                    meningkatkan efektivitas belajar kelompok.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div class="service-content">
                                <h3>Ruang Diskusi Interaktif</h3>
                                <p>
                                    Fitur chat berbasis teks untuk berdiskusi secara langsung,
                                    berbagi materi, tanya-jawab, dan belajar bareng dalam satu
                                    ruang yang nyaman.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="service-content">
                                <h3>Manajemen Jadwal Belajar</h3>
                                <p>
                                    Jadwalkan waktu belajar bareng dengan mudah dan terstruktur.
                                    Kamu dan temanmu tidak akan lupa dengan sistem pengingat
                                    otomatis.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <div class="service-content">
                                <h3>Kuis Interaktif</h3>
                                <p>
                                    Uji pemahaman materi dengan membuat atau mengikuti kuis
                                    bersama teman belajar. Dapatkan hasil instan dan evaluasi
                                    seketika.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-bar-chart-line"></i>
                            </div>
                            <div class="service-content">
                                <h3>Progress & Evaluasi</h3>
                                <p>
                                    Lihat riwayat aktivitas belajarmu, skor kuis, dan keaktifan
                                    di forum. Semua tercatat sebagai bahan refleksi dan
                                    motivasi.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="service-content">
                                <h3>Keamanan dan Privasi</h3>
                                <p>
                                    Setiap pengguna terverifikasi dan datamu aman. Kami menjaga
                                    lingkungan belajar yang positif dan bebas dari
                                    penyalahgunaan.
                                </p>
                                <a href="#" class="service-link">
                                    <span>Pelajari Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <!-- Services Alt Section -->
        <section id="services-alt" class="services-alt section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="content-block">
                            <h6 class="subtitle">Layanan Unggulan Kami</h6>
                            <h2 class="title">
                                Belajar Bareng Lebih Mudah, Terstruktur, dan Menyenangkan
                            </h2>
                            <p class="description">
                                SIBEE hadir sebagai solusi digital untuk pelajar dan mahasiswa
                                yang ingin belajar bersama secara efektif. Dengan fitur
                                pencocokan teman belajar, forum diskusi, penjadwalan otomatis,
                                hingga kuis interaktif — semuanya kami rancang untuk
                                meningkatkan kualitas pembelajaran kolaboratif.
                            </p>
                            <div class="button-wrapper">
                                <a class="btn" href="#services"><span>Lihat Semua Fitur</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="services-list">
                            <div class="service-item d-flex align-items-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="service-icon">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <div class="service-content">
                                    <h4><a href="#">Matching Teman Belajar</a></h4>
                                    <p>
                                        Cari teman belajar berdasarkan topik yang sama dan mulai
                                        belajar bareng secara tepat sasaran.
                                    </p>
                                </div>
                            </div>

                            <div class="service-item d-flex align-items-center" data-aos="fade-up"
                                data-aos-delay="300">
                                <div class="service-icon">
                                    <i class="bi bi-chat-left-dots"></i>
                                </div>
                                <div class="service-content">
                                    <h4><a href="#">Forum Diskusi</a></h4>
                                    <p>
                                        Diskusikan topik materi, tanyakan soal sulit, atau berbagi
                                        insight bersama rekan belajar.
                                    </p>
                                </div>
                            </div>

                            <div class="service-item d-flex align-items-center" data-aos="fade-up"
                                data-aos-delay="400">
                                <div class="service-icon">
                                    <i class="bi bi-calendar2-check"></i>
                                </div>
                                <div class="service-content">
                                    <h4><a href="#">Jadwal Belajar Teratur</a></h4>
                                    <p>
                                        Buat dan atur jadwal belajar bersama lengkap dengan
                                        pengingat otomatis agar lebih disiplin.
                                    </p>
                                </div>
                            </div>

                            <div class="service-item d-flex align-items-center" data-aos="fade-up"
                                data-aos-delay="500">
                                <div class="service-icon">
                                    <i class="bi bi-patch-question"></i>
                                </div>
                                <div class="service-content">
                                    <h4><a href="#">Kuis Kolaboratif</a></h4>
                                    <p>
                                        Latihan soal bareng teman, evaluasi hasil belajar, dan
                                        tingkatkan pemahaman secara interaktif.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Alt Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action-2" class="call-to-action-2 section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="cta-image-wrapper">
                            <img src="{{ asset('landing-page/img/cta.png') }}" alt="Belajar Bareng"
                                class="img-fluid rounded-4" />
                            <div class="cta-pattern"></div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="cta-content">
                            <h2>Mulai Belajar Bareng & Temukan Teman Seperjuangan!</h2>
                            <p class="lead">
                                Daftarkan dirimu di SIBEE dan rasakan pengalaman belajar yang
                                lebih kolaboratif, interaktif, dan menyenangkan. Tingkatkan
                                pemahamanmu bersama teman belajar yang sefrekuensi.
                            </p>

                            <div class="cta-features">
                                <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Temukan teman belajar berdasarkan topik yang kamu
                                        minati</span>
                                </div>
                                <div class="feature-item" data-aos="zoom-in" data-aos-delay="450">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Diskusi langsung dan jadwalkan sesi belajar bersama</span>
                                </div>
                                <div class="feature-item" data-aos="zoom-in" data-aos-delay="500">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Ikuti kuis dan pantau progres belajarmu</span>
                                </div>
                            </div>

                            <div class="cta-action mt-5">
                                <a href="#" class="btn btn-primary btn-lg me-3">Gabung Sekarang</a>
                                <a href="#about" class="btn btn-outline-primary btn-lg">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">
                    <!-- Kartu Kontak -->
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="faq-contact-card">
                            <div class="card-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <div class="card-content">
                                <h3>Masih Bingung?</h3>
                                <p>
                                    Jika kamu masih memiliki pertanyaan seputar fitur atau cara
                                    kerja SIBEE, jangan ragu untuk menghubungi kami melalui
                                    berbagai saluran berikut:
                                </p>
                                <div class="contact-options">
                                    <a href="mailto:support@sibee.com" class="contact-option">
                                        <i class="bi bi-envelope"></i>
                                        <span>Email Support</span>
                                    </a>
                                    <a href="#" class="contact-option">
                                        <i class="bi bi-chat-dots"></i>
                                        <span>Live Chat</span>
                                    </a>
                                    <a href="tel:+6281234567890" class="contact-option">
                                        <i class="bi bi-telephone"></i>
                                        <span>Hubungi Kami</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Daftar Pertanyaan -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-accordion">
                            <div class="faq-item faq-active">
                                <div class="faq-header">
                                    <h3>Apa itu SIBEE?</h3>
                                    <i class="bi bi-chevron-down faq-toggle"></i>
                                </div>
                                <div class="faq-content">
                                    <p>
                                        SIBEE adalah platform digital yang membantu pelajar dan
                                        mahasiswa belajar secara kolaboratif dengan mencocokkan
                                        teman belajar, menyediakan ruang diskusi, dan fitur kuis
                                        interaktif.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                                <div class="faq-header">
                                    <h3>Apakah saya bisa memilih teman belajar sendiri?</h3>
                                    <i class="bi bi-chevron-down faq-toggle"></i>
                                </div>
                                <div class="faq-content">
                                    <p>
                                        Ya, kamu bisa bergabung ke grup yang tersedia atau
                                        menunggu sistem mencocokkanmu secara otomatis berdasarkan
                                        minat/topik yang kamu pilih.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-header">
                                    <h3>
                                        Apakah fitur kuis bisa digunakan oleh semua pengguna?
                                    </h3>
                                    <i class="bi bi-chevron-down faq-toggle"></i>
                                </div>
                                <div class="faq-content">
                                    <p>
                                        Tentu! Fitur kuis bisa digunakan untuk latihan mandiri
                                        maupun bersama dalam grup belajar, dan hasilnya langsung
                                        ditampilkan.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-header">
                                    <h3>Apakah SIBEE gratis digunakan?</h3>
                                    <i class="bi bi-chevron-down faq-toggle"></i>
                                </div>
                                <div class="faq-content">
                                    <p>
                                        Saat ini SIBEE dapat digunakan secara gratis oleh semua
                                        pelajar dan mahasiswa. Cukup daftar dan mulai belajar
                                        bareng!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End FAQ Items -->
                </div>
            </div>
        </section>
        <!-- /Faq Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimoni Pengguna</h2>
                <p>
                    Pendapat mereka yang sudah mencoba SIBEE dan merasakan manfaat
                    belajar bareng secara kolaboratif.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonials-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 800,
                "autoplay": { "delay": 5000 },
                "slidesPerView": 1,
                "spaceBetween": 30,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "768": { "slidesPerView": 2 },
                  "1200": { "slidesPerView": 3 }
                }
              }
            </script>

                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Dulu saya suka bingung belajar sendiri, tapi setelah pakai
                                        SIBEE, saya bisa ketemu teman yang sefrekuensi dan diskusi
                                        bareng. Seru banget!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('landing-page/img/person/person-f-6.webp') }}"
                                            alt="Profile Image" />
                                        <div>
                                            <h3>Alya Rahma</h3>
                                            <h4>Mahasiswi Informatika</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Fitur kuis interaktifnya keren, apalagi bisa latihan
                                        bareng sebelum ujian. Jadwal belajarnya juga ngebantu
                                        banget biar lebih disiplin.
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('landing-page/img/person/person-m-5.webp') }}"
                                            alt="Profile Image" />
                                        <div>
                                            <h3>Rizky Akbar</h3>
                                            <h4>Mahasiswa Bisnis Digital</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Saya dan teman satu jurusan sekarang sering belajar bareng
                                        lewat SIBEE. Jadi makin semangat karena ada teman diskusi!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('landing-page/img/person/person-f-3.webp') }}"
                                            alt="Profile Image" />
                                        <div>
                                            <h3>Putri Nabila</h3>
                                            <h4>Mahasiswi Sistem Informasi</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Testimonial -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak Kami</h2>
                <p>
                    Ada pertanyaan, masukan, atau ingin berkolaborasi? Hubungi tim SIBEE
                    melalui formulir atau kontak di bawah ini.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 mb-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3>Alamat Kami</h3>
                            <p>
                                STT Terpadu Nurul Fikri, Jl. Lenteng Agung Raya No.20, Jakarta
                                Selatan
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h3>Kontak</h3>
                            <p>
                                WhatsApp: +62 812-3456-7890<br />
                                Email: support@sibee.com
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>Jam Operasional</h3>
                            <p>
                                Senin - Sabtu: 09:00 - 17:00 WIB<br />
                                Minggu & Libur Nasional: Tutup
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Nama lengkap*" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Alamat email*" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 form-group">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="Nomor HP*" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-list"></i></span>
                                            <select name="subject" class="form-control" required>
                                                <option value="">Pilih Kategori Pesan*</option>
                                                <option value="Pertanyaan Umum">
                                                    Pertanyaan Umum
                                                </option>
                                                <option value="Saran Fitur">Saran Fitur</option>
                                                <option value="Kerja Sama">Kerja Sama</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                            <textarea class="form-control" name="message" rows="6" placeholder="Tulis pesan Anda*" required></textarea>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">
                                            Pesan Anda telah berhasil dikirim. Terima kasih!
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">SIBEE</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>STT Terpadu Nurul Fikri</p>
                        <p>Jl. Lenteng Agung Raya No.20, Jakarta Selatan</p>
                        <p class="mt-3">
                            <strong>Phone:</strong> <span>+62 812-3456-7890</span>
                        </p>
                        <p><strong>Email:</strong> <span>support@sibee.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#services">Fitur</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Fitur Utama</h4>
                    <ul>
                        <li><a href="#">Matching Teman Belajar</a></li>
                        <li><a href="#">Ruang Diskusi</a></li>
                        <li><a href="#">Kuis Interaktif</a></li>
                        <li><a href="#">Penjadwalan Belajar</a></li>
                        <li><a href="#">Progress & Evaluasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Panduan Pengguna</a></li>
                        <li><a href="#">Tim Pengembang</a></li>
                        <li><a href="#">Laporan Masalah</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Dukungan</h4>
                    <ul>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Live Chat</a></li>
                        <li><a href="#">Email Support</a></li>
                        <li><a href="#">Forum Diskusi</a></li>
                        <li><a href="#">FAQ Lengkap</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>2025</span>
                <strong class="px-1 sitename">SIBEE</strong>
                <span>– Sistem Informasi Belajar Bareng. All Rights Reserved.</span>
            </p>
            <div class="credits">
                Dibuat oleh <a href="#">Tim Proyek Pumpkin</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing-page/js/main.js') }}"></script>
</body>

</html>

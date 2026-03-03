<!-- Navbar -->

<!-- panggil file master, dan panggil navbar -->
  @extends('layouts.app')
    @section('content')
  <!-- Hero Section -->
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Dewan Masjid Indonesia</h1>
      <h2>Menyatukan Masjid, Menguatkan Umat</h2>
      <p>Menjadi pusat inspirasi, kolaborasi, dan harmoni bagi seluruh masjid di Indonesia,
         membangun peradaban yang berlandaskan iman dan kebersamaan.</p>
    </div>
  </section>
  <!-- End Hero Section -->


  <!-- Carousel -->
<section class="news-section">
    <div class="news-container">
        <div class="news-left">
            <div class="carousel-wrapper">
                <div class="carousel-main">
                    <div class="carousel-slides">
                        <div class="slide active">
                            <img src="../img/home/c2.jpg"  alt="Program Akustik">
                            <div class="slide-info">
                                <span class="badge">PROGRAM UNGGULAN</span>
                                <h2>Penataan Akustik Masjid: Menjamin Kekhusyukan Ibadah di Seluruh Indonesia</h2>
                                <p class="meta">Manajemen Masjid | 5 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="../img/home/c1.jpg" alt="Ekonomi Umat">
                            <div class="slide-info">
                                <span class="badge">PEMBERDAYAAN</span>
                                <h2>Optimalisasi Fungsi Masjid sebagai Pusat Pengembangan Ekonomi Syariah</h2>
                                <p class="meta">Ekonomi Umat | 1 hari yang lalu</p>
                            </div>
                        </div>
                    </div>

                    <button class="nav-arrow prev" id="prevBtn">&#10094;</button>
                    <button class="nav-arrow next" id="nextBtn">&#10095;</button>
                </div>

                <div class="carousel-footer">
                    <div class="footer-label">
                        <span>WARTA MASJID</span>
                        <div class="line"></div>
                    </div>
                    <div class="footer-grid">
                        <div class="footer-item" data-index="0">
                            <h4>Pelatihan Teknisi Akustik Masjid Regional Sumatera</h4>
                            <p>Program Kerja | 8 jam yang lalu</p>
                        </div>
                        <div class="footer-item" data-index="1">
                            <h4>Sosialisasi Sertifikasi Tanah Wakaf bersama ATR/BPN</h4>
                            <p>Legalitas | 12 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-right">
            <h3 class="sidebar-title">AGENDA POPULER</h3>
            <div class="popular-list">

                <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>

                  <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>

                <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>

                <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>


                <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>

                <div class="popular-card">
                    <span class="rank">1</span>
                    <div class="popular-content">
                        <h4>Panduan Standarisasi Manajemen Masjid Modern 2026</h4>
                        <span class="cat">Manajemen</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Preview Embed Video YT -->
<section class="video-preview-section">
    <div class="video-card">
        <div class="video-box">
            <iframe 
                src="https://www.youtube.com/embed/eRo5KTO8_dM?rel=0" 
                title="DMI dan Trisakti Beri Beasiswa Gratis untuk Anak Marbot" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
 <section class="contact-section">
    <div class="contact-container">
        <h2 class="contact-title">HUBUNGI KAMI</h2>
        
        <div class="contact-content">
            <div class="contact-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.452667866384!2d106.85542717585094!3d-6.203859993784149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4689031d9a5%3A0x6d9531505d9e5f5!2sJl.%20Matraman%20Raya%20No.39-41%2C%20RT.1%2FRW.5%2C%20Palmeriam%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013150!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <div class="contact-cards">
                <div class="info-card">
                    <i class="fas fa-phone icon"></i>
                    <h3>Phone</h3>
                    <p>+62 811 1057 102</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope icon"></i>
                    <h3>Email</h3>
                    <p>hello@dmi.tv</p>
                </div>
                <div class="info-card">
                    <i class="fab fa-instagram icon"></i>
                    <h3>Instagram</h3>
                    <p>DMI.Pusat</p>
                </div>
                <div class="info-card">
                    <i class="fab fa-tiktok icon"></i>
                    <h3>TikTok</h3>
                    <p>@dmitvofficial</p>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- footer -->

    @endsection
    <!-- penutup footer -->
@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

<div class="news-wrapper">
    <div class="swiper editorialSwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="editorial-card">
                    <div class="image-wrapper">
                        <img src="../img/berita/carousel/car-1.jpg" alt="Headline" loading="lazy">
                        <div class="overlay-gradient"></div>
                    </div>
                    
                    <div class="content-box">
                        <div class="metadata" data-swiper-parallax="-300">
                            <span class="badge-new">RAMADHAN</span>
                            <span class="date"><i class="far fa-calendar-alt"></i> 18 Feb 2026</span>
                        </div>
                        
                        <h1 class="title" data-swiper-parallax="-500">
                            PP Muhammadiyah Tetapkan Awal Ramadan 1447 H Jatuh pada Rabu 18 Februari 2026
                        </h1>
                        
                        <p class="summary" data-swiper-parallax="-700">
                            Berdasarkan hasil hisab hakiki wujudul hilal, Majelis Tarjih dan Tajdid menetapkan awal bulan suci bagi umat muslim di seluruh Indonesia...
                        </p>
                        
                        <div class="cta" data-swiper-parallax="-900">
                            <a href="#" class="btn-main">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="editorial-card">
                    <div class="image-wrapper">
                        <img src="../img/berita/carousel/car-2.jpg" alt="News 2" loading="lazy">
                        <div class="overlay-gradient"></div>
                    </div>
                    
                    <div class="content-box">
                        <div class="metadata" data-swiper-parallax="-300">
                            <span class="badge-new">NASIONAL</span>
                            <span class="date"><i class="far fa-calendar-alt"></i> 02 Mar 2026</span>
                        </div>
                        
                        <h1 class="title" data-swiper-parallax="-500">
                            Inovasi Teknologi Pertanian Modern untuk Ketahanan Pangan Nasional
                        </h1>
                        
                        <p class="summary" data-swiper-parallax="-700">
                            Pemerintah mulai menerapkan sistem irigasi pintar berbasis IoT untuk meningkatkan efisiensi panen di wilayah lumbung padi Indonesia...
                        </p>
                        
                        <div class="cta" data-swiper-parallax="-900">
                            <a href="#" class="btn-main">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
    <div class="editorial-card">
        <div class="image-wrapper">
            <img src="../img/berita/carousel/car-3.jpg" alt="Fokus Utama">
            <div class="overlay-gradient"></div>
        </div>
        
        <div class="content-box">
            <div class="metadata" data-swiper-parallax="-300">
                <span class="badge-new">ANALISIS</span>
                <span class="date"><i class="far fa-clock"></i> 5 Menit Baca</span>
            </div>
            
            <h1 class="title" data-swiper-parallax="-500">
                Menakar Masa Depan Ekonomi Hijau: Peluang dan Tantangan Indonesia di Tahun 2026
            </h1>
            
            <p class="summary" data-swiper-parallax="-700">
                Sejauh mana kesiapan sektor industri dalam mengadopsi energi terbarukan? Simak analisis mendalam mengenai transisi energi dan dampaknya terhadap pertumbuhan ekonomi nasional...
            </p>
            
            <div class="cta" data-swiper-parallax="-900">
                <a href="#" class="btn-main">
                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

        </div>

        <div class="swiper-ui">
            <div class="nav-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-pagination"></div>
            <div class="nav-next"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
</div>

    <!-- ========================== -->
    <!--        Section Baru        -->

    <section class="latest-news-section">
    <div class="container-fluid-custom">
        
        <div class="warta-header-wrapper">
            <div class="header-content-left">
                <div class="badge-accent js-reveal">Portal Informasi</div>
                <h2 class="section-main-title js-reveal">Warta Masjid <span class="text-gradient">& Keumatan</span></h2>
                <div class="title-decoration">
                    <span class="line-long"></span>
                    <span class="line-dot"></span>
                </div>
            </div>
            
            <div class="search-cta-box js-reveal">
                <div class="search-input-group">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari topik dakwah atau berita..." class="search-input-field">
                </div>
                <button type="button" class="search-cta-button">
                    <span>Cari Berita</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="news-modern-grid-v3 js-reveal">
            @php
                $articles = [
                    ['tag' => 'Manajemen', 'date' => '03 Mar 2026', 'title' => 'Standarisasi Akustik Masjid untuk Kenyamanan Ibadah Jemaah', 'desc' => 'Optimalisasi tata suara ruang utama masjid guna mendukung kekhusyukan ibadah.', 'img_id' => '10'],
                    ['tag' => 'Ekonomi', 'date' => '02 Mar 2026', 'title' => 'Pemberdayaan UMKM Berbasis Masjid: Strategi Mandiri', 'desc' => 'DMI mendorong masjid menjadi pusat inkubasi ekonomi bagi pelaku usaha mikro.', 'img_id' => '20'],
                    ['tag' => 'Pendidikan', 'date' => '01 Mar 2026', 'title' => 'Kurikulum Remaja Masjid: Karakter Qurani Era Digital', 'desc' => 'Program pembinaan kreatif untuk menarik minat Generasi Z aktif memakmurkan masjid.', 'img_id' => '30'],
                    ['tag' => 'Digitalisasi', 'date' => '28 Feb 2026', 'title' => 'Implementasi QRIS Infaq: Transparansi Keuangan Masjid', 'desc' => 'Mempermudah jamaah dalam berinfaq secara cashless sekaligus meningkatkan akuntabilitas.', 'img_id' => '40'],
                    ['tag' => 'Eco-Masjid', 'date' => '27 Feb 2026', 'title' => 'Gerakan Masjid Hijau: Pengelolaan Air Wudhu Mandiri', 'desc' => 'Inovasi daur ulang air wudhu untuk penyiraman taman masjid sebagai peduli lingkungan.', 'img_id' => '50'],
                    ['tag' => 'Kesehatan', 'date' => '26 Feb 2026', 'title' => 'Layanan Klinik Masjid: Sinergi Dakwah dan Medis', 'desc' => 'Penyediaan fasilitas kesehatan dasar bagi jamaah dan warga kurang mampu.', 'img_id' => '60'],
                ];
            @endphp

            @foreach($articles as $item)
            <article class="news-card-v3 js-reveal">
                <div class="card-image-box">
                    <img src="https://picsum.photos/id/{{ $item['img_id'] }}/600/400" alt="News Image">
                    <span class="badge-tag">{{ $item['tag'] }}</span>
                </div>
                <div class="card-body-v3">
                    <div class="meta-top"><i class="far fa-calendar-alt"></i> {{ $item['date'] }}</div>
                    <h3 class="title-v3">{{ $item['title'] }}</h3>
                    <p class="excerpt-v3">{{ $item['desc'] }}</p>
                    <div class="footer-v3">
                        <a href="/redaksi/berita/detail-berita" class="btn-read">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="pagination-modern-wrapper js-reveal">
            <div class="pagination-items">
                <a href="#" class="pag-btn prev"><i class="fas fa-chevron-left"></i></a>
                
                <div class="pag-numbers">
                    <a href="#" class="pag-link active">1</a>
                    <a href="#" class="pag-link">2</a>
                    <a href="#" class="pag-link">3</a>
                    <span class="pag-dots">...</span>
                    <a href="#" class="pag-link">12</a>
                </div>

                <a href="#" class="pag-btn next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/berita.js') }}"></script>
@endsection
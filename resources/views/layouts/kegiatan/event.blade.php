    <link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
 
 
 @extends('layouts.app')
    @section('content')

<section class="ev-full-viewport">
  <div class="ev-container">
    <header class="ev-top-header">
      <div class="ev-title-group js-reveal">
        <span class="ev-sup-title">Agenda Utama</span>
        <h1 class="ev-h1">Event Bulan Ini</h1>
      </div>

      <div class="ev-action-bar js-reveal">
        <nav class="ev-nav-filters">
          <button class="ev-tab active">Semua</button>
          <button class="ev-tab">Kajian</button>
          <button class="ev-tab">Sosial</button>
          <button class="ev-tab">Rapat Pleno</button>
        </nav>
        <div class="ev-search-premium">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Cari kegiatan...">
        </div>
      </div>
    </header>

    <main class="ev-main-grid">
      
      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=400&h=300&auto=format&fit=crop" alt="Kajian">
          <div class="ev-date-tag">07 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Grand Islamic Gathering</h3>
          <p class="ev-item-text js-reveal">Penguatan ekonomi berbasis masjid untuk kesejahteraan jamaah di era modern.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 11:59 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&q=80&w=400&h=300" alt="Sosial">
          <div class="ev-date-tag">15 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Bakti Sosial Nasional</h3>
          <p class="ev-item-text js-reveal">Aksi serentak penyaluran logistik dan bantuan medis bagi warga sekitar masjid.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 08:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Nasional</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=1200&auto=format&fit=crop" alt="Pleno">
          <div class="ev-date-tag">22 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Rapat Pleno Program</h3>
          <p class="ev-item-text js-reveal">Koordinasi strategis tahunan untuk memastikan Sebelas Program Unggul berjalan tepat sasaran.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 13:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Pusat</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>
      
      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=400&h=300&auto=format&fit=crop" alt="Kajian">
          <div class="ev-date-tag">07 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Grand Islamic Gathering</h3>
          <p class="ev-item-text js-reveal">Penguatan ekonomi berbasis masjid untuk kesejahteraan jamaah di era modern.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 11:59 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&q=80&w=400&h=300" alt="Sosial">
          <div class="ev-date-tag">15 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Bakti Sosial Nasional</h3>
          <p class="ev-item-text js-reveal">Aksi serentak penyaluran logistik dan bantuan medis bagi warga sekitar masjid.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 08:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Nasional</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box js-reveal">
          <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=1200&auto=format&fit=crop" alt="Pleno">
          <div class="ev-date-tag">22 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title js-reveal">Rapat Pleno Program</h3>
          <p class="ev-item-text js-reveal">Koordinasi strategis tahunan untuk memastikan Sebelas Program Unggul berjalan tepat sasaran.</p>
          <div class="ev-item-meta js-reveal">
            <span><i class="far fa-clock"></i> 13:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Pusat</span>
          </div>
          <a href="/kegiatan/detail-event"><button class="ev-btn-primary js-reveal">Lihat Detail</button></a>
        </div>
      </article>

    </main>

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
    

    @endsection
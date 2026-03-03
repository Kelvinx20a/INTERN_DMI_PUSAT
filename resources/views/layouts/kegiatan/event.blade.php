    <link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
 
 
 @extends('layouts.app')
    @section('content')

<section class="ev-full-viewport">
  <div class="ev-container">
    <header class="ev-top-header">
      <div class="ev-title-group">
        <span class="ev-sup-title">Agenda Utama</span>
        <h1 class="ev-h1">Event Bulan Ini</h1>
      </div>

      <div class="ev-action-bar">
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
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Kajian" alt="Kajian">
          <div class="ev-date-tag">07 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Grand Islamic Gathering</h3>
          <p class="ev-item-text">Penguatan ekonomi berbasis masjid untuk kesejahteraan jamaah di era modern.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 11:59 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Sosial" alt="Sosial">
          <div class="ev-date-tag">15 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Bakti Sosial Nasional</h3>
          <p class="ev-item-text">Aksi serentak penyaluran logistik dan bantuan medis bagi warga sekitar masjid.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 08:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Nasional</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Pleno" alt="Pleno">
          <div class="ev-date-tag">22 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Rapat Pleno Program</h3>
          <p class="ev-item-text">Koordinasi strategis tahunan untuk memastikan Sebelas Program Unggul berjalan tepat sasaran.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 13:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Pusat</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>
      <article class="ev-card">
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Kajian" alt="Kajian">
          <div class="ev-date-tag">07 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Grand Islamic Gathering</h3>
          <p class="ev-item-text">Penguatan ekonomi berbasis masjid untuk kesejahteraan jamaah di era modern.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 11:59 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Sosial" alt="Sosial">
          <div class="ev-date-tag">15 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Bakti Sosial Nasional</h3>
          <p class="ev-item-text">Aksi serentak penyaluran logistik dan bantuan medis bagi warga sekitar masjid.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 08:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Nasional</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>

      <article class="ev-card">
        <div class="ev-img-box">
          <img src="https://placehold.co/800x600/215a28/white?text=DMI+Pleno" alt="Pleno">
          <div class="ev-date-tag">22 Jan</div>
        </div>
        <div class="ev-card-body">
          <h3 class="ev-item-title">Rapat Pleno Program</h3>
          <p class="ev-item-text">Koordinasi strategis tahunan untuk memastikan Sebelas Program Unggul berjalan tepat sasaran.</p>
          <div class="ev-item-meta">
            <span><i class="far fa-clock"></i> 13:00 WIB</span>
            <span><i class="fas fa-map-marker-alt"></i> Pusat</span>
          </div>
          <button class="ev-btn-primary">Lihat Detail</button>
        </div>
      </article>

    </main>
  </div>
</section>
    

    @endsection
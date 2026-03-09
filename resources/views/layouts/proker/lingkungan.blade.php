 
 @extends('layouts.app')
    @section('content')

    <section class="dmi-eco-clean">
    <div class="container-custom">
        <div class="eco-header-minimal reveal">
            <span class="eco-tag">ENVIRONMENTAL INITIATIVE</span>
            <h2 class="eco-title">Program Kerja Masjid Hijau</h2>
            <div class="eco-divider"></div>
        </div>

        <div class="eco-hero-container reveal">
            <img src="../img/proker/lingkungan/3.jpg" alt="Hero Vision" class="hero-img">
            <div class="hero-label">Visi Berkelanjutan 2026</div>
        </div>

        <div class="eco-progress-grid">
            
            <div class="eco-card-min reveal">
                <div class="card-img-box">
                    <img src="https://picsum.photos/id/1016/800/600" alt="Energy">
                </div>
                <div class="card-info-min">
                    <span class="card-category">Energi</span>
                    <h3>Pembangkit Listrik Surya</h3>
                    <div class="progress-section">
                        <div class="progress-bar-wrap">
                            <div class="progress-fill" style="width: 85%;"></div>
                        </div>
                        <div class="progress-text">
                            <span>Status Pelaksanaan</span>
                            <strong>85%</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="eco-card-min reveal">
                <div class="card-img-box">
                    <img src="https://picsum.photos/id/1015/800/600" alt="Water">
                </div>
                <div class="card-info-min">
                    <span class="card-category">Air</span>
                    <h3>Konservasi Air Wudhu</h3>
                    <div class="progress-section">
                        <div class="progress-bar-wrap">
                            <div class="progress-fill" style="width: 60%;"></div>
                        </div>
                        <div class="progress-text">
                            <span>Status Pelaksanaan</span>
                            <strong>60%</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="eco-card-min reveal">
                <div class="card-img-box">
                    <img src="https://picsum.photos/id/1043/800/600" alt="Waste">
                </div>
                <div class="card-info-min">
                    <span class="card-category">Limbah</span>
                    <h3>Waste-to-Energy</h3>
                    <div class="progress-section">
                        <div class="progress-bar-wrap">
                            <div class="progress-fill" style="width: 35%;"></div>
                        </div>
                        <div class="progress-text">
                            <span>Status Pelaksanaan</span>
                            <strong>35%</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    // Script ini memastikan class "active" muncul saat di-scroll
    const revealElements = document.querySelectorAll('.reveal');
    const revealOnScroll = () => {
        revealElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add('active');
            }
        });
    };
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Jalankan saat pertama load
</script>

    @endsection
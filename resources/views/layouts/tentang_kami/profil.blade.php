
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
  <!-- Navbar -->
  @extends('layouts.app')
    @section('content')
<section class="dmi-hero-center">
    <div class="dmi-overlay-green">
        <div class="container">
            <div class="dmi-hero-content">
                <p class="dmi-pre-title">TENTANG DEWAN MASJID INDONESIA (DMI)</p>
                <h1 class="dmi-main-title">TENTANG DEWAN<br>MASJID INDONESIA</h1>
                <p class="dmi-tagline"><i>Menyatukan Masjid, Menguatkan Umat</i></p>
            </div>
        </div>
    </div>
</section>

<section class="dmi-profile-body">
    <div class="container text-center">
        <div class="dmi-description-box">
            <h2 class="dmi-section-heading">Profil Dewan Masjid Indonesia</h2>
            <div class="dmi-line-center"></div>
            <p class="dmi-main-text">
                Dewan Masjid Indonesia (DMI) merupakan salah satu organisasi keagamaan terbesar di Indonesia yang berperan penting dalam memajukan fungsi masjid sebagai pusat peribadatan dan pemberdayaan umat.
            </p>
        </div>
    </div>
</section>

<section class="dmi-container">
    <header class="main-header">
        <h1>Jejak Langkah <span>Dewan Masjid Indonesia</span></h1>
        <div class="underline"></div>
    </header>

    <div class="grid-layout">
        <div class="card card-yellow">
            <div class="card-content">
                <div class="card-header">
                    <i class="fas fa-lightbulb"></i>
                    <h2>Awal Mula Gagasan</h2>
                </div>
                <p>Pada akhir 1960-an, peran masjid sebagai pusat kehidupan umat Islam mulai disadari oleh berbagai kalangan. Awal terbentuknya DMI adalah ketika beberapa tokoh Islam berkumpul untuk membahas pengelolaan masjid secara terpusat. Pertemuan ini menjadi titik awal terbentuknya Dewan Kemakmuran Masjid Seluruh Indonesia (DKMSI) yang memicu lahirnya DMI pada 16 Juni 1970.</p>
            </div>
        </div>

        <div class="card card-green">
            <div class="card-content">
                <div class="card-header">
                    <i class="fas fa-mosque"></i>
                    <h2>Lahirnya DMI</h2>
                </div>
                <p>Pada 22 Juni 1972, rapat tim formatur secara resmi mendirikan Dewan Masjid Indonesia. Momen ini menjadi tonggak sejarah sebagai wadah koordinasi kemakmuran masjid di seluruh Indonesia. Kini DMI telah berkembang pesat dengan kepengurusan di setiap provinsi sebagai pusat pemberdayaan umat.</p>
            </div>
        </div>

        <div class="card card-green-dark">
            <div class="card-content">
                <div class="card-header">
                    <i class="fas fa-users"></i>
                    <h2>Kepemimpinan DMI</h2>
                </div>
                <p>Setiap lima tahun, DMI mengadakan muktamar nasional. Salah satu tokoh sentralnya adalah Jusuf Kalla, Ketua Umum periode 2012-2022. Di bawah kepemimpinannya, DMI memperkuat peran strategis masjid dalam bidang sosial dan ekonomi serta menggerakkan masjid sebagai pusat aktivitas umat.</p>
            </div>
        </div>

        <div class="card card-orange">
            <div class="card-content">
                <div class="card-header">
                    <i class="fas fa-map-marker-alt"></i>
                    <h2>Kantor Pusat</h2>
                </div>
                <p>Kantor pusat DMI berlokasi di Jl. Matraman Raya No.39-41, Jakarta Timur. Tempat ini menjadi pusat administrasi dan koordinasi utama bagi seluruh program kemakmuran masjid yang dijalankan di berbagai wilayah Indonesia.</p>
            </div>
        </div>
    </div>
</section>

<section class="dmi-impact-section">
    <div class="dmi-container">
        <div class="impact-wrapper">
            <div class="impact-content">
                <span class="sub-badge">Visi Masa Depan</span>
                <h2 class="impact-title">DMI Sebagai <span>Penggerak Perubahan</span></h2>
                <p class="impact-desc">
                    Hingga saat ini, Dewan Masjid Indonesia terus berupaya memaksimalkan peran masjid dalam kehidupan masyarakat. Melalui sejarah panjang, DMI telah menunjukkan peran signifikan dalam menjaga keberlanjutan peran masjid sebagai pusat peradaban Islam di Indonesia.
                </p>
            </div>

            <div class="impact-features">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-hands-helping"></i></div>
                    <div>
                        <h3>Aspek Sosial</h3>
                        <p>Berperan aktif dalam pemberdayaan dan bantuan sosial umat.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h3>Ekonomi & Pendidikan</h3>
                        <p>Mengembangkan potensi ekonomi dan kualitas pendidikan melalui masjid.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h3>Persatuan Umat</h3>
                        <p>Menjadi kekuatan penggerak untuk memperkokoh persatuan di pelosok negeri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
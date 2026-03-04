<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proker.css') }}">
    
    <title>DMI - Dewan Masjid Indonesia</title>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>

    @include('partials.navbar')

       @if(!Request::is('/'))
    <nav class="breadcrumb-container" aria-label="breadcrumb">
        <ol class="breadcrumb-list">
            {{-- Beranda --}}
            <li class="breadcrumb-item">
                <a href="/"><i class="fas fa-home"></i> Beranda</a>
            </li>

            {{-- Dinamis Segments --}}
            @php 
                $link = ""; 
                // Daftarkan segment induk yang TIDAK memiliki halaman (non-clickable)
                $disabledSegments = ['program kerja', 'Tentang Kami', 'kegiatan', 'redaksi']; 
            @endphp

            @foreach(request()->segments() as $segment)
                @php 
                    $link .= "/" . $segment; 
                    // Cek apakah segment saat ini (lowercase) ada di daftar disabled
                    $isDisabled = in_array(strtolower($segment), $disabledSegments);
                @endphp

                <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                    @if($loop->last || $isDisabled)
                        {{-- Tampilkan teks biasa jika segment terakhir atau ada di daftar disabled --}}
                        <span class="breadcrumb-text">
                            {{ ucwords(str_replace(['-', '_'], ' ', $segment)) }}
                        </span>
                    @else
                        {{-- Tampilkan link jika segment memiliki halaman tujuan --}}
                        <a href="{{ url($link) }}">
                            {{ ucwords(str_replace(['-', '_'], ' ', $segment)) }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
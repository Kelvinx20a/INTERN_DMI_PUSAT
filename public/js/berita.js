document.addEventListener('DOMContentLoaded', function() {
    // 1. Inisialisasi Swiper
    const swiper = new Swiper('.editorialSwiper', {
        parallax: true,
        watchSlidesProgress: true, // Tambahkan ini
        speed: 1200,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.nav-next',
            prevEl: '.nav-prev',
        },
    });

    // 2. Logika Loading Gambar (Smooth Reveal)
    const allImages = document.querySelectorAll('.image-wrapper img');
    
    allImages.forEach(img => {
        // Jika gambar sudah ada di cache browser
        if (img.complete) {
            revealImage(img);
        } else {
            // Jika baru akan dimuat
            img.addEventListener('load', function() {
                revealImage(img);
            });
        }
    });

    function revealImage(img) {
        img.classList.add('loaded');
        img.parentElement.classList.add('is-loaded');
    }
});


// ---------------
// Section Baru
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".news-card-v3");

    const observerOptions = {
        threshold: 0.12, // Kartu muncul jika 10% bagiannya terlihat
        rootMargin: "0px 0px -20px 0px" // Muncul sedikit sebelum benar-benar terlihat
    };

   const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("reveal");
                // Kita lepas observer-nya supaya animasi cuma jalan sekali (lebih enteng)
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    cards.forEach(card => {
        revealObserver.observe(card);
    });
});

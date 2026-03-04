//==========================//
// INTERAKTIF UI//
// PAGE PENATAAN ORGANISASI //
//==========================//
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Efek staggered (muncul satu per satu)
                setTimeout(() => {
                    entry.target.classList.add("reveal-active");
                }, index * 100);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.js-reveal').forEach(el => observer.observe(el));
});
// Search toggle functionality
const searchToggle = document.getElementById('searchToggle');
const searchBar = document.querySelector('.search-bar');

searchToggle.addEventListener('click', function () {
    searchBar.classList.toggle('active');

    // Focus on the search bar when it becomes active
    if (searchBar.classList.contains('active')) {
        searchBar.focus();
    }
});

// Close search bar when clicking outside (optional)
document.addEventListener('click', function (event) {
    const isClickInsideSearch = searchToggle.contains(event.target) || searchBar.contains(event.target);

    if (!isClickInsideSearch && searchBar.classList.contains('active')) {
        searchBar.classList.remove('active');
    }
});

// Close search bar on escape key
document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && searchBar.classList.contains('active')) {
        searchBar.classList.remove('active');
    }
});

// Add scroll effect to navbar
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.custom-navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Close mobile navbar when clicking a link (optional)
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.getElementById('navbarContent');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });


    // Carousel JS
    const track = document.getElementById('carousel-track');
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dotsContainer = document.getElementById('carousel-dots');
    const currentSlideSpan = document.getElementById('current-slide');
    const totalSlidesSpan = document.getElementById('total-slides');

    let currentSlide = 0;
    const totalSlides = slides.length;

    // Initialize total slides counter
    totalSlidesSpan.textContent = totalSlides;

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    // Update slide position
    function updateSlidePosition() {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;

        // Update dots
        document.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });

        // Update counter
        currentSlideSpan.textContent = currentSlide + 1;
    }

    // Go to specific slide
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlidePosition();
    }

    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlidePosition();
    }

    // Previous slide
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlidePosition();
    }

    // Event listeners
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    // Auto slide (optional)
    let autoSlideInterval = setInterval(nextSlide, 5000);

    // Pause auto slide on hover
    const carousel = document.querySelector('.modern-carousel');
    carousel.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });

    carousel.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(nextSlide, 5000);
    });

    // Touch/swipe support
    let startX = 0;
    let endX = 0;

    track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    track.addEventListener('touchmove', (e) => {
        endX = e.touches[0].clientX;
    });

    track.addEventListener('touchend', () => {
        const threshold = 50;
        if (startX - endX > threshold) {
            nextSlide(); // Swipe left
        } else if (endX - startX > threshold) {
            prevSlide(); // Swipe right
        }
    });

    // Initialize
    updateSlidePosition();

    // Button click effects
    document.querySelectorAll('.slide-button').forEach(button => {
        button.addEventListener('click', function () {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);

            alert(`Navigating to ${this.closest('.carousel-slide').querySelector('.slide-title').textContent}`);
        });
    });



    // Owl Carousel
    $("#brandsCarousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                margin: 10
            },
            576: {
                items: 2,
                margin: 15
            },
            768: {
                items: 3,
                margin: 20
            },
            1200: {
                items: 4,
                margin: 20
            }
        }
    });

    // Custom Navigation
    $('#customNext').click(function () {
        $("#brandsCarousel").trigger('next.owl.carousel');
    });

    $('#customPrev').click(function () {
        $("#brandsCarousel").trigger('prev.owl.carousel');
    });

    // Brand card click functionality
    $('.explore-btn').click(function (e) {
        e.stopPropagation();
        const brandName = $(this).closest('.brand-card').find('.brand-name').text();
        alert(`Exploring ${brandName} brand...`);
    });

    // View All Button
    $('.view-all-btn').click(function () {
        alert('Loading all brands...');
        $(this).html('<i class="bi bi-hourglass-split"></i> Loading...');
        setTimeout(() => {
            $(this).html('<span>View All Brands</span> <i class="bi bi-chevron-right"></i>');
        }, 2000);
    });

    // Brand card hover effects
    $('.brand-card').hover(
        function () {
            $(this).css('transform', 'translateY(-15px)');
        },
        function () {
            $(this).css('transform', 'translateY(0)');
        }
    );

    // Add animation on page load
    setTimeout(() => {
        $('.section-title').addClass('animated');
        $('.brand-card').each(function (index) {
            $(this).delay(index * 100).queue(function (next) {
                $(this).css('opacity', '1');
                next();
            });
        });
    }, 500);

    // Initially hide cards for animation
    $('.brand-card').css({
        'opacity': '0',
        'transition': 'opacity 0.6s ease, transform 0.4s ease'
    });
});
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
    let slides = document.querySelectorAll('.carousel-slide');

    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dotsContainer = document.getElementById('carousel-dots');
    const currentSlideSpan = document.getElementById('current-slide');
    const totalSlidesSpan = document.getElementById('total-slides');

    const originalSlidesCount = slides.length;

    /* ==========================
       CLONE SLIDES (INFINITE)
    ========================== */
    const firstClone = slides[0].cloneNode(true);
    const lastClone = slides[slides.length - 1].cloneNode(true);

    track.appendChild(firstClone);
    track.insertBefore(lastClone, slides[0]);

    slides = document.querySelectorAll('.carousel-slide');

    let currentIndex = 1;
    let autoSlideInterval = null;
    const slideDuration = 5000;

    totalSlidesSpan.textContent = originalSlidesCount;

    /* ==========================
       INITIAL POSITION
    ========================== */
    track.style.transform = `translateX(-${currentIndex * 100}%)`;

    /* ==========================
       CREATE DOTS
    ========================== */
    for (let i = 0; i < originalSlidesCount; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');

        dot.addEventListener('click', () => {
            currentIndex = i + 1;
            updateSlide(true);
        });

        dotsContainer.appendChild(dot);
    }

    /* ==========================
       UPDATE SLIDE
    ========================== */
    function updateSlide(animate = true) {
        track.style.transition = animate ? 'transform 0.6s ease' : 'none';
        track.style.transform = `translateX(-${currentIndex * 100}%)`;

        updateDotsAndCounter();
    }

    function updateDotsAndCounter() {
        let displayIndex = currentIndex - 1;

        if (displayIndex < 0) displayIndex = originalSlidesCount - 1;
        if (displayIndex >= originalSlidesCount) displayIndex = 0;

        currentSlideSpan.textContent = displayIndex + 1;

        document.querySelectorAll('.dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === displayIndex);
        });
    }

    /* ==========================
       NEXT / PREV
    ========================== */
    function nextSlide() {
        currentIndex++;
        updateSlide(true);
    }

    function prevSlide() {
        currentIndex--;
        updateSlide(true);
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    /* ==========================
       TRANSITION END (SEAMLESS LOOP)
    ========================== */
    track.addEventListener('transitionend', () => {

        if (currentIndex === 0) {
            currentIndex = originalSlidesCount;
            updateSlide(false);
        }

        if (currentIndex === originalSlidesCount + 1) {
            currentIndex = 1;
            updateSlide(false);
        }
    });

    /* ==========================
       AUTO SLIDE
    ========================== */
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, slideDuration);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    startAutoSlide();

    /* ==========================
       PAUSE ON HOVER
    ========================== */
    const carousel = document.querySelector('.modern-carousel');

    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);

    /* ==========================
       TOUCH / SWIPE
    ========================== */
    let startX = 0;
    let endX = 0;

    track.addEventListener('touchstart', e => {
        startX = e.touches[0].clientX;
    });

    track.addEventListener('touchmove', e => {
        endX = e.touches[0].clientX;
    });

    track.addEventListener('touchend', () => {
        const threshold = 50;
        if (startX - endX > threshold) nextSlide();
        if (endX - startX > threshold) prevSlide();
    });

    // Brand data - Using placehold.co with your color scheme
    const brands = [
        { id: 1, name: "TechCorp", color1: "450077", color2: "9984d4" },
        { id: 2, name: "StyleHub", color1: "450077", color2: "9984d4" },
        { id: 3, name: "AutoDrive", color1: "450077", color2: "9984d4" },
        { id: 4, name: "Foodie", color1: "450077", color2: "9984d4" },
        { id: 5, name: "HomeEssentials", color1: "450077", color2: "9984d4" },
        { id: 6, name: "SportPro", color1: "450077", color2: "9984d4" },
        { id: 7, name: "BeautyLuxe", color1: "450077", color2: "9984d4" },
        { id: 8, name: "GadgetZone", color1: "450077", color2: "9984d4" },
        { id: 9, name: "EcoLife", color1: "450077", color2: "9984d4" },
        { id: 10, name: "SmartHome", color1: "450077", color2: "9984d4" },
        { id: 11, name: "Fashionista", color1: "450077", color2: "9984d4" },
        { id: 12, name: "HealthPlus", color1: "450077", color2: "9984d4" }
    ];

    // Initialize carousel
    function initCarousel() {
        const carouselTrack = document.querySelector('.carousel-track-brands');

        // Clear existing content
        carouselTrack.innerHTML = '';

        // Create two sets for seamless scrolling
        const totalSets = 2;

        for (let set = 0; set < totalSets; set++) {
            brands.forEach((brand, index) => {
                // Create brand item
                const brandItem = document.createElement('div');
                brandItem.className = 'brand-logo-item';
                brandItem.dataset.index = index;

                // Create rectangle container
                const rectangle = document.createElement('div');
                rectangle.className = 'logo-rectangle';

                // Create image (using placehold.co)
                const img = document.createElement('img');
                img.className = 'brand-logo';
                // Using 200x100 size for placeholder (matches rectangle size)
                img.src = `https://placehold.co/220x120/${brand.color1}/${brand.color2}`;
                img.alt = brand.name;
                img.loading = 'lazy';

                // Assemble
                rectangle.appendChild(img);
                brandItem.appendChild(rectangle);
                carouselTrack.appendChild(brandItem);

                // Add click event to logo
                rectangle.addEventListener('click', function () {
                    alert(`Clicked on ${brand.name}`);
                });
            });
        }

        // Setup hover pause functionality
        setupHoverPause();
    }

    // Jump to specific brand
    function jumpToBrand(index) {
        const track = document.querySelector('.carousel-track-brands');
        const itemWidth = 220; // Should match CSS width + gap
        const offset = -(index * itemWidth);

        // Pause animation temporarily
        track.style.animationPlayState = 'paused';
        track.style.transform = `translateX(${offset}px)`;

        // Resume animation after 3 seconds
        setTimeout(() => {
            track.style.animationPlayState = 'running';
        }, 3000);
    }

    // Setup hover pause functionality
    function setupHoverPause() {
        const track = document.querySelector('.carousel-track-brands');
        const container = document.querySelector('.carousel-container');

        // Pause on container hover
        container.addEventListener('mouseenter', () => {
            track.style.animationPlayState = 'paused';
        });

        container.addEventListener('mouseleave', () => {
            track.style.animationPlayState = 'running';
        });

        // Individual logo hover effects
        document.querySelectorAll('.logo-rectangle').forEach(logo => {
            logo.addEventListener('mouseenter', function () {
                // Add pulsing effect
                this.style.animation = 'pulse 2s infinite';
            });

            logo.addEventListener('mouseleave', function () {
                this.style.animation = '';
            });
        });
    }

    // Add CSS for pulsing effect
    const style = document.createElement('style');
    style.textContent = `
        `;
    document.head.appendChild(style);

    // Initialize on load
    initCarousel();

    // Handle window resize
    window.addEventListener('resize', function () {
        // Adjust animation speed based on screen width
        const track = document.querySelector('.carousel-track-brands');
        if (track) {
            // Restart animation to apply new keyframes
            track.style.animation = 'none';
            setTimeout(() => {
                track.style.animation = 'scroll 35s linear infinite';
                track.style.animationPlayState = 'running';
            }, 10);
        }
    });


    // Newsletter
    document.addEventListener('DOMContentLoaded', function () {
        const newsletterForm = document.getElementById('simpleNewsletter');
        const emailInput = newsletterForm.querySelector('.email-input');
        const subscribeBtn = newsletterForm.querySelector('.subscribe-btn');
        const messageElement = document.getElementById('subMessage');

        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = emailInput.value.trim();

            // Simple email validation
            if (!email.includes('@') || !email.includes('.')) {
                // Visual feedback for invalid email
                emailInput.style.boxShadow = '0 0 0 3px rgba(255, 71, 87, 0.3)';
                setTimeout(() => {
                    emailInput.style.boxShadow = '';
                }, 1000);
                return;
            }

            // Show loading state
            const originalText = subscribeBtn.innerHTML;
            subscribeBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Subscribing...</span>';
            subscribeBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                // Show success message
                messageElement.classList.add('show');

                // Reset form
                emailInput.value = '';
                subscribeBtn.innerHTML = originalText;
                subscribeBtn.disabled = false;

                // Hide message after 5 seconds
                setTimeout(() => {
                    messageElement.classList.remove('show');
                }, 5000);

                // Add animation to button
                subscribeBtn.style.background = '#27ae60';
                subscribeBtn.style.color = 'white';
                setTimeout(() => {
                    subscribeBtn.style.background = '';
                    subscribeBtn.style.color = '';
                }, 2000);

            }, 1000);
        });

        // Input focus effect
        emailInput.addEventListener('focus', function () {
            this.style.transform = 'translateY(-1px)';
        });

        emailInput.addEventListener('blur', function () {
            this.style.transform = '';
        });

        // Add subtle animation to dots
        const dots = document.querySelectorAll('.bg-dot');
        dots.forEach((dot, index) => {
            dot.style.animation = `float ${3 + index}s infinite ease-in-out`;
        });

        // Add float animation
        const style = document.createElement('style');
        style.textContent = `
                @keyframes float {
                    0%, 100% {
                        transform: translateY(0);
                    }
                    50% {
                        transform: translateY(-10px);
                    }
                }
            `;
        document.head.appendChild(style);
    });


    // FAQ
    const accordionItems = document.querySelectorAll('.accordion-item');

    // Set first accordion as active by default
    accordionItems[0].classList.add('active');

    // Accordion functionality
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');

        // Set initial height for active item
        if (item.classList.contains('active')) {
            const body = item.querySelector('.accordion-body');
            content.style.maxHeight = body.scrollHeight + 40 + 'px';
        }

        header.addEventListener('click', function () {
            const isActive = item.classList.contains('active');

            // Close all accordions
            accordionItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.accordion-content').style.maxHeight = '0';
            });

            // If clicked item wasn't active, open it
            if (!isActive) {
                item.classList.add('active');
                const body = item.querySelector('.accordion-body');
                content.style.maxHeight = body.scrollHeight + 40 + 'px';

                // Smooth scroll to keep item in view
                item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });

        // Update height on window resize
        window.addEventListener('resize', function () {
            if (item.classList.contains('active')) {
                const body = item.querySelector('.accordion-body');
                content.style.maxHeight = body.scrollHeight + 40 + 'px';
            }
        });
    });

    // Hover effects for accordion icons
    accordionItems.forEach(item => {
        const icon = item.querySelector('.accordion-icon');

        item.addEventListener('mouseenter', function () {
            if (!this.classList.contains('active')) {
                icon.style.transform = 'scale(1.1)';
                const spans = icon.querySelectorAll('span');
                spans.forEach(span => {
                    span.style.background = 'var(--primary-light)';
                });
            }
        });

        item.addEventListener('mouseleave', function () {
            if (!this.classList.contains('active')) {
                icon.style.transform = '';
                const spans = icon.querySelectorAll('span');
                spans.forEach(span => {
                    span.style.background = 'var(--primary)';
                });
            }
        });
    });

    // Add keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
            e.preventDefault();

            const activeIndex = Array.from(accordionItems).findIndex(item =>
                item.classList.contains('active')
            );

            let newIndex;
            if (e.key === 'ArrowDown') {
                newIndex = (activeIndex + 1) % accordionItems.length;
            } else {
                newIndex = (activeIndex - 1 + accordionItems.length) % accordionItems.length;
            }

            // Trigger click on new accordion
            accordionItems[newIndex].querySelector('.accordion-header').click();
        }
    });

    // Make accordions focusable for accessibility
    accordionItems.forEach(item => {
        item.querySelector('.accordion-header').setAttribute('tabindex', '0');
    });
});
document.addEventListener('DOMContentLoaded', function () {
    /* ==========================
       SEARCH TOGGLE
    ========================== */
    const searchToggle = document.getElementById('searchToggle');
    const searchBar = document.querySelector('.search-bar');

    searchToggle.addEventListener('click', () => {
        searchBar.classList.toggle('active');
        if (searchBar.classList.contains('active')) searchBar.focus();
    });

    document.addEventListener('click', e => {
        if (!searchToggle.contains(e.target) && !searchBar.contains(e.target) && searchBar.classList.contains('active')) {
            searchBar.classList.remove('active');
        }
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && searchBar.classList.contains('active')) searchBar.classList.remove('active');
    });

    /* ==========================
       NAVBAR SCROLL
    ========================== */
    const navbar = document.querySelector('.custom-navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });

    /* ==========================
       MOBILE NAV LINKS
    ========================== */
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.getElementById('navbarContent');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) new bootstrap.Collapse(navbarCollapse).hide();
        });
    });

    /* ==========================
       MONTH AND YEAR
    ========================== */
    const now = new Date();
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    document.getElementById("month").innerText = monthNames[now.getMonth()].toUpperCase();
    document.getElementById("year").innerText = now.getFullYear();

    /* ==========================
       CUSTOM CAROUSEL
    ========================== */
    const track = document.getElementById('carousel-track');
    let slides = Array.from(document.querySelectorAll('.carousel-slide'));
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dotsContainer = document.getElementById('carousel-dots');
    const currentSlideSpan = document.getElementById('current-slide');
    const totalSlidesSpan = document.getElementById('total-slides');

    const originalSlidesCount = slides.length;
    let currentIndex = 1;
    const slideDuration = 5000;
    let autoSlideInterval = null;

    totalSlidesSpan.textContent = originalSlidesCount;

    // Clone slides for infinite loop
    const firstClone = slides[0].cloneNode(true);
    const lastClone = slides[slides.length - 1].cloneNode(true);
    track.appendChild(firstClone);
    track.insertBefore(lastClone, slides[0]);
    slides = Array.from(document.querySelectorAll('.carousel-slide'));

    // Set initial position
    function setSlidePosition(animate = true) {
        track.style.transition = animate ? 'transform 0.6s ease' : 'none';
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateDotsAndCounter();
    }

    function updateDotsAndCounter() {
        let displayIndex = (currentIndex - 1 + originalSlidesCount) % originalSlidesCount;
        currentSlideSpan.textContent = displayIndex + 1;
        dotsContainer.querySelectorAll('.dot').forEach((dot, i) => dot.classList.toggle('active', i === displayIndex));
    }

    // Create dots
    for (let i = 0; i < originalSlidesCount; i++) {
        const dot = document.createElement('div');
        dot.className = 'dot';
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            currentIndex = i + 1;
            setSlidePosition(true);
        });
        dotsContainer.appendChild(dot);
    }

    function nextSlide() { currentIndex++; setSlidePosition(true); }
    function prevSlide() { currentIndex--; setSlidePosition(true); }
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    track.addEventListener('transitionend', handleLoopFix);
    track.addEventListener('webkitTransitionEnd', handleLoopFix);

    function handleLoopFix() {
        if (currentIndex === 0) currentIndex = originalSlidesCount;
        if (currentIndex === originalSlidesCount + 1) currentIndex = 1;
        setSlidePosition(false);
    }

    // Auto slide
    function startAutoSlide() { stopAutoSlide(); autoSlideInterval = setInterval(nextSlide, slideDuration); }
    function stopAutoSlide() { clearInterval(autoSlideInterval); autoSlideInterval = null; }
    startAutoSlide();

    // Pause on hover
    const carousel = document.querySelector('.modern-carousel');
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);

    // Visibility fix
    function resetCarousel() {
        track.style.transition = 'none';
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        requestAnimationFrame(() => track.style.transition = 'transform 0.6s ease');
    }
    document.addEventListener('visibilitychange', () => { if (!document.hidden) resetCarousel(); });
    window.addEventListener('focus', resetCarousel);
    window.addEventListener('resize', resetCarousel);

    // Touch / swipe
    let startX = 0, endX = 0;
    track.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    track.addEventListener('touchmove', e => endX = e.touches[0].clientX);
    track.addEventListener('touchend', () => {
        if (startX - endX > 50) nextSlide();
        if (endX - startX > 50) prevSlide();
    });

    /* ==========================
       ACCORDION
    ========================== */
    const accordionItems = Array.from(document.querySelectorAll('.accordion-item'));
    accordionItems[0].classList.add('active'); // first active by default

    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');

        // Initial height
        const body = item.querySelector('.accordion-body');
        if (item.classList.contains('brands')) content.style.maxHeight = body.scrollHeight + 166 + 'px';
        else if (item.classList.contains('active')) content.style.maxHeight = body.scrollHeight + 40 + 'px';

        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            accordionItems.forEach(other => {
                other.classList.remove('active');
                other.querySelector('.accordion-content').style.maxHeight = '0';
            });
            if (!isActive) {
                item.classList.add('active');
                content.style.maxHeight = body.scrollHeight + 40 + 'px';
                item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });

        // Hover effect
        const icon = item.querySelector('.accordion-icon');
        item.addEventListener('mouseenter', () => {
            if (!item.classList.contains('active')) {
                icon.style.transform = 'scale(1.1)';
                icon.querySelectorAll('span').forEach(s => s.style.background = 'var(--primary-light)');
            }
        });
        item.addEventListener('mouseleave', () => {
            if (!item.classList.contains('active')) {
                icon.style.transform = '';
                icon.querySelectorAll('span').forEach(s => s.style.background = 'var(--primary)');
            }
        });
    });

    // Keyboard nav
    document.addEventListener('keydown', e => {
        if (e.key !== 'ArrowDown' && e.key !== 'ArrowUp') return;
        e.preventDefault();
        const activeIndex = accordionItems.findIndex(item => item.classList.contains('active'));
        const newIndex = e.key === 'ArrowDown' ? (activeIndex + 1) % accordionItems.length : (activeIndex - 1 + accordionItems.length) % accordionItems.length;
        accordionItems[newIndex].querySelector('.accordion-header').click();
    });

    accordionItems.forEach(item => item.querySelector('.accordion-header').setAttribute('tabindex', '0'));

    /* ==========================
       OWL CAROUSELS
    ========================== */
    $('.brand-carousel').owlCarousel({
        loop: true, margin: 10, dots: false, autoplay: true, autoplayTimeout: 2000,
        autoplayHoverPause: true, autoplaySpeed: 800, nav: false,
        responsive: { 0: { items: 4 }, 768: { items: 6 } }
    });
    $('.category-carousel').owlCarousel({
        loop: true, margin: 10, dots: false, autoplay: true, autoplayTimeout: 2000,
        autoplayHoverPause: true, autoplaySpeed: 800, nav: false,
        responsive: { 0: { items: 4 }, 768: { items: 6 } }
    });

    // ==========================
    // BRANDS CAROUSEL
    // ==========================
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
        { id: 10, name: "SmartHome", color1: "450077", color2: "9984d4" }
    ];

    function initBrandsCarousel() {
        const track = document.querySelector('.carousel-track-brands');
        const container = document.querySelector('.carousel-container');
        track.innerHTML = '';

        // Duplicate the array for seamless infinite scroll
        const displayBrands = [...brands, ...brands];

        displayBrands.forEach((brand, index) => {
            const item = document.createElement('div');
            item.className = 'brand-logo-item';
            item.dataset.index = index % brands.length;

            const rectangle = document.createElement('div');
            rectangle.className = 'logo-rectangle';

            const img = document.createElement('img');
            img.className = 'brand-logo';
            img.src = `https://placehold.co/440x240/${brand.color1}/${brand.color2}`;
            img.alt = brand.name;
            img.loading = 'lazy';

            rectangle.appendChild(img);
            item.appendChild(rectangle);
            track.appendChild(item);

            // Click event
            rectangle.addEventListener('click', () => alert(`Clicked on ${brand.name}`));
        });

        // Animate scrolling
        track.style.animation = 'scroll 35s linear infinite';
        track.style.animationPlayState = 'running';

        // Hover pause
        container.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
        container.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');

        // Hover pulse effect
        track.querySelectorAll('.logo-rectangle').forEach(logo => {
            logo.addEventListener('mouseenter', () => logo.style.animation = 'pulse 2s infinite');
            logo.addEventListener('mouseleave', () => logo.style.animation = '');
        });
    }

    // Add CSS animation keyframes dynamically
    const brandStyle = document.createElement('style');
    brandStyle.textContent = `
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}`;
    document.head.appendChild(brandStyle);

    // Initialize
    initBrandsCarousel();

    // Update on window resize
    window.addEventListener('resize', () => {
        const track = document.querySelector('.carousel-track-brands');
        track.style.animation = 'none';
        setTimeout(() => track.style.animation = 'scroll 35s linear infinite', 10);
    });


    /* ==========================
       NEWSLETTER
    ========================== */
    const newsletterForm = document.getElementById('simpleNewsletter');
    const emailInput = newsletterForm.querySelector('.email-input');
    const subscribeBtn = newsletterForm.querySelector('.subscribe-btn');
    const messageElement = document.getElementById('subMessage');

    newsletterForm.addEventListener('submit', e => {
        e.preventDefault();
        const email = emailInput.value.trim();
        if (!email.includes('@') || !email.includes('.')) {
            emailInput.style.boxShadow = '0 0 0 3px rgba(255, 71, 87, 0.3)';
            return setTimeout(() => emailInput.style.boxShadow = '', 1000);
        }
        const originalText = subscribeBtn.innerHTML;
        subscribeBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Subscribing...</span>';
        subscribeBtn.disabled = true;
        setTimeout(() => {
            messageElement.classList.add('show');
            emailInput.value = '';
            subscribeBtn.innerHTML = originalText;
            subscribeBtn.disabled = false;
            setTimeout(() => messageElement.classList.remove('show'), 5000);
        }, 1000);
    });

});

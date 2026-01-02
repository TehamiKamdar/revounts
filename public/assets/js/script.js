// Search toggle functionality
const searchToggle = document.getElementById('searchToggle');
const searchBar = document.querySelector('.search-bar');

searchToggle.addEventListener('click', function() {
    searchBar.classList.toggle('active');

    // Focus on the search bar when it becomes active
    if (searchBar.classList.contains('active')) {
        searchBar.focus();
    }
});

// Close search bar when clicking outside (optional)
document.addEventListener('click', function(event) {
    const isClickInsideSearch = searchToggle.contains(event.target) || searchBar.contains(event.target);

    if (!isClickInsideSearch && searchBar.classList.contains('active')) {
        searchBar.classList.remove('active');
    }
});

// Close search bar on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && searchBar.classList.contains('active')) {
        searchBar.classList.remove('active');
    }
});

// Add scroll effect to navbar
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.custom-navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Close mobile navbar when clicking a link (optional)
document.addEventListener('DOMContentLoaded', function() {
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
});
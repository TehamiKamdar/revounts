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
    document.getElementById("year").innerText = now.getFullYear();
});

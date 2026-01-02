<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar with Bootstrap 5</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts - Archivo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --white: #ffffff;
            --primary-light: #9984d4;
            --primary: #592e83;
            --primary-dark: #450077;
            --dark-amethyst: #150132;
            --font-family: "Archivo", Helvetica, sans-serif;
        }

        body {
            font-family: var(--font-family);
            padding-top: 76px; /* To account for fixed navbar */
        }

        .custom-navbar {
            background-color: var(--primary);
            padding: 0.8rem 0;
            box-shadow: 0 4px 12px rgba(21, 1, 50, 0.15);
            transition: all 0.3s ease;
        }

        .custom-navbar.scrolled {
            padding: 0.5rem 0;
            background-color: rgba(21, 1, 50, 0.95);
            transition: 0.3s all ease;
        }

        .navbar-brand {
            color: var(--white) !important;
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: -0.5px;
            transition: all 0.3s ease;
        }

        .navbar-brand span {
            color: var(--primary-light);
        }

        .navbar-brand:hover {
            color: var(--primary-light) !important;
        }

        .navbar-brand:hover span {
            color: var(--white) !important;
        }

        .navbar-nav .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--white) !important;
            background-color: rgba(89, 46, 131, 0.3);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-light);
            left: 50%;
            bottom: 0;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 70%;
            left: 15%;
        }

        .navbar-toggler {
            border: 1px solid var(--primary-light);
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 2px rgba(153, 132, 212, 0.5);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28153, 132, 212, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .btn-primary-custom {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(89, 46, 131, 0.3);
        }

        .dropdown-menu {
            background-color: var(--dark-amethyst);
            border: 1px solid var(--primary-light);
            border-radius: 4px;
        }

        .dropdown-item {
            color: var(--white);
            padding: 0.75rem 1.5rem;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover, .dropdown-item:focus {
            background-color: var(--primary);
            color: var(--white);
        }

        .dropdown-divider {
            border-color: rgba(153, 132, 212, 0.3);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--dark-amethyst) 0%, var(--primary) 100%);
            color: var(--white);
            padding: 5rem 2rem;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
        }

        .content-section {
            padding: 2rem;
            margin-bottom: 3rem;
        }

        .color-palette {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
        }

        .color-item {
            width: 120px;
            height: 120px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .color-white {
            background-color: var(--white);
            color: var(--dark-amethyst);
            border: 1px solid #eee;
        }

        .color-primary-light {
            background-color: var(--primary-light);
        }

        .color-primary {
            background-color: var(--primary);
        }

        .color-primary-dark {
            background-color: var(--primary-dark);
        }

        .color-dark-amethyst {
            background-color: var(--dark-amethyst);
        }

        footer {
            background-color: var(--dark-amethyst);
            color: var(--white);
            padding: 2rem;
            text-align: center;
            margin-top: 3rem;
        }

        @media (max-width: 992px) {
            .navbar-nav .nav-link {
                margin: 0.2rem 0;
            }

            .navbar-nav .nav-link::after {
                display: none;
            }

            .dropdown-menu {
                background-color: transparent;
                border: none;
                padding-left: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                Brand<span>Name</span>
            </a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <!-- Right-side items -->
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-primary-custom me-2">Sign In</a>
                    <a href="#" class="btn btn-primary-custom">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('hero')

    <main class="container content-section">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">Navbar created with Bootstrap 5 using custom CSS variables</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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
    </script>
</body>
</html>

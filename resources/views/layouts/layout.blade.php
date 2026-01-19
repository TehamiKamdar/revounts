<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revounts | Unlock The Best Verified Coupons And Promo Deals in Australia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"  />
    <link href="https://fonts.cdnfonts.com/css/playlist" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="animated-coupon-bg">
        <!-- Discount Tags -->
        <div class="discount-tag tag-1">70% OFF</div>
        <div class="discount-tag tag-2">SAVE 40%</div>
        <div class="discount-tag tag-3">50% OFF</div>
        <div class="discount-tag tag-4">35% OFF</div>
        <div class="discount-tag tag-5">80% OFF</div>
        <div class="discount-tag tag-6">25% OFF</div>
        <div class="discount-tag tag-7">15% OFF</div>
        <div class="discount-tag tag-8">60% OFF</div>
        <div class="discount-tag tag-9">45% OFF</div>
        <div class="discount-tag tag-10">55% OFF</div>
        <div class="discount-tag tag-11">30% OFF</div>
        <div class="discount-tag tag-12">65% OFF</div>
    </div>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <span id="navbrand">Revounts</span>
            </a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('reviews') || Route::is('review.details') ? 'active' : '' }}" aria-current="page" href="{{ route('reviews') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is(patterns: 'coupons') || Route::is('coupon.details') ? 'active' : '' }}" aria-current="page" href="{{ route('coupons') }}">Coupons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is(patterns: 'blogs') || Route::is('blog.details') ? 'active' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Seasonal</a>
                    </li>
                </ul>

                <!-- Right-side items -->
                <div class="d-flex align-items-center">
                    <!-- Search Container -->
                    <div class="search-container me-3">
                        <input type="text" class="search-bar" placeholder="Search...">
                        <button class="search-icon-btn" id="searchToggle">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>

                    <!-- Sign In Button -->
                    <a href="#" class="btn btn-primary">Sign In</a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-overlay">

            <!-- Top Links Section -->
            <div class="footer-links">
                <div class="footer-col">
                    <h4>Revounts</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('stores') }}">Stores</a></li>
                        <li><a href="{{ route('reviews') }}">Reviews</a></li>
                        <li><a href="{{ route('coupons') }}">Coupons</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Coupons</h4>
                    <ul>
                        <li><a href="#">Seasonal</a></li>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">Fashion</a></li>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">Travel</a></li>
                        <li><a href="{{ route('categories') }}">All Categories</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Reviews</h4>
                    <ul>
                        <li><a href="{{ route('review.details', 'some-brand-review') }}">Featured</a></li>
                        <li><a href="{{ route('review.details', 'some-brand-review') }}">Recently Added</a></li>
                        <li><a href="{{ route('review.details', 'some-brand-review') }}">Store Reviews</a></li>
                        <li><a href="{{ route('review.details', 'some-brand-review') }}">ETSY Reviews</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Top Stores</h4>
                    <ul>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">Catch</a></li>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">LVLY</a></li>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">MyDeal Coupon</a></li>
                        <li><a href="{{ route('coupon.details', 'some-coupon-brand') }}">Coach</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Divider -->
            <div class="footer-socials">
                <span class="line"></span>

                <div class="social-icons">
                    <a href="https://www.facebook.com/Revounts/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/revounts_au/"><i class="fab fa-instagram"></i></a>
                    <a href="https://au.pinterest.com/revounts/"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://revounts.wixsite.com/mysite"><i class="fab fa-wix"></i></a>
                    <a href="https://revounts.home.blog/"><i class="fas fa-blog"></i></a>
                </div>

                <span class="line"></span>
            </div>

            <!-- Footer Logo -->
            <div class="footer-logo">
                <img src="{{ asset('assets/images/footer_logo1.png') }}" alt="Revounts">
            </div>

            <!-- Copyright -->
            <div class="footer-copy">
                Revounts.com.au © <span id="year"></span> - Registered in Australia - ABN: 63 624 845 405 - All Rights Reserved.
            </div>

        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <!-- Owl Carousel JS --><!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    @yield('scripts')
</body>

</html>
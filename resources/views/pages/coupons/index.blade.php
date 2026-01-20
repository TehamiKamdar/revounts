@extends('layouts.layout')

@section('styles')
    <style>
        .brand-carousel .owl-stage {
            display: flex;
            align-items: stretch;
        }

        .brand-carousel .brand-card-new {
            margin: 0 15px;
            height: 100%;
        }

        .owl-carousel .owl-nav {
            position: absolute;
            top: 47%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        .owl-carousel .owl-nav button {
            background: var(--primary) !important;
            color: white !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .owl-carousel .owl-nav button:hover {
            background: var(--primary-dark) !important;
            transform: scale(1.1);
        }

        /* Custom Navigation Buttons */
        .carousel-navigation {
            display: none;
            /* Hide custom buttons if using owl nav */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .owl-carousel .owl-nav {
                display: none;
            }

            .brand-carousel .brand-card {
                margin: 0 10px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Banner -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Save Big with Exclusive Coupons & Deals</h1>
                    <p class="lead mb-4">Find the best discounts, promo codes, and special offers from 5000+ top brands. Start saving today!</p>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="search-container-coupon">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search for stores, brands, or categories...">
                    <button class="search-btn">
                        <i class="fas fa-search me-2"></i><span>Find Deals</span>
                    </button>
                </div>
            </div>
            <!-- Stats -->
            <div class="row justify-content-start">
                <div class="col-4 col-lg-2">
                    <h3 class="stat-number">5,000+</h3>
                    <p class="stat-text">Brands & Stores</p>
                </div>
                <div class="col-4 col-lg-2">
                    <h3 class="stat-number">25,000+</h3>
                    <p class="stat-text">Active Coupons</p>
                </div>
                <div class="col-4 col-lg-2">
                    <h3 class="stat-number">$2M+</h3>
                    <p class="stat-text">Saved by Users</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container coupons-wrapper">
        <div class="section-header">
            <h2 class="section-title">Top Brands with Big Discounts</h2>
            <p class="section-subtitle">Shop from your favorite brands and save with our exclusive coupon codes</p>
        </div>

        <div class="owl-carousel brand-carousel">
            <!-- Brand Card 1 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">UP TO 70% OFF</div>
                    <div class="brand-logo">
                        <i class="fab fa-amazon"></i>
                    </div>
                    <h3 class="brand-name">Amazon</h3>
                    <p class="brand-category">E-commerce & Retail</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 42 Active Coupons
                    </div>
                    <p class="brand-description">Everything from electronics to groceries with fast delivery.</p>
                    <a href="{{ route('coupon.details', 'amazon-promo-coupons') }}" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 2 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">60% OFF</div>
                    <div class="brand-logo">
                        <i class="fab fa-flipkart"></i>
                    </div>
                    <h3 class="brand-name">Flipkart</h3>
                    <p class="brand-category">Online Shopping</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 35 Active Coupons
                    </div>
                    <p class="brand-description">Best deals on electronics, fashion, and home appliances.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 3 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">50% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="brand-name">Myntra</h3>
                    <p class="brand-category">Fashion & Lifestyle</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 28 Active Coupons
                    </div>
                    <p class="brand-description">Latest fashion trends with exclusive discounts.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 4 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">40% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="brand-name">Zomato</h3>
                    <p class="brand-category">Food Delivery</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 31 Active Coupons
                    </div>
                    <p class="brand-description">Order from your favorite restaurants with great deals.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 5 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">55% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3 class="brand-name">Netflix</h3>
                    <p class="brand-category">Entertainment</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 15 Active Coupons
                    </div>
                    <p class="brand-description">Stream unlimited movies and TV shows.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 6 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">65% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3 class="brand-name">MakeMyTrip</h3>
                    <p class="brand-category">Travel</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 42 Active Coupons
                    </div>
                    <p class="brand-description">Book flights, hotels, and holiday packages.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 7 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">45% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="brand-name">OnePlus</h3>
                    <p class="brand-category">Electronics</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 22 Active Coupons
                    </div>
                    <p class="brand-description">Premium smartphones and accessories.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Card 8 -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">30% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3 class="brand-name">Ajio</h3>
                    <p class="brand-category">Fashion</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 19 Active Coupons
                    </div>
                    <p class="brand-description">Trendy fashion for men and women.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Add more brand cards as needed -->
            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">35% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-hamburger"></i>
                    </div>
                    <h3 class="brand-name">Swiggy</h3>
                    <p class="brand-category">Food Delivery</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 27 Active Coupons
                    </div>
                    <p class="brand-description">Fast food delivery from restaurants near you.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="brand-card-new">
                <div class="brand-card-header">
                    <div class="discount-badge">25% OFF</div>
                    <div class="brand-logo">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="brand-name">Uber</h3>
                    <p class="brand-category">Transportation</p>
                </div>
                <div class="brand-card-body">
                    <div class="coupon-count">
                        <i class="fas fa-tag"></i> 18 Active Coupons
                    </div>
                    <p class="brand-description">Ride sharing and food delivery services.</p>
                    <a href="#" class="view-coupons-btn">
                        View All Coupons <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Custom Navigation Buttons -->
        <div class="carousel-navigation text-center mt-4">
            <button class="btn btn-outline-primary me-2 prev-btn">
                <i class="fas fa-chevron-left me-2"></i> Previous
            </button>
            <button class="btn btn-outline-primary next-btn">
                Next <i class="fas fa-chevron-right ms-2"></i>
            </button>
        </div>

        <!-- View All Brands Button -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary-custom btn-lg">
                <i class="fas fa-store me-2"></i>View All 5000+ Brands
            </a>
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Choose Revounts?</h2>
                <p class="section-subtitle">We make saving money easy, reliable, and rewarding</p>
            </div>

            <div class="row g-2">
                <!-- Benefit 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>100% Verified Coupons</h4>
                        <p>Every coupon is tested and verified by our team to ensure it
                            works perfectly when you need it.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Daily Updates</h4>
                        <p>We update our database daily with new coupons, deals, and expired
                            offers removed.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Exclusive Deals</h4>
                        <p>Get access to special offers and promo codes not available
                            anywhere else.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h4>Community Driven</h4>
                        <p>Join our community of savers who share and rate coupons for
                            better experience.</p>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile Friendly</h4>
                        <p>Access coupons on the go with our mobile-optimized website and
                            easy sharing.</p>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Our support team is always ready to help you with any
                            coupon-related issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Stores Section -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recently Added Stores</h2>
            <p class="section-subtitle">Discover new brands and stores with exclusive discounts</p>
        </div>

        <div class="row">
            <!-- Store 1 -->
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="store-card">
                    <div class="store-logo">
                        <img src="https://placehold.co/800x400/450077/9984d4" alt="">
                    </div>
                    <div class="store-info">
                        <h3 class="store-name">Cult.fit</h3>
                        <p class="store-description">Fitness classes, workouts, and wellness programs with certified
                            trainers.</p>
                        <a href="#" class="view-coupons-btn">
                            <i class="fas fa-fire me-2"></i>12 Hot Deals
                        </a>
                    </div>
                </div>
            </div>

            <!-- Store 2 -->
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="store-card">
                    <div class="store-logo">
                        <img src="https://placehold.co/800x400/450077/9984d4" alt="">
                    </div>
                    <div class="store-info">
                        <h3 class="store-name">Blinkit</h3>
                        <p class="store-description">Groceries and essentials delivered in minutes. Fastest delivery
                            service.</p>
                        <a href="#" class="view-coupons-btn">
                            <i class="fas fa-fire me-2"></i>8 Hot Deals
                        </a>
                    </div>
                </div>
            </div>

            <!-- Store 3 -->
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="store-card">
                    <div class="store-logo">
                        <img src="https://placehold.co/800x400/450077/9984d4" alt="">
                    </div>
                    <div class="store-info">
                        <h3 class="store-name">GamesKraft</h3>
                        <p class="store-description">Online gaming platform with rummy, poker, and fantasy sports.</p>
                        <a href="#" class="view-coupons-btn">
                            <i class="fas fa-fire me-2"></i>6 Hot Deals
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Writing Section -->
    <div class="container">
        <div class="content-section">
            <h2 class="section-title">The Ultimate Guide to Saving Money Online</h2>

            <p class="content-text">
                In today's digital age, saving money has never been easier. With thousands of online stores and brands
                offering discounts, cashback, and promo codes, you can significantly reduce your shopping expenses.
                However, finding the right deals at the right time can be challenging.
            </p>

            <p class="content-text">
                At SaveNow, we've made it our mission to simplify the process of finding and using coupons. Our platform
                aggregates deals from across the web, verifies their validity, and presents them in an easy-to-use
                format. Whether you're shopping for electronics, fashion, groceries, or travel, we have you covered.
            </p>

            <div class="content-highlight">
                <p>The average SaveNow user saves Rs 5,000/- annually by using our verified coupons and promo codes.</p>
            </div>

            <p class="content-text">
                <strong>Tips for Maximizing Your Savings:</strong>
            </p>

            <ul class="content-text">
                <li><strong>Stack Coupons:</strong> Combine multiple coupons when allowed for maximum savings</li>
                <li><strong>Timing Matters:</strong> Look for seasonal sales and holiday discounts</li>
                <li><strong>Sign Up for Newsletters:</strong> Many brands offer exclusive discounts to subscribers</li>
                <li><strong>Check Expiry Dates:</strong> Always verify coupon validity before shopping</li>
                <li><strong>Share with Friends:</strong> Some brands offer referral bonuses for sharing deals</li>
            </ul>

            <p class="content-text">
                Our team works round the clock to ensure that you have access to the latest and most relevant deals. We
                believe that everyone deserves to save money without compromising on quality or convenience.
            </p>

            <a href="#" class="btn btn-primary-custom btn-lg mt-3">
                <i class="fas fa-book me-2"></i>Read More Money Saving Tips
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Owl Carousel Initialization
        $(document).ready(function () {
            $(".brand-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            // Custom navigation buttons
            $('.prev-btn').click(function () {
                $('.brand-carousel').trigger('prev.owl.carousel');
            });

            $('.next-btn').click(function () {
                $('.brand-carousel').trigger('next.owl.carousel');
            });
        });

        // Simple search functionality
        document.querySelector('.search-btn').addEventListener('click', function () {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim() !== '') {
                alert(`Searching for: ${searchTerm}\n(Search functionality would redirect to results page)`);
                // In real implementation, you would redirect to search results page
                // window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
            } else {
                alert('Please enter a search term');
            }
        });

        // Enter key support for search
        document.querySelector('.search-input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });

        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', function () {
            const animateOnScroll = function () {
                const elements = document.querySelectorAll('.brand-card-new, .feature-item, .store-card');

                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.2;

                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };

            // Set initial state
            const cards = document.querySelectorAll('.brand-card-new, .feature-item, .store-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });

            // Animate on load
            setTimeout(animateOnScroll, 300);

            // Animate on scroll
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
@endsection
@extends('layouts.layout')

@section('styles')
    <style>
        /* Hero Banner */
        .hero-banner {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 600px;
        }

        /* Search Bar */
        .search-container {
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .search-box {
            background: white;
            border-radius: 50px;
            padding: 5px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 20px 25px;
            border-radius: 50px;
            font-size: 1rem;
            outline: none;
        }

        .search-btn {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: scale(1.05);
        }

        /* Stats Section */
        .stats-section {
            background-color: var(--white);
            padding: 40px 0;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-text {
            color: #666;
            font-size: 0.95rem;
        }

        /* Brand Cards - col-3 */
        .brand-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .brand-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(89, 46, 131, 0.15);
        }

        .brand-card-header {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            padding: 30px 20px;
            text-align: center;
            color: white;
            position: relative;
        }

        .discount-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--season-theme-bg-color);
            color: var(--season-theme-color);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .brand-logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 2rem;
            color: var(--primary);
        }

        .brand-name {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .brand-category {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .brand-card-body {
            padding: 25px;
        }

        .coupon-count {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .coupon-count i {
            margin-right: 8px;
        }

        .view-coupons-btn {
            display: block;
            width: 100%;
            text-align: center;
            background: var(--primary-light);
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .view-coupons-btn:hover {
            background: var(--primary);
            color: white;
        }

        /* Benefits Section - 100% width cards */
        .benefits-section {
            background: linear-gradient(135deg, #f8f9ff, #f0f2ff);
            padding: 60px 0;
            margin: 60px 0;
        }

        .benefit-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
            border: 1px solid #f0f0f0;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(89, 46, 131, 0.15);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
        }

        .benefit-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .benefit-description {
            color: #666;
            font-size: 1rem;
        }

        /* New Stores Section */
        .store-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            border: 1px solid #f0f0f0;
        }

        .store-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(89, 46, 131, 0.15);
        }

        .store-logo {
            width: 100%;
            height: 180px;
            background: linear-gradient(135deg, #f5f5f5, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--primary);
        }

        .store-info {
            padding: 25px;
        }

        .store-name {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .store-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        /* Content Writing Section */
        .content-section {
            background: white;
            border-radius: 15px;
            padding: 50px;
            margin: 60px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
        }

        .content-title {
            font-size: 2rem;
            margin-bottom: 25px;
            color: var(--primary-dark);
        }

        .content-text {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .content-highlight {
            background: linear-gradient(135deg, rgba(158, 98, 255, 0.1), rgba(122, 67, 211, 0.1));
            border-left: 4px solid var(--primary);
            padding: 25px;
            border-radius: 0 10px 10px 0;
            margin: 30px 0;
        }

        .content-highlight p {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--primary);
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">Save Big with Exclusive Coupons & Deals</h1>
                    <p class="hero-subtitle">Find the best discounts, promo codes, and special offers from 5000+ top
                        brands. Start saving today!</p>

                    <!-- Search Bar -->
                    <div class="search-container">
                        <div class="search-box">
                            <input type="text" class="search-input"
                                placeholder="Search for stores, brands, or categories...">
                            <button class="search-btn">
                                <i class="fas fa-search me-2"></i>Find Deals
                            </button>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <h3 class="stat-number">5,000+</h3>
                                <p class="stat-text">Brands & Stores</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h3 class="stat-number">25,000+</h3>
                                <p class="stat-text">Active Coupons</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h3 class="stat-number">₹2.5Cr+</h3>
                                <p class="stat-text">Saved by Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Top Brands with Big Discounts</h2>
            <p class="section-subtitle">Shop from your favorite brands and save with our exclusive coupon codes</p>
        </div>

        <div class="owl-carousel brand-carousel">
            <!-- Brand Card 1 -->
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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
            <div class="brand-card">
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

            <div class="brand-card">
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
                <h2 class="section-title">Why Choose SaveNow?</h2>
                <p class="section-subtitle">We make saving money easy, reliable, and rewarding</p>
            </div>

            <div class="row">
                <!-- Benefit 1 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="benefit-title">100% Verified Coupons</h3>
                        <p class="benefit-description">Every coupon is tested and verified by our team to ensure it
                            works perfectly when you need it.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="benefit-title">Daily Updates</h3>
                        <p class="benefit-description">We update our database daily with new coupons, deals, and expired
                            offers removed.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="benefit-title">Exclusive Deals</h3>
                        <p class="benefit-description">Get access to special offers and promo codes not available
                            anywhere else.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Benefit 4 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3 class="benefit-title">Community Driven</h3>
                        <p class="benefit-description">Join our community of savers who share and rate coupons for
                            better experience.</p>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="benefit-title">Mobile Friendly</h3>
                        <p class="benefit-description">Access coupons on the go with our mobile-optimized website and
                            easy sharing.</p>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="benefit-title">24/7 Support</h3>
                        <p class="benefit-description">Our support team is always ready to help you with any
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
            <div class="col-md-4">
                <div class="store-card">
                    <div class="store-logo">
                        <i class="fas fa-dumbbell"></i>
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
            <div class="col-md-4">
                <div class="store-card">
                    <div class="store-logo">
                        <i class="fas fa-book-open"></i>
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
            <div class="col-md-4">
                <div class="store-card">
                    <div class="store-logo">
                        <i class="fas fa-gamepad"></i>
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
            <h2 class="content-title">The Ultimate Guide to Saving Money Online</h2>

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
                <p>"The average SaveNow user saves ₹5,000 annually by using our verified coupons and promo codes."</p>
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

            <a href="#" class="btn btn-primary-custom mt-3">
                <i class="fas fa-book me-2"></i>Read More Money Saving Tips
            </a>
        </div>
    </div>
@endsection

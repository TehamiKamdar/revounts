@extends('layouts.layout')



@section('content')
    <main class="content-section mb-0 pb-0 d-flex justify-content-center">
        <section class="carousel-container m-0 p-0">
            <div class="modern-carousel">
                <div class="slide-counter d-none">
                    <span id="current-slide">1</span> / <span id="total-slides">4</span>
                </div>

                <div class="carousel-nav">
                    <button class="nav-btn" id="prev-btn">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="nav-btn" id="next-btn">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <div class="carousel-track" id="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide">
                        <a href="#" class="slide-link">
                            <div class="slide-content">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/banner_1320x450.png') }}" alt="Electronics"
                                        class="slide-image">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <a href="#" class="slide-link">
                            <div class="slide-content">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/banner_1320x450.png') }}" alt="Home Decor"
                                        class="slide-image">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <a href="#" class="slide-link">
                            <div class="slide-content">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/banner_1320x450.png') }}" alt="Fashion"
                                        class="slide-image">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="carousel-slide">
                        <a href="#" class="slide-link">
                            <div class="slide-content">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/banner_1320x450.png') }}" alt="Beauty Products"
                                        class="slide-image">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="carousel-dots d-none" id="carousel-dots">
                </div>
            </div>
        </section>
    </main>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <img src="{{ asset('assets/images/hero-1.png') }}" alt="" class="hero-img">
    </div>
    <main class="container content-section mb-0 pb-0">
        <section class="coupon-wrapper">
            <div class="section-heading">
                <h2 class="section-title">Free coupons to redeem</h2>
                <p class="section-subtitle">Enjoy these grocery coupons that are available for you. Just clip, print and
                    save. Please note these coupons are valid only for use in the USA.</p>
            </div>
            <div class="coupons-row">
                <!-- Coupon 1 -->
                <div class="unique-coupon-card">
                    <div class="coupon-strip">
                        <h5 class="coupon-title">Electronics Sale</h5>
                        <div class="coupon-category">Gadgets & Devices</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Save big on the latest electronics including smartphones, laptops, headphones, and smart home
                            devices. Limited time offer on premium brands.
                        </p>

                        <div class="image-container">
                            <img src="{{ asset('assets/images/banner_480x200.png') }}" alt="Electronics"
                                class="product-image">
                        </div>
                    </div>

                    <div class="coupon-bottom">
                        <div class="expiry">
                            <i class="bi bi-clock"></i> 7 days left
                        </div>
                        <button class="claim-btn">Grab Deal</button>
                    </div>
                </div>

                <!-- Coupon 2 -->
                <div class="unique-coupon-card">
                    <div class="coupon-strip">
                        <h5 class="coupon-title">Fashion Weekend</h5>
                        <div class="coupon-category">Clothing & Accessories</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Refresh your wardrobe with our exclusive fashion sale. Applies to all clothing, shoes, and
                            accessories from top designers and brands.
                        </p>

                        <div class="image-container">
                            <img src="{{ asset('assets/images/banner_480x200.png') }}" alt="Fashion" class="product-image">
                        </div>
                    </div>

                    <div class="coupon-bottom">
                        <div class="expiry">
                            <i class="bi bi-clock"></i> 5 days left
                        </div>
                        <button class="claim-btn">Grab Deal</button>
                    </div>
                </div>

                <!-- Coupon 3 -->
                <div class="unique-coupon-card">
                    <div class="coupon-strip">
                        <h5 class="coupon-title">Home Essentials</h5>
                        <div class="coupon-category">Kitchen & Living</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Upgrade your living space with premium home appliances and decor items. Perfect for home
                            renovation
                            or adding modern touches to your interior.
                        </p>

                        <div class="image-container">
                            <img src="{{ asset('assets/images/banner_480x200.png') }}" alt="Home Goods"
                                class="product-image">
                        </div>
                    </div>

                    <div class="coupon-bottom">
                        <div class="expiry">
                            <i class="bi bi-clock"></i> 10 days left
                        </div>
                        <button class="claim-btn">Grab Deal</button>
                    </div>
                </div>

                <!-- Coupon 4 -->
                <div class="unique-coupon-card">
                    <div class="coupon-strip">
                        <h5 class="coupon-title">Beauty Box</h5>
                        <div class="coupon-category">Skincare & Cosmetics</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Discover premium beauty products and skincare essentials. This offer includes cosmetics,
                            fragrances,
                            and personal care items from luxury brands.
                        </p>

                        <div class="image-container">
                            <img src="{{ asset('assets/images/banner_480x200.png') }}" alt="Beauty Products"
                                class="product-image">
                        </div>
                    </div>

                    <div class="coupon-bottom">
                        <div class="expiry">
                            <i class="bi bi-clock"></i> 3 days left
                        </div>
                        <button class="claim-btn">Grab Deal</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Brands --}}
        <section class="brands-wrapper">
            <div class="brands-wrapper-header">
                <img src="{{ asset('assets/images/banner_1320x80.png') }}" loading="lazy" alt="">
            </div>

            <div class="rectangle-carousel">
                <div class="carousel-container">
                    <div class="carousel-track-brands">
                        <!-- Brand items will be generated by JavaScript -->
                    </div>
                </div>

                <div class="carousel-controls" id="carouselControls">
                    <!-- Dots will be generated by JavaScript -->
                </div>
            </div>
        </section>

        {{-- Current Deals Section --}}
        <section class="deals-wrapper">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-title">Current Hot Deals</h2>
                <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corrupti
                    nemo doloremque? Suscipit, consectetur accusantium!</p>
            </div>

            <!-- 5 Cards Grid -->
            <div class="deals-grid">
                <!-- Deal 1 -->
                <div class="deal-card">
                    <div class="card-image">
                        <div class="deal-badge">40% OFF</div>
                        <img src="https://placehold.co/500x360/450077/9984d4" alt="Headphones">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Wireless Noise Cancelling Headphones</h3>
                        <p class="card-body">Premium sound quality with 30hr battery life and comfortable over-ear design.
                        </p>
                        <div class="card-footer">
                            <div class="price">
                                <span class="original-price">$199</span>
                                $119
                            </div>
                            <button class="action-btn">View Deal</button>
                        </div>
                    </div>
                </div>

                <!-- Deal 2 -->
                <div class="deal-card">
                    <div class="card-image">
                        <div class="deal-badge">35% OFF</div>
                        <img src="https://placehold.co/500x360/450077/9984d4" alt="Smart Watch">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Fitness Smart Watch Series 5</h3>
                        <p class="card-body">Track workouts, heart rate, sleep patterns with 7-day battery life.</p>
                        <div class="card-footer">
                            <div class="price">
                                <span class="original-price">$249</span>
                                $162
                            </div>
                            <button class="action-btn">View Deal</button>
                        </div>
                    </div>
                </div>

                <!-- Deal 3 -->
                <div class="deal-card">
                    <div class="card-image">
                        <div class="deal-badge">50% OFF</div>
                        <img src="https://placehold.co/500x360/450077/9984d4" alt="Coffee Maker">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Programmable Coffee Machine</h3>
                        <p class="card-body">Automatic coffee maker with thermal carafe and multiple brew settings.</p>
                        <div class="card-footer">
                            <div class="price">
                                <span class="original-price">$89</span>
                                $45
                            </div>
                            <button class="action-btn">View Deal</button>
                        </div>
                    </div>
                </div>

                <!-- Deal 4 -->
                <div class="deal-card">
                    <div class="card-image">
                        <div class="deal-badge">30% OFF</div>
                        <img src="https://placehold.co/500x360/450077/9984d4" alt="Sneakers">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Premium Running Sneakers</h3>
                        <p class="card-body">Lightweight athletic shoes with advanced cushioning and breathable mesh.</p>
                        <div class="card-footer">
                            <div class="price">
                                <span class="original-price">$129</span>
                                $90
                            </div>
                            <button class="action-btn">View Deal</button>
                        </div>
                    </div>
                </div>

                <!-- Deal 5 -->
                <div class="deal-card">
                    <div class="card-image">
                        <div class="deal-badge">45% OFF</div>
                        <img src="https://placehold.co/500x360/450077/9984d4" alt="Backpack">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Waterproof Travel Backpack</h3>
                        <p class="card-body">Durable backpack with laptop compartment and multiple organizational pockets.
                        </p>
                        <div class="card-footer">
                            <div class="price">
                                <span class="original-price">$79</span>
                                $43
                            </div>
                            <button class="action-btn">View Deal</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Shop Section --}}
        <section class="shop-wrapper">

            <div class="brands-wrapper-header">
                <img src="{{ asset('assets/images/banner_1320x80_1.png') }}" loading="lazy" alt="">
            </div>
            <!-- Modern Accordions -->
            <div class="accordions-container">
                <!-- FAQ 1 -->
                <div class="accordion-item brands">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Shop by Brands</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content" style="max-height: 200px;">
                        <div class="accordion-body">
                            <div class="owl-carousel brand-carousel">
                                <div class="item">
                                    <a href="#" class="card-150">
                                        <img src="https://placehold.co/150x75">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="card-150">
                                        <img src="https://placehold.co/150x75">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="card-150">
                                        <img src="https://placehold.co/150x75">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="card-150">
                                        <img src="https://placehold.co/150x75">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="card-150">
                                        <img src="https://placehold.co/150x75">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Shop by Category</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            <!-- CATEGORY 1 -->
                            <div class="category-row mb-3">
                                <div class="category-title">Fashion</div>

                                <div class="owl-carousel category-carousel flex-grow-1">
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- CATEGORY 2 -->
                            <div class="category-row">
                                <div class="category-title">Electronics</div>

                                <div class="owl-carousel category-carousel flex-grow-1">
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="card-150">
                                            <img src="https://placehold.co/150x75">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Blogs --}}
        <section class="blog-wrapper">

            <!-- Header -->
            <div class="blog-header">
                <div class="header-badge">
                    <i class="fas fa-tag me-2"></i> COUPON BLOG & GUIDES
                </div>
                <h1 class="section-title">Smart Shopping Insights</h1>
                <p class="section-subtitle">
                    Expert tips, guides, and articles to help you find the best deals, maximize savings, and shop smarter.
                </p>

                <!-- Categories Filter -->
                <div class="categories-filter">
                    <button class="category-btn active">
                        <i class="fas fa-fire"></i>
                        <span>All Topics</span>
                    </button>
                    <button class="category-btn">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Tech Deals</span>
                    </button>
                    <button class="category-btn">
                        <i class="fas fa-tshirt"></i>
                        <span>Fashion Sales</span>
                    </button>
                    <button class="category-btn">
                        <i class="fas fa-utensils"></i>
                        <span>Food & Dining</span>
                    </button>
                    <button class="category-btn">
                        <i class="fas fa-home"></i>
                        <span>Home Essentials</span>
                    </button>
                    <button class="category-btn">
                        <i class="fas fa-plane"></i>
                        <span>Travel Offers</span>
                    </button>
                </div>
            </div>

            <!-- Two Column Layout -->
            <div class="blog-columns">
                <!-- Left Column - Featured Blogs -->
                <div class="featured-blogs">
                    <!-- Featured Blog -->
                    <div class="featured-blog-card">
                        <div class="featured-blog-image">
                            <div class="featured-blog-badge">
                                <i class="fas fa-crown"></i> FEATURED GUIDE
                            </div>
                            <img src="{{ asset('assets/images/banner_1320x450.png') }}" alt="Shopping Tips">
                        </div>

                        <div class="featured-blog-content">
                            <h2 class="featured-blog-title">The Ultimate Guide to Stacking Coupons for Maximum Savings</h2>
                            <p class="featured-blog-excerpt">
                                Discover advanced techniques for combining multiple discounts, cashback offers, and loyalty
                                rewards to save up to 80% on your purchases. Learn how to identify stackable deals and time
                                your
                                purchases perfectly.
                            </p>

                            <div class="blog-meta-row">
                                <div class="blog-author">
                                    <div class="author-avatar">SD</div>
                                    <div class="author-info">
                                        <div class="author-name">Sarah Deals</div>
                                        <div class="blog-date">November 18, 2023 • 12 min read</div>
                                    </div>
                                </div>

                                <div class="blog-stats">
                                    <div class="blog-stat">
                                        <div class="stat-value">2.4K</div>
                                        <div class="stat-label">Views</div>
                                    </div>
                                    <div class="blog-stat">
                                        <div class="stat-value">142</div>
                                        <div class="stat-label">Shares</div>
                                    </div>
                                    <div class="blog-stat">
                                        <div class="stat-value">89%</div>
                                        <div class="stat-label">Useful</div>
                                    </div>
                                </div>
                            </div>

                            <button class="read-blog-btn">
                                <span>Read Complete Guide</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>



                    <!-- Tips Section -->
                    <div class="tips-section">
                        <h3 class="tips-title">
                            <i class="fas fa-lightbulb"></i>
                            <span>Quick Shopping Tips</span>
                        </h3>

                        <div class="tips-list">
                            <div class="tip-item">
                                <div class="tip-number">1</div>
                                <div class="tip-content">
                                    <div class="tip-title">Stack Coupons Legally</div>
                                    <div class="tip-desc">Combine store coupons with manufacturer coupons and promo codes
                                        for
                                        maximum savings. Most stores allow this!</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">2</div>
                                <div class="tip-content">
                                    <div class="tip-title">Price Drop Alerts</div>
                                    <div class="tip-desc">Use browser extensions to track price history and get alerts when
                                        items drop in price.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">3</div>
                                <div class="tip-content">
                                    <div class="tip-title">Holiday Sale Calendar</div>
                                    <div class="tip-desc">Plan purchases around major holidays when specific categories go
                                        on
                                        sale (e.g., electronics on Black Friday).</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">4</div>
                                <div class="tip-content">
                                    <div class="tip-title">Cashback Apps</div>
                                    <div class="tip-desc">Install cashback apps that automatically apply coupon codes and
                                        give
                                        you money back on purchases.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">5</div>
                                <div class="tip-content">
                                    <div class="tip-title">Clear Browser Cookies</div>
                                    <div class="tip-desc">Clear cookies before visiting shopping sites to see fresh offers
                                        instead of targeted higher prices.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">6</div>
                                <div class="tip-content">
                                    <div class="tip-title">Abandon Cart Strategy</div>
                                    <div class="tip-desc">Leave items in your cart for 24 hours - many retailers will send
                                        you
                                        discount codes to complete purchase.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">7</div>
                                <div class="tip-content">
                                    <div class="tip-title">Newsletter Signup</div>
                                    <div class="tip-desc">Subscribe to brand newsletters - they often send exclusive
                                        discount
                                        codes to new subscribers.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">8</div>
                                <div class="tip-content">
                                    <div class="tip-title">Social Media Deals</div>
                                    <div class="tip-desc">Follow brands on social media for flash sales and exclusive promo
                                        codes not available elsewhere.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">9</div>
                                <div class="tip-content">
                                    <div class="tip-title">Student/Military Discounts</div>
                                    <div class="tip-desc">Always check for special discounts for students, teachers,
                                        military
                                        personnel, and seniors.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">10</div>
                                <div class="tip-content">
                                    <div class="tip-title">Extension Auto-Apply</div>
                                    <div class="tip-desc">Use coupon finder extensions that automatically find and apply
                                        the
                                        best coupon codes at checkout.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Articles & Tips -->
                <div class="articles-sidebar">
                    <div class="sidebar-header">
                        <h3 class="sidebar-title">Latest Articles</h3>
                        <div class="sidebar-count">6 Articles</div>
                    </div>

                    <!-- Articles List -->
                    <div class="articles-list">
                        <!-- Article 1 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Black Friday</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>Today</span>
                                </div>
                            </div>
                            <h4 class="article-title">2023 Black Friday Predictions: Best Deals to Watch</h4>
                            <p class="article-excerpt">Early analysis of expected discounts on electronics, home goods, and
                                fashion based on retail patterns.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">MJ</div>
                                    <div class="author-name-small">Mike Johnson</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>156</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Article 2 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Cashback</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>2 days ago</span>
                                </div>
                            </div>
                            <h4 class="article-title">Cashback Apps Comparison: Which Ones Really Pay?</h4>
                            <p class="article-excerpt">Detailed analysis of top 5 cashback apps with real user experiences
                                and
                                payout success rates.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">ER</div>
                                    <div class="author-name-small">Emma Roberts</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>203</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Article 3 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Seasonal</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                            <h4 class="article-title">Holiday Shopping: Timing Your Purchases for Maximum Discounts</h4>
                            <p class="article-excerpt">Calendar of upcoming sales events and the best days to buy specific
                                categories of products.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">TS</div>
                                    <div class="author-name-small">Tom Smith</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>178</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Article 4 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Grocery</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>4 days ago</span>
                                </div>
                            </div>
                            <h4 class="article-title">How to Save 40% on Groceries with Digital Coupons</h4>
                            <p class="article-excerpt">Step-by-step guide to using digital coupons and loyalty programs at
                                major
                                grocery chains.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">LW</div>
                                    <div class="author-name-small">Lisa Wang</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>134</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Article 5 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Travel</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>5 days ago</span>
                                </div>
                            </div>
                            <h4 class="article-title">Secret Flight Booking Hacks for 70% Off Airfare</h4>
                            <p class="article-excerpt">Insider tips on finding hidden discounts and error fares that
                                airlines
                                don't advertise.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">RA</div>
                                    <div class="author-name-small">Rahul Agarwal</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>267</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Article 6 -->
                        <div class="article-card">
                            <div class="article-header">
                                <div class="article-category">Technology</div>
                                <div class="article-time">
                                    <i class="far fa-clock"></i>
                                    <span>1 week ago</span>
                                </div>
                            </div>
                            <h4 class="article-title">Student Discounts You Didn't Know About: Save on Tech</h4>
                            <p class="article-excerpt">Comprehensive list of student discounts for software, hardware, and
                                subscription services.</p>
                            <div class="article-footer">
                                <div class="article-author">
                                    <div class="author-initial">KC</div>
                                    <div class="author-name-small">Kevin Chen</div>
                                </div>
                                <div class="article-actions">
                                    <button class="article-action">
                                        <i class="far fa-heart"></i>
                                        <span>189</span>
                                    </button>
                                    <button class="article-action">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Whats Init --}}
        <section class="section-wrapper">
            <div class="whats-in-section">

                <div class="header-split">
                    <div class="split-image">
                        <img src="{{ asset('assets/images/banner_560x200.png') }}" alt="Header Image">
                        <div class="overlay-text">FOR <span id="month"></span></div>
                    </div>
                </div>


                <!-- Image Layout -->
                <div class="image-layout">
                    <!-- Left Col-3 (2 images) -->
                    <div class="image-col col-3-left">
                        <div class="image-container small-image">
                            <img src="{{ asset('assets/images/banner_610x500_1.png') }}" alt="Electronics"
                                class="layout-image">
                        </div>
                        <div class="image-container small-image">
                            <img src="{{ asset('assets/images/banner_610x500_2.png') }}" alt="Smart Watch"
                                class="layout-image">
                        </div>
                    </div>

                    <!-- Center Col-6 (1 large image) -->
                    <div class="image-col col-6-center">
                        <div class="image-container large-image">
                            <img src="{{ asset('assets/images/banner_1280x1024.png') }}" alt="Featured Product"
                                class="layout-image">
                        </div>
                    </div>

                    <!-- Right Col-3 (2 images) -->
                    <div class="image-col col-3-right">
                        <div class="image-container small-image">
                            <img src="{{ asset('assets/images/banner_610x500_3.png') }}" alt="Home Appliances"
                                class="layout-image">
                        </div>
                        <div class="image-container small-image">
                            <img src="{{ asset('assets/images/banner_610x500_4.png') }}" alt="Fashion"
                                class="layout-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Frequently A Q --}}
        <section class="faq-wrapper">
            <!-- Header -->
            <div class="faq-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">
                    Find answers to common questions about our coupons, offers, and how to save more on your purchases.
                </p>
            </div>

            <!-- Modern Accordions -->
            <div class="accordions-container">
                <!-- FAQ 1 -->
                <div class="accordion-item active">
                    <div class="accordion-header">
                        <h3 class="accordion-title">How do I use coupon codes on this website?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content" style="max-height: 200px;">
                        <div class="accordion-body">
                            Simply click on the "Copy Code" button next to any coupon, then paste it during checkout on the
                            retailer's website. Make sure to check the coupon's terms and conditions for any restrictions.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Are these coupons verified and working?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            Yes, all coupons are verified daily to ensure they're working. Our team constantly updates
                            expired codes and adds new ones. If you find a coupon that's not working, please report it using
                            the "Report Issue" button.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">How often are new coupons added?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            New coupons are added daily, with major updates every Monday and Thursday. We recommend checking
                            back regularly or subscribing to our newsletter to receive new coupon alerts directly in your
                            inbox.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Can I stack multiple coupons on one purchase?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            This depends on the retailer's policy. Some stores allow stacking of store coupons with
                            manufacturer coupons, while others don't. Each coupon listing includes information about whether
                            it can be stacked. Look for the "stackable" tag.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Do these coupons work for international orders?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            Most coupons are region-specific. We clearly label each coupon with its applicable region (US,
                            UK, EU, etc.). Make sure to check the region tag before using a coupon. International shipping
                            coupons are also available for select retailers.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3 class="accordion-title">Is there a limit to how many coupons I can use?</h3>
                        <div class="accordion-icon">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            Generally, there's no limit to how many coupons you can collect or save. However, each
                            individual coupon typically has usage limits (like one per customer, per household, or per
                            transaction). These limits are specified in each coupon's terms.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="contact-title">Still have questions?</h3>
                <p class="contact-text">Can't find the answer you're looking for? Our support team is here to help.</p>
                <button class="contact-btn">
                    <i class="far fa-envelope"></i>
                    <span>Contact Support</span>
                </button>
            </div>
        </section>

        {{-- Newsletter --}}
        <section class="newsletter-wrapper">
            <!-- Background Dots -->
            <div class="newsletter-bg">
                <div class="bg-dot dot-1"></div>
                <div class="bg-dot dot-2"></div>
                <div class="bg-dot dot-3"></div>
                <div class="bg-dot dot-4"></div>
            </div>

            <!-- Content -->
            <div class="newsletter-content">
                <!-- Left Text -->
                <div class="text-content">
                    <h3 class="newsletter-title">Get Exclusive Coupons</h3>
                    <p class="newsletter-subtitle">
                        Subscribe to get weekly coupon codes and special offers directly in your inbox.
                    </p>
                </div>

                <!-- Right Email Form -->
                <form class="email-form" id="simpleNewsletter">
                    <input type="email" class="email-input" placeholder="Enter your email address" required>
                    <button type="submit" class="subscribe-btn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Subscribe</span>
                    </button>
                </form>
            </div>

            <!-- Subscription Message (Initially Hidden) -->
            <div class="subscription-message" id="subMessage">
                <i class="fas fa-check-circle"></i>
                <span>Thank you for subscribing! Check your email for confirmation.</span>
            </div>
        </section>

        {{-- Notice --}}
        <section class="notice-wrapper pb-0 mb-3">
            <p>*Disclosure: When you buy something using the retail links in our <a href="">stores</a>, <a
                    href="">reviews</a>, or <a href="blogs"></a>, We may earn a small affiliate commission at no
                additional
                cost for you. We recommend brands and products that we genuinely like and are only promoted through <a
                    href="">coupon codes</a>, promo codes, discounts & editorial reviews on Revounts. Learn more
                about our
                <a href="">terms & conditions</a>.
            </p>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            /* ==========================
            MONTH FOR SEASON SECTION
            ========================== */
            const now = new Date();
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ];
            document.getElementById("month").innerText = monthNames[now.getMonth()].toUpperCase();

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
                dotsContainer.querySelectorAll('.dot').forEach((dot, i) => dot.classList.toggle('active', i ===
                    displayIndex));
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

            function nextSlide() {
                currentIndex++;
                setSlidePosition(true);
            }

            function prevSlide() {
                currentIndex--;
                setSlidePosition(true);
            }
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
            function startAutoSlide() {
                stopAutoSlide();
                autoSlideInterval = setInterval(nextSlide, slideDuration);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
                autoSlideInterval = null;
            }
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
            document.addEventListener('visibilitychange', () => {
                if (!document.hidden) resetCarousel();
            });
            window.addEventListener('focus', resetCarousel);
            window.addEventListener('resize', resetCarousel);

            // Touch / swipe
            let startX = 0,
                endX = 0;
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
                if (item.classList.contains('brands')) content.style.maxHeight = body.scrollHeight + 166 +
                    'px';
                else if (item.classList.contains('active')) content.style.maxHeight = body.scrollHeight +
                    40 + 'px';

                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    accordionItems.forEach(other => {
                        other.classList.remove('active');
                        other.querySelector('.accordion-content').style.maxHeight = '0';
                    });
                    if (!isActive) {
                        item.classList.add('active');
                        content.style.maxHeight = body.scrollHeight + 40 + 'px';
                        item.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest'
                        });
                    }
                });

                // Hover effect
                const icon = item.querySelector('.accordion-icon');
                item.addEventListener('mouseenter', () => {
                    if (!item.classList.contains('active')) {
                        icon.style.transform = 'scale(1.1)';
                        icon.querySelectorAll('span').forEach(s => s.style.background =
                            'var(--primary-light)');
                    }
                });
                item.addEventListener('mouseleave', () => {
                    if (!item.classList.contains('active')) {
                        icon.style.transform = '';
                        icon.querySelectorAll('span').forEach(s => s.style.background =
                            'var(--primary)');
                    }
                });
            });

            // Keyboard nav
            document.addEventListener('keydown', e => {
                if (e.key !== 'ArrowDown' && e.key !== 'ArrowUp') return;
                e.preventDefault();
                const activeIndex = accordionItems.findIndex(item => item.classList.contains('active'));
                const newIndex = e.key === 'ArrowDown' ? (activeIndex + 1) % accordionItems.length : (
                    activeIndex - 1 + accordionItems.length) % accordionItems.length;
                accordionItems[newIndex].querySelector('.accordion-header').click();
            });

            accordionItems.forEach(item => item.querySelector('.accordion-header').setAttribute('tabindex', '0'));

            /* ==========================
               OWL CAROUSELS
            ========================== */
            $('.brand-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                autoplaySpeed: 800,
                nav: false,
                responsive: {
                    0: {
                        items: 4
                    },
                    768: {
                        items: 6
                    }
                }
            });
            $('.category-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                autoplaySpeed: 800,
                nav: false,
                responsive: {
                    0: {
                        items: 4
                    },
                    768: {
                        items: 6
                    }
                }
            });

            // ==========================
            // BRANDS CAROUSEL
            // ==========================
            const brands = [{
                    id: 1,
                    name: "TechCorp",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 2,
                    name: "StyleHub",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 3,
                    name: "AutoDrive",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 4,
                    name: "Foodie",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 5,
                    name: "HomeEssentials",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 6,
                    name: "SportPro",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 7,
                    name: "BeautyLuxe",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 8,
                    name: "GadgetZone",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 9,
                    name: "EcoLife",
                    color1: "450077",
                    color2: "9984d4"
                },
                {
                    id: 10,
                    name: "SmartHome",
                    color1: "450077",
                    color2: "9984d4"
                }
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
                subscribeBtn.innerHTML =
                    '<i class="fas fa-spinner fa-spin"></i><span>Subscribing...</span>';
                subscribeBtn.disabled = true;
                setTimeout(() => {
                    messageElement.classList.add('show');
                    emailInput.value = '';
                    subscribeBtn.innerHTML = originalText;
                    subscribeBtn.disabled = false;
                    setTimeout(() => messageElement.classList.remove('show'), 5000);
                }, 1000);
            });

        })
    </script>
@endsection

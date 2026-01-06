@extends('layouts.layout')



@section('content')

    <main class="container content-section mb-0 pb-0 d-flex justify-content-center">
        <section class="carousel-container m-0 p-0">
            <div class="section-heading">
                <h2 class="section-title">Featured Collections</h2>
                <p class="section-subtitle">
                    Best Discount Code, Deals & Coupons – Australia’s #1 Online Hub
                </p>
            </div>
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
                        <div class="slide-content">
                            {{-- <div class="text-content">
                                <span class="slide-tag">Limited Offer</span>
                                <h2 class="slide-title">Premium Electronics Collection</h2>
                                <p class="slide-description">
                                    Discover cutting-edge gadgets and devices with advanced features. Our curated selection
                                    includes smartphones, laptops, wearables, and smart home technology.
                                </p>

                                <div class="slide-stats">
                                    <div class="stat-item">
                                        <span class="stat-value">35%</span>
                                        <span class="stat-label">Discount</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">150+</span>
                                        <span class="stat-label">Products</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">48h</span>
                                        <span class="stat-label">Sale Ends</span>
                                    </div>
                                </div>

                                <button class="slide-button">Explore Collection</button>
                            </div> --}}

                            <div class="image-content">
                                <img src="https://placehold.co/1320x450/450077/9984d4" alt="Electronics" class="slide-image">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <div class="slide-content">
                            {{-- <div class="text-content">
                                <span class="slide-tag">New Arrivals</span>
                                <h2 class="slide-title">Modern Home Decor Essentials</h2>
                                <p class="slide-description">
                                    Transform your living space with contemporary furniture and decor pieces. Minimalist designs
                                    meet functional elegance for the modern home.
                                </p>

                                <div class="slide-stats">
                                    <div class="stat-item">
                                        <span class="stat-value">25%</span>
                                        <span class="stat-label">Off</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">200+</span>
                                        <span class="stat-label">Items</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">7d</span>
                                        <span class="stat-label">Limited Time</span>
                                    </div>
                                </div>

                                <button class="slide-button">Shop Now</button>
                            </div> --}}

                            <div class="image-content">
                                <img src="https://placehold.co/1320x450/450077/9984d4" alt="Home Decor" class="slide-image">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <div class="slide-content">
                            {{-- <div class="text-content">
                                <span class="slide-tag">Best Sellers</span>
                                <h2 class="slide-title">Fashion & Accessories Store</h2>
                                <p class="slide-description">
                                    Elevate your style with premium fashion collections and accessories. From casual wear to
                                    formal attire, find everything for your wardrobe.
                                </p>

                                <div class="slide-stats">
                                    <div class="stat-item">
                                        <span class="stat-value">40%</span>
                                        <span class="stat-label">Sale</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">500+</span>
                                        <span class="stat-label">Styles</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">14d</span>
                                        <span class="stat-label">Seasonal</span>
                                    </div>
                                </div>

                                <button class="slide-button">View Collection</button>
                            </div> --}}

                            <div class="image-content">
                                <img src="https://placehold.co/1320x450/450077/9984d4" alt="Fashion" class="slide-image">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-slide">
                        <div class="slide-content">
                            {{-- <div class="text-content">
                                <span class="slide-tag">Exclusive</span>
                                <h2 class="slide-title">Beauty & Wellness Products</h2>
                                <p class="slide-description">
                                    Discover premium skincare, cosmetics, and wellness products for your self-care routine.
                                    Organic ingredients and sustainable packaging.
                                </p>

                                <div class="slide-stats">
                                    <div class="stat-item">
                                        <span class="stat-value">30%</span>
                                        <span class="stat-label">Off</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">300+</span>
                                        <span class="stat-label">Products</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-value">5d</span>
                                        <span class="stat-label">Flash Sale</span>
                                    </div>
                                </div>

                                <button class="slide-button">Discover More</button>
                            </div> --}}

                            <div class="image-content">
                                <img src="https://placehold.co/1320x450/450077/9984d4" alt="Beauty Products"
                                    class="slide-image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-dots d-none" id="carousel-dots">
                    <!-- Dots will be generated by JavaScript -->
                </div>
            </div>
        </section>
    </main>
        <!-- Hero Section -->
        <div class="hero-section text-center">
        </div>
    <main class="container content-section">
        <section class="coupon-section">
            <div class="section-heading">
                <h2 class="section-title">Free coupons to redeem</h2>
                <p class="section-subtitle">Enjoy these grocery coupons that are available for you. Just clip, print and save.
                    Please note these coupons are valid only for use in the USA.</p>
            </div>
            <div class="coupons-row">
                <!-- Coupon 1 -->
                <div class="unique-coupon-card">
                    <div class="coupon-strip">
                        <div class="coupon-title">Electronics Sale</div>
                        <div class="coupon-category">Gadgets & Devices</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Save big on the latest electronics including smartphones, laptops, headphones, and smart home
                            devices. Limited time offer on premium brands.
                        </p>

                        {{-- <div class="code-section">
                            <div class="coupon-code">TECH25</div>
                            <button class="copy-btn" data-code="TECH25">Copy</button>
                        </div> --}}

                        <div class="image-container">
                            <img src="https://placehold.co/240x100/450077/9984d4" alt="Electronics" class="product-image">
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
                        <div class="coupon-title">Fashion Weekend</div>
                        <div class="coupon-category">Clothing & Accessories</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Refresh your wardrobe with our exclusive fashion sale. Applies to all clothing, shoes, and
                            accessories from top designers and brands.
                        </p>

                        {{-- <div class="code-section">
                            <div class="coupon-code">STYLE40</div>
                            <button class="copy-btn" data-code="STYLE40">Copy</button>
                        </div> --}}

                        <div class="image-container">
                            <img src="https://placehold.co/240x100/450077/9984d4" alt="Fashion" class="product-image">
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
                        <div class="coupon-title">Home Essentials</div>
                        <div class="coupon-category">Kitchen & Living</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Upgrade your living space with premium home appliances and decor items. Perfect for home renovation
                            or adding modern touches to your interior.
                        </p>

                        {{-- <div class="code-section">
                            <div class="coupon-code">HOME30</div>
                            <button class="copy-btn" data-code="HOME30">Copy</button>
                        </div> --}}

                        <div class="image-container">
                            <img src="https://placehold.co/240x100/450077/9984d4" alt="Home Goods" class="product-image">
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
                        <div class="coupon-title">Beauty Box</div>
                        <div class="coupon-category">Skincare & Cosmetics</div>
                    </div>

                    <div class="coupon-content">
                        <p class="coupon-description">
                            Discover premium beauty products and skincare essentials. This offer includes cosmetics, fragrances,
                            and personal care items from luxury brands.
                        </p>

                        {{-- <div class="code-section">
                            <div class="coupon-code">GLOW35</div>
                            <button class="copy-btn" data-code="GLOW35">Copy</button>
                        </div> --}}

                        <div class="image-container">
                            <img src="https://placehold.co/240x100/450077/9984d4" alt="Beauty Products" class="product-image">
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


        <div class="brands-section">
            <div class="brands-section-header">
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
        </div>


        <div class="coupon-blog-wrapper">

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
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80"
                                alt="Shopping Tips">
                        </div>

                        <div class="featured-blog-content">
                            <h2 class="featured-blog-title">The Ultimate Guide to Stacking Coupons for Maximum Savings</h2>
                            <p class="featured-blog-excerpt">
                                Discover advanced techniques for combining multiple discounts, cashback offers, and loyalty
                                rewards to save up to 80% on your purchases. Learn how to identify stackable deals and time your
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
                                    <div class="tip-desc">Combine store coupons with manufacturer coupons and promo codes for
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
                                    <div class="tip-desc">Plan purchases around major holidays when specific categories go on
                                        sale (e.g., electronics on Black Friday).</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">4</div>
                                <div class="tip-content">
                                    <div class="tip-title">Cashback Apps</div>
                                    <div class="tip-desc">Install cashback apps that automatically apply coupon codes and give
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
                                    <div class="tip-desc">Leave items in your cart for 24 hours - many retailers will send you
                                        discount codes to complete purchase.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">7</div>
                                <div class="tip-content">
                                    <div class="tip-title">Newsletter Signup</div>
                                    <div class="tip-desc">Subscribe to brand newsletters - they often send exclusive discount
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
                                    <div class="tip-desc">Always check for special discounts for students, teachers, military
                                        personnel, and seniors.</div>
                                </div>
                            </div>

                            <div class="tip-item">
                                <div class="tip-number">10</div>
                                <div class="tip-content">
                                    <div class="tip-title">Extension Auto-Apply</div>
                                    <div class="tip-desc">Use coupon finder extensions that automatically find and apply the
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
                            <p class="article-excerpt">Detailed analysis of top 5 cashback apps with real user experiences and
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
                            <p class="article-excerpt">Step-by-step guide to using digital coupons and loyalty programs at major
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
                            <p class="article-excerpt">Insider tips on finding hidden discounts and error fares that airlines
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
        </div>
    </main>

    <div class="newsletter-section">
        <video id="newsletterVideo" muted playsinline disablePictureInPicture controlsList="nodownload nofullscreen noremoteplayback">
            <source src="{{ asset('assets/subscribe.mp4') }}" type="video/mp4">
        </video>
    </div>


@endsection
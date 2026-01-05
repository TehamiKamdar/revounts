@extends('layouts.layout')

@section('hero')
<!-- Hero Section -->
    <div class="hero-section text-center">
    </div>
@endsection

@section('content')
    <section class="coupon-section">
        <div class="section-heading">
            <h2 class="section-title">Free coupons to redeem</h2>
            <p class="section-subtitle">Enjoy these grocery coupons that are available for you. Just clip, print and save. Please note these coupons are valid only for use in the USA.</p>
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
                        Save big on the latest electronics including smartphones, laptops, headphones, and smart home devices. Limited time offer on premium brands.
                    </p>

                    {{-- <div class="code-section">
                        <div class="coupon-code">TECH25</div>
                        <button class="copy-btn" data-code="TECH25">Copy</button>
                    </div> --}}

                    <div class="image-container">
                        <img src="https://placehold.co/240x100/450077/9984d4"
                             alt="Electronics"
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
                    <div class="coupon-title">Fashion Weekend</div>
                    <div class="coupon-category">Clothing & Accessories</div>
                </div>

                <div class="coupon-content">
                    <p class="coupon-description">
                        Refresh your wardrobe with our exclusive fashion sale. Applies to all clothing, shoes, and accessories from top designers and brands.
                    </p>

                    {{-- <div class="code-section">
                        <div class="coupon-code">STYLE40</div>
                        <button class="copy-btn" data-code="STYLE40">Copy</button>
                    </div> --}}

                    <div class="image-container">
                        <img src="https://placehold.co/240x100/450077/9984d4"
                             alt="Fashion"
                             class="product-image">
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
                        Upgrade your living space with premium home appliances and decor items. Perfect for home renovation or adding modern touches to your interior.
                    </p>

                    {{-- <div class="code-section">
                        <div class="coupon-code">HOME30</div>
                        <button class="copy-btn" data-code="HOME30">Copy</button>
                    </div> --}}

                    <div class="image-container">
                        <img src="https://placehold.co/240x100/450077/9984d4"
                             alt="Home Goods"
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
                    <div class="coupon-title">Beauty Box</div>
                    <div class="coupon-category">Skincare & Cosmetics</div>
                </div>

                <div class="coupon-content">
                    <p class="coupon-description">
                        Discover premium beauty products and skincare essentials. This offer includes cosmetics, fragrances, and personal care items from luxury brands.
                    </p>

                    {{-- <div class="code-section">
                        <div class="coupon-code">GLOW35</div>
                        <button class="copy-btn" data-code="GLOW35">Copy</button>
                    </div> --}}

                    <div class="image-container">
                        <img src="https://placehold.co/240x100/450077/9984d4"
                             alt="Beauty Products"
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


    <section class="carousel-container">
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
                                Discover cutting-edge gadgets and devices with advanced features. Our curated selection includes smartphones, laptops, wearables, and smart home technology.
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
                            <img src="https://placehold.co/1320x450/450077/9984d4"
                                 alt="Electronics"
                                 class="slide-image">
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
                                Transform your living space with contemporary furniture and decor pieces. Minimalist designs meet functional elegance for the modern home.
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
                            <img src="https://placehold.co/1320x450/450077/9984d4"
                                 alt="Home Decor"
                                 class="slide-image">
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
                                Elevate your style with premium fashion collections and accessories. From casual wear to formal attire, find everything for your wardrobe.
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
                            <img src="https://placehold.co/1320x450/450077/9984d4"
                                 alt="Fashion"
                                 class="slide-image">
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
                                Discover premium skincare, cosmetics, and wellness products for your self-care routine. Organic ingredients and sustainable packaging.
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
                            <img src="https://placehold.co/1320x450/450077/9984d4"
                                 alt="Beauty Products"
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


    <div class="brands-section">
        <h2 class="section-title">Featured Brands</h2>

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

@endsection
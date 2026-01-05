@extends('layouts.layout')

@section('hero')
<!-- Hero Section -->
    <section class="hero-section text-center">
    </section>
@endsection

@section('content')
    <div class="coupon-section">
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
    </div>
@endsection
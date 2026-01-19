@extends('layouts.layout')

@section('content')
<section class="container content-section">
    <!-- Main Container -->
    <div class="reviews-details-container">
        <!-- 8:4 Columns Grid -->
        <div class="row">
            <!-- Left Column (8 parts) -->
            <div class="col-lg-9 col-12">
                <!-- Hero Image -->
                <div class="hero-image">
                    <img src="https://placehold.co/1200x400/450077/9984d4" alt="Brand Collection">
                </div>

                <!-- Promotional Content Section 1 -->
                <div class="content-section">
                    <h2 class="section-heading">Our Story & Vision</h2>
                    <div class="section-content">
                        <p>Founded with a passion for quality and innovation, our brand has been redefining standards in the industry for over a decade. We believe in creating products that not only meet but exceed expectations, blending timeless design with modern functionality.</p>
                        <p>Every product we create tells a story of meticulous craftsmanship, attention to detail, and a commitment to sustainability. Our vision is to build lasting relationships with our customers by delivering exceptional value and unparalleled service.</p>
                    </div>
                </div>

                <!-- Points List -->
                <div class="content-section">
                    <h2 class="section-heading">Why Choose Us</h2>
                    <ul class="points-list">
                        <li class="point-item">
                            <i class="fas fa-check-circle"></i>
                            <strong>Premium Quality:</strong> Every product undergoes rigorous quality checks to ensure perfection
                        </li>
                        <li class="point-item">
                            <i class="fas fa-check-circle"></i>
                            <strong>Sustainable Practices:</strong> Committed to eco-friendly manufacturing and packaging
                        </li>
                        <li class="point-item">
                            <i class="fas fa-check-circle"></i>
                            <strong>Customer-Centric:</strong> Dedicated support team available 24/7 for all your needs
                        </li>
                        <li class="point-item">
                            <i class="fas fa-check-circle"></i>
                            <strong>Innovative Design:</strong> Constantly evolving with the latest trends and technologies
                        </li>
                        <li class="point-item">
                            <i class="fas fa-check-circle"></i>
                            <strong>Value for Money:</strong> Competitive pricing without compromising on quality
                        </li>
                    </ul>
                </div>

                <!-- Notes Box -->
                <div class="notes-box">
                    <div class="notes-title">
                        <i class="fas fa-lightbulb"></i>
                        Important Note
                    </div>
                    <p>All our products come with a comprehensive 2-year warranty and 30-day money-back guarantee. We stand behind the quality of every item we sell and are committed to your complete satisfaction.</p>
                </div>

                <!-- Promotional Content Section 2 -->
                <div class="content-section">
                    <h2 class="section-heading">Our Commitment to Excellence</h2>
                    <div class="section-content">
                        <p>Excellence is not just a goal for us; it's our standard operating procedure. From the initial design concept to the final product delivery, every step is executed with precision and care.</p>
                        <p>We work closely with our customers to understand their needs and preferences, ensuring that every product we deliver is tailored to provide maximum satisfaction. Our team of experts is always available to guide you through your purchasing journey.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column (4 parts) -->
            <div class="col-lg-3 col-12">
                <!-- New Card 1: Reviewed by & Views -->
                <div class="stats-card">
                    <div class="stats-content">
                        <div class="d-flex justify-content-between">
                            <div class="stat-label">
                                <i class="fas fa-user-check"></i>
                                Written by
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-end">
                                <img src="{{ asset('assets/images/author-revounts-staff.png') }}" height="40" width="40" class="img-fluid me-1" title="Revounts Staff" style="cursor: pointer;" alt="">
                            </div>
                        </div>
                        <div class="stat-row">
                            <div class="stat-label">
                                <i class="fas fa-eye"></i>
                                Total Views
                            </div>
                            <div class="stat-value">25,843</div>
                        </div>
                        <div class="stat-row">
                            <div class="stat-label">
                                <i class="fas fa-calendar-alt"></i>
                                Published On
                            </div>
                            <div class="stat-value">Today</div>
                        </div>
                    </div>
                </div>

                <!-- Brand Store Card -->
                <div class="brand-card">
                    <div class="brand-header">
                        <div class="brand-logo">
                            EL
                        </div>
                    </div>
                    <div class="brand-info">
                        <div class="brand-name">Élégance Luxe</div>
                        <div class="brand-category">Premium Home & Lifestyle</div>
                    </div>
                    <button class="visit-store-btn">
                        <i class="fas fa-store"></i>
                        Visit Store
                    </button>
                </div>

                <!-- Brand Review -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-title">Overall Brand Rating</div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            4.7
                        </div>
                    </div>
                    <p class="review-text">"Exceptional quality and service. Their attention to detail and customer care sets them apart from competitors. Highly recommended for premium products."</p>
                    <div class="reviewer">
                        <div class="reviewer-avatar">AJ</div>
                        <div>
                            <div>Alex Johnson</div>
                            <div style="font-size: 0.8rem; opacity: 0.7;">Verified Customer</div>
                        </div>
                    </div>
                </div>

                <!-- Brand Tagline -->
                <div class="tagline-box">
                    <p class="tagline-text">"Where quality meets elegance, and every product tells a story of excellence."</p>
                </div>

                <!-- Related Reviews -->
                <div class="sidebar-card">
                    <div class="sidebar-header">
                        <h4 class="sidebar-title">Trending Blogs</h4>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">Best Women`s Perfumes to Buy in 2020</a>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">15 Smartest Ways to get Discounts in Australia</a>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">How to Pick the Right Standby Generator For Home Use</a>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">The 15 Most Loved Australia`s E-commerce Websites of 2023</a>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">Best Running Shoes For Men to Buy at JD Sports</a>
                    </div>

                    <div class="trending-item">
                        <a href="{{ route('blog.details', 'some-blog-post') }}" class="trending-title">Cheap online shopping: A guide to buying online Clothing Brands in Australia 2020</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
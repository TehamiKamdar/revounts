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
                                Reviewed by
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

                <!-- New Card 2: Rate the Review -->
                <div class="rate-card">
                    <h4 class="rate-title">
                        <i class="fas fa-star"></i>
                        Rate This Review
                    </h4>
                    <p class="rate-text">Was this review helpful? Rate it to help others.</p>

                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5" class="star-label">
                            <i class="fas fa-star"></i>
                        </label>

                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4" class="star-label">
                            <i class="fas fa-star"></i>
                        </label>

                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3" class="star-label">
                            <i class="fas fa-star"></i>
                        </label>

                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2" class="star-label">
                            <i class="fas fa-star"></i>
                        </label>

                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1" class="star-label">
                            <i class="fas fa-star"></i>
                        </label>
                    </div>

                    <button class="submit-rating-btn">
                        <i class="fas fa-paper-plane"></i>
                        Submit Rating
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
                        <h4 class="sidebar-title">Related Reviews</h4>
                    </div>


                    <div class="trending-item">
                        <a href="#" class="trending-title">Catch Reviews - Aussie`s Chosen Store For Daily Deals</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Kirstin Ash Reviews: Shop Stylish & Trendy Jewellery</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Wrangler Australia Review | Premium Quality with Huge Savings</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Decathlon Discount Code Review and Savings Tips</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">How a Pizza Hut Coupon Affects the Overall Brand Value</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Cheap online shopping: A guide to buying online Clothing Brands in Australia 2020</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.layout')

@section('content')
<div class="hero-section text-center">
    <img src="{{ asset('assets/images/banner_1560x480.png') }}" alt="" style="padding-top: 0;" class="hero-img">
</div>
{{-- CSS Starting from Line 2748 --}}
<section class="container content-section">
    <div class="reviews-layout animate-in" style="animation-delay: 0.1s">
            <!-- Left Sections -->
            <div class="left-sections">
                <!-- Featured Review Section -->
                <div class="section-card">
                    <div class="section-header">
                        <h2 class="section-title">
                            <i class="fas fa-crown"></i>
                            Featured Review
                        </h2>
                        <span class="section-badge">Top Pick</span>
                    </div>

                    <div class="featured-review-card">
                        <div class="featured-badge">
                            <i class="fas fa-star me-1"></i> Editor's Choice
                        </div>

                        <div class="featured-content">
                            <h3 class="featured-title">"This product transformed our workflow completely"</h3>

                            <div class="featured-rating">
                                <div class="featured-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="featured-rating-value">4.7/5</span>
                            </div>

                            <p class="featured-review-text">
                                The attention to detail and user-centric design makes this stand out from competitors.
                                Integration was seamless and the customer support team was exceptional throughout.
                            </p>
                        </div>

                        <div class="featured-reviewer">
                            <div class="featured-reviewer-avatar">SJ</div>
                            <div class="featured-reviewer-info">
                                <div class="featured-reviewer-name">Sarah Johnson</div>
                                <div class="featured-reviewer-role">CTO at TechVision Inc.</div>
                            </div>
                            <i class="fas fa-quote-right" style="font-size: 2rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>

                <!-- Store Reviews Section -->
                <div class="section-card">
                    <div class="section-header">
                        <h2 class="section-title">
                            <i class="fas fa-store"></i>
                            Store Reviews
                        </h2>
                        <span class="section-badge">5 Stores</span>
                    </div>

                    <div class="store-reviews-list">
                        <!-- Store 1 -->
                        <div class="store-review-item">
                            <div class="store-review-logo">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="store-review-content">
                                <div class="store-review-name">Apple App Store</div>
                                <div class="store-review-stats">
                                    <div class="store-review-rating">
                                        <span class="store-review-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                        4.6
                                    </div>
                                    <span>•</span>
                                    <span>1,247 reviews</span>
                                </div>
                            </div>
                            <div class="store-review-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>

                        <!-- Store 2 -->
                        <div class="store-review-item">
                            <div class="store-review-logo">
                                <i class="fab fa-google-play"></i>
                            </div>
                            <div class="store-review-content">
                                <div class="store-review-name">Google Play Store</div>
                                <div class="store-review-stats">
                                    <div class="store-review-rating">
                                        <span class="store-review-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        4.2
                                    </div>
                                    <span>•</span>
                                    <span>892 reviews</span>
                                </div>
                            </div>
                            <div class="store-review-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>

                        <!-- Store 3 -->
                        <div class="store-review-item">
                            <div class="store-review-logo">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="store-review-content">
                                <div class="store-review-name">Amazon</div>
                                <div class="store-review-stats">
                                    <div class="store-review-rating">
                                        <span class="store-review-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        4.9
                                    </div>
                                    <span>•</span>
                                    <span>3,415 reviews</span>
                                </div>
                            </div>
                            <div class="store-review-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>

                        <!-- Store 4 -->
                        <div class="store-review-item">
                            <div class="store-review-logo">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="store-review-content">
                                <div class="store-review-name">Best Buy</div>
                                <div class="store-review-stats">
                                    <div class="store-review-rating">
                                        <span class="store-review-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                        4.5
                                    </div>
                                    <span>•</span>
                                    <span>567 reviews</span>
                                </div>
                            </div>
                            <div class="store-review-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Reviews Section - Right Side -->
            <div class="section-card all-reviews-container">
                <div class="section-header">
                    <h2 class="section-title">
                        <i class="fas fa-list-alt"></i>
                        All Reviews
                    </h2>
                    <span class="section-badge">Latest 12</span>
                </div>

                <!-- Filter Buttons -->
                <div class="reviews-filter">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="5star">5 Stars</button>
                    <button class="filter-btn" data-filter="4star">4+ Stars</button>
                    <button class="filter-btn" data-filter="recent">Recent</button>
                    <button class="filter-btn" data-filter="critical">Critical</button>
                </div>

                <!-- Reviews List -->
                <div class="all-reviews-list">
                    <!-- Review 1 -->
                    <div class="review-card" data-rating="5" data-date="today">
                        <div class="review-card-header">
                            <div class="review-product">UltraBook Pro Laptop</div>
                            <span class="review-category">Electronics</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">5.0</span>
                        </div>
                        <p class="review-text">Best laptop I've ever owned. The battery life is incredible and performance is flawless for both work and gaming.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">MJ</div>
                                <span>Michael Johnson</span>
                            </div>
                            <span class="review-date">Today</span>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="review-card" data-rating="4" data-date="yesterday">
                        <div class="review-card-header">
                            <div class="review-product">NoiseFree Headphones</div>
                            <span class="review-category">Audio</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">4.0</span>
                        </div>
                        <p class="review-text">Great sound quality and battery life. Noise cancellation works well but could be better for airplane noise.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">SR</div>
                                <span>Sarah Rodriguez</span>
                            </div>
                            <span class="review-date">Yesterday</span>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="review-card" data-rating="5" data-date="2days">
                        <div class="review-card-header">
                            <div class="review-product">Smart Home Hub</div>
                            <span class="review-category">Home Automation</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">5.0</span>
                        </div>
                        <p class="review-text">Setup was surprisingly easy. Now my entire home is connected. The app interface is intuitive and responsive.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">TW</div>
                                <span>Thomas Wilson</span>
                            </div>
                            <span class="review-date">2 days ago</span>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="review-card" data-rating="3" data-date="3days">
                        <div class="review-card-header">
                            <div class="review-product">Fitness Tracker Pro</div>
                            <span class="review-category">Wearables</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">3.0</span>
                        </div>
                        <p class="review-text">Heart rate monitor is inaccurate during workouts. Sleep tracking works well but battery drains too fast.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">AL</div>
                                <span>Amanda Lee</span>
                            </div>
                            <span class="review-date">3 days ago</span>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="review-card" data-rating="5" data-date="5days">
                        <div class="review-card-header">
                            <div class="review-product">Chef's Knife Set</div>
                            <span class="review-category">Kitchen</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">5.0</span>
                        </div>
                        <p class="review-text">Professional quality at home cook prices. Razor sharp and beautifully balanced. Worth every penny.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">DC</div>
                                <span>David Chen</span>
                            </div>
                            <span class="review-date">5 days ago</span>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="review-card" data-rating="2" data-date="1week">
                        <div class="review-card-header">
                            <div class="review-product">Wireless Speaker</div>
                            <span class="review-category">Audio</span>
                        </div>
                        <div class="review-rating">
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span style="font-weight: 600; color: var(--primary);">2.0</span>
                        </div>
                        <p class="review-text">Bass is weak and Bluetooth connectivity drops frequently. Expected better for this price range.</p>
                        <div class="review-footer">
                            <div class="reviewer">
                                <div class="reviewer-avatar">KP</div>
                                <span>Kevin Patel</span>
                            </div>
                            <span class="review-date">1 week ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="stats-bar animate-in" style="animation-delay: 0.2s">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-value">4.7</div>
                <div class="stat-label">Average Rating</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="stat-value">6,121</div>
                <div class="stat-label">Total Reviews</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <div class="stat-value">87%</div>
                <div class="stat-label">Positive Feedback</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <div class="stat-value">247</div>
                <div class="stat-label">This Month</div>
            </div>
        </div>
</section>
@endsection
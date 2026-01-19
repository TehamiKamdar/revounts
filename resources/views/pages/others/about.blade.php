@extends('layouts.layout')

@section('styles')

<style>
    /* Hero Section */


        .highlight-badge {
            background: var(--accent);
            color: var(--dark-text);
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }

        /* Content Sections */
        .content-section {
            padding: 100px 0;
        }

        .section-title span {
            color: var(--primary);
        }

        /* Features Grid */
        .feature-item {
            padding: 40px 30px;
            background: white;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #E2E8F0;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(228, 27, 35, 0.1) 0%, rgba(1, 33, 105, 0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 28px;
            color: var(--primary);
        }

        .feature-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            margin-bottom: 16px;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-light) 0%, #001233 100%);
            color: white;
            padding: 100px 0;
        }

        .stat-box {
            text-align: center;
            padding: 30px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--accent);
            line-height: 1;
            margin-bottom: 10px;
        }

        /* USP Section */
        .usp-section {
            background: var(--light-bg);
        }

        .usp-card {
            background: white;
            padding: 40px;
            border-left: 4px solid var(--primary);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
            height: 100%;
        }

        .usp-icon {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Brands Section */
        .brands-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .brand-item {
            background: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #E2E8F0;
            transition: all 0.3s ease;
        }

        .brand-item:hover {
            border-color: var(--primary);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .brand-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }
</style>

@endsection

@section('content')


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>About Revounts Australia</h1>
                    <p class="lead">
                        We are Australia's premier destination for genuine coupon codes, cashback offers, and exclusive
                        deals.
                        With a mission to help every Australian save more, we connect savvy shoppers with the best savings
                        from
                        their favorite local and international brands.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#why-choose-us" class="btn btn-primary-custom btn-lg px-5">
                            <i class="fas fa-arrow-down me-2"></i> Discover More
                        </a>
                        <a href="coupons.html" class="btn btn-outline-light btn-lg px-5">
                            <i class="fas fa-tag me-2"></i> View Deals
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why-choose-us" class="content-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose <span>Revounts Australia?</span></h2>
                <p class="section-subtitle">
                    We stand out from the crowd with our commitment to quality, authenticity, and exceptional value
                    for every Australian shopper.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h4>Verified & Trusted</h4>
                        <p>Every coupon code undergoes rigorous verification. Our team tests each offer daily to ensure 100%
                            working rates for our users.</p>
                        <div class="feature-number">100%</div>
                        <small>Working Code Guarantee</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Real-Time Updates</h4>
                        <p>Our proprietary tracking system updates deals in real-time. Never miss a flash sale or
                            limited-time promotion again.</p>
                        <div class="feature-number">24/7</div>
                        <small>Live Monitoring</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Community Driven</h4>
                        <p>Join 750,000+ Australian members who share and verify deals. Our community-powered platform
                            ensures the best offers rise to the top.</p>
                        <div class="feature-number">750K+</div>
                        <small>Active Members</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Local Support</h4>
                        <p>Based in Sydney, our Australian support team understands local needs and is available to assist
                            with any shopping or saving queries.</p>
                        <div class="feature-number">AUS</div>
                        <small>Based Team</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <div class="stat-number">2,500+</div>
                        <h5>Partner Brands</h5>
                        <p>Australian & international stores</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <div class="stat-number">$45M+</div>
                        <h5>Total Savings</h5>
                        <p>Generated for our community</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <div class="stat-number">98.7%</div>
                        <h5>Success Rate</h5>
                        <p>Of coupon codes work</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-box">
                        <div class="stat-number">4.9/5</div>
                        <h5>User Rating</h5>
                        <p>Based on 25,000+ reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unique Selling Point -->
    <section class="content-section usp-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Our Unique <span>Selling Point</span></h2>
                    <p class="lead">
                        While others offer generic coupon codes, Revounts Australia provides <strong>exclusive Australian
                            deals</strong>
                        tailored specifically for the local market with features you won't find anywhere else.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fas fa-crown fa-7x" style="color: var(--primary-dark); opacity: 0.3;"></i>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="usp-card">
                        <div class="usp-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4>Australia-First Strategy</h4>
                        <p>We prioritize Australian retailers and focus on brands that ship to or operate within Australia.
                            Our algorithms are tuned for local shopping patterns, seasons, and sales events.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="usp-card">
                        <div class="usp-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Direct Brand Partnerships</h4>
                        <p>Unlike aggregators, we work directly with Australian brands to secure exclusive coupon codes and
                            early access to sales. This means offers you won't find on other platforms.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="usp-card">
                        <div class="usp-icon">
                            <i class="fas fa-chart-network"></i>
                        </div>
                        <h4>Advanced Deal Intelligence</h4>
                        <p>Our proprietary technology predicts when brands will offer their best discounts based on
                            historical data, helping you time your purchases perfectly for maximum savings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team of Experts -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Exemplary Team of <span>Experts</span></h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h4>Deal Hunters & Analysts</h4>
                        <p>Our team of 25+ analysts monitor Australian retail markets 24/7, using sophisticated tools to
                            identify genuine savings opportunities before they become public.</p>
                        <div class="mt-3">
                            <small><i class="fas fa-check text-success me-2"></i> Daily market analysis</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Trend prediction algorithms</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Price comparison engines</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Partnership Specialists</h4>
                        <p>Our partnership team builds and maintains relationships with Australian brands, negotiating
                            exclusive deals and early access for our community.</p>
                        <div class="mt-3">
                            <small><i class="fas fa-check text-success me-2"></i> Direct brand negotiations</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Exclusive deal acquisition</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Partnership management</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Customer Experience Team</h4>
                        <p>Based in Sydney and Melbourne, our support team ensures every Australian shopper gets the best
                            experience and maximum savings.</p>
                        <div class="mt-3">
                            <small><i class="fas fa-check text-success me-2"></i> 24/7 Australian support</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Personal shopping assistance</small><br>
                            <small><i class="fas fa-check text-success me-2"></i> Deal troubleshooting</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products and Brands -->
    <section class="content-section" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title text-center mb-3">Countless Products and <span>Brand Affiliations</span></h2>
            <p class="section-subtitle text-center">
                We partner with Australia's most loved brands across every shopping category,
                ensuring you find deals for exactly what you need.
            </p>

            <div class="brands-grid">
                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h6>Fashion & Apparel</h6>
                    <small>300+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h6>Electronics & Tech</h6>
                    <small>450+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h6>Home & Living</h6>
                    <small>380+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h6>Health & Beauty</h6>
                    <small>420+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h6>Automotive</h6>
                    <small>180+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h6>Food & Dining</h6>
                    <small>250+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h6>Travel & Leisure</h6>
                    <small>320+ brands</small>
                </div>

                <div class="brand-item">
                    <div class="brand-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h6>Education & Learning</h6>
                    <small>150+ brands</small>
                </div>
            </div>

            <div class="text-center mt-5">
                <h4 class="mb-4">Partnering with Major Australian Retailers</h4>
                <p class="mb-4">
                    From iconic Australian department stores to specialty boutiques and international giants with Australian
                    operations,
                    we work with over 2,500 brands to bring you the most comprehensive collection of savings opportunities
                    in Australia.
                </p>
                <a href="stores.html" class="btn btn-primary btn-lg px-5">
                    <i class="fas fa-store me-2"></i> Explore All Brands
                </a>
            </div>
        </div>
    </section>
@endsection
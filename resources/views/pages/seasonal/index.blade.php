@extends('layouts.layout')

@section('styles')
<style>
    .current-season-banner {
            background-color: var(--season-theme-bg-color);
            border-radius: 10px;
            padding: 1.25rem;
            border-left: 4px solid var(--season-theme-color);
            margin-bottom: 1.5rem;
        }

        .season-badge {
            background-color: var(--season-theme-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .promo-card {
            border: none;
            border-radius: 8px;
            transition: all 0.2s ease;
            height: 100%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .promo-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(89, 46, 131, 0.1);
        }

        .promo-card .card-header {
            background-color: var(--primary);
            color: white;
            border-bottom: none;
            padding: 0.75rem 1rem;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .promo-card .card-body {
            padding: 1rem;
        }

        .commission-badge {
            background-color: rgba(158, 98, 255, 0.15);
            color: var(--primary);
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .date-badge {
            background-color: rgba(21, 1, 50, 0.08);
            color: var(--dark-amethyst);
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .season-section {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        }

        .season-title {
            color: var(--primary);
            border-bottom: 2px solid rgba(89, 46, 131, 0.1);
            padding-bottom: 0.5rem;
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
        }

        .month-card {
            background-color: #f8f9ff;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            border-left: 3px solid var(--primary-light);
        }

        .month-header {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .deal-item {
            padding: 0.75rem 0;
            border-bottom: 1px dashed #e2e8f0;
        }

        .deal-item:last-child {
            border-bottom: none;
        }

        .deal-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
            font-size: 0.95rem;
        }

        .deal-description {
            font-size: 0.85rem;
            color: var(--light-text);
            margin-bottom: 0.5rem;
        }

        .deal-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
        }

        .season-filter .nav-link {
            color: var(--dark-amethyst);
            background-color: white;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            font-size: 0.9rem;
        }

        .season-filter .nav-link.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            font-size: 0.8rem;
            padding: 0.25rem 0.75rem;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .stats-card {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .stats-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .stats-label {
            font-size: 0.8rem;
            color: var(--light-text);
        }

        @media (max-width: 768px) {
            .season-section {
                padding: 1rem;
            }

            .month-card {
                padding: 0.75rem;
            }

            .deal-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
</style>
@endsection

@section('content')

    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Seasonal Affiliate Deals</h1>
                    <p class="lead mb-4">Timely promotions and offers organized by season</p>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        <div class="container">
            <!-- Current Season Banner -->
            <div class="current-season-banner">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5 class="mb-1"><i class="fas fa-snowflake me-2"></i> Winter Holiday Season Active</h5>
                        <p class="mb-0 small">Maximize your earnings with holiday shopping promotions, travel deals, and winter specials. Limited-time offers with increased commission rates.</p>
                    </div>
                    <div class="col-md-3 text-md-end mt-2 mt-md-0">
                        <a href="#winter-deals" class="btn btn-primary btn-sm">View Winter Deals</a>
                    </div>
                </div>
            </div>

            <!-- Promotional Stats -->
            <div class="row mb-4">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stats-card">
                        <div class="stats-number">24</div>
                        <div class="stats-label">Active Deals</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stats-card">
                        <div class="stats-number">12.5%</div>
                        <div class="stats-label">Avg Commission</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stats-card">
                        <div class="stats-number">4</div>
                        <div class="stats-label">Seasons</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stats-card">
                        <div class="stats-number">48</div>
                        <div class="stats-label">Total Offers</div>
                    </div>
                </div>
            </div>

            <!-- Featured Promotions -->
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-3">Featured Winter Promotions</h5>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="promo-card card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Holiday Gifts</span>
                            <span class="commission-badge">12%</span>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Premium Gift Baskets</h6>
                            <p class="card-text small mb-2">Luxury holiday gift baskets with gourmet foods and wines. Perfect for corporate gifting.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="date-badge"><i class="far fa-calendar me-1"></i> Dec 1-31</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="promo-card card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Winter Travel</span>
                            <span class="commission-badge">8%</span>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Ski Resort Packages</h6>
                            <p class="card-text small mb-2">All-inclusive ski trips with accommodations and lift tickets for winter vacations.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="date-badge"><i class="far fa-calendar me-1"></i> Dec-Mar</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="promo-card card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>New Year</span>
                            <span class="commission-badge">10%</span>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Fitness Equipment</h6>
                            <p class="card-text small mb-2">New Year resolution deals on home gym equipment and fitness trackers.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="date-badge"><i class="far fa-calendar me-1"></i> Dec 26-Jan 15</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Season Filter -->
            <div class="mb-4">
                <h5 class="mb-3">Browse by Season</h5>
                <div class="season-filter">
                    <nav class="nav">
                        <a class="nav-link active" href="#" data-season="all">All Seasons</a>
                        <a class="nav-link" href="#" data-season="winter">Winter</a>
                        <a class="nav-link" href="#" data-season="spring">Spring</a>
                        <a class="nav-link" href="#" data-season="summer">Summer</a>
                        <a class="nav-link" href="#" data-season="fall">Fall</a>
                    </nav>
                </div>
            </div>

            <!-- Seasonal Deals -->
            <div id="seasonal-deals">
                <!-- Winter -->
                <div class="season-section" id="winter-deals" data-season="winter">
                    <h5 class="season-title"><i class="fas fa-snowflake me-2 text-primary"></i> Winter Deals (December - February)</h5>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>December</span>
                                    <span class="badge bg-primary rounded-pill">2 deals</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Christmas Electronics Sale</div>
                                        <div class="deal-description">Major discounts on electronics and gadgets for holiday gifts</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Dec 10-25</span>
                                            <span class="commission-badge">15% commission</span>
                                        </div>
                                    </div>
                                    <div class="deal-item">
                                        <div class="deal-title">Winter Clothing Clearance</div>
                                        <div class="deal-description">Post-holiday clearance on winter apparel and accessories</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Dec 26-31</span>
                                            <span class="commission-badge">7% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>January</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">New Year Travel Offers</div>
                                        <div class="deal-description">Discounted flights and vacation packages for winter getaways</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Jan 1-31</span>
                                            <span class="commission-badge">10% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>February</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Valentine's Day Specials</div>
                                        <div class="deal-description">Romantic gifts, dining experiences, and flower deliveries</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Feb 1-14</span>
                                            <span class="commission-badge">12% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spring -->
                <div class="season-section" id="spring-deals" data-season="spring">
                    <h5 class="season-title"><i class="fas fa-seedling me-2 text-success"></i> Spring Deals (March - May)</h5>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>March</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Spring Cleaning Essentials</div>
                                        <div class="deal-description">Deals on cleaning supplies and home organization products</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Mar 1-31</span>
                                            <span class="commission-badge">6% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>April</span>
                                    <span class="badge bg-primary rounded-pill">2 deals</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Outdoor & Garden</div>
                                        <div class="deal-description">Gardening tools, outdoor furniture, and patio equipment</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Apr 1-30</span>
                                            <span class="commission-badge">8% commission</span>
                                        </div>
                                    </div>
                                    <div class="deal-item">
                                        <div class="deal-title">Spring Fashion</div>
                                        <div class="deal-description">New season clothing, accessories, and footwear collections</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Apr 1-30</span>
                                            <span class="commission-badge">9% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>May</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Memorial Day Sales</div>
                                        <div class="deal-description">Early summer sales on appliances, electronics, and home goods</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">May 20-31</span>
                                            <span class="commission-badge">10% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summer -->
                <div class="season-section" id="summer-deals" data-season="summer">
                    <h5 class="season-title"><i class="fas fa-sun me-2 text-warning"></i> Summer Deals (June - August)</h5>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>June</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Summer Travel Launch</div>
                                        <div class="deal-description">Beach destinations and family vacation packages</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Jun 1-30</span>
                                            <span class="commission-badge">12% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>July</span>
                                    <span class="badge bg-primary rounded-pill">2 deals</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">Independence Day Sales</div>
                                        <div class="deal-description">Fourth of July promotions on grills, outdoor gear, and appliances</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Jul 1-7</span>
                                            <span class="commission-badge">11% commission</span>
                                        </div>
                                    </div>
                                    <div class="deal-item">
                                        <div class="deal-title">Back-to-School Preview</div>
                                        <div class="deal-description">Early promotions on school supplies, electronics, and backpacks</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Jul 15-31</span>
                                            <span class="commission-badge">8% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="month-card">
                                <div class="month-header">
                                    <span>August</span>
                                    <span class="badge bg-primary rounded-pill">1 deal</span>
                                </div>
                                <div class="deals-list">
                                    <div class="deal-item">
                                        <div class="deal-title">End-of-Summer Clearance</div>
                                        <div class="deal-description">Clearance sales on summer apparel, outdoor furniture, and gear</div>
                                        <div class="deal-meta">
                                            <span class="date-badge">Aug 15-31</span>
                                            <span class="commission-badge">9% commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        // Season filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const seasonFilterLinks = document.querySelectorAll('.season-filter .nav-link');
            const seasonalSections = document.querySelectorAll('.season-section');

            seasonFilterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Update active state
                    seasonFilterLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    const season = this.getAttribute('data-season');

                    // Show/hide sections based on filter
                    seasonalSections.forEach(section => {
                        if (season === 'all' || section.getAttribute('data-season') === season) {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });

                    // Smooth scroll to first visible section
                    if (season !== 'all') {
                        const firstVisible = document.querySelector(`.season-section[data-season="${season}"]`);
                        if (firstVisible) {
                            window.scrollTo({
                                top: firstVisible.offsetTop - 200,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
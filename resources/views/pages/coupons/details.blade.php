@extends('layouts.layout')

@section('styles')
    <style>
        /* COMPACT COUPON CARD DESIGN */
        .coupon-card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
            display: flex;
            height: 120px; /* Fixed height for compact design */
        }

        .coupon-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(89, 46, 131, 0.12);
            border-color: var(--primary-light);
        }

        .coupon-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .coupon-header {
            position: relative;
            margin-bottom: 8px;
        }

        .coupon-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .coupon-data{
            color: var(--dark-amethyst);
        }

        .coupon-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.4;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .coupon-meta {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: #777;
            margin-top: 8px;
        }

        .expiry-date {
            color: var(--season-theme-color);
            font-weight: 600;
            margin-right: 15px;
        }

        .usage-count i {
            margin-right: 5px;
        }

        /* HIDDEN COUPON CODE PANEL - PARTIALLY HIDDEN */
        .coupon-code-panel {
            width: 180px;
            background: linear-gradient(135deg, #f5f5f5, #e9ecef);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 15px;
            position: relative;
            border-left: 2px dashed #ccc;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .coupon-card.revealed .coupon-code-panel,
        .coupon-code-panel.revealed {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        }

        .hidden-code-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .hidden-part {
            color: #999;
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 2px;
            font-family: monospace;
            position: relative;
        }

        .hidden-part::before {
            content: "••••••";
            letter-spacing: 3px;
        }

        .visible-part {
            color: var(--primary);
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 2px;
            font-family: monospace;
            margin-left: 5px;
        }

        /* Revealed Code Styles */
        .revealed-code {
            display: none;
            text-align: center;
            color: white;
        }

        .coupon-card.revealed .hidden-code-container,
        .coupon-code-panel.revealed .hidden-code-container {
            display: none;
        }

        .coupon-card.revealed .revealed-code,
        .coupon-code-panel.revealed .revealed-code {
            display: block;
            animation: fadeInUp 0.3s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .coupon-code-label {
            font-size: 0.8rem;
            opacity: 0.9;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .full-coupon-code {
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 2px;
            margin: 5px 0;
            font-family: monospace;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        .coupon-action {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-top: 8px;
            color: white;
        }

        .coupon-action i {
            margin-right: 5px;
        }

        .click-hint {
            font-size: 0.75rem;
            color: #777;
            margin-top: 8px;
            text-align: center;
        }

        .click-hint i {
            margin-right: 5px;
        }

        /* Badge Styles */
        .coupon-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: var(--season-theme-bg-color);
            color: var(--season-theme-color);
            padding: 3px 10px;
            border-radius: 0 0 0 8px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-exclusive {
            background-color: #FFE8D6;
            color: #E85D04;
        }

        .badge-popular {
            background-color: #D8F3DC;
            color: #2D6A4F;
        }

        .badge-limited {
            background-color: #FFE2E2;
            color: #BC1719;
        }

        /* Brand Info Sidebar */
        .brand-sidebar {
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 25px;
            position: sticky;
            top: 20px;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .brand-logo-container {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .brand-title {
            font-size: 1.8rem;
            margin-bottom: 5px;
            color: var(--primary-dark);
        }

        .brand-category {
            color: var(--primary-light);
            font-weight: 600;
            font-size: 1rem;
        }

        .brand-description {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .brand-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-item {
            text-align: center;
            padding: 12px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #777;
        }

        .brand-website-btn {
            display: block;
            width: 100%;
            text-align: center;
            background-color: var(--primary);
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .brand-website-btn:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(89, 46, 131, 0.3);
        }

        .brand-features {
            margin-top: 25px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .feature-item i {
            color: var(--primary-light);
            margin-right: 10px;
            width: 20px;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
            border-radius: 0 0 12px 12px;
        }

        .page-title {
            font-size: 2.2rem;
            margin-bottom: 8px;
            color: white;
        }

        .page-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Filter Section */
        .filter-section {
            background-color: var(--white);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }

        .filter-label {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary);
            font-size: 1rem;
        }

        .filter-btn {
            background-color: #f0f0f0;
            border: none;
            color: var(--dark-amethyst);
            padding: 6px 15px;
            border-radius: 20px;
            margin-right: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background-color: var(--primary);
            color: white;
        }
    </style>
@endsection

@section('content')
<div class="container content-section">
    <div class="row">
        <!-- Coupon List Section - col-8 -->
        <div class="col-lg-9">
            <!-- Filter Section -->
            <div class="filter-section">
                <h5 class="filter-label">Filter Coupons:</h5>
                <div class="d-flex flex-wrap">
                    <button class="filter-btn active" data-filter="all">All (12)</button>
                    <button class="filter-btn" data-filter="coupons">Coupons (4)</button>
                    <button class="filter-btn" data-filter="deals">Deals (4)</button>
                    <button class="filter-btn" data-filter="shipping">Shipping (4)</button>
                </div>
            </div>

            <!-- Coupon List -->
            <div class="coupon-list">
                <!-- Coupon 1 -->
                <div class="coupon-card" data-coupon-type="deals">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <div class="coupon-badge badge-limited">Ending Soon</div>
                            <h3 class="coupon-title">30% Off Electronics & Gadgets</h3>
                            <p class="coupon-description">Save on laptops, tablets, headphones, and smart home devices. Min. purchase $100.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date">
                                    <i class="fas fa-clock me-1"></i>Expires 12/31/23
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 2.5k used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="AMAZON30">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">30</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Use Code</div>
                            <div class="full-coupon-code">AMAZON30</div>
                            <div class="coupon-action">Click to Copy</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>

                <!-- Coupon 2 -->
                <div class="coupon-card" data-coupon-type="shipping">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <div class="coupon-badge badge-popular">Most Used</div>
                            <h3 class="coupon-title">Free Express Shipping</h3>
                            <p class="coupon-description">Free shipping on all orders over $35. No code needed. For Prime & non-Prime members.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date" style="color: #2D6A4F;">
                                    <i class="fas fa-infinity me-1"></i>No Expiry
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 5.2k used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="FREESHIP">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">IP</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Auto Applied</div>
                            <div class="full-coupon-code">FREESHIP</div>
                            <div class="coupon-action">No Code Needed</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>

                <!-- Coupon 3 -->
                <div class="coupon-card" data-coupon-type="coupons">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <h3 class="coupon-title">$25 Cashback on $100+ Orders</h3>
                            <p class="coupon-description">Get cashback credited to your account within 14 days. First-time customers only.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date">
                                    <i class="fas fa-clock me-1"></i>Expires 11/15/23
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 1.8k used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="CASHBACK25">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">25</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Use Code</div>
                            <div class="full-coupon-code">CASHBACK25</div>
                            <div class="coupon-action">Click to Copy</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>

                <!-- Coupon 4 -->
                <div class="coupon-card" data-coupon-type="deals">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <div class="coupon-badge badge-exclusive">Exclusive</div>
                            <h3 class="coupon-title">50% Off Fashion Items</h3>
                            <p class="coupon-description">Half off on select clothing, shoes & accessories. Limited brands & styles.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date">
                                    <i class="fas fa-clock me-1"></i>Expires 10/30/23
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 3.4k used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="STYLE50">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">50</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Use Code</div>
                            <div class="full-coupon-code">STYLE50</div>
                            <div class="coupon-action">Click to Copy</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>

                <!-- Coupon 5 -->
                <div class="coupon-card" data-coupon-type="deals">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <div class="coupon-badge badge-limited">Limited</div>
                            <h3 class="coupon-title">20% Off Prime Membership</h3>
                            <p class="coupon-description">Discount on first year of Amazon Prime. Includes all Prime benefits.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date">
                                    <i class="fas fa-clock me-1"></i>Expires 10/15/23
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 892 used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="PRIME20">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">20</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Use Code</div>
                            <div class="full-coupon-code">PRIME20</div>
                            <div class="coupon-action">Click to Copy</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>

                <!-- Coupon 6 -->
                <div class="coupon-card" data-coupon-type="deals">
                    <div class="coupon-content">
                        <div class="coupon-header">
                            <h3 class="coupon-title">10% Cashback on Home & Kitchen</h3>
                            <p class="coupon-description">Get cashback on appliances, cookware, and home essentials. Min. spend $50.</p>
                            <div class="coupon-meta">
                                <div class="expiry-date">
                                    <i class="fas fa-clock me-1"></i>Expires 12/15/23
                                </div>
                                <div class="usage-count">
                                    <i class="fas fa-users"></i> 1.2k used
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-code-panel" data-full-code="HOME10CB">
                        <div class="hidden-code-container">
                            <div class="hidden-part"></div>
                            <div class="visible-part">CB</div>
                        </div>
                        <div class="revealed-code">
                            <div class="coupon-code-label">Use Code</div>
                            <div class="full-coupon-code">HOME10CB</div>
                            <div class="coupon-action">Click to Copy</div>
                        </div>
                        <div class="click-hint">
                            <i class="fas fa-mouse-pointer"></i>Click to reveal
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brand Info Section - col-4 -->
        <div class="col-lg-3">
            <div class="brand-sidebar">
                <!-- Brand Header -->
                <div class="brand-header">
                    <div class="brand-logo-container">
                        <i class="fas fa-a fa-3x" style="color: white;"></i>
                    </div>
                    <h2 class="brand-title">Amazon</h2>
                    <div class="brand-category">
                        <i class="fas fa-shopping-cart me-2"></i>E-commerce Giant
                    </div>
                </div>

                <!-- Brand Description -->
                <p class="brand-description">
                    World's largest online retailer offering everything from electronics and clothing to groceries and digital content. Known for fast shipping and competitive prices.
                </p>

                <!-- Brand Stats -->
                <div class="brand-stats">
                    <div class="stat-item">
                        <div class="stat-number">4.8/5</div>
                        <div class="stat-label">Store Rating</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">42</div>
                        <div class="stat-label">Active Coupons</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24h</div>
                        <div class="stat-label">Avg. Update</div>
                    </div>
                </div>

                <!-- Brand Website Button -->
                <a href="https://www.amazon.com" class="brand-website-btn" target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i>Visit Amazon.com
                </a>

                <!-- Brand Features -->
                <div class="brand-features">
                    <h5 style="font-size: 1rem; margin-bottom: 15px; color: var(--primary);">
                        <i class="fas fa-check-circle me-2"></i>Why Shop Here
                    </h5>
                    <div class="feature-item">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Fast & free shipping options</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-undo"></i>
                        <span>Easy 30-day returns</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Secure payment & buyer protection</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-box-open"></i>
                        <span>Millions of products</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-tv"></i>
                        <span>Prime Video & Music included</span>
                    </div>
                </div>

                <!-- Coupon Stats -->
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-between">
                        <div>
                            <small class="text-muted">Last Updated:</small>
                            <div class="fw-bold coupon-data">Today</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script>
        // Reveal coupon code on click
        document.querySelectorAll('.coupon-code-panel').forEach(panel => {
            panel.addEventListener('click', function(e) {
                e.stopPropagation();

                // Toggle revealed state
                const isRevealed = this.classList.contains('revealed');
                const card = this.closest('.coupon-card');

                // Hide all other revealed codes
                document.querySelectorAll('.coupon-code-panel.revealed').forEach(otherPanel => {
                    if (otherPanel !== this) {
                        otherPanel.classList.remove('revealed');
                        otherPanel.closest('.coupon-card')?.classList.remove('revealed');
                    }
                });

                // Toggle current panel
                if (!isRevealed) {
                    this.classList.add('revealed');
                    card?.classList.add('revealed');

                    // Auto-copy after revealing
                    setTimeout(() => {
                        const fullCode = this.getAttribute('data-full-code');
                        navigator.clipboard.writeText(fullCode).then(() => {
                            const actionText = this.querySelector('.coupon-action');
                            const originalText = actionText.innerHTML;
                            actionText.innerHTML = '<i class="fas fa-check me-1"></i>Copied!';

                            // Reset after 3 seconds
                            setTimeout(() => {
                                actionText.innerHTML = originalText;
                            }, 3000);
                        });
                    }, 300);
                }
            });
        });

        // Close revealed code when clicking elsewhere
        document.addEventListener('click', function() {
            document.querySelectorAll('.coupon-code-panel.revealed').forEach(panel => {
                panel.classList.remove('revealed');
                panel.closest('.coupon-card')?.classList.remove('revealed');
            });
        });

        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });

                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');
                const couponCards = document.querySelectorAll('.coupon-card');

                if (filterValue === 'all') {
                    // Show all coupons
                    couponCards.forEach(card => {
                        card.style.display = 'flex';
                    });
                } else if (filterValue === 'limited') {
                    // Show only coupons with limited badge
                    couponCards.forEach(card => {
                        const hasBadge = card.querySelector('.coupon-badge');
                        if (hasBadge && (hasBadge.classList.contains('badge-limited') ||
                                         hasBadge.textContent.includes('Ending'))) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                } else {
                    // Show only filtered coupons
                    couponCards.forEach(card => {
                        const couponType = card.getAttribute('data-coupon-type');
                        if (couponType === filterValue) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }
            });
        });

        // Simple animation on page load
        document.addEventListener('DOMContentLoaded', function() {
            const couponCards = document.querySelectorAll('.coupon-card');
            couponCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(10px)';

                setTimeout(() => {
                    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 80);
            });
        });
    </script>
@endsection
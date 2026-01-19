@extends('layouts.layout')

@section('styles')
    <style>
        /* Stores Section */
        .stores-container {
            max-width: 1200px;
            margin: 0 auto 80px;
            padding: 0 20px;
        }

        .page-title {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 10px;
            text-align: center;
        }

        .page-subtitle {
            color: var(--light-text);
            text-align: center;
            margin-bottom: 50px;
            font-size: 1.1rem;
        }

        /* Search and Filter Bar */
        .filter-bar {
            background: var(--white);
            border: 1px solid rgba(89, 46, 131, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box {
            flex: 1;
            min-width: 250px;
        }

        .search-box .form-control {
            border: 1px solid rgba(89, 46, 131, 0.2);
            border-radius: 6px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .search-box .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(158, 98, 255, 0.1);
        }

        .filter-dropdown {
            min-width: 180px;
        }

        .filter-dropdown .form-select {
            border: 1px solid rgba(89, 46, 131, 0.2);
            border-radius: 6px;
            padding: 10px 15px;
            cursor: pointer;
        }

        /* Stores Grid */
        .stores-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .store-card {
            background: var(--white);
            border: 1px solid rgba(89, 46, 131, 0.1);
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--dark-amethyst);
            display: block;
            position: relative;
            overflow: hidden;
        }

        .store-card:hover {
            border-color: var(--primary-light);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(89, 46, 131, 0.1);
            color: var(--primary);
        }

        .store-logo {
            width: 80px;
            height: 80px;
            background: var(--light-bg);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary);
            font-size: 2rem;
            font-weight: 700;
            border: 2px solid rgba(89, 46, 131, 0.1);
        }

        .store-name {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: inherit;
        }

        .store-info {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .store-category {
            background: rgba(158, 98, 255, 0.1);
            color: var(--primary);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .store-coupons {
            color: var(--light-text);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .store-coupons:before {
            content: '•';
            color: var(--primary-light);
            font-weight: bold;
        }

        .store-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #FFA500;
            font-size: 0.9rem;
        }

        /* Alphabet Filter */
        .alphabet-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            margin: 30px 0 40px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(89, 46, 131, 0.1);
        }

        .alphabet-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--white);
            border: 1px solid rgba(89, 46, 131, 0.2);
            border-radius: 6px;
            color: var(--dark-amethyst);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .alphabet-btn:hover,
        .alphabet-btn.active {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        /* Store Badges */
        .store-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--season-theme-color);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stores-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }

            .alphabet-btn {
                width: 35px;
                height: 35px;
                font-size: 0.85rem;
            }

            .page-title {
                font-size: 1.8rem;
            }

            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box,
            .filter-dropdown {
                min-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .stores-grid {
                grid-template-columns: 1fr;
            }

            .navbar-brand {
                font-size: 1.4rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Stores Content -->
    <section class="hero-section">
        <div class="container">
            <!-- Page Title -->
            <h1>All Stores</h1>
            <p class="lead mb-4">Browse deals by store. Click any store to view available coupons and cashback offers.</p>
        </div>
    </section>
    <div class="stores-container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="search-box">
                <input type="text" class="form-control" id="storeSearch" placeholder="Search stores...">
            </div>
            <div class="filter-dropdown">
                <select class="form-select" id="categoryFilter">
                    <option value="">All Categories</option>
                    <option value="fashion">Fashion & Apparel</option>
                    <option value="electronics">Electronics & Tech</option>
                    <option value="home">Home & Living</option>
                    <option value="beauty">Health & Beauty</option>
                    <option value="travel">Travel & Leisure</option>
                </select>
            </div>
            <div class="filter-dropdown">
                <select class="form-select" id="sortFilter">
                    <option value="name">Sort by: Name A-Z</option>
                    <option value="popular">Most Popular</option>
                    <option value="coupons">Most Coupons</option>
                    <option value="rating">Highest Rated</option>
                </select>
            </div>
        </div>

        <!-- Alphabet Filter -->
        <div class="alphabet-filter">
            <a href="#" class="alphabet-btn active">All</a>
            <a href="#A" class="alphabet-btn">A</a>
            <a href="#B" class="alphabet-btn">B</a>
            <a href="#C" class="alphabet-btn">C</a>
            <a href="#D" class="alphabet-btn">D</a>
            <a href="#E" class="alphabet-btn">E</a>
            <a href="#F" class="alphabet-btn">F</a>
            <a href="#G" class="alphabet-btn">G</a>
            <a href="#H" class="alphabet-btn">H</a>
            <a href="#I" class="alphabet-btn">I</a>
            <a href="#J" class="alphabet-btn">J</a>
            <a href="#K" class="alphabet-btn">K</a>
            <a href="#L" class="alphabet-btn">L</a>
            <a href="#M" class="alphabet-btn">M</a>
            <a href="#N" class="alphabet-btn">N</a>
            <a href="#O" class="alphabet-btn">O</a>
            <a href="#P" class="alphabet-btn">P</a>
            <a href="#Q" class="alphabet-btn">Q</a>
            <a href="#R" class="alphabet-btn">R</a>
            <a href="#S" class="alphabet-btn">S</a>
            <a href="#T" class="alphabet-btn">T</a>
            <a href="#U" class="alphabet-btn">U</a>
            <a href="#V" class="alphabet-btn">V</a>
            <a href="#W" class="alphabet-btn">W</a>
            <a href="#X" class="alphabet-btn">X</a>
            <a href="#Y" class="alphabet-btn">Y</a>
            <a href="#Z" class="alphabet-btn">Z</a>
        </div>

        <!-- Stores Grid -->
        <div class="stores-grid">
            <!-- Amazon -->
            <a href="#" class="store-card">
                <div class="store-badge">Top Rated</div>
                <div class="store-logo">AMZ</div>
                <div class="store-name">Amazon Australia</div>
                <div class="store-info">
                    <span class="store-category">Electronics & Tech</span>
                    <span class="store-coupons">45+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.8)</span>
                </div>
            </a>

            <!-- Woolworths -->
            <a href="#" class="store-card">
                <div class="store-badge" style="background: var(--primary);">Popular</div>
                <div class="store-logo">WW</div>
                <div class="store-name">Woolworths</div>
                <div class="store-info">
                    <span class="store-category">Food & Dining</span>
                    <span class="store-coupons">38+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(5.0)</span>
                </div>
            </a>

            <!-- Myer -->
            <a href="#" class="store-card">
                <div class="store-logo">MY</div>
                <div class="store-name">Myer</div>
                <div class="store-info">
                    <span class="store-category">Fashion & Apparel</span>
                    <span class="store-coupons">52+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.9)</span>
                </div>
            </a>

            <!-- JB Hi-Fi -->
            <a href="#" class="store-card">
                <div class="store-badge">Top Rated</div>
                <div class="store-logo">JB</div>
                <div class="store-name">JB Hi-Fi</div>
                <div class="store-info">
                    <span class="store-category">Electronics & Tech</span>
                    <span class="store-coupons">41+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.7)</span>
                </div>
            </a>

            <!-- David Jones -->
            <a href="#" class="store-card">
                <div class="store-logo">DJ</div>
                <div class="store-name">David Jones</div>
                <div class="store-info">
                    <span class="store-category">Fashion & Apparel</span>
                    <span class="store-coupons">36+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.8)</span>
                </div>
            </a>

            <!-- Kmart -->
            <a href="#" class="store-card">
                <div class="store-badge" style="background: var(--primary);">Popular</div>
                <div class="store-logo">KM</div>
                <div class="store-name">Kmart</div>
                <div class="store-info">
                    <span class="store-category">Home & Living</span>
                    <span class="store-coupons">29+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.6)</span>
                </div>
            </a>

            <!-- Target -->
            <a href="#" class="store-card">
                <div class="store-logo">TG</div>
                <div class="store-name">Target</div>
                <div class="store-info">
                    <span class="store-category">Home & Living</span>
                    <span class="store-coupons">27+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.5)</span>
                </div>
            </a>

            <!-- Coles -->
            <a href="#" class="store-card">
                <div class="store-badge" style="background: var(--primary);">Popular</div>
                <div class="store-logo">CL</div>
                <div class="store-name">Coles</div>
                <div class="store-info">
                    <span class="store-category">Food & Dining</span>
                    <span class="store-coupons">34+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.7)</span>
                </div>
            </a>

            <!-- Big W -->
            <a href="#" class="store-card">
                <div class="store-logo">BW</div>
                <div class="store-name">Big W</div>
                <div class="store-info">
                    <span class="store-category">Home & Living</span>
                    <span class="store-coupons">25+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.4)</span>
                </div>
            </a>

            <!-- The Iconic -->
            <a href="#" class="store-card">
                <div class="store-badge">Trending</div>
                <div class="store-logo">IC</div>
                <div class="store-name">The Iconic</div>
                <div class="store-info">
                    <span class="store-category">Fashion & Apparel</span>
                    <span class="store-coupons">48+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.9)</span>
                </div>
            </a>

            <!-- Catch -->
            <a href="#" class="store-card">
                <div class="store-logo">CT</div>
                <div class="store-name">Catch</div>
                <div class="store-info">
                    <span class="store-category">Electronics & Tech</span>
                    <span class="store-coupons">39+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.6)</span>
                </div>
            </a>

            <!-- Chemist Warehouse -->
            <a href="#" class="store-card">
                <div class="store-badge" style="background: var(--primary);">Popular</div>
                <div class="store-logo">CW</div>
                <div class="store-name">Chemist Warehouse</div>
                <div class="store-info">
                    <span class="store-category">Health & Beauty</span>
                    <span class="store-coupons">42+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.8)</span>
                </div>
            </a>

            <!-- Bunnings -->
            <a href="#" class="store-card">
                <div class="store-logo">BN</div>
                <div class="store-name">Bunnings</div>
                <div class="store-info">
                    <span class="store-category">Home & Living</span>
                    <span class="store-coupons">31+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.7)</span>
                </div>
            </a>

            <!-- Officeworks -->
            <a href="#" class="store-card">
                <div class="store-logo">OW</div>
                <div class="store-name">Officeworks</div>
                <div class="store-info">
                    <span class="store-category">Office Supplies</span>
                    <span class="store-coupons">28+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.5)</span>
                </div>
            </a>

            <!-- Rebel -->
            <a href="#" class="store-card">
                <div class="store-logo">RB</div>
                <div class="store-name">Rebel</div>
                <div class="store-info">
                    <span class="store-category">Sports & Outdoors</span>
                    <span class="store-coupons">23+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.4)</span>
                </div>
            </a>

            <!-- Harvey Norman -->
            <a href="#" class="store-card">
                <div class="store-badge">Top Rated</div>
                <div class="store-logo">HN</div>
                <div class="store-name">Harvey Norman</div>
                <div class="store-info">
                    <span class="store-category">Electronics & Tech</span>
                    <span class="store-coupons">37+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.6)</span>
                </div>
            </a>

            <!-- Priceline -->
            <a href="#" class="store-card">
                <div class="store-logo">PL</div>
                <div class="store-name">Priceline</div>
                <div class="store-info">
                    <span class="store-category">Health & Beauty</span>
                    <span class="store-coupons">33+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.7)</span>
                </div>
            </a>

            <!-- Apple -->
            <a href="#" class="store-card">
                <div class="store-logo">AP</div>
                <div class="store-name">Apple</div>
                <div class="store-info">
                    <span class="store-category">Electronics & Tech</span>
                    <span class="store-coupons">19+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.8)</span>
                </div>
            </a>

            <!-- Nike -->
            <a href="#" class="store-card">
                <div class="store-logo">NK</div>
                <div class="store-name">Nike</div>
                <div class="store-info">
                    <span class="store-category">Fashion & Apparel</span>
                    <span class="store-coupons">41+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.9)</span>
                </div>
            </a>

            <!-- Adidas -->
            <a href="#" class="store-card">
                <div class="store-logo">AD</div>
                <div class="store-name">Adidas</div>
                <div class="store-info">
                    <span class="store-category">Fashion & Apparel</span>
                    <span class="store-coupons">36+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.7)</span>
                </div>
            </a>

            <!-- Spotify -->
            <a href="#" class="store-card">
                <div class="store-badge">Trending</div>
                <div class="store-logo">SP</div>
                <div class="store-name">Spotify</div>
                <div class="store-info">
                    <span class="store-category">Entertainment</span>
                    <span class="store-coupons">15+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.9)</span>
                </div>
            </a>

            <!-- Netflix -->
            <a href="#" class="store-card">
                <div class="store-logo">NF</div>
                <div class="store-name">Netflix</div>
                <div class="store-info">
                    <span class="store-category">Entertainment</span>
                    <span class="store-coupons">12+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.8)</span>
                </div>
            </a>

            <!-- Uber Eats -->
            <a href="#" class="store-card">
                <div class="store-badge" style="background: var(--primary);">Popular</div>
                <div class="store-logo">UE</div>
                <div class="store-name">Uber Eats</div>
                <div class="store-info">
                    <span class="store-category">Food & Dining</span>
                    <span class="store-coupons">27+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(4.5)</span>
                </div>
            </a>

            <!-- DoorDash -->
            <a href="#" class="store-card">
                <div class="store-logo">DD</div>
                <div class="store-name">DoorDash</div>
                <div class="store-info">
                    <span class="store-category">Food & Dining</span>
                    <span class="store-coupons">24+ coupons</span>
                </div>
                <div class="store-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(4.6)</span>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Store filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const storeCards = document.querySelectorAll('.store-card');
            const searchInput = document.getElementById('storeSearch');
            const categoryFilter = document.getElementById('categoryFilter');
            const sortFilter = document.getElementById('sortFilter');
            const alphabetButtons = document.querySelectorAll('.alphabet-btn');

            // Search functionality
            searchInput.addEventListener('input', function() {
                filterStores();
            });

            // Category filter
            categoryFilter.addEventListener('change', function() {
                filterStores();
            });

            // Sort functionality
            sortFilter.addEventListener('change', function() {
                sortStores();
            });

            // Alphabet filter
            alphabetButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all buttons
                    alphabetButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Filter stores by first letter
                    const letter = this.textContent;
                    if (letter !== 'All') {
                        filterByLetter(letter);
                    } else {
                        showAllStores();
                    }
                });
            });

            function filterStores() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategory = categoryFilter.value;

                let visibleCount = 0;

                storeCards.forEach(card => {
                    const storeName = card.querySelector('.store-name').textContent.toLowerCase();
                    const storeCategory = card.querySelector('.store-category').textContent;
                    const categoryMatch = !selectedCategory ||
                        (selectedCategory === 'fashion' && storeCategory.includes('Fashion')) ||
                        (selectedCategory === 'electronics' && storeCategory.includes('Electronics')) ||
                        (selectedCategory === 'home' && storeCategory.includes('Home')) ||
                        (selectedCategory === 'beauty' && storeCategory.includes('Health')) ||
                        (selectedCategory === 'travel' && storeCategory.includes('Travel'));

                    const nameMatch = storeName.includes(searchTerm);

                    if (nameMatch && categoryMatch) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Show message if no results
                updateNoResultsMessage(visibleCount);
            }

            function filterByLetter(letter) {
                let visibleCount = 0;

                storeCards.forEach(card => {
                    const storeName = card.querySelector('.store-name').textContent;
                    if (storeName.startsWith(letter)) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                updateNoResultsMessage(visibleCount);
            }

            function showAllStores() {
                storeCards.forEach(card => {
                    card.style.display = 'block';
                });

                // Remove any existing no-results message
                const existingMessage = document.querySelector('.no-stores-message');
                if (existingMessage) {
                    existingMessage.remove();
                }
            }

            function sortStores() {
                const sortBy = sortFilter.value;
                const container = document.querySelector('.stores-grid');
                const cards = Array.from(storeCards);

                cards.sort((a, b) => {
                    if (sortBy === 'name') {
                        const nameA = a.querySelector('.store-name').textContent;
                        const nameB = b.querySelector('.store-name').textContent;
                        return nameA.localeCompare(nameB);
                    } else if (sortBy === 'popular') {
                        const ratingA = parseFloat(a.querySelector('.store-rating span').textContent.replace(/[()]/g, ''));
                        const ratingB = parseFloat(b.querySelector('.store-rating span').textContent.replace(/[()]/g, ''));
                        return ratingB - ratingA;
                    } else if (sortBy === 'coupons') {
                        const couponsA = parseInt(a.querySelector('.store-coupons').textContent);
                        const couponsB = parseInt(b.querySelector('.store-coupons').textContent);
                        return couponsB - couponsA;
                    } else if (sortBy === 'rating') {
                        const ratingA = parseFloat(a.querySelector('.store-rating span').textContent.replace(/[()]/g, ''));
                        const ratingB = parseFloat(b.querySelector('.store-rating span').textContent.replace(/[()]/g, ''));
                        return ratingB - ratingA;
                    }
                    return 0;
                });

                // Reorder cards in container
                cards.forEach(card => {
                    container.appendChild(card);
                });
            }

            function updateNoResultsMessage(visibleCount) {
                // Remove any existing message
                const existingMessage = document.querySelector('.no-stores-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                // Add message if no stores visible
                if (visibleCount === 0) {
                    const container = document.querySelector('.stores-grid');
                    const message = document.createElement('div');
                    message.className = 'no-stores-message';
                    message.style.gridColumn = '1 / -1';
                    message.style.textAlign = 'center';
                    message.style.padding = '60px 20px';
                    message.innerHTML = `
                        <div style="font-size: 3rem; color: var(--light-text); margin-bottom: 20px;">
                            <i class="fas fa-store-slash"></i>
                        </div>
                        <h3 style="color: var(--light-text); margin-bottom: 10px;">No stores found</h3>
                        <p style="color: var(--light-text);">Try changing your search or filter criteria.</p>
                    `;
                    container.appendChild(message);
                }
            }

            // Initialize
            filterStores();
        });

        // Store card click tracking
        document.querySelectorAll('.store-card').forEach(card => {
            card.addEventListener('click', function(e) {
                const storeName = this.querySelector('.store-name').textContent;
                console.log(`Store clicked: ${storeName}`);
                // In real implementation, send to analytics
            });
        });
    </script>
@endsection
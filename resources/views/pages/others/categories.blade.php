@extends('layouts.layout')

@section('styles')
    <style>
        /* Categories Grid */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .category-card {
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

        .category-card:hover {
            border-color: var(--primary-light);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(89, 46, 131, 0.1);
            color: var(--primary);
        }

        .category-card:hover .category-icon {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: rgba(158, 98, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary);
            font-size: 1.4rem;
            transition: all 0.3s ease;
        }

        .category-name {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: inherit;
        }

        .category-count {
            color: var(--light-text);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .category-count:before {
            content: '•';
            color: var(--primary-light);
            font-weight: bold;
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

        @media (max-width: 768px) {
            .categories-grid {
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
        }

        @media (max-width: 480px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }

            .navbar-brand {
                font-size: 1.4rem;
            }
        }
    </style>
@endsection

@section('content')
    <section class="hero-section">
        <div class="container">
            <!-- Page Title -->
            <h1>All Categories</h1>
            <p class="lead mb-4">Browse deals by category. Click any category to view available coupons.</p>
        </div>
    </section>
    <section class="container">
        <div class="categories-container">


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

            <!-- Categories Grid -->
            <div class="categories-grid">
                <!-- Fashion -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="category-name">Fashion & Apparel</div>
                    <div class="category-count">320+ stores</div>
                </a>

                <!-- Electronics -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="category-name">Electronics & Tech</div>
                    <div class="category-count">450+ stores</div>
                </a>

                <!-- Home & Living -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="category-name">Home & Living</div>
                    <div class="category-count">380+ stores</div>
                </a>

                <!-- Health & Beauty -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="category-name">Health & Beauty</div>
                    <div class="category-count">420+ stores</div>
                </a>

                <!-- Travel -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="category-name">Travel & Leisure</div>
                    <div class="category-count">280+ stores</div>
                </a>

                <!-- Food & Dining -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="category-name">Food & Dining</div>
                    <div class="category-count">250+ stores</div>
                </a>

                <!-- Automotive -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="category-name">Automotive</div>
                    <div class="category-count">180+ stores</div>
                </a>

                <!-- Sports & Outdoors -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                    <div class="category-name">Sports & Outdoors</div>
                    <div class="category-count">210+ stores</div>
                </a>

                <!-- Entertainment -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="category-name">Entertainment</div>
                    <div class="category-count">190+ stores</div>
                </a>

                <!-- Education -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="category-name">Education & Learning</div>
                    <div class="category-count">150+ stores</div>
                </a>

                <!-- Pet Supplies -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="category-name">Pet Supplies</div>
                    <div class="category-count">130+ stores</div>
                </a>

                <!-- Office Supplies -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="category-name">Office Supplies</div>
                    <div class="category-count">120+ stores</div>
                </a>

                <!-- Baby & Kids -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="category-name">Baby & Kids</div>
                    <div class="category-count">170+ stores</div>
                </a>

                <!-- Jewelry & Watches -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="category-name">Jewelry & Watches</div>
                    <div class="category-count">140+ stores</div>
                </a>

                <!-- Books & Media -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="category-name">Books & Media</div>
                    <div class="category-count">160+ stores</div>
                </a>

                <!-- Gardening -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="category-name">Gardening</div>
                    <div class="category-count">90+ stores</div>
                </a>

                <!-- Music & Instruments -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="category-name">Music & Instruments</div>
                    <div class="category-count">110+ stores</div>
                </a>

                <!-- Arts & Crafts -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="category-name">Arts & Crafts</div>
                    <div class="category-count">100+ stores</div>
                </a>

                <!-- Financial Services -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="category-name">Financial Services</div>
                    <div class="category-count">80+ stores</div>
                </a>

                <!-- Telecom -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="category-name">Telecom & Internet</div>
                    <div class="category-count">70+ stores</div>
                </a>

                <!-- Fitness -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="category-name">Fitness & Gym</div>
                    <div class="category-count">95+ stores</div>
                </a>

                <!-- Party Supplies -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <div class="category-name">Party Supplies</div>
                    <div class="category-count">85+ stores</div>
                </a>

                <!-- Photography -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="category-name">Photography</div>
                    <div class="category-count">75+ stores</div>
                </a>

                <!-- Software & Apps -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="category-name">Software & Apps</div>
                    <div class="category-count">120+ stores</div>
                </a>

                <!-- Seasonal -->
                <a href="{{ route('coupon.details', 'some-coupon-brand') }}" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="category-name">Seasonal & Holiday</div>
                    <div class="category-count">60+ stores</div>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Alphabet filter functionality
        document.querySelectorAll('.alphabet-btn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove active class from all buttons
                document.querySelectorAll('.alphabet-btn').forEach(btn => {
                    btn.classList.remove('active');
                });

                // Add active class to clicked button
                this.classList.add('active');

                // If it's a letter button, filter categories
                const letter = this.textContent;
                if (letter !== 'All') {
                    filterCategoriesByLetter(letter);
                } else {
                    showAllCategories();
                }
            });
        });

        function filterCategoriesByLetter(letter) {
            const categories = document.querySelectorAll('.category-card');
            let visibleCount = 0;

            categories.forEach(category => {
                const categoryName = category.querySelector('.category-name').textContent;
                if (categoryName.startsWith(letter)) {
                    category.style.display = 'block';
                    visibleCount++;
                } else {
                    category.style.display = 'none';
                }
            });

            // If no categories found for this letter, show message
            if (visibleCount === 0) {
                const grid = document.querySelector('.categories-grid');
                const noResults = document.createElement('div');
                noResults.className = 'col-12 text-center py-5';
                noResults.innerHTML = `
                        <div class="category-icon mx-auto mb-3">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 style="color: var(--light-text);">No categories found starting with "${letter}"</h4>
                        <p style="color: var(--light-text);">Try another letter or browse all categories.</p>
                    `;

                // Check if message already exists
                const existingMessage = document.querySelector('.no-results-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                noResults.classList.add('no-results-message');
                grid.appendChild(noResults);
            } else {
                // Remove any existing no-results message
                const existingMessage = document.querySelector('.no-results-message');
                if (existingMessage) {
                    existingMessage.remove();
                }
            }
        }

        function showAllCategories() {
            const categories = document.querySelectorAll('.category-card');
            categories.forEach(category => {
                category.style.display = 'block';
            });

            // Remove any existing no-results message
            const existingMessage = document.querySelector('.no-results-message');
            if (existingMessage) {
                existingMessage.remove();
            }
        }

        // Category card click tracking (for analytics in real implementation)
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function (e) {
                const categoryName = this.querySelector('.category-name').textContent;
                console.log(`Category clicked: ${categoryName}`);
                // In real implementation, you would send this to analytics
                // Example: ga('send', 'event', 'Category', 'Click', categoryName);
            });
        });
    </script>
@endsection
@extends('layouts.layout')

@section('styles')
    <style>
        /* Banner Styles */
        .main-banner {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: var(--white);
            padding: 80px 0;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .main-banner:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }

        .main-banner h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .main-banner p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Featured Blogs */
        .featured-section {
            margin-bottom: 50px;
        }

        .section-title {
            border-bottom: 3px solid var(--primary-light);
            padding-bottom: 20px;
        }

        .section-title:after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary);
        }

        .featured-card {
            border: 1px solid #e0e0e0;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .featured-card:hover {
            box-shadow: 0 15px 30px rgba(89, 46, 131, 0.15);
        }

        .featured-img {
            height: 150px;
            object-fit: cover;
            width: 100%;
        }

        .featured-card-body {
            padding: 20px;
            background-color: var(--white);
        }

        .featured-card-title {
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        /* Main Content Area */
        .main-content-card {
            border: none;
            overflow: hidden;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            background-color: var(--white);
            box-shadow: 0 5px 15px rgba(89, 46, 131, 0.15);
        }

        .main-content-card:hover {
            box-shadow: 0 10px 25px rgba(89, 46, 131, 0.15);
        }

        .latest-blog {
            background-color: #ffe2e2;
        }

        .blog-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-date {
            color: var(--primary);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .blog-title {
            color: var(--primary-dark);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .blog-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .blog-title a:hover {
            color: var(--primary);
        }

        .blog-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Sidebar */
        .sidebar-card {
            background-color: var(--white);
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(89, 46, 131, 0.15);
            border-top: 5px solid var(--primary);
        }

        .sidebar-title-blogs {
            color: var(--primary-dark);
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .trending-item {
            padding: 15px 0;
            border-bottom: 1px dashed #eee;
        }

        .trending-item:last-child {
            border-bottom: none;
        }

        .trending-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: var(--primary-light);
            color: var(--white);
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
            font-weight: 700;
            font-size: 0.9rem;
            margin-right: 10px;
        }

        .trending-title {
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 1.05rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .trending-title:hover {
            color: var(--primary);
        }

        /* Season Theme */
        .season-badge {
            background-color: var(--season-theme-bg-color);
            color: var(--season-theme-color);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 15px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(89, 46, 131, 0.3);
        }
    </style>
@endsection

@section('content')

    <!-- Banner Section -->
    <section class="main-banner">
        <div class="container">
            <h1>Affiliate Marketing Insights</h1>
            <p>Expert tips, strategies, and reviews to grow your affiliate marketing business and maximize your earnings</p>
        </div>
    </section>
    <!-- Featured Blogs Section -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">Featured Blogs</h2>
            <div class="row">
                <!-- Featured Blog 1 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="Affiliate Strategies">
                        <div class="featured-card-body">
                            <h5 class="featured-card-title">Top 10 Affiliate Programs for Beginners in 2023</h5>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 2 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1665686306578-2a4a28b6be43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="Marketing Tools">
                        <div class="featured-card-body">
                            <h5 class="featured-card-title">How to Double Your Conversion Rate with These Simple Techniques
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 3 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="SEO Tips">
                        <div class="featured-card-body">
                            <h5 class="featured-card-title">SEO Strategies That Actually Work for Affiliate Sites</h5>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 4 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="SEO Tips">
                        <div class="featured-card-body">
                            <h5 class="featured-card-title">SEO Strategies That Actually Work for Affiliate Sites</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="container content-section">
        <div class="row">
            <!-- Main Blog List (col-9) -->
            <div class="col-lg-9 col-md-8 mb-5">
                <h2 class="section-title mb-4">Latest Blog Posts</h2>

                <!-- Blog Post 1 -->
                <div class="row main-content-card align-items-center latest-blog">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="blog-img" alt="Email Marketing">
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="season-badge"><i class="fas fa-bolt me-1"></i> HOT TOPIC</div>
                        <div class="blog-date"><i class="far fa-calendar me-1"></i> October 15, 2023</div>
                        <h3 class="blog-title"><a href="#">The Power of Email Marketing in Affiliate Sales</a></h3>
                        <p class="blog-description">Learn how to build an email list that converts and drives consistent
                            affiliate sales. We break down the best practices for email marketing in the affiliate
                            space.</p>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="row main-content-card align-items-center">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="blog-img" alt="Analytics">
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="blog-date"><i class="far fa-calendar me-1"></i> October 10, 2023</div>
                        <h3 class="blog-title"><a href="#">Tracking Your Affiliate Performance: Essential Analytics
                                Tools</a></h3>
                        <p class="blog-description">Discover the must-have analytics tools that will help you track your
                            affiliate marketing performance and optimize your campaigns for maximum ROI.</p>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="row main-content-card align-items-center">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="blog-img" alt="Social Media">
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="blog-date"><i class="far fa-calendar me-1"></i> October 5, 2023</div>
                        <h3 class="blog-title"><a href="#">Leveraging Social Media for Affiliate Marketing Success</a>
                        </h3>
                        <p class="blog-description">A complete guide to using Instagram, TikTok, and Pinterest to
                            promote affiliate products without being spammy or salesy.</p>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="row main-content-card align-items-center">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="blog-img" alt="Content Creation">
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="season-badge"><i class="fas fa-star me-1"></i> PREMIUM CONTENT</div>
                        <div class="blog-date"><i class="far fa-calendar me-1"></i> September 28, 2023</div>
                        <h3 class="blog-title"><a href="#">Content Creation Strategies That Drive Affiliate Sales</a>
                        </h3>
                        <p class="blog-description">Learn how to create compelling content that naturally integrates
                            affiliate products and drives conversions without alienating your audience.</p>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary-custom btn-lg">
                        <i class="fas fa-arrow-rotate-right me-2"></i>Load More
                    </a>
                </div>
            </div>

            <!-- Sidebar (col-3) -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar-card">
                    <div class="sidebar-header">
                        <h4 class="sidebar-title">Trending Blogs</h4>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Best Women`s Perfumes to Buy in 2020</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">15 Smartest Ways to get Discounts in Australia</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">How to Pick the Right Standby Generator For Home Use</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">The 15 Most Loved Australia`s E-commerce Websites of 2023</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Best Running Shoes For Men to Buy at JD Sports</a>
                    </div>

                    <div class="trending-item">
                        <a href="#" class="trending-title">Cheap online shopping: A guide to buying online Clothing Brands in Australia 2020</a>
                    </div>
                </div>

                <!-- Additional Sidebar Element -->
                <div class="sidebar-card">
                    <div class="sidebar-header">
                        <h4 class="sidebar-title">Categories</h4>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Travel</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Shopping</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Lifestyle</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Business</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Tech</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                    <div class="trending-item d-flex justify-content-between">
                        <a href="#" class="trending-title">Health & Beauty</a><span style="color: var(--primary-dark);">(14)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
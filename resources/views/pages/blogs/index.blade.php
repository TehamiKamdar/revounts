@extends('layouts.layout')

@section('styles')
    <style>
    </style>
@endsection

@section('content')

    <!-- Banner Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Affiliate Marketing Insights</h1>
            <p class="lead mb-4">Expert tips, strategies, and reviews to grow your affiliate marketing business and maximize your earnings</p>
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
                            <a href="{{ route('blog.details', 'some-blog-post') }}" class="blog-title">Top 10 Affiliate Programs for Beginners in 2023</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 2 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1665686306578-2a4a28b6be43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="Marketing Tools">
                        <div class="featured-card-body">
                            <a href="{{ route('blog.details', 'some-blog-post') }}" class="blog-title">How to Double Your Conversion Rate with These Simple Techniques
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 3 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="SEO Tips">
                        <div class="featured-card-body">
                            <a href="{{ route('blog.details', 'some-blog-post') }}" class="blog-title">SEO Strategies That Actually Work for Affiliate Sites</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Blog 4 -->
                <div class="col-md-3 mb-4">
                    <div class="featured-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            class="featured-img" alt="SEO Tips">
                        <div class="featured-card-body">
                            <a href="{{ route('blog.details', 'some-blog-post') }}" class="blog-title">SEO Strategies That Actually Work for Affiliate Sites</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="container">
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
                        <h3 class="blog-title"><a href="{{ route('blog.details', 'some-blog-post') }}">The Power of Email Marketing in Affiliate Sales</a></h3>
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
                        <h3 class="blog-title"><a href="{{ route('blog.details', 'some-blog-post') }}">Tracking Your Affiliate Performance: Essential Analytics
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
                        <h3 class="blog-title"><a href="{{ route('blog.details', 'some-blog-post') }}">Leveraging Social Media for Affiliate Marketing Success</a>
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
                        <h3 class="blog-title"><a href="{{ route('blog.details', 'some-blog-post') }}">Content Creation Strategies That Drive Affiliate Sales</a>
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
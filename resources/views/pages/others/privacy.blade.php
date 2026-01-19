@extends('layouts.layout')

@section('styles')
<style>

        /* Main Content */
        .privacy-container {
            margin: 0 auto 80px;
            background: white;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        /* Section Styling */
        .policy-section {
            margin-bottom: 60px;
            padding-bottom: 40px;
            border-bottom: 1px solid var(--border-color);
        }

        .policy-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(228, 27, 35, 0.1) 0%, rgba(158, 98, 255, 0.1) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            color: var(--primary);
            font-size: 1.8rem;
        }

        .section-title {
            color: var(--primary-dark);
            font-size: 2rem;
            margin-bottom: 25px;
            padding-bottom: 15px;
            position: relative;
            text-align: start !important;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--dark-amethyst);
        }

        /* Content Blocks */
        .info-block {
            background: var(--light-bg);
            border-left: 4px solid var(--primary);
            padding: 25px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }

        .info-block-title {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            overflow: hidden;
        }

        .data-table th {
            background: var(--light-bg);
            color: var(--secondary);
            font-weight: 600;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid var(--border-color);
        }

        .data-table td {
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
            color: var(--light-text);
        }

        .data-table tr:last-child td {
            border-bottom: none;
        }

        /* Third Party Section */
        .third-party-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .third-party-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
        }

        .third-party-card:hover {
            border-color: var(--primary);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transform: translateY(-3px);
        }

        .third-party-icon {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
</style>
@endsection

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="last-updated">
                        <i class="fas fa-calendar-alt"></i> Last Updated: January 15, 2024
                    </div>
                    <h1>Privacy Policy</h1>
                    <p class="lead mb-4">
                        At Revounts Australia, we are committed to protecting your privacy. This Privacy Policy
                        explains how we collect, use, disclose, and safeguard your information when you use our
                        coupon and cashback platform.
                    </p>
                    <a href="#personal-info" class="btn btn-primary-custom btn-lg px-4">
                        <i class="fas fa-arrow-down me-2"></i> Read Policy
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-shield-alt fa-7x opacity-25"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->
    <div class="container">
        <div class="privacy-container">
            <!-- Introduction -->
            <div class="policy-section">
                <div class="section-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <h2 class="section-title">Introduction</h2>
                <p>
                    Welcome to Revounts Australia. We respect your privacy and are committed to protecting your
                    personal information in accordance with the Australian Privacy Principles (APPs) contained in
                    the Privacy Act 1988 (Cth) and other applicable privacy laws.
                </p>
                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-bullhorn"></i>
                        Key Principles
                    </h5>
                    <p>
                        We follow these core privacy principles: transparency about data use, purpose limitation,
                        data minimization, accuracy, storage limitation, integrity and confidentiality, and
                        accountability.
                    </p>
                </div>
            </div>

            <!-- Your Personal Information -->
            <div class="policy-section" id="personal-info">
                <div class="section-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h2 class="section-title">YOUR PERSONAL INFORMATION</h2>

                <h4>What We Collect</h4>
                <p>
                    We collect information that you provide directly to us when you use our services, including:
                </p>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Information Type</th>
                            <th>Examples</th>
                            <th>Purpose of Collection</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Identity Information</strong></td>
                            <td>Name, email address, username</td>
                            <td>Account creation, authentication, personalized experience</td>
                        </tr>
                        <tr>
                            <td><strong>Contact Information</strong></td>
                            <td>Email address, phone number (optional)</td>
                            <td>Communications, customer support, deal notifications</td>
                        </tr>
                        <tr>
                            <td><strong>Technical Information</strong></td>
                            <td>IP address, browser type, device information</td>
                            <td>Security, analytics, service improvement</td>
                        </tr>
                        <tr>
                            <td><strong>Usage Information</strong></td>
                            <td>Pages visited, coupons clicked, time spent</td>
                            <td>Service optimization, personalized recommendations</td>
                        </tr>
                        <tr>
                            <td><strong>Transaction Information</strong></td>
                            <td>Cashback claims, coupon usage</td>
                            <td>Tracking earnings, service verification</td>
                        </tr>
                    </tbody>
                </table>

                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-download"></i>
                        How We Collect Information
                    </h5>
                    <p>
                        We collect information through various methods including direct interactions (when you
                        register or contact us), automated technologies (cookies and tracking), and third parties
                        (when you access our services through partner platforms).
                    </p>
                </div>

                <h4 class="mt-5">How We Use Your Information</h4>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <h6>Service Delivery</h6>
                                <p class="small">To provide and maintain our coupon and cashback services</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <h6>Personalization</h6>
                                <p class="small">To tailor deals and offers based on your preferences</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <h6>Communication</h6>
                                <p class="small">To send updates, newsletters, and deal alerts</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check-circle fa-lg"></i>
                            </div>
                            <div>
                                <h6>Analytics & Improvement</h6>
                                <p class="small">To analyze usage patterns and enhance our services</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-lock"></i>
                        Data Security & Storage
                    </h5>
                    <p>
                        We implement appropriate technical and organizational measures to protect your personal
                        information. Your data is stored on secure servers located in Australia, and we retain
                        information only for as long as necessary to fulfill the purposes outlined in this policy.
                    </p>
                </div>
            </div>

            <!-- Third-Party -->
            <div class="policy-section" id="third-party">
                <div class="section-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h2 class="section-title">THIRD-PARTY</h2>

                <h4>Third-Party Service Providers</h4>
                <p>
                    We engage third-party service providers to perform functions and provide services to us,
                    including:
                </p>

                <div class="third-party-grid">
                    <div class="third-party-card">
                        <div class="third-party-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h5>Hosting Services</h5>
                        <p class="small">
                            Cloud infrastructure providers for website hosting and data storage
                        </p>
                    </div>
                    <div class="third-party-card">
                        <div class="third-party-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Analytics Services</h5>
                        <p class="small">
                            Tools to analyze user behavior and improve our services
                        </p>
                    </div>
                    <div class="third-party-card">
                        <div class="third-party-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email Services</h5>
                        <p class="small">
                            Providers for sending transactional emails and newsletters
                        </p>
                    </div>
                    <div class="third-party-card">
                        <div class="third-party-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h5>Payment Processors</h5>
                        <p class="small">
                            Services for processing cashback payments and transactions
                        </p>
                    </div>
                </div>

                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-external-link-alt"></i>
                        Third-Party Links
                    </h5>
                    <p>
                        Our website contains links to third-party websites, including retail partners. When you
                        click on these links, you will be directed to their sites. We are not responsible for the
                        privacy practices or content of these external sites. We encourage you to review their
                        privacy policies before providing any personal information.
                    </p>
                </div>

                <h4 class="mt-5">Data Sharing with Retail Partners</h4>
                <p>
                    When you use a coupon or cashback offer, we may share limited information with our retail
                    partners to:
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check fa-lg"></i>
                            </div>
                            <div>
                                <h6>Track Transactions</h6>
                                <p class="small">To verify purchases for cashback eligibility</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check fa-lg"></i>
                            </div>
                            <div>
                                <h6>Prevent Fraud</h6>
                                <p class="small">To ensure legitimate use of coupons and offers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check fa-lg"></i>
                            </div>
                            <div>
                                <h6>Optimize Offers</h6>
                                <p class="small">To improve the relevance of future promotions</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check fa-lg"></i>
                            </div>
                            <div>
                                <h6>Compliance</h6>
                                <p class="small">To meet legal and contractual obligations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Age Limitation -->
            <div class="policy-section" id="age-limitation">
                <div class="section-icon">
                    <i class="fas fa-child"></i>
                </div>
                <h2 class="section-title">AGE LIMITATION</h2>

                <h4>Minimum Age Requirement</h4>
                <p>
                    Revounts Australia is not intended for individuals under the age of 18. We do not knowingly
                    collect, use, or disclose personal information from children under 18 without verifiable
                    parental consent.
                </p>

                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-exclamation-triangle"></i>
                        Our Policy Regarding Minors
                    </h5>
                    <p>
                        If you are under 18, please do not use our services or provide any personal information
                        to us. If we become aware that we have collected personal information from a child under
                        18 without verification of parental consent, we will take steps to remove that information
                        from our servers promptly.
                    </p>
                </div>

                <h4 class="mt-5">Parental Rights</h4>
                <p>
                    If you are a parent or guardian and believe your child has provided us with personal
                    information without your consent, please contact us immediately. We will work with you to
                    address your concerns and remove any unauthorized information.
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-user-check fa-lg"></i>
                            </div>
                            <div>
                                <h6>Verification Process</h6>
                                <p class="small">We verify age during account registration</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-trash-alt fa-lg"></i>
                            </div>
                            <div>
                                <h6>Data Removal</h6>
                                <p class="small">We promptly delete data collected from minors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-headset fa-lg"></i>
                            </div>
                            <div>
                                <h6>Parental Contact</h6>
                                <p class="small">We respond to parental inquiries within 48 hours</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <div>
                                <h6>Protection Measures</h6>
                                <p class="small">Additional safeguards for age-restricted content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Your Rights -->
            <div class="policy-section">
                <div class="section-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h2 class="section-title">Your Privacy Rights</h2>

                <h4>Australian Privacy Principles</h4>
                <p>
                    Under the Australian Privacy Principles, you have the right to:
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-eye fa-lg"></i>
                            </div>
                            <div>
                                <h6>Access Your Information</h6>
                                <p class="small">Request access to personal information we hold about you</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-edit fa-lg"></i>
                            </div>
                            <div>
                                <h6>Correction Rights</h6>
                                <p class="small">Request correction of inaccurate or incomplete information</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-ban fa-lg"></i>
                            </div>
                            <div>
                                <h6>Opt-Out Rights</h6>
                                <p class="small">Opt out of marketing communications at any time</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-trash fa-lg"></i>
                            </div>
                            <div>
                                <h6>Deletion Rights</h6>
                                <p class="small">Request deletion of your personal information</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-block">
                    <h5 class="info-block-title">
                        <i class="fas fa-envelope"></i>
                        How to Exercise Your Rights
                    </h5>
                    <p>
                        To exercise any of your privacy rights, please contact our Privacy Officer at
                        <strong>privacy@revounts.au</strong>. We will respond to your request within 30 days
                        and may request additional information to verify your identity before processing.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Cookie Consent Banner
        document.addEventListener('DOMContentLoaded', function() {
            const consentBanner = document.getElementById('cookieConsent');
            const hasConsent = localStorage.getItem('cookieConsent');

            if (!hasConsent) {
                setTimeout(() => {
                    consentBanner.style.display = 'block';
                }, 2000);
            }
        });

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'accepted');
            document.getElementById('cookieConsent').style.display = 'none';
        }

        function managePreferences() {
            // In a real implementation, this would open a preferences modal
            alert('Cookie preferences management would open here. This is a demo feature.');
        }

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Print policy function
        function printPolicy() {
            window.print();
        }
    </script>
@endsection
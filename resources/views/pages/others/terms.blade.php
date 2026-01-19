@extends('layouts.layout')

@section('styles')

<style>


        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #450077cc 0%, #9e62ffcc 100%);
            padding: 80px 0;
            color: white;
            margin-bottom: 60px;
        }

        .page-header h1 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 24px;
        }

        .last-updated {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 4px;
            display: inline-block;
            font-size: 0.9rem;
        }

        /* Terms Content */
        .terms-container {
            background: white;
            padding: 60px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
            margin-bottom: 60px;
        }

        .terms-section {
            margin-bottom: 50px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border-color);
        }

        .terms-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-title {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--primary-light);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-title i {
            background: rgba(228, 27, 35, 0.1);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
        }

        .terms-content {
            padding-left: 65px;
        }

        .clause {
            margin-bottom: 25px;
        }

        .clause-title {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .clause-title i {
            color: var(--primary);
            font-size: 0.9rem;
        }

        .clause-content {
            color: var(--light-text);
            line-height: 1.8;
        }

        .highlight-box {
            background: rgba(255, 205, 0, 0.1);
            border-left: 4px solid var(--primary-dark);
            padding: 20px;
            margin: 20px 0;
            font-style: italic;
        }

        /* Quick Navigation */
        .quick-nav {
            position: sticky;
            top: 100px;
            background: white;
            padding: 25px;
            border: 1px solid var(--border-color);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
        }

        .quick-nav-title {
            color: var(--primary-dark);
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary);
        }

        .nav-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links-list li {
            margin-bottom: 12px;
        }

        .nav-links-list a {
            color: var(--light-text);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .nav-links-list a:hover, .nav-links-list a.active {
            background: rgba(228, 27, 35, 0.08);
            color: var(--primary);
        }

        .nav-links-list a i {
            width: 20px;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .terms-container {
                padding: 40px 30px;
            }

            .page-header h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .page-header {
                padding: 60px 0;
                margin-bottom: 40px;
            }

            .terms-content {
                padding-left: 0;
            }
        }
</style>

@endsection

@section('content')
<!-- Page Header -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Terms and Conditions</h1>
                    <p class="lead mb-4">Please read these terms carefully before using Revounts Australia. By accessing or using our platform, you agree to be bound by these terms.</p>
                    <div class="last-updated">
                        <i class="fas fa-calendar-alt me-2"></i> Last Updated: January 15, 2024
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Quick Navigation -->
            <div class="col-lg-3">
                <div class="quick-nav">
                    <h5 class="quick-nav-title">Quick Navigation</h5>
                    <ul class="nav-links-list">
                        <li><a href="#copyrights"><i class="fas fa-copyright"></i> Copyrights & Permits</a></li>
                        <li><a href="#user-restrictions"><i class="fas fa-user-slash"></i> User Restrictions</a></li>
                        <li><a href="#data-security"><i class="fas fa-shield-alt"></i> Data Security</a></li>
                        <li><a href="#customer-service"><i class="fas fa-headset"></i> Customer Service</a></li>
                        <li><a href="#limitation-services"><i class="fas fa-exclamation-triangle"></i> Limitation of Services</a></li>
                        <li><a href="#acceptance"><i class="fas fa-check-circle"></i> Acceptance</a></li>
                    </ul>
                </div>
            </div>

            <!-- Terms Content -->
            <div class="col-lg-9">
                <div class="terms-container">
                    <!-- Introduction -->
                    <div class="terms-section">
                        <p class="clause-content">
                            Welcome to Revounts Australia. These Terms and Conditions govern your use of our website,
                            mobile applications, and services. By accessing or using Revounts Australia, you acknowledge
                            that you have read, understood, and agree to be bound by these terms.
                        </p>

                        <div class="highlight-box">
                            <strong>Important Notice:</strong> These terms constitute a legally binding agreement between
                            you and Revounts Australia. If you do not agree with any part of these terms, please do not
                            use our services.
                        </div>
                    </div>

                    <!-- Copyrights and Permits -->
                    <div class="terms-section" id="copyrights">
                        <h3 class="section-title">
                            <i class="fas fa-copyright"></i>
                            COPYRIGHTS AND PERMITS
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-gavel"></i>
                                    Intellectual Property Rights
                                </h5>
                                <div class="clause-content">
                                    All content on Revounts Australia, including but not limited to text, graphics, logos,
                                    images, audio clips, digital downloads, data compilations, and software, is the property
                                    of Revounts Australia or its content suppliers and is protected by Australian and
                                    international copyright laws. The compilation of all content on this site is the exclusive
                                    property of Revounts Australia.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-id-badge"></i>
                                    Permitted Use
                                </h5>
                                <div class="clause-content">
                                    You are granted a limited, non-exclusive, non-transferable license to access and use
                                    Revounts Australia for personal, non-commercial purposes. This license does not include:
                                    <ul class="mt-3">
                                        <li>Any resale or commercial use of our site or its contents</li>
                                        <li>Collection and use of any product listings, descriptions, or prices</li>
                                        <li>Derivative use of our site or its contents</li>
                                        <li>Downloading or copying of account information for the benefit of another merchant</li>
                                        <li>Use of data mining, robots, or similar data gathering and extraction tools</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-ban"></i>
                                    Trademark Notice
                                </h5>
                                <div class="clause-content">
                                    "Revounts Australia" and related logos are registered trademarks of Revounts Pty Ltd.
                                    All other trademarks not owned by Revounts that appear on this site are the property
                                    of their respective owners, who may or may not be affiliated with, connected to, or
                                    sponsored by Revounts Australia.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Restrictions -->
                    <div class="terms-section" id="user-restrictions">
                        <h3 class="section-title">
                            <i class="fas fa-user-slash"></i>
                            USER RESTRICTIONS
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-exclamation-circle"></i>
                                    Prohibited Activities
                                </h5>
                                <div class="clause-content">
                                    You agree not to use Revounts Australia to:
                                    <ul class="mt-3">
                                        <li>Violate any applicable laws or regulations</li>
                                        <li>Infringe upon the intellectual property rights of others</li>
                                        <li>Harass, abuse, or harm another person</li>
                                        <li>Submit false or misleading information</li>
                                        <li>Upload or transmit viruses or any other malicious code</li>
                                        <li>Collect or track personal information of others</li>
                                        <li>Spam, phish, or engage in unethical marketing practices</li>
                                        <li>Interfere with or disrupt the integrity or performance of our services</li>
                                        <li>Attempt to gain unauthorized access to our systems or networks</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-user-times"></i>
                                    Account Suspension
                                </h5>
                                <div class="clause-content">
                                    We reserve the right to suspend or terminate your account and access to our services
                                    at our sole discretion, without notice, for conduct that we believe violates these
                                    Terms and Conditions or is harmful to other users, us, or third parties, or for any
                                    other reason.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-age-restricted"></i>
                                    Age Restrictions
                                </h5>
                                <div class="clause-content">
                                    You must be at least 18 years old to use Revounts Australia. By using our services,
                                    you represent and warrant that you are at least 18 years of age. If you are under 18,
                                    you may use our services only with the involvement of a parent or guardian.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Security -->
                    <div class="terms-section" id="data-security">
                        <h3 class="section-title">
                            <i class="fas fa-shield-alt"></i>
                            DATA SECURITY
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-lock"></i>
                                    Security Measures
                                </h5>
                                <div class="clause-content">
                                    We implement appropriate technical and organizational security measures to protect
                                    your personal information against unauthorized access, alteration, disclosure, or
                                    destruction. However, no method of transmission over the Internet or electronic
                                    storage is 100% secure, and we cannot guarantee absolute security.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-database"></i>
                                    Data Collection
                                </h5>
                                <div class="clause-content">
                                    We collect information that you provide directly to us, including when you create
                                    an account, subscribe to our newsletter, or contact us. We also automatically collect
                                    certain information when you visit our website, such as your IP address, browser type,
                                    and browsing behavior.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-cookie-bite"></i>
                                    Cookies and Tracking
                                </h5>
                                <div class="clause-content">
                                    We use cookies and similar tracking technologies to track activity on our service
                                    and hold certain information. Cookies are files with small amounts of data that may
                                    include an anonymous unique identifier. You can instruct your browser to refuse all
                                    cookies or to indicate when a cookie is being sent.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-user-secret"></i>
                                    Privacy Compliance
                                </h5>
                                <div class="clause-content">
                                    We comply with the Australian Privacy Principles (APPs) contained in the Privacy
                                    Act 1988 (Cth) and the General Data Protection Regulation (GDPR) for users in the
                                    European Union. For more detailed information about our data practices, please refer
                                    to our Privacy Policy.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Service -->
                    <div class="terms-section" id="customer-service">
                        <h3 class="section-title">
                            <i class="fas fa-headset"></i>
                            CUSTOMER SERVICE
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-comments"></i>
                                    Support Availability
                                </h5>
                                <div class="clause-content">
                                    Our customer service team is available Monday to Friday, 9:00 AM to 5:00 PM AEST,
                                    excluding Australian public holidays. You can contact us via:
                                    <ul class="mt-3">
                                        <li>Email: support@revounts.au</li>
                                        <li>Contact Form: Available on our website</li>
                                        <li>Phone: 1300-REV-COUNT (1300-738-268)</li>
                                    </ul>
                                    Response times may vary depending on the complexity of your inquiry.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-handshake"></i>
                                    Resolution Process
                                </h5>
                                <div class="clause-content">
                                    We strive to resolve all customer inquiries within 48 hours. For complex issues
                                    requiring investigation, we will provide regular updates until resolution. All
                                    communications will be conducted professionally and with respect for your concerns.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-balance-scale"></i>
                                    Dispute Resolution
                                </h5>
                                <div class="clause-content">
                                    In the event of a dispute, we encourage you to contact our customer service team
                                    first to attempt to resolve the issue amicably. If a resolution cannot be reached,
                                    disputes shall be resolved through binding arbitration in accordance with the
                                    Australian Centre for International Commercial Arbitration (ACICA) Rules.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Limitation of Services -->
                    <div class="terms-section" id="limitation-services">
                        <h3 class="section-title">
                            <i class="fas fa-exclamation-triangle"></i>
                            LIMITATION OF SERVICES
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-info-circle"></i>
                                    Service Availability
                                </h5>
                                <div class="clause-content">
                                    We strive to ensure that Revounts Australia is available 24/7, but we do not guarantee
                                    uninterrupted access. The service may be unavailable during scheduled maintenance or
                                    due to unforeseen circumstances beyond our control. We reserve the right to modify,
                                    suspend, or discontinue any aspect of our services at any time.
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-tag"></i>
                                    Coupon Validity
                                </h5>
                                <div class="clause-content">
                                    While we make every effort to ensure the accuracy of coupon codes and deals, we cannot
                                    guarantee that all codes will work as intended. Coupon availability and terms are
                                    controlled by retailers, and we are not responsible for:
                                    <ul class="mt-3">
                                        <li>Expired or invalid coupon codes</li>
                                        <li>Retailer policy changes</li>
                                        <li>Technical issues on retailer websites</li>
                                        <li>Stock availability for discounted items</li>
                                        <li>Shipping restrictions or additional charges</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-ban"></i>
                                    Liability Limitation
                                </h5>
                                <div class="clause-content">
                                    To the maximum extent permitted by law, Revounts Australia shall not be liable for:
                                    <ul class="mt-3">
                                        <li>Any indirect, incidental, or consequential damages</li>
                                        <li>Loss of profits, data, or business opportunities</li>
                                        <li>Damages resulting from the use or inability to use our services</li>
                                        <li>Errors or inaccuracies in coupon information</li>
                                        <li>Third-party actions or conduct</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clause">
                                <h5 class="clause-title">
                                    <i class="fas fa-australia"></i>
                                    Australian Consumer Law
                                </h5>
                                <div class="clause-content">
                                    Our services come with guarantees that cannot be excluded under the Australian
                                    Consumer Law. You are entitled to a replacement or refund for a major failure
                                    and compensation for any other reasonably foreseeable loss or damage.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Acceptance -->
                    <div class="terms-section" id="acceptance">
                        <h3 class="section-title">
                            <i class="fas fa-check-circle"></i>
                            ACCEPTANCE OF TERMS
                        </h3>

                        <div class="terms-content">
                            <div class="clause">
                                <div class="clause-content">
                                    <p>By using Revounts Australia, you acknowledge that you have read, understood,
                                    and agree to be bound by these Terms and Conditions.</p>

                                    <div class="highlight-box">
                                        <strong>Changes to Terms:</strong> We reserve the right to modify these terms
                                        at any time. We will notify users of any material changes by posting the new
                                        Terms and Conditions on this page and updating the "Last Updated" date. Your
                                        continued use of the service after any changes constitutes your acceptance of
                                        the new terms.
                                    </div>

                                    <p class="mt-4">
                                        <strong>Governing Law:</strong> These Terms and Conditions shall be governed
                                        by and construed in accordance with the laws of New South Wales, Australia,
                                        without regard to its conflict of law provisions.
                                    </p>

                                    <p>
                                        <strong>Contact Information:</strong> If you have any questions about these
                                        Terms and Conditions, please contact us at legal@revounts.au.
                                    </p>
                                </div>
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
        // Smooth scroll for quick navigation
        document.querySelectorAll('.nav-links-list a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });

                    // Update active link
                    document.querySelectorAll('.nav-links-list a').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Highlight active section on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.terms-section');
            const navLinks = document.querySelectorAll('.nav-links-list a');

            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 150;
                const sectionHeight = section.clientHeight;

                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    currentSection = '#' + section.id;
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentSection) {
                    link.classList.add('active');
                }
            });
        });

        // Print terms function
        function printTerms() {
            window.print();
        }
    </script>
@endsection
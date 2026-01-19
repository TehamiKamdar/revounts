@extends('layouts.layout')

@section('styles')
<style>

        /* Contact Container */
        .contact-container {
            margin-bottom: 80px;
        }

        /* Form Styling */
        .contact-form-container {
            background: var(--white);
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(89, 46, 131, 0.1);
            height: 100%;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-amethyst);
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            padding: 6px 12px;
            border: 1px solid rgba(89, 46, 131, 0.2);
            border-radius: 4px !important;
            transition: all 0.3s ease;
            font-size: 0.9rem !important;
            background-color: var(--white);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(158, 98, 255, 0.1);
        }

        /* Contact Details */
        .contact-details-container {
            background: linear-gradient(135deg, rgba(89, 46, 131, 0.03) 0%, rgba(21, 1, 50, 0.03) 100%);
            padding: 40px;
            border: 1px solid rgba(89, 46, 131, 0.1);
            height: 100%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(89, 46, 131, 0.1);
        }

        .contact-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, rgba(242, 98, 255, 0.1) 0%, rgba(122, 67, 211, 0.1) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-content h5 {
            color: var(--primary);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .contact-content p {
            color: var(--light-text);
            margin-bottom: 5px;
        }

        .hours-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px dashed rgba(89, 46, 131, 0.1);
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        /* Media Kit Button */
        .media-kit-section {
            margin: 60px 0 0;
            padding: 40px;
            background: linear-gradient(135deg, rgba(21, 1, 50, 0.05) 0%, rgba(89, 46, 131, 0.05) 100%);
            border-radius: 12px;
            text-align: center;
        }

        .media-kit-btn {
            background: transparent !important;
            border: 2px solid var(--primary) !important;
            color: var(--primary) !important;
            padding: 16px 40px !important;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .media-kit-btn:hover {
            background: var(--primary) !important;
            color: white !important;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(89, 46, 131, 0.2);
        }

        .media-kit-icon {
            margin-right: 12px;
            font-size: 1.2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-header {
                padding: 80px 0 60px;
            }

            .contact-header h1 {
                font-size: 2.5rem;
            }

            .contact-form-container,
            .contact-details-container {
                padding: 30px 25px;
            }

            .media-kit-section {
                padding: 30px 25px;
            }
        }
</style>
@endsection

@section('content')
    <!-- Header -->
    <section class="hero-section">
        <div class="container">
            <h1>Get In Touch</h1>
            <p class="lead mb-4">
                Have questions about our coupon deals, partnerships, or anything else? We're here to help!
                Reach out to our Australian team for prompt assistance and support.
            </p>
        </div>
    </section>
<!-- Main Content -->
    <div class="container contact-container">
        <div class="row g-5">
            <!-- Contact Form (col-8) -->
            <div class="col-lg-8">
                <div class="contact-form-container">
                    <h3 class="mb-4" style="color: var(--primary);">Send us a Message</h3>
                    <p class="mb-4" style="color: var(--light-text);">
                        Fill out the form below and our team will get back to you within 24 hours.
                    </p>

                    <form id="contactForm">
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="interest" class="form-label">Interested As *</label>
                            <select class="form-select" id="interest" required>
                                <option value="" selected disabled>Select a subject</option>
                                <option value="partnership">Partnership & Business Inquiry</option>
                                <option value="support">Customer Support</option>
                                <option value="technical">Technical Issue</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Your Message *</label>
                            <textarea class="form-control" id="message" rows="3" required
                                      placeholder="Please provide details about your inquiry..."></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary-custom btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Details (col-4) -->
            <div class="col-lg-4">
                <div class="contact-details-container">
                    <h3 class="mb-4" style="color: var(--primary);">Contact Details</h3>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Our Office</h5>
                            <p>7 Benzelman Wy, Wollert VIC 3750, Australia</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Phone Numbers</h5>
                            <p> <a href="tel:+61401581280" style="color: #450077;">+6-140-158-1280</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Email Addresses</h5>
                            <p> <a href="mailto:info@revounts.com.au" style="color: #450077;">info@revounts.com.au</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Advertising</h5>
                            <p> <a href="mailto:advertise@revounts.com.au" style="color: #450077;">advertise@revounts.com.au</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Media Kit Button (Full Width) -->
        <div class="row">
            <div class="col-12">
                <div class="media-kit-section">
                    <h3 class="mb-3" style="color: var(--primary);">Brand Resources</h3>
                    <p class="mb-4" style="color: var(--light-text); max-width: 700px; margin: 0 auto;">
                        Download our complete media kit including logos, brand guidelines, press releases,
                        and partnership information for journalists, bloggers, and potential collaborators.
                    </p>
                    <button class="btn media-kit-btn">
                        <i class="fas fa-download media-kit-icon"></i>
                        Download Revounts Australia Media Kit
                    </button>
                    <p class="mt-3 small" style="color: var(--light-text);">
                        PDF, 15.2 MB | Includes: Logos, Brand Guidelines, Press Kit, Partnership Deck
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
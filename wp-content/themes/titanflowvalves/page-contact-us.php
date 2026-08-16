<?php
/**
 * Template Name: Contact Us Page
 * Description: High-polish industrial contact & enquiry template with zero-database email dispatch.
 * Version: 3.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Contact Us</h1>
            <div class="titan-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                <span>Contact Us</span>
            </div>
        </div>
    </section>

    <!-- Contact & Form Section -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-contact-wrapper">
                
                <!-- Left Column: Business Contact Details -->
                <div class="titan-contact-info-card">
                    <div class="titan-badge titan-badge-dark" style="margin-bottom: 1rem;">
                        Direct Line of Communication
                    </div>
                    <h3>Get In Touch With Our Engineering &amp; Sales Team</h3>
                    <p style="color: var(--titan-gray-300); font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.6;">
                        Whether you need a custom quote, technical specifications, or certified industrial valve recommendations for your plant or pipeline, our team is ready to assist you.
                    </p>

                    <div class="titan-info-list">
                        <!-- Email -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="titan-info-text">
                                <div class="titan-info-label">Mail Us Directly</div>
                                <div class="titan-info-val">
                                    <a href="mailto:info@titanflowvalves.com?subject=Website%20Inquiry&amp;body=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20products.">
                                        info@titanflowvalves.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="titan-info-text">
                                <div class="titan-info-label">Call Our Office</div>
                                <div class="titan-info-val">
                                    <a href="tel:+919769597643">+91 97695 97643</a>
                                </div>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon" style="background-color: rgba(37, 211, 102, 0.15); color: #25d366;">
                                <i class="fa-brands fa-whatsapp fa-lg"></i>
                            </div>
                            <div class="titan-info-text">
                                <div class="titan-info-label">WhatsApp Quick Chat</div>
                                <div class="titan-info-val">
                                    <a href="https://wa.me/919769597643?text=Hello,%20I%20need%20more%20info." target="_blank" rel="noopener">
                                        +91 97695 97643
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="titan-info-text">
                                <div class="titan-info-label">Facility &amp; Stockist Location</div>
                                <div class="titan-info-val" style="font-size: 0.9rem; line-height: 1.5; color: var(--titan-gray-200);">
                                    PLOT NO 13, Super Market (Industrial), Behind Alishan Hotel, Goteghar, Thane &#8211; 421204, Thane, Maharashtra 421204
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 1.5rem; margin-top: 1rem;">
                        <div style="font-size: 0.85rem; color: var(--titan-gray-400);">
                            <i class="fa-solid fa-clock"></i> <strong>Business Hours:</strong> Monday &ndash; Saturday, 9:00 AM &ndash; 7:00 PM IST
                        </div>
                    </div>
                </div>

                <!-- Right Column: Clean Industrial Enquiry Form -->
                <?php get_template_part('template-parts/forms/contact-form'); ?>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();

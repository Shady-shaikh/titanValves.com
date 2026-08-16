<?php
/**
 * Template Name: Contact Us
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Contact Us</h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-contact-wrapper">
                
                <!-- Left: Contact Details Card -->
                <div class="titan-contact-info-card">
                    <div class="titan-badge titan-badge-dark" style="margin-bottom: 1rem;">Direct Access</div>
                    <h3>Get In Touch</h3>
                    <p style="color: var(--titan-gray-300); font-size: 0.95rem; margin-bottom: 2rem;">
                        Reach out directly to our sales, engineering, and export desks. We respond to all formal technical inquiries within 24 hours.
                    </p>

                    <div class="titan-info-list">
                        <!-- Email -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="titan-info-content">
                                <strong>Email Us</strong>
                                <a href="mailto:info@titanflowvalves.com?subject=Website%20Inquiry">info@titanflowvalves.com</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="titan-info-content">
                                <strong>Call Us</strong>
                                <a href="tel:+919769597643">+91 97695 97643</a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="titan-info-content">
                                <strong>WhatsApp Quick Chat</strong>
                                <a href="https://wa.me/919769597643?text=Hello,%20I%20need%20more%20info." target="_blank" rel="noopener">+91 97695 97643</a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="titan-info-item">
                            <div class="titan-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="titan-info-content">
                                <strong>Factory &amp; Registered Office</strong>
                                <p>
                                    PLOT NO 13, Super Market (Industrial), Behind Alishan Hotel, Goteghar, Thane &ndash; 421204, Thane, Maharashtra 421204
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 1.5rem; display: flex; gap: 0.75rem;">
                        <a href="https://www.linkedin.com/company/titan-flow-valves/" target="_blank" rel="noopener" class="titan-social-icon" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/titan_flow_valves?igsh=aWZ5ZGF5MTZ0cjg2" target="_blank" rel="noopener" class="titan-social-icon" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://x.com/TitanFlowValves?t=dasZlQzqQaIFe4ZyxYnMmw&amp;s=08" target="_blank" rel="noopener" class="titan-social-icon" aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Zero-Database Contact Form -->
                <?php get_template_part('template-parts/forms/contact-form'); ?>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();

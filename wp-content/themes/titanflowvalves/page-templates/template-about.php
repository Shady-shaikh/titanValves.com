<?php
/**
 * Template Name: About Us
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">About us</h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Company Introduction Section -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Who We Are</div>
                <h2 class="titan-section-title">ENGINEERING PRECISION. GLOBAL REACH.</h2>
            </div>

            <div style="max-width: 960px; margin: 0 auto 3.5rem; text-align: justify; font-size: 1.05rem; line-height: 1.85; color: var(--titan-gray-700);">
                <p style="margin-bottom: 1.5rem;">
                    <strong>Titan Flow Valves</strong> is a premier <strong>industrial valve manufacturer, supplier, stockist, and exporter</strong> headquartered in Mumbai, India. We are dedicated to providing high-performance, robust, and reliable flow control solutions to critical industries across the globe.
                </p>
                <p>
                    With deep metallurgical expertise and advanced manufacturing infrastructure, our products serve demanding sectors including <strong>Oil &amp; Gas, Power Generation, Petrochemicals, Refining, Water &amp; Wastewater Treatment, Chemical Processing, Marine, and Heavy Engineering</strong>.
                </p>
            </div>

            <!-- Vision & Mission 2-Column Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto 4rem;">
                <div class="titan-feature-card" style="padding: 2.25rem;">
                    <div class="titan-badge" style="margin-bottom: 1rem;">Core Purpose</div>
                    <h3 style="font-size: 1.4rem; color: var(--titan-dark-900); margin-bottom: 1rem;">
                        <i class="fa-solid fa-eye" style="color: var(--titan-amber-600); margin-right: 0.5rem;"></i> Our Vision
                    </h3>
                    <p style="font-size: 0.95rem; line-height: 1.7; color: var(--titan-gray-600);">
                        To be globally recognized as the benchmark for quality, reliability, and innovation in industrial flow control technology, establishing enduring client relationships founded on technical excellence and complete integrity.
                    </p>
                </div>

                <div class="titan-feature-card" style="padding: 2.25rem;">
                    <div class="titan-badge" style="margin-bottom: 1rem;">Our Commitment</div>
                    <h3 style="font-size: 1.4rem; color: var(--titan-dark-900); margin-bottom: 1rem;">
                        <i class="fa-solid fa-bullseye" style="color: var(--titan-amber-600); margin-right: 0.5rem;"></i> Our Mission
                    </h3>
                    <p style="font-size: 0.95rem; line-height: 1.7; color: var(--titan-gray-600);">
                        To manufacture and supply precision valves that guarantee zero leakage, exceptional durability, and maximum operating safety, backed by comprehensive testing certifications, transparent pricing, and rapid delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Core Pillars Section -->
    <section class="titan-section titan-section-alt">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Our Pillars</div>
                <h2 class="titan-section-title">The Titan Flow Quality Advantage</h2>
                <p class="titan-section-subtitle">Six core operational principles that differentiate our engineering delivery</p>
            </div>

            <div class="titan-pillars-grid">
                <!-- Pillar 1 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-2.png@w=100'); ?>" alt="ISO Certified" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">ISO Certified Manufacturing</h3>
                    <p class="titan-pillar-desc">
                        Our state-of-the-art production units strictly comply with ISO 9001:2015, API, ASME, BS, and DIN standards, ensuring global dimensional and operational conformity.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-3.png@w=100'); ?>" alt="100% Quality Assurance" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">100% Hydro &amp; Pneumatic Testing</h3>
                    <p class="titan-pillar-desc">
                        Every single valve undergoes rigorous hydrostatic shell and seat pressure testing, dye-penetrant inspection, and ultrasonic checks before dispatch.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-4.png@w=100'); ?>" alt="Wide Stock Inventory" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">Extensive Ready Inventory</h3>
                    <p class="titan-pillar-desc">
                        We maintain massive stock holding across all standard sizes (15mm to 600mm) and pressure classes (150# to 2500#) for instant project dispatch.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-5.png@w=100'); ?>" alt="Custom Engineering" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">Severe-Service Customization</h3>
                    <p class="titan-pillar-desc">
                        Specialized metallurgy options including Duplex, Super Duplex, Inconel, Hastelloy, Monel, and Titanium for highly corrosive and cryogenic environments.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-6.png@w=100'); ?>" alt="Global Export" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">Worldwide Export Network</h3>
                    <p class="titan-pillar-desc">
                        Supplying industrial valves and power tools to clients across the Middle East, Southeast Asia, Europe, Africa, and the Americas with complete export documentation.
                    </p>
                </div>

                <!-- Pillar 6 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/image-7.png@w=100'); ?>" alt="Technical Support" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">Dedicated Engineering Support</h3>
                    <p class="titan-pillar-desc">
                        Our in-house valve engineers assist with sizing, torque calculations, actuator selection, and installation guidance for seamless plant integration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Export Map & Reach -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Global Footprint</div>
                <h2 class="titan-section-title">Trusted Worldwide Across 30+ Nations</h2>
                <p class="titan-section-subtitle">Delivering critical flow control hardware to major EPC contractors, refineries, and power utilities</p>
            </div>

            <div style="max-width: 900px; margin: 0 auto 3rem; text-align: center;">
                <img 
                    src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/globe-map.png@w=900'); ?>" 
                    alt="Global Valve Export Network" 
                    style="max-width: 100%; height: auto; border-radius: var(--titan-radius-lg); box-shadow: var(--titan-shadow-md);"
                    onerror="this.style.display='none'"
                    loading="lazy"
                >
            </div>

            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-paper-plane"></i> Contact Our Engineering Team
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

<?php
/**
 * Template Name: Power Tools Overview Page
 * Description: Power tools landing page for Titan Flow Valves.
 * Version: 2.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Industrial Power Tools &amp; Flange Maintenance</h1>
            <div class="titan-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                <span>Power Tools</span>
            </div>
        </div>
    </section>

    <!-- Power Tools Grid -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Heavy Duty Engineering Tools</div>
                <h2 class="titan-section-title">Precision Bolting &amp; Pipeline Maintenance Equipment</h2>
                <p class="titan-section-subtitle">
                    Engineered for high-torque bolting, flange alignment, flange spreading, and critical pipe maintenance across industrial plants and offshore rigs.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
                <!-- Wrenches Card -->
                <div class="titan-feature-card">
                    <div class="titan-feature-img-wrap">
                        <a href="<?php echo esc_url(home_url('/wrenches/')); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/08/whatsapp-image-2025-08-03-at-12.44.17-pm.jpeg'); ?>" alt="Wrenches" class="titan-feature-img" loading="lazy">
                        </a>
                    </div>
                    <div class="titan-feature-body">
                        <div class="titan-badge" style="margin-bottom: 0.75rem;">High-Torque Bolting</div>
                        <h2 class="titan-feature-title"><a href="<?php echo esc_url(home_url('/wrenches/')); ?>">WRENCHES</a></h2>
                        <p class="titan-feature-text">
                            Heavy-duty hydraulic, pneumatic, and manual torque wrenches designed for precision tightening and breakout of critical industrial studs, flanged connections, and pressure vessels.
                        </p>
                        <div>
                            <a href="<?php echo esc_url(home_url('/wrenches/')); ?>" class="btn btn-primary btn-sm">
                                View Wrenches <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Flange Maintenance Card -->
                <div class="titan-feature-card">
                    <div class="titan-feature-img-wrap">
                        <a href="<?php echo esc_url(home_url('/flange-maintenance/')); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/08/whatsapp-image-2025-08-03-at-12.44.18-pm.jpeg'); ?>" alt="Flange Maintenance" class="titan-feature-img" loading="lazy">
                        </a>
                    </div>
                    <div class="titan-feature-body">
                        <div class="titan-badge" style="margin-bottom: 0.75rem;">Pipeline Integrity</div>
                        <h2 class="titan-feature-title"><a href="<?php echo esc_url(home_url('/flange-maintenance/')); ?>">FLANGE MAINTENANCE</a></h2>
                        <p class="titan-feature-text">
                            Comprehensive flange spreading tools, flange alignment clamps, nut splitters, and facing equipment to ensure leak-free joint assembly and minimize plant turnaround downtime.
                        </p>
                        <div>
                            <a href="<?php echo esc_url(home_url('/flange-maintenance/')); ?>" class="btn btn-primary btn-sm">
                                View Flange Maintenance <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Action CTA -->
            <div style="text-align: center; margin-top: 4rem;">
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-paper-plane"></i> Inquire About Power Tools
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

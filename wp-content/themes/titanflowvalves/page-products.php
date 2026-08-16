<?php
/**
 * Template Name: Products Catalog Page
 * Description: High-performance industrial product catalog landing page for Titan Flow Valves.
 * Version: 2.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Industrial Valves &amp; Flow Control Products</h1>
            <div class="titan-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                <span>Products</span>
            </div>
        </div>
    </section>

    <!-- Product Directory Grid -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Engineered for Precision &amp; Safety</div>
                <h2 class="titan-section-title">Comprehensive Valve Product Line</h2>
                <p class="titan-section-subtitle">
                    Manufactured and stocked to meet stringent international standards including API, ASME, BS, DIN, and ISO for oil &amp; gas, chemical, water treatment, and power generation.
                </p>
            </div>

            <div class="titan-products-grid">
                <!-- 1. Ball Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/pressure-seal-gate-valve.png@w=683'); ?>" alt="Ball Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/industrial-ball-valve-manufacturer/')); ?>">Ball Valves</a></h3>
                        <p class="titan-product-meta">Floating &amp; Trunnion Mounted • 1-Piece, 2-Piece, 3-Piece • Full &amp; Reduced Bore • Class 150# to 2500#</p>
                        <a href="<?php echo esc_url(home_url('/products/industrial-ball-valve-manufacturer/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 2. Gate Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am.png'); ?>" alt="Gate Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/gate-valves/')); ?>">Gate Valves</a></h3>
                        <p class="titan-product-meta">Bolted Bonnet, Pressure Seal &amp; Forged Steel • Rising Stem • API 600 / API 602 / ASME B16.34</p>
                        <a href="<?php echo esc_url(home_url('/products/gate-valves/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 3. Globe Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-1.png'); ?>" alt="Globe Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/globe-valves/')); ?>">Globe Valves</a></h3>
                        <p class="titan-product-meta">Precision Throttling &amp; Regulation • Straight &amp; Y-Type • BS 1873 / API 623 / ASME B16.34</p>
                        <a href="<?php echo esc_url(home_url('/products/globe-valves/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 4. Check Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-2.png'); ?>" alt="Check Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/check-valves/')); ?>">Check Valves</a></h3>
                        <p class="titan-product-meta">Dual Plate, Swing Check &amp; Lift Check • Non-Return Sealing • API 594 / API 6D</p>
                        <a href="<?php echo esc_url(home_url('/products/check-valves/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 5. Butterfly Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-3.png'); ?>" alt="Butterfly Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/butterfly-valve/')); ?>">Butterfly Valves</a></h3>
                        <p class="titan-product-meta">Wafer, Lug &amp; Flanged • Concentric &amp; High-Performance Offset • API 609 / BS 5155</p>
                        <a href="<?php echo esc_url(home_url('/products/butterfly-valve/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 6. Plug Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/inverted-plug-valve-1.png@w=683'); ?>" alt="Plug Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/plug-valve/')); ?>">Plug Valves</a></h3>
                        <p class="titan-product-meta">Lubricated &amp; Non-Lubricated Sleeve Type • Inverted Plug • API 599 / BS 5353</p>
                        <a href="<?php echo esc_url(home_url('/products/plug-valve/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 7. Strainer -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-4.png'); ?>" alt="Strainers" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/strainer/')); ?>">Strainer</a></h3>
                        <p class="titan-product-meta">Y-Type, T-Type, Basket &amp; Duplex Strainers • Stainless &amp; Carbon Steel Meshes</p>
                        <a href="<?php echo esc_url(home_url('/products/strainer/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 8. Diaphragm Valve -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-5.png'); ?>" alt="Diaphragm Valve" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/diaphragm-valve/')); ?>">Diaphragm Valve</a></h3>
                        <p class="titan-product-meta">Weir &amp; Straight-Through Type • Lined &amp; Unlined for Corrosive &amp; Pharma Media</p>
                        <a href="<?php echo esc_url(home_url('/products/diaphragm-valve/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 9. Piston Valve -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-6.png'); ?>" alt="Piston Valve" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/piston-valve/')); ?>">Piston Valve</a></h3>
                        <p class="titan-product-meta">Zero-Leakage Sealing Rings • Ideal for Thermal Fluid, Steam &amp; Aggressive Chemicals</p>
                        <a href="<?php echo esc_url(home_url('/products/piston-valve/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 10. SDNR Valve -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-24-2025-09_18_25-am-1.png@w=683'); ?>" alt="SDNR Valve" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/screw-down-non-return-sdnr-valve/')); ?>">Screw Down Non Return (SDNR) Valve</a></h3>
                        <p class="titan-product-meta">Dual Isolation &amp; Check Functionality • Marine &amp; Boiler Feed Line Applications</p>
                        <a href="<?php echo esc_url(home_url('/products/screw-down-non-return-sdnr-valve/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 11. Safety Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-7.png'); ?>" alt="Safety Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/safety-valves/')); ?>">Safety Valves</a></h3>
                        <p class="titan-product-meta">Overpressure Protection • Full Lift &amp; Proportional • ASME Sec I &amp; VIII / IBR Approved</p>
                        <a href="<?php echo esc_url(home_url('/products/safety-valves/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- 12. Control Valves -->
                <div class="titan-product-card">
                    <div class="titan-product-img-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/chatgpt-image-jul-5-2025-11_22_06-am-8.png'); ?>" alt="Control Valves" class="titan-product-img" loading="lazy">
                    </div>
                    <div class="titan-product-info">
                        <h3 class="titan-product-name"><a href="<?php echo esc_url(home_url('/products/control-valves/')); ?>">Control Valves</a></h3>
                        <p class="titan-product-meta">Pneumatic &amp; Motor Actuated Globe/Rotary Valves • Precise Flow, Temperature &amp; Pressure Control</p>
                        <a href="<?php echo esc_url(home_url('/products/control-valves/')); ?>" class="btn btn-outline btn-sm">Explore Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Action CTA -->
            <div style="text-align: center; margin-top: 4rem;">
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-paper-plane"></i> Send Valve Enquiry
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

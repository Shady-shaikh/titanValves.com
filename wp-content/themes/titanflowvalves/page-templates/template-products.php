<?php
/**
 * Template Name: Products Catalog
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Our Products</h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Overview Text -->
    <section class="titan-section" style="padding-bottom: 2rem;">
        <div class="titan-container">
            <div style="max-width: 960px; margin: 0 auto; text-align: justify; font-size: 1.05rem; line-height: 1.85; color: var(--titan-gray-700);">
                <p>
                    <strong>Titan Flow Valves</strong> offers a comprehensive range of industrial valves designed to meet the demanding requirements of various industries including oil &amp; gas, power, water treatment, petrochemicals, steel, and general engineering. Every valve we manufacture is built to deliver high performance, tight shutoff, and long service life.
                </p>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="titan-section titan-section-alt">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Complete Catalog</div>
                <h2 class="titan-section-title">Industrial Valves Portfolio</h2>
                <p class="titan-section-subtitle">Engineered for extreme temperature, high pressure, and severe corrosive environments</p>
            </div>

            <div class="titan-products-grid">
                <?php
                $products = array(
                    array('name' => 'Ball Valves', 'url' => '/products/industrial-ball-valve-manufacturer/', 'img' => '2025/07/industrial-ball-valves.png@w=1024', 'desc' => 'High pressure 2-way and 3-way industrial ball valves.'),
                    array('name' => 'Gate Valves', 'url' => '/products/gate-valves/', 'img' => '2025/07/chatgpt-image-jul-5-2025-11_22_06-am.png@w=683', 'desc' => 'Bolted bonnet, pressure seal, and forged steel gate valves.'),
                    array('name' => 'Globe Valves', 'url' => '/products/globe-valves/', 'img' => '2025/07/Globe-valves.png@w=1024', 'desc' => 'Throttling and precise flow regulation valves.'),
                    array('name' => 'Check Valves', 'url' => '/products/check-valves/', 'img' => '2025/07/check-valve.png@w=1024', 'desc' => 'Non-return swing, dual plate, and lift check valves.'),
                    array('name' => 'Butterfly Valve', 'url' => '/products/butterfly-valve/', 'img' => '2025/07/chatgpt-image-jul-5-2025-11_54_45-am.png@w=683', 'desc' => 'Wafer, lug, and double flanged butterfly valves.'),
                    array('name' => 'Plug Valve', 'url' => '/products/plug-valve/', 'img' => '2025/07/plug-valves.png@w=1024', 'desc' => 'Lubricated and sleeved plug valves for slurry service.'),
                    array('name' => 'Strainer', 'url' => '/products/strainer/', 'img' => '2025/07/strainer.png@w=1024', 'desc' => 'Y-type and basket strainers for pipeline protection.'),
                    array('name' => 'Diaphragm Valve', 'url' => '/products/diaphragm-valve/', 'img' => '2025/07/diaphragm-valves.png@w=1024', 'desc' => 'Corrosion and abrasion resistant flow control valves.'),
                    array('name' => 'Piston Valve', 'url' => '/products/piston-valve/', 'img' => '2025/07/piston-valves.png@w=1024', 'desc' => 'Zero-leakage steam and thermal fluid piston valves.'),
                    array('name' => 'SDNR Valve', 'url' => '/products/screw-down-non-return-sdnr-valve/', 'img' => '2025/07/SDNR.png@w=1024', 'desc' => 'Screw down non return valves for boiler feed lines.'),
                    array('name' => 'Safety Valves', 'url' => '/products/safety-valves/', 'img' => '2025/07/safety-valves.png@w=1024', 'desc' => 'Overpressure safety and relief valves for critical equipment.'),
                    array('name' => 'Control Valves', 'url' => '/products/control-valves/', 'img' => '2025/07/Control-valves.png@w=1024', 'desc' => 'Pneumatic and electric actuated process control valves.'),
                    array('name' => 'Air Valves', 'url' => '/brands/air-valves/', 'img' => '2025/08/ChatGPT-Image-Aug-26-2025-11_35_10-AM.png@w=1024', 'desc' => 'Air release and vacuum breaker valves for pipelines.')
                );

                foreach ($products as $prod) :
                ?>
                    <div class="titan-product-card">
                        <div class="titan-product-img-box">
                            <a href="<?php echo esc_url(home_url($prod['url'])); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/' . $prod['img']); ?>" alt="<?php echo esc_attr($prod['name']); ?>" class="titan-product-img" loading="lazy">
                            </a>
                        </div>
                        <div class="titan-product-info">
                            <h3 class="titan-product-name">
                                <a href="<?php echo esc_url(home_url($prod['url'])); ?>"><?php echo esc_html($prod['name']); ?></a>
                            </h3>
                            <p class="titan-product-meta"><?php echo esc_html($prod['desc']); ?></p>
                            <a href="<?php echo esc_url(home_url($prod['url'])); ?>" class="btn btn-outline btn-sm">
                                View Specs <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

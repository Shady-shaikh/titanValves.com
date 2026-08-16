<?php
/**
 * Template Name: Brands Directory
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">Brands</h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Overview Text -->
    <section class="titan-section" style="padding-bottom: 2rem;">
        <div class="titan-container">
            <div style="max-width: 960px; margin: 0 auto; text-align: justify; font-size: 1.05rem; line-height: 1.85; color: var(--titan-gray-700);">
                <p>
                    <strong>Titan Flow Valves</strong> is a premier <strong>industrial valve supplier, dealer, and stockist in India</strong>, partnering with world-renowned valve manufacturers to deliver high-quality, reliable, and durable flow control solutions across various industries.
                </p>
            </div>
        </div>
    </section>

    <!-- Brands Grid -->
    <section class="titan-section titan-section-alt">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Authorized Stockist</div>
                <h2 class="titan-section-title">Authorized Brands Portfolio</h2>
                <p class="titan-section-subtitle">Delivering certified authentic valves backed by OEM warranty and test certificates</p>
            </div>

            <div class="titan-brands-grid">
                <?php
                $brands = array(
                    array('name' => 'KSB VALVES', 'url' => '/brands/ksb-valves/', 'desc' => 'Cast gate, globe, check, and high pressure seal valves.'),
                    array('name' => 'AUDCO Valves', 'url' => '/brands/audco-valves/', 'desc' => 'Taper plug valves, lubricated plug valves, and ball valves.'),
                    array('name' => 'FORBES MARSHALL Valves', 'url' => '/brands/forbes-marshall-valves/', 'desc' => 'Steam engineering, control valves, and trap solutions.'),
                    array('name' => 'SPIRAX Valves', 'url' => '/brands/spirax-valves/', 'desc' => 'Steam traps, pressure reducing valves, and pipeline gear.'),
                    array('name' => 'UNIKLINGER Valves', 'url' => '/brands/uniklinger-valves/', 'desc' => 'Piston valves, level gauges, and steam equipment.'),
                    array('name' => 'INTERVALVE Valves', 'url' => '/brands/intervalve-valves/', 'desc' => 'Wafer butterfly and dual plate check valves.'),
                    array('name' => 'KIRLOSKAR Valves', 'url' => '/brands/kirloskar-valves/', 'desc' => 'Cast steel sluice, gate, and reflux check valves.'),
                    array('name' => 'LEADER Valves', 'url' => '/brands/leader-valves/', 'desc' => 'Industrial bronze and cast steel pipeline valves.'),
                    array('name' => 'BDK Valves', 'url' => '/brands/bdk-valves/', 'desc' => 'Diaphragm, ball, and severe service process valves.')
                );

                foreach ($brands as $brand) :
                ?>
                    <div class="titan-brand-card">
                        <div>
                            <div class="titan-badge titan-badge-dark" style="margin-bottom: 0.75rem;">Authorized Dealer</div>
                            <h3 class="titan-brand-title">
                                <a href="<?php echo esc_url(home_url($brand['url'])); ?>"><?php echo esc_html($brand['name']); ?></a>
                            </h3>
                            <p class="titan-brand-desc"><?php echo esc_html($brand['desc']); ?></p>
                        </div>
                        <a href="<?php echo esc_url(home_url($brand['url'])); ?>" class="btn btn-outline btn-sm">
                            Explore Catalog <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

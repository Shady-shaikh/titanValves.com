<?php
/**
 * Navigation Bar Component
 *
 * @package TitanFlowValves
 */
?>
<header class="titan-header">
    <div class="titan-container">
        <div class="titan-nav-wrapper">
            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="titan-logo-link" rel="home">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <img 
                        src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/titan_flow_valves-logo-3.png@w=300'); ?>" 
                        alt="<?php bloginfo('name'); ?>" 
                        class="titan-logo-img"
                        onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/titan_flow_valves-logo-1.png@w=904'); ?>'"
                    >
                    <?php
                }
                ?>
            </a>

            <!-- Desktop Primary Menu -->
            <nav class="titan-nav" aria-label="<?php esc_attr_e('Primary Navigation', 'titanflowvalves'); ?>">
                <ul class="titan-nav-menu">
                    <li class="titan-nav-item <?php echo is_page('about') || is_page('about-us') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="titan-nav-link">ABOUT US</a>
                    </li>
                    <li class="titan-nav-item <?php echo is_page('products') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="titan-nav-link">
                            PRODUCTS
                            <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                        </a>
                        <div class="titan-dropdown titan-dropdown-wide">
                            <a href="<?php echo esc_url(home_url('/products/industrial-ball-valve-manufacturer/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Ball Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/gate-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Gate Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/globe-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Globe Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/check-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Check Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/butterfly-valve/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Butterfly Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/plug-valve/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Plug Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/strainer/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Strainer</a>
                            <a href="<?php echo esc_url(home_url('/products/diaphragm-valve/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Diaphragm Valve</a>
                            <a href="<?php echo esc_url(home_url('/products/piston-valve/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Piston Valve</a>
                            <a href="<?php echo esc_url(home_url('/products/screw-down-non-return-sdnr-valve/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Screw Down Non Return (SDNR) valve</a>
                            <a href="<?php echo esc_url(home_url('/products/safety-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Safety Valves</a>
                            <a href="<?php echo esc_url(home_url('/products/control-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Control Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/air-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> Air Valves</a>
                        </div>
                    </li>
                    <li class="titan-nav-item <?php echo is_page('power-tools') || is_page('wrenches') || is_page('flange-maintenance') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/power-tools/')); ?>" class="titan-nav-link">
                            POWER TOOLS
                            <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                        </a>
                        <div class="titan-dropdown">
                            <a href="<?php echo esc_url(home_url('/wrenches/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> WRENCHES</a>
                            <a href="<?php echo esc_url(home_url('/flange-maintenance/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> FLANGE MAINTENANCE</a>
                        </div>
                    </li>
                    <li class="titan-nav-item <?php echo is_page('brands') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/brands/')); ?>" class="titan-nav-link">
                            BRANDS
                            <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                        </a>
                        <div class="titan-dropdown titan-dropdown-wide">
                            <a href="<?php echo esc_url(home_url('/brands/ksb-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> KSB Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/audco-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> AUDCO Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/forbes-marshall-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> FORBES MARSHALL Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/spirax-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> SPIRAX Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/uniklinger-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> UNIKLINGER Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/intervalve-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> INTERVALVE Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/kirloskar-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> KIRLOSKAR Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/leader-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> LEADER Valves</a>
                            <a href="<?php echo esc_url(home_url('/brands/bdk-valves/')); ?>" class="titan-dropdown-link"><i class="fa-solid fa-angle-right"></i> BDK Valves</a>
                        </div>
                    </li>
                    <li class="titan-nav-item <?php echo is_home() || is_singular('post') || is_category() ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="titan-nav-link">BLOGS</a>
                    </li>
                    <li class="titan-nav-item <?php echo is_page('contact-us') || is_page('contact') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="titan-nav-link">CONTACT US</a>
                    </li>
                </ul>
            </nav>

            <!-- Brochure Button & Mobile Toggle -->
            <div class="titan-header-actions">
                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:AP:afdfbc37-5af6-4561-a82d-c1db4f31d164" target="_blank" rel="noopener" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-file-arrow-down"></i> Brochure
                </a>
                <button type="button" class="titan-mobile-toggle" aria-label="<?php esc_attr_e('Open Mobile Menu', 'titanflowvalves'); ?>">
                    <i class="fa-solid fa-bars fa-xl"></i>
                </button>
            </div>
        </div>
    </div>
</header>

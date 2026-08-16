<?php
/**
 * Mobile Navigation Drawer Component
 *
 * @package TitanFlowValves
 */
?>
<div class="titan-drawer-overlay"></div>
<div class="titan-mobile-drawer" id="titanMobileDrawer">
    <div class="titan-drawer-header">
        <img 
            src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/titan_flow_valves-logo-3.png@w=300'); ?>" 
            alt="<?php bloginfo('name'); ?>" 
            style="height: 36px; width: auto;"
            onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/titan_flow_valves-logo-1.png@w=904'); ?>'"
        >
        <button type="button" class="titan-drawer-close" aria-label="<?php esc_attr_e('Close Menu', 'titanflowvalves'); ?>">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="titan-drawer-body">
        <ul class="titan-drawer-menu">
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="titan-drawer-link">ABOUT US</a></li>
            <li>
                <a href="<?php echo esc_url(home_url('/products/')); ?>" class="titan-drawer-link titan-drawer-has-submenu">
                    PRODUCTS <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                </a>
                <div class="titan-drawer-submenu">
                    <a href="<?php echo esc_url(home_url('/products/industrial-ball-valve-manufacturer/')); ?>" class="titan-drawer-sublink">Ball Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/gate-valves/')); ?>" class="titan-drawer-sublink">Gate Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/globe-valves/')); ?>" class="titan-drawer-sublink">Globe Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/check-valves/')); ?>" class="titan-drawer-sublink">Check Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/butterfly-valve/')); ?>" class="titan-drawer-sublink">Butterfly Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/plug-valve/')); ?>" class="titan-drawer-sublink">Plug Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/strainer/')); ?>" class="titan-drawer-sublink">Strainer</a>
                    <a href="<?php echo esc_url(home_url('/products/diaphragm-valve/')); ?>" class="titan-drawer-sublink">Diaphragm Valve</a>
                    <a href="<?php echo esc_url(home_url('/products/piston-valve/')); ?>" class="titan-drawer-sublink">Piston Valve</a>
                    <a href="<?php echo esc_url(home_url('/products/screw-down-non-return-sdnr-valve/')); ?>" class="titan-drawer-sublink">Screw Down Non Return (SDNR) valve</a>
                    <a href="<?php echo esc_url(home_url('/products/safety-valves/')); ?>" class="titan-drawer-sublink">Safety Valves</a>
                    <a href="<?php echo esc_url(home_url('/products/control-valves/')); ?>" class="titan-drawer-sublink">Control Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/air-valves/')); ?>" class="titan-drawer-sublink">Air Valves</a>
                </div>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/power-tools/')); ?>" class="titan-drawer-link titan-drawer-has-submenu">
                    POWER TOOLS <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                </a>
                <div class="titan-drawer-submenu">
                    <a href="<?php echo esc_url(home_url('/wrenches/')); ?>" class="titan-drawer-sublink">WRENCHES</a>
                    <a href="<?php echo esc_url(home_url('/flange-maintenance/')); ?>" class="titan-drawer-sublink">FLANGE MAINTENANCE</a>
                </div>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/brands/')); ?>" class="titan-drawer-link titan-drawer-has-submenu">
                    BRANDS <i class="fa-solid fa-chevron-down dropdown-chevron"></i>
                </a>
                <div class="titan-drawer-submenu">
                    <a href="<?php echo esc_url(home_url('/brands/ksb-valves/')); ?>" class="titan-drawer-sublink">KSB Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/audco-valves/')); ?>" class="titan-drawer-sublink">AUDCO Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/forbes-marshall-valves/')); ?>" class="titan-drawer-sublink">FORBES MARSHALL Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/spirax-valves/')); ?>" class="titan-drawer-sublink">SPIRAX Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/uniklinger-valves/')); ?>" class="titan-drawer-sublink">UNIKLINGER Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/intervalve-valves/')); ?>" class="titan-drawer-sublink">INTERVALVE Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/kirloskar-valves/')); ?>" class="titan-drawer-sublink">KIRLOSKAR Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/leader-valves/')); ?>" class="titan-drawer-sublink">LEADER Valves</a>
                    <a href="<?php echo esc_url(home_url('/brands/bdk-valves/')); ?>" class="titan-drawer-sublink">BDK Valves</a>
                </div>
            </li>
            <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="titan-drawer-link">BLOGS</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="titan-drawer-link">CONTACT US</a></li>
        </ul>
        <div style="margin-top: 2rem;">
            <a href="https://acrobat.adobe.com/id/urn:aaid:sc:AP:afdfbc37-5af6-4561-a82d-c1db4f31d164" target="_blank" rel="noopener" class="btn btn-primary" style="width: 100%;">
                <i class="fa-solid fa-file-arrow-down"></i> Download Brochure
            </a>
        </div>
    </div>
</div>

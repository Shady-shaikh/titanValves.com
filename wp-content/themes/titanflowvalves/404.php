<?php
/**
 * 404 Error Page Template
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">404 - Page Not Found</h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Error Content -->
    <section class="titan-section text-center">
        <div class="titan-container">
            <div style="max-width: 600px; margin: 0 auto;">
                <div style="font-size: 6rem; font-weight: 800; font-family: var(--titan-font-heading); color: var(--titan-amber-600); line-height: 1; margin-bottom: 1.5rem;">
                    404
                </div>
                <h2 style="margin-bottom: 1rem; font-size: 1.75rem; color: var(--titan-dark-900);">
                    The Requested Industrial Page Was Not Found
                </h2>
                <p style="color: var(--titan-gray-600); margin-bottom: 2.5rem; line-height: 1.7;">
                    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Please explore our product catalog or contact us directly.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-house"></i> Return Home
                    </a>
                    <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn-outline btn-lg">
                        <i class="fa-solid fa-list-check"></i> Valve Catalog
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-secondary btn-lg">
                        <i class="fa-solid fa-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

<?php
/**
 * Default Page Template - Titan Flow Valves
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title"><?php the_title(); ?></h1>
            <?php titan_breadcrumbs(); ?>
        </div>
    </section>

    <!-- Page Content -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="entry-content">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

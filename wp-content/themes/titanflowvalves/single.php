<?php
/**
 * Single Blog Post Template - Titan Flow Valves
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
        ?>
        <!-- Article Header Banner -->
        <section class="titan-page-header">
            <div class="titan-container">
                <div class="titan-badge titan-badge-dark" style="margin-bottom: 0.75rem;">
                    <?php echo get_the_date('F j, Y'); ?>
                </div>
                <h1 class="titan-page-header-title"><?php the_title(); ?></h1>
                <?php titan_breadcrumbs(); ?>
            </div>
        </section>

        <!-- Article Content -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('titan-section'); ?>>
            <div class="titan-container">
                <div class="entry-content">
                    <?php
                    if (has_post_thumbnail()) :
                        ?>
                        <div style="margin-bottom: 2.5rem; text-align: center;">
                            <?php the_post_thumbnail('large', array('style' => 'max-width:100%; height:auto; border-radius:var(--titan-radius-lg);')); ?>
                        </div>
                        <?php
                    endif;

                    the_content();
                    ?>
                </div>

                <!-- Back to Blog CTA -->
                <div style="max-width: 1000px; margin: 3rem auto 0; padding-top: 2rem; border-top: 1px solid var(--titan-gray-200); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-outline">
                        <i class="fa-solid fa-arrow-left"></i> Back to Blog Articles
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary">
                        <i class="fa-solid fa-paper-plane"></i> Inquire About These Products
                    </a>
                </div>
            </div>
        </article>
        <?php
    endwhile;
    ?>

</main>

<?php
get_footer();

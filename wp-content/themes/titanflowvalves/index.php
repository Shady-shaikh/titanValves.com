<?php
/**
 * Fallback Main Index Template - Titan Flow Valves
 *
 * @package TitanFlowValves
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title"><?php bloginfo('name'); ?></h1>
            <p style="color: var(--titan-gray-300); margin-top: 0.5rem;"><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <!-- Content Loop -->
    <section class="titan-section">
        <div class="titan-container">
            <?php if (have_posts()) : ?>
                <div class="titan-card-grid-3">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('titan-feature-card'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="titan-feature-img-wrap">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', array('class' => 'titan-feature-img')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="titan-feature-body">
                                <div class="titan-badge" style="margin-bottom: 0.75rem;">
                                    <?php echo get_the_date('F j, Y'); ?>
                                </div>
                                <h2 class="titan-feature-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="titan-feature-text">
                                    <?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?>
                                </p>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">
                                        Read Article <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div style="margin-top: 3rem; text-align: center;">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '<i class="fa-solid fa-chevron-left"></i> Previous',
                        'next_text' => 'Next <i class="fa-solid fa-chevron-right"></i>',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="text-center" style="max-width: 600px; margin: 0 auto;">
                    <h2>No Content Found</h2>
                    <p>Please return to our <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--titan-amber-600); font-weight:600;">homepage</a>.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();

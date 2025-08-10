<?php
/**
 * The template for displaying date archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Link_City
 */

get_header(); ?>

<div class="category-page">
    <section class="post-category-page">
        <div class="grid-container">
            <h1 class="sec-title text-center text-primary">
                <span>
                    <?php
                    if (is_year()) {
                        echo get_the_date('Y');
                    } elseif (is_month()) {
                        echo get_the_date('F Y');
                    } elseif (is_day()) {
                        echo get_the_date();
                    }
                    ?>
                </span>
            </h1>

            <?php if (have_posts()) : ?>
                <div class="post-list" id="post-list">
                    <div class="grid-box grid-3 tablet-grid-2 mobile-grid-2" id="post-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="post-item relative overflow-hidden bdrs-20">
                                <div class="img-wrap bdrs-20">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', ['class' => 'lazyloaded']); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title_attribute(); ?>" />
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="cont-wrap">
                                    <time class="date fs-14 lh-22 text-3 fw300">
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </time>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="limit-line limit-2 ts-04 fs-20 lh-32 fw700 text-0">
                                            <?php the_title(); ?>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    // Pagination
                    $pagination = get_the_posts_pagination([
                        'mid_size' => 2,
                        'prev_text' => __('Trước', 'link-city'),
                        'next_text' => __('Sau', 'link-city'),
                        'class' => 'pagination',
                    ]);
                    
                    if ($pagination) : ?>
                        <div class="pagination-wrapper">
                            <?php echo $pagination; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="no-posts">
                    <p><?php _e('Không có bài viết nào trong thời gian này.', 'link-city'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>

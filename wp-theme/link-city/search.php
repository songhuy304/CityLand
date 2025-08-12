<?php
/**
 * The template for displaying search results pages.
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>

<div class="category-page">
    <section class="post-category-page">
        <div class="grid-container">
            <h1 class="sec-title text-center text-primary">
                <span>
                    <?php
                    printf(
                        /* translators: %s: search query. */
                        esc_html__('Kết quả tìm kiếm cho: %s', 'link-city'),
                        '<span class="search-query">' . get_search_query() . '</span>'
                    );
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
                            <div class="excerpt fs-16 lh-24 text-3 fw400">
                                <?php the_excerpt(); ?>
                            </div>
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
                <p><?php _e('Không tìm thấy kết quả nào phù hợp với từ khóa của bạn.', 'link-city'); ?></p>
                <div class="search-suggestions">
                    <h3><?php _e('Gợi ý tìm kiếm:', 'link-city'); ?></h3>
                    <ul>
                        <li><?php _e('Kiểm tra chính tả của từ khóa', 'link-city'); ?></li>
                        <li><?php _e('Thử từ khóa khác', 'link-city'); ?></li>
                        <li><?php _e('Thử từ khóa ngắn hơn', 'link-city'); ?></li>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
// Include footer contact section similar to index layout
get_template_part('template-parts/section', 'footer');

get_footer();
?>
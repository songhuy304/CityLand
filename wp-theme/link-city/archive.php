<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Link_City
 */

get_header(); ?>

<div class="category-page">
    <section class="post-category-page">
        <div class="grid-container">
            <?php if (is_category()) : ?>
                <h1 class="sec-title text-center text-primary">
                    <span>TIN TỨC</span>
                </h1>
            <?php elseif (is_tag()) : ?>
                <h1 class="sec-title text-center text-primary">
                    <span>Tag: <?php single_tag_title(); ?></span>
                </h1>
            <?php elseif (is_author()) : ?>
                <h1 class="sec-title text-center text-primary">
                    <span>Tác giả: <?php the_author(); ?></span>
                </h1>
            <?php elseif (is_date()) : ?>
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
            <?php else : ?>
                <h1 class="sec-title text-center text-primary">
                    <span>Tin tức</span>
                </h1>
            <?php endif; ?>

            <?php
            // Get all categories for the terms menu
            $categories = get_categories([
                'orderby' => 'name',
                'order' => 'ASC',
                // 'hide_empty' => true,
            ]);
            
            if ($categories) : ?>
                <div class="terms-menu">
                    <ul class="flex-box ls-none al-center jus-center">
                        <?php foreach ($categories as $category) : ?>
                            <li class="<?php echo (is_category($category->term_id)) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

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

                    <?php
                    // Load more button for AJAX pagination (if needed)
                    $max_pages = $wp_query->max_num_pages;
                    if ($max_pages > 1) : ?>
                        <div class="btn btn-primary mx-auto load-more-posts"
                             data-page="2"
                             data-max="<?php echo esc_attr($max_pages); ?>"
                             data-limit="9"
                             data-tax="<?php echo (is_category()) ? 'category' : ''; ?>"
                             data-term="<?php echo (is_category()) ? get_queried_object_id() : ''; ?>"
                             data-target="post-grid"
                             data-post-type="post">
                            <span>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.25 12H20.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5 3.75V20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="no-posts">
                    <p><?php _e('Không có bài viết nào được tìm thấy.', 'link-city'); ?></p>
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

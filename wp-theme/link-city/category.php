<?php
/**
 * The template for displaying category pages
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
                <span>TIN TỨC</span>
            </h1>

            <?php
            // Get all categories for the terms menu
            $categories = get_categories([
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true,
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
                        <?php 
                        // Check if current category has slug 'video'
                        $current_category = get_queried_object();
                        $is_video_category = ($current_category && $current_category->slug === 'video');
                        
                        while (have_posts()) : the_post(); ?>
                            <?php if ($is_video_category) : ?>
                                <!-- Video Post Item UI -->
                                <div class="post-item relative overflow-hidden bdrs-20 post-item-media">
                                    <div class="img-wrap bdrs-20">
                                        <svg
                                            class="p-middle ts-04"
                                            width="55"
                                            height="56"
                                            viewBox="0 0 55 56"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <circle
                                                cx="27.5"
                                                cy="28"
                                                r="26.25"
                                                stroke="white"
                                                stroke-width="2.5"
                                            ></circle>
                                            <path
                                                d="M36.1561 26.6754L23.974 19.2304C23.7688 19.105 23.5338 19.0364 23.2934 19.0319C23.0529 19.0273 22.8155 19.0869 22.6057 19.2045C22.3959 19.3222 22.2213 19.4936 22.0997 19.7011C21.9781 19.9086 21.9141 20.1448 21.9141 20.3853V35.2766C21.9143 35.517 21.9785 35.7531 22.1001 35.9605C22.2217 36.1679 22.3963 36.3392 22.6061 36.4568C22.8158 36.5744 23.053 36.634 23.2934 36.6296C23.5338 36.6251 23.7687 36.5567 23.974 36.4315L36.1561 28.9865C36.354 28.8655 36.5175 28.6957 36.631 28.4933C36.7444 28.291 36.804 28.0629 36.804 27.8309C36.804 27.599 36.7444 27.3709 36.631 27.1686C36.5175 26.9662 36.354 26.7964 36.1561 26.6754V26.6754Z"
                                                stroke="white"
                                                stroke-width="2.5"
                                            ></path>
                                        </svg>

                                        <?php 
                                        $video_url = get_post_meta(get_the_ID(), 'video_url', true);
                                        if ($video_url) : ?>
                                            <a
                                                href="<?php echo esc_url($video_url); ?>"
                                                data-fancybox
                                                data-aspect-ratio="16 / 9"
                                            >
                                        <?php else : ?>
                                            <a
                                                href="<?php the_permalink(); ?>"
                                                data-fancybox
                                                data-aspect-ratio="16 / 9"
                                            >
                                        <?php endif; ?>

                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', ['class' => 'lazyloaded']); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title_attribute(); ?>" />
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="cont-wrap">
                                        <time class="date fs-14 lh-22 text-3 fw300"> <?php echo get_the_date('d/m/Y'); ?> </time>
                                        <a href="<?php echo esc_url($video_url ? $video_url : get_permalink()); ?>" data-fancybox="">
                                            <h3 class="limit-line limit-2 ts-04 text-center fs-20 lh-32 fw700 text-0">
                                                <?php the_title(); ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                            <?php else : ?>
                                <!-- Regular Post Item UI -->
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
                            <?php endif; ?>
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
                    // Load more button for AJAX pagination
                    $max_pages = $wp_query->max_num_pages;
                    if ($max_pages > 1) : ?>
                        <div class="btn btn-primary mx-auto load-more-posts"
                             data-page="2"
                             data-max="<?php echo esc_attr($max_pages); ?>"
                             data-limit="9"
                             data-tax="category"
                             data-term="<?php echo get_queried_object_id(); ?>"
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
                    <p><?php _e('Không có bài viết nào trong danh mục này.', 'link-city'); ?></p>
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

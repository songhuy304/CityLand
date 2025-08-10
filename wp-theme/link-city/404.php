<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Link_City
 */

get_header(); ?>

<div class="error-404-page">
    <section class="error-404 not-found">
        <div class="grid-container">
            <div class="error-content text-center">
                <h1 class="sec-title text-primary">
                    <span>404</span>
                </h1>
                
                <h2 class="error-title fs-32 lh-40 fw700 text-0">
                    <?php _e('Trang không tồn tại', 'link-city'); ?>
                </h2>
                
                <p class="error-description fs-18 lh-28 text-3 fw400">
                    <?php _e('Trang bạn đang tìm kiếm có thể đã bị xóa, đổi tên hoặc tạm thời không khả dụng.', 'link-city'); ?>
                </p>
                
                <div class="error-actions">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <?php _e('Về trang chủ', 'link-city'); ?>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/')); ?>#search-lightbox" class="btn btn-secondary">
                        <?php _e('Tìm kiếm', 'link-city'); ?>
                    </a>
                </div>
                
                <div class="suggested-content">
                    <h3 class="fs-20 lh-28 fw600 text-0">
                        <?php _e('Có thể bạn quan tâm:', 'link-city'); ?>
                    </h3>
                    
                    <div class="suggested-posts grid-box grid-3 tablet-grid-2 mobile-grid-2">
                        <?php
                        // Get recent posts
                        $recent_posts = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                        ]);
                        
                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
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
                                            <h4 class="limit-line limit-2 ts-04 fs-16 lh-24 fw600 text-0">
                                                <?php the_title(); ?>
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

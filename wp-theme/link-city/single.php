<?php
/**
 * The template for displaying all single posts.
 */
get_header();

?>

<div id="detail-page">
    <div class="single-post-wrap">
        <section class="post-title-group">
            <div class="grid-container">
                <div class="text-center">
                    <div class="text-center text-uppercase text-secondary fs-20 lh-28 fw700">
                        <?php
                        $categories = get_the_category();
echo !empty($categories) ? esc_html($categories[0]->name) : esc_html__('Tin dự án', 'link-city');
?>
                    </div>
                    <h1 class="sec-title text-primary text-uppercase"><?php the_title(); ?></h1>
                </div>
                <div class="flex-box al-center jus-center post-date-share">
                    <div class="date flex-box al-center fs-16 lh-24 fw400 text-6">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.5 7V3M16.5 7V3M7.5 11H17.5M5.5 21H19.5C20.6046 21 21.5 20.1046 21.5 19V7C21.5 5.89543 20.6046 5 19.5 5H5.5C4.39543 5 3.5 5.89543 3.5 7V19C3.5 20.1046 4.39543 21 5.5 21Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <?php echo esc_html(get_the_date('d/m/Y')); ?>
                    </div>
                    <div class="share flex-box al-center">
                        <span class="fs-16 lh-24 fw400"><?php esc_html_e('Chia sẻ:', 'link-city'); ?></span>
                        <?php $permalink = urlencode(get_permalink()); ?>
                        <a class="hover-zoom-img flex-box" href="http://www.facebook.com/sharer.php?u=<?php echo $permalink; ?>" target="_blank" rel="noopener">
                            <svg width="24" height="244" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 9C18.5 4.02943 14.4706 0 9.5 0C4.52943 0 0.5 4.02943 0.5 9C0.5 13.4921 3.79115 17.2155 8.09375 17.8907V11.6016H5.80859V9H8.09375V7.01719C8.09375 4.76156 9.43742 3.51562 11.4932 3.51562C12.4776 3.51562 13.5078 3.69141 13.5078 3.69141V5.90625H12.373C11.255 5.90625 10.9062 6.60006 10.9062 7.3125V9H13.4023L13.0033 11.6016H10.9062V17.8907C15.2088 17.2155 18.5 13.4921 18.5 9Z" fill="#666666"></path>
                            </svg>
                        </a>
                        <div class="hover-zoom-img flex-box click-copy" data-copy="<?php echo esc_attr(get_permalink()); ?>">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4698 6.6968L13.326 4.84065C13.7089 4.45731 14.1637 4.15319 14.6642 3.94565C15.1648 3.73811 15.7013 3.63123 16.2432 3.6311C16.785 3.63098 17.3216 3.73761 17.8223 3.94492C18.3229 4.15222 18.7778 4.45613 19.161 4.83929C19.5441 5.22244 19.848 5.67734 20.0553 6.17798C20.2626 6.67862 20.3693 7.2152 20.3691 7.75706C20.369 8.29893 20.2621 8.83546 20.0546 9.336C19.8471 9.83655 19.5429 10.2913 19.1596 10.6743L16.5079 13.3259C16.1249 13.709 15.6702 14.0128 15.1697 14.2201C14.6692 14.4274 14.1328 14.5341 13.5911 14.5341C13.0494 14.5341 12.513 14.4274 12.0126 14.2201C11.5121 14.0128 11.0574 13.709 10.6743 13.3259" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.5302 17.3034L10.674 19.1595C10.2911 19.5429 9.8363 19.847 9.33576 20.0545C8.83521 20.2621 8.29868 20.3689 7.75682 20.3691C7.21496 20.3692 6.67838 20.2626 6.17773 20.0553C5.67709 19.848 5.2222 19.544 4.83904 19.1609C4.45589 18.7777 4.15198 18.3228 3.94467 17.8222C3.73737 17.3216 3.63073 16.785 3.63086 16.2431C3.63099 15.7012 3.73787 15.1647 3.94541 14.6642C4.15295 14.1636 4.45707 13.7089 4.8404 13.3259L7.49205 10.6742C7.87509 10.2912 8.32983 9.98736 8.8303 9.78006C9.33077 9.57276 9.86717 9.46606 10.4089 9.46606C10.9506 9.46606 11.487 9.57276 11.9874 9.78006C12.4879 9.98736 12.9426 10.2912 13.3257 10.6742" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="zalo-share-button" data-href="" data-oaid="3783004274492024975" data-layout="4" data-color="white" data-customize="false" style="position: relative; display: inline-block; width: 40px; height: 40px">
                            <?php $zid = 'zalo-' . get_the_ID(); ?>
                            <iframe id="<?php echo esc_attr($zid); ?>" name="<?php echo esc_attr($zid); ?>" frameborder="0" allowfullscreen="" scrolling="no" width="40px" height="40px" style="position: absolute; z-index: 99; top: 0px; left: 0px" src="https://button-share.zalo.me/share_inline?id=<?php echo esc_attr($zid); ?>&layout=4&color=white&customize=false&width=40&height=40&isDesktop=true&url=<?php echo $permalink; ?>&shareType=0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="normal-post">
            <div class="grid-container">
                <div class="content-post">
                    <div class="content-wrapper">
                        <div class="detail-cmain">
                            <div class="detail-content afcbc-body" data-role="content">
                                <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
?>
                            </div>
                        </div>
                    </div>
                    <div class="flex-box al-center jus-between flex-wrap">
                        <div class="share-btn flex-box al-center jus-end mobile-col-12 mobile-jus-start">
                            <span class="fs-16 lh-24 fw400"><?php esc_html_e('Chia sẻ:', 'link-city'); ?></span>
                            <a class="hover-zoom-img flex-box" href="http://www.facebook.com/sharer.php?u=<?php echo $permalink; ?>" target="_blank" rel="noopener">
                                <svg width="29" height="28" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 21C17.4706 21 21.5 16.9706 21.5 12C21.5 7.02944 17.4706 3 12.5 3C7.52944 3 3.5 7.02944 3.5 12C3.5 16.9706 7.52944 21 12.5 21Z" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.25 8.25012H14.75C14.1533 8.25012 13.581 8.48718 13.159 8.90913C12.7371 9.33109 12.5 9.90338 12.5 10.5001V21.0001" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.5 13.5001H15.5" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <div class="hover-zoom-img flex-box click-copy" data-copy="<?php echo esc_attr(get_permalink()); ?>">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4698 6.6968L13.326 4.84065C13.7089 4.45731 14.1637 4.15319 14.6642 3.94565C15.1648 3.73811 15.7013 3.63123 16.2432 3.6311C16.785 3.63098 17.3216 3.73761 17.8223 3.94492C18.3229 4.15222 18.7778 4.45613 19.161 4.83929C19.5441 5.22244 19.848 5.67734 20.0553 6.17798C20.2626 6.67862 20.3693 7.2152 20.3691 7.75706C20.369 8.29893 20.2621 8.83546 20.0546 9.336C19.8471 9.83655 19.5429 10.2913 19.1596 10.6743L16.5079 13.3259C16.1249 13.709 15.6702 14.0128 15.1697 14.2201C14.6692 14.4274 14.1328 14.5341 13.5911 14.5341C13.0494 14.5341 12.513 14.4274 12.0126 14.2201C11.5121 14.0128 11.0574 13.709 10.6743 13.3259" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5302 17.3034L10.674 19.1595C10.2911 19.5429 9.8363 19.847 9.33576 20.0545C8.83521 20.2621 8.29868 20.3689 7.75682 20.3691C7.21496 20.3692 6.67838 20.2626 6.17773 20.0553C5.67709 19.848 5.2222 19.544 4.83904 19.1609C4.45589 18.7777 4.15198 18.3228 3.94467 17.8222C3.73737 17.3216 3.63073 16.785 3.63086 16.2431C3.63099 15.7012 3.73787 15.1647 3.94541 14.6642C4.15295 14.1636 4.45707 13.7089 4.8404 13.3259L7.49205 10.6742C7.87509 10.2912 8.32983 9.98736 8.8303 9.78006C9.33077 9.57276 9.86717 9.46606 10.4089 9.46606C10.9506 9.46606 11.487 9.57276 11.9874 9.78006C12.4879 9.98736 12.9426 10.2912 13.3257 10.6742" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="zalo-share-button" data-href="" data-oaid="3783004274492024975" data-layout="4" data-color="white" data-customize="false" style="position: relative; display: inline-block; width: 40px; height: 40px">
                                <?php $zid2 = 'zalo-btm-' . get_the_ID(); ?>
                                <iframe id="<?php echo esc_attr($zid2); ?>" name="<?php echo esc_attr($zid2); ?>" frameborder="0" allowfullscreen="" scrolling="no" width="40px" height="40px" style="position: absolute; z-index: 99; top: 0px; left: 0px" src="https://button-share.zalo.me/share_inline?id=<?php echo esc_attr($zid2); ?>&layout=4&color=white&customize=false&width=40&height=40&isDesktop=true&url=<?php echo $permalink; ?>&shareType=0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        // Related posts section (similar to Tin tức in content-sections.php)
        $current_id = get_the_ID();
$related_args = [
    'post_type' => 'post',
    'posts_per_page' => 10,
    'post__not_in' => [$current_id],
    'ignore_sticky_posts' => true,
    'orderby' => 'date',
    'order' => 'DESC',
];
$cats = wp_get_post_categories($current_id);
if (!empty($cats)) {
    $related_args['category__in'] = $cats;
}
$related_query = new WP_Query($related_args);
if ($related_query->have_posts()) : ?>
        <section class="section section-light home-sec-3 overflow-hidden">
            <div class="grid-container add-pt">
                <div class="title-group text-center">
                    <h2 class="sec-title text-primary" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                        <span>BÀI VIẾT</span> LIÊN QUAN
                    </h2>
                    <div class="content-wrapper" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                        <p><?php esc_html_e('Khám phá thêm các bài viết mới nhất từ K-Home New City.', 'link-city'); ?></p>
                    </div>
                </div>

                <div class="box-swiper relative" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                    <div class="swiper home-swiper-2">
                        <div class="swiper-wrapper">
                            <?php while ($related_query->have_posts()) : $related_query->the_post();
                                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                if (!$thumb) {
                                    $thumb = get_template_directory_uri() . '/assets/images/header-bg-min.jpg';
                                }
                                ?>
                            <div class="swiper-slide" style="width: 389px">
                                <div class="post-item relative overflow-hidden bdrs-20">
                                    <div class="img-wrap bdrs-20">
                                        <a href="<?php the_permalink(); ?>">
                                            <img width="800" height="373" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                                        </a>
                                    </div>
                                    <div class="cont-wrap">
                                        <time class="date fs-14 lh-22 text-3 fw300"> <?php echo esc_html(get_the_date('d/m/Y')); ?> </time>
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="limit-line limit-2 ts-04 fs-20 lh-32 fw700 text-0"><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    <div class="swiper-arrow-2 style-2 prev arrow-outer prev" tabindex="0" role="button" aria-label="Previous slide">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 4.5L7.5 12L15 19.5" stroke="#326768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>

                    <div class="swiper-arrow-2 style-2 next arrow-outer next" tabindex="0" role="button" aria-label="Next slide">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5L16.5 12L9 19.5" stroke="#326768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;
wp_reset_postdata();
?>
    </div>
</div>

<?php
// Include footer contact section similar to index layout
get_template_part('template-parts/section', 'footer');

get_footer();
?>
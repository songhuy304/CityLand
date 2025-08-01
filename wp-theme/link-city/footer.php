    <!-- ============================ START FIXED BUTTONS ============================ -->
    <div class="fixed-buttons">
        <div class="item">
            <div class="item-inner">
                <a href="tel:<?php echo get_theme_mod('phone_number', '0937961212'); ?>" title="Hotline">
                    <img width="22" height="22" 
                         src="<?php echo get_theme_mod('phone_icon', get_template_directory_uri() . '/assets/images/Mask-group.svg'); ?>" 
                         alt="Hotline">
                    <span>Hotline</span>
                </a>
            </div>
        </div>

        <div class="item">
            <div class="item-inner">
                <a href="<?php echo get_theme_mod('zalo_link', 'https://zalo.me/3783004274492024975'); ?>" 
                   title="Liên hệ Zalo" target="_blank">
                    <img width="37" height="16" 
                         src="<?php echo get_theme_mod('zalo_icon', get_template_directory_uri() . '/assets/images/Group-18811.svg'); ?>" 
                         alt="Liên hệ Zalo">
                    <span>Liên hệ Zalo</span>
                </a>
            </div>
        </div>

        <div class="item">
            <div class="item-inner">
                <a href="<?php echo get_theme_mod('messenger_link', 'https://www.facebook.com/khomenewcityofficial'); ?>" 
                   title="Messenger" target="_blank">
                    <img width="23" height="22" 
                         src="<?php echo get_theme_mod('messenger_icon', get_template_directory_uri() . '/assets/images/Vector.svg'); ?>" 
                         alt="Messenger">
                    <span>Messenger</span>
                </a>
            </div>
        </div>

        <div class="item">
            <div class="item-inner">
                <a href="<?php echo get_theme_mod('tiktok_link', 'https://www.tiktok.com/@thelinkcity.net'); ?>" 
                   title="Tiktok" target="_blank">
                    <img width="23" height="22" 
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.svg" alt="Tiktok">
                    <span>Tiktok</span>
                </a>
            </div>
        </div>
    </div>
    <!-- ============================ END FIXED BUTTONS ============================ -->

    <!-- Search Modal -->
    <div class="modal-container" id="search-lightbox">
        <div class="modal-content">
            <div class="search-lightbox-title">Chúng tôi có thể giúp bạn tìm kiếm?</div>
            <div class="searchform-wrapper ux-search-box relative is-large">
                <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
                    <div class="flex-row relative">
                        <div class="input-container">
                            <input class="search-field mb-0" name="s" value="<?php echo get_search_query(); ?>" 
                                   id="s" placeholder="Tìm kiếm">
                        </div>
                        <div class="icon-search">
                            <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Nộp">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1406 22.6565C18.396 22.6565 22.6562 18.3962 22.6562 13.1409C22.6562 7.88553 18.396 3.62524 13.1406 3.62524C7.88529 3.62524 3.625 7.88553 3.625 13.1409C3.625 18.3962 7.88529 22.6565 13.1406 22.6565Z" 
                                          stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.8687 19.8698L25.3742 25.3753" stroke="white" stroke-width="1.5" 
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="live-search-results text-left z-top"></div>
                </form>
            </div>
            <div class="search-keywords">
                <a href="<?php echo esc_url(home_url('/?s=K-Home New City')); ?>">K-Home New City</a>
                <a href="<?php echo esc_url(home_url('/?s=Tiện ích')); ?>">Tiện ích</a>
                <a href="<?php echo esc_url(home_url('/?s=Hình ảnh dự án')); ?>">Hình ảnh dự án</a>
                <a href="<?php echo esc_url(home_url('/?s=Tiến độ')); ?>">Tiến độ</a>
                <a href="<?php echo esc_url(home_url('/?s=Legacy Central')); ?>">Legacy Central</a>
            </div>
        </div>
    </div>

    <!-- Loading Screen -->
    <div class="load_home_page">
        <div class="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <svg class="draw-svg" xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 418 180" width="450" height="194">
            <!-- SVG paths will be included here -->
        </svg>
        <script>
            setTimeout(() => {
                jQuery(".load_home_page").addClass("complete");
                setTimeout(() => {
                    jQuery("body").removeClass("unscrollable");
                }, 800);
            }, 1000);
        </script>
    </div>

</div><!-- .wrapper -->

<?php wp_footer(); ?>
</body>
</html>

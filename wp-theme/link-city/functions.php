<?php

/**
 * Link City Theme Functions.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup.
 */
function link_city_setup()
{
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    // Add custom logo support
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ]);
}
add_action('after_setup_theme', 'link_city_setup');

/**
 * Enqueue scripts and styles.
 */
function link_city_scripts()
{
    // Deregister WordPress default jQuery and load from CDN
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', [], '3.7.1', false);
    wp_enqueue_script('jquery');

    // Enqueue main stylesheet
    wp_enqueue_style('link-city-style', get_stylesheet_uri(), [], '1.0.0');

    // Enqueue theme CSS files
    wp_enqueue_style('link-city-core', get_template_directory_uri() . '/assets/css/core.css', [], '1.0.0');
    wp_enqueue_style('link-city-styles', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0.0');

    // Enqueue external CSS
    wp_enqueue_style('fullpage-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.37/fullpage.min.css', [], '4.0.37');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.0.0');
    wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css', [], '6.0.0');

    // Enqueue external JavaScript
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', ['jquery'], '2.3.1', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', ['jquery'], '11.0.0', true);
    wp_enqueue_script('fullpage-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.37/fullpage.min.js', ['jquery'], '4.0.37', true);
    wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js', ['jquery'], '6.0.0', true);

    // Enqueue custom JavaScript
    wp_enqueue_script('link-city-app', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], '1.0.0', true);

    // Add inline script to ensure $ is available
    wp_add_inline_script('jquery', 'window.$ = window.jQuery;', 'after');

    // Add custom inline scripts if needed
    wp_add_inline_script('link-city-app', '
        // Initialize any additional scripts here
        console.log("Link City theme scripts loaded successfully");
    ', 'after');
}
add_action('wp_enqueue_scripts', 'link_city_scripts');

/**
 * Customizer additions.
 */
function link_city_customize_register($wp_customize)
{
    // Contact Information Section
    $wp_customize->add_section('link_city_contact', [
        'title' => __('Thông tin liên hệ', 'link-city'),
        'priority' => 30,
    ]);

    // Phone Number
    $wp_customize->add_setting('phone_number', [
        'default' => '0937961212',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('phone_number', [
        'label' => __('Số điện thoại', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'text',
    ]);

    // Zalo Link
    $wp_customize->add_setting('zalo_link', [
        'default' => 'https://zalo.me/0922222256',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('zalo_link', [
        'label' => __('Link Zalo', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'url',
    ]);

    // TikTok Link
    $wp_customize->add_setting('tiktok_link', [
        'default' => 'https://www.tiktok.com/@thelinkcity.net',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('tiktok_link', [
        'label' => __('Link TikTok', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'url',
    ]);

    // Messenger Link
    $wp_customize->add_setting('messenger_link', [
        'default' => 'https://www.facebook.com/vandaibds1410',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('messenger_link', [
        'label' => __('Link Messenger', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'url',
    ]);

    // Google Map Link
    $wp_customize->add_setting('google_map_link', [
        'default' => 'https://maps.app.goo.gl/nHH9dRpE6nq9rAGz9',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('google_map_link', [
        'label' => __('Link Google Map', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'url',
    ]);

    // Email Address
    $wp_customize->add_setting('email_address', [
        'default' => 'thelinkcitykimoanh@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('email_address', [
        'label' => __('Địa chỉ email', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'email',
    ]);

    // Copyright Text
    $wp_customize->add_setting('copyright_text', [
        'default' => '© 2024 The Link City. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('copyright_text', [
        'label' => __('Copyright', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'text',
    ]);

    // reCAPTCHA Site Key
    $wp_customize->add_setting('recaptcha_site_key', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('recaptcha_site_key', [
        'label' => __('reCAPTCHA Site Key', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'text',
    ]);

    // reCAPTCHA Secret Key
    $wp_customize->add_setting('recaptcha_secret_key', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('recaptcha_secret_key', [
        'label' => __('reCAPTCHA Secret Key', 'link-city'),
        'section' => 'link_city_contact',
        'type' => 'password',
    ]);
}
add_action('customize_register', 'link_city_customize_register');

/**
 * Auto-install Classic Editor plugin on theme activation.
 */
function link_city_auto_install_classic_editor()
{
    // Only attempt installs in admin and with proper capability
    if (!is_admin() || !current_user_can('install_plugins')) {
        return;
    }

    // Ensure plugin helpers are available
    if (!function_exists('is_plugin_active')) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    // Skip if already active
    if (is_plugin_active('classic-editor/classic-editor.php')) {
        return;
    }

    // Ensure filesystem helpers are available
    require_once ABSPATH . 'wp-admin/includes/file.php';

    // Only proceed when filesystem method is direct to avoid credential prompts on activation
    if (function_exists('get_filesystem_method') && get_filesystem_method() !== 'direct') {
        return;
    }

    // Include the plugin installer classes
    require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    require_once ABSPATH . 'wp-admin/includes/class-automatic-upgrader-skin.php';

    // Install Classic Editor
    $plugin = 'classic-editor/classic-editor.php';
    $api = plugins_api('plugin_information', ['slug' => 'classic-editor']);

    if (is_wp_error($api) || empty($api->download_link)) {
        return;
    }

    $upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());
    $result = $upgrader->install($api->download_link);
    if (!is_wp_error($result)) {
        activate_plugin($plugin);
    }
}
add_action('after_switch_theme', 'link_city_auto_install_classic_editor');

/**
 * Auto-install Contact Form 7 plugin.
 */
function link_city_auto_install_cf7()
{
    // Only attempt installs in admin and with proper capability
    if (!is_admin() || !current_user_can('install_plugins')) {
        return;
    }

    // Ensure plugin helpers are available
    if (!function_exists('is_plugin_active')) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    // Skip if already active
    if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
        return;
    }

    // Ensure filesystem helpers are available
    require_once ABSPATH . 'wp-admin/includes/file.php';

    // Only proceed when filesystem method is direct to avoid credential prompts on activation
    if (function_exists('get_filesystem_method') && get_filesystem_method() !== 'direct') {
        return;
    }

    // Include the plugin installer classes
    require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    require_once ABSPATH . 'wp-admin/includes/class-automatic-upgrader-skin.php';

    // Install Contact Form 7
    $plugin = 'contact-form-7/wp-contact-form-7.php';
    $api = plugins_api('plugin_information', ['slug' => 'contact-form-7']);

    if (is_wp_error($api) || empty($api->download_link)) {
        return;
    }

    $upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());
    $result = $upgrader->install($api->download_link);
    if (!is_wp_error($result)) {
        activate_plugin($plugin);
    }
}
add_action('after_switch_theme', 'link_city_auto_install_cf7');

/**
 * Create default Contact Form 7 form.
 */
function link_city_create_default_cf7_form()
{
    // Check if Contact Form 7 is active
    if (!function_exists('is_plugin_active')) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
        // Check if default form doesn't already exist
        $existing_form = get_page_by_title('Liên hệ mặc định', OBJECT, 'wpcf7_contact_form');

        if (!$existing_form) {
            $form_content = '
                <div class="form-wrap flex-box flex-wrap al-center jus-between">
                    <div class="form-group col-12">
                        [text* your-name placeholder "Họ và tên *"]
                    </div>
                    <div class="form-group col-12">
                        [email* your-email placeholder "Email *"]
                    </div>
                    <div class="form-group col-12">
                        [tel your-phone placeholder "Số điện thoại"]
                    </div>
                    <div class="form-group col-12">
                        [textarea your-message placeholder "Nội dung tin nhắn *"]
                    </div>
                    <div class="form-group col-12 submit-btn">
                        [submit "Gửi tin nhắn"]
                        <div class="btn btn-primary btn-icon-right">
                            <span class="text">ĐĂNG KÝ</span>
                            <span class="icon"><svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.25 12H20.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M14 5.25L20.75 12L14 18.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                ';

            $form_id = wp_insert_post([
                'post_title' => 'Liên hệ mặc định',
                'post_content' => $form_content,
                'post_status' => 'publish',
                'post_type' => 'wpcf7_contact_form',
            ]);

            if ($form_id) {
                update_post_meta($form_id, '_form', $form_content);

                // Thêm các meta fields cần thiết cho Contact Form 7
                update_post_meta($form_id, '_mail', [
                    'subject' => 'Thông tin liên hệ từ website',
                    'sender' => '[your-name] <[your-email]>',
                    'body' => 'Từ: [your-name] <[your-email]>
                    Số điện thoại: [your-tel]
                    Nội dung: [your-message]',
                    'recipient' => get_option('admin_email'),
                    'use_html' => false,
                    'exclude_blank' => false,
                ]);

                update_post_meta($form_id, '_mail_2', [
                    'active' => false,
                ]);

                update_post_meta($form_id, '_messages', [
                    'mail_sent_ok' => 'Tin nhắn của bạn đã được gửi thành công',
                    'mail_sent_ng' => 'Có lỗi xảy ra khi gửi tin nhắn. Vui lòng thử lại sau.',
                    'validation_error' => 'Đã xảy ra lỗi xác thực. Vui lòng kiểm tra và thử lại.',
                    'spam' => 'Tin nhắn bị coi là spam. Vui lòng thử lại sau.',
                    'acceptance_missing' => 'Bạn phải chấp nhận các điều khoản trước khi gửi tin nhắn.',
                    'invalid_required' => 'Vui lòng điền đầy đủ thông tin bắt buộc.',
                    'invalid_too_long' => 'Thông tin nhập vào quá dài.',
                    'invalid_too_short' => 'Thông tin nhập vào quá ngắn.',
                    'upload_failed' => 'Có lỗi không xác định khi tải file lên.',
                    'upload_file_type_invalid' => 'Bạn không được phép tải lên loại file này.',
                    'upload_file_too_large' => 'File tải lên quá lớn.',
                    'upload_failed_php_error' => 'Có lỗi khi tải file lên.',
                    'invalid_date' => 'Vui lòng nhập ngày theo định dạng YYYY-MM-DD.',
                    'date_too_early' => 'Ngày này quá sớm.',
                    'date_too_late' => 'Ngày này quá muộn.',
                    'invalid_number' => 'Vui lòng nhập một số.',
                    'number_too_small' => 'Số này quá nhỏ.',
                    'number_too_large' => 'Số này quá lớn.',
                    'quiz_answer_not_correct' => 'Câu trả lời cho câu đố không đúng.',
                    'invalid_email' => 'Vui lòng nhập địa chỉ email hợp lệ.',
                    'invalid_url' => 'Vui lòng nhập URL hợp lệ.',
                    'invalid_tel' => 'Vui lòng nhập số điện thoại hợp lệ.',
                ]);

                update_post_meta($form_id, '_additional_settings', '');
                update_post_meta($form_id, '_locale', 'vi');
                update_post_meta($form_id, '_config_errors', []);
                update_post_meta($form_id, '_version', '5.7.7');
            }
        }
    }
}
add_action('after_switch_theme', 'link_city_create_default_cf7_form');

/**
 * Add custom body classes.
 */
function link_city_body_classes($classes)
{
    // Add custom body classes based on page
    if (is_front_page()) {
        $classes[] = 'is-light-section';
    }

    return $classes;
}
add_filter('body_class', 'link_city_body_classes');

/**
 * Ensure light section style for single posts as well.
 */
function link_city_single_body_class($classes)
{
    if (is_single()) {
        $classes[] = 'is-light-section';
    }

    return $classes;
}
add_filter('body_class', 'link_city_single_body_class');

/**
 * Ensure light section style for archive pages as well.
 */
function link_city_archive_body_class($classes)
{
    if (is_archive()) {
        $classes[] = 'is-light-section';
    }

    return $classes;
}
add_filter('body_class', 'link_city_archive_body_class');

/**
 * Copy sample HTML file into theme and create a sample post on activation.
 * Ensures only one sample post exists by checking the unique slug.
 */
function link_city_activate_sample_post()
{
    // Create a sample post exactly once (no file read; content embedded below)
    $slug = 'bai-viet-mau-k-home';
    $existing = get_page_by_path($slug, OBJECT, 'post');

    if ($existing) {
        return; // Already created; do nothing
    }

    // Embedded sample article content (inner HTML of the detail content area)
    $content = <<<'HTML'
<p class="detail-sapo" data-role="sapo"><strong>Với sự đồng hành của Surbana Jurong (Singapore), Kim Oanh Land (thành viên Kim Oanh Group) đã phát triển bộ tiêu chuẩn Singapore áp dụng cho dự án The Link City – Đô thị nhà ở xã hội chuẩn Singapore đầu tiên tại Việt Nam.</strong></p>
<p>Trong đó, bên cạnh các phân khu thấp tầng đã được đông đảo khách hàng đón nhận trong thời gian vừa qua, khu căn hộ K-Home Apartment là mảnh ghép cuối tạo nên bức tranh của một cộng đồng hiện đại và bền vững.</p>
<h2>Dự án “chuẩn Singapore” có gì hấp dẫn?</h2>
<p>Surbana Jurong là tập đoàn có kinh nghiệm triển khai hơn 80% nhà ở xã hội tại Singapore. Các dự án nhà ở xã hội của Surbana Jurong phát triển không chỉ đáp ứng tốt các yêu cầu về quy hoạch, thiết kế hiện đại mà còn mang nhiều giá trị nhân văn và hướng đến kiến tạo môi trường sống bền vững cho cộng đồng.</p>
<p>Đồng hành với Kim Oanh Land, Surbana Jurong đã dành nhiều tâm huyết nghiên cứu và điều chỉnh từ nguyên lý thiết kế nhà ở xã hội tại Singapore cho phù hợp với điều kiện khí hậu, văn hóa và thói quen sinh hoạt của người Việt, từ đó phát triển thành bộ 6 tiêu chuẩn Singapore để áp dụng vào dự án The Link City với quy mô lên đến 26,69ha. Các tiêu chuẩn này bao gồm: vị trí chiến lược, giao thông kết nối, nhiều hành lang xanh, thiết kế thông minh, quy hoạch chuẩn chỉnh và hệ tiện ích “All in One”.</p>
<figure class="wp-caption aligncenter" style="width: 1920px"><img fetchpriority="high" decoding="async" class="wp-image-2704 size-full" src="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3.jpg" alt="" width="1920" height="1080" sizes="(max-width: 1920px) 100vw, 1920px" srcset="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3.jpg 1920w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3-711x400.jpg 711w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3-1400x788.jpg 1400w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3-768x432.jpg 768w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-3-1536x864.jpg 1536w" /><figcaption class="wp-caption-text">Phối cảnh tổng thể dự án The Link City ngay lõi trung tâm thành phố mới Bình Dương</figcaption></figure>
<p>Thực tế, The Link City sở hữu vị trí chiến lược ngay lõi trung tâm thành phố mới Bình Dương. Dự án tiếp giáp các mặt tiền đường lớn gồm Lê Lai, Lê Lợi, Nguyễn Văn Linh và đường số 8 KCN VSIP2, kết nối trực tiếp với hàng loạt trục giao thông huyết mạch như ĐT741, ĐT742, đại lộ Mỹ Phước – Tân Vạn, Vành đai 3, Vành đai 4, cao tốc TP.HCM – Thủ Dầu Một – Chơn Thành, depot metro thành phố mới Bình Dương – Suối Tiên – Bến Thành…</p>
<p>Nhờ đó, cư dân có thể dễ dàng kết nối đến các tiện ích lân cận như tòa tháp đôi trung tâm hành chính Bình Dương, công viên 75ha, AEON Mall, WTC Gateway, Đại học Quốc tế miền Đông… Ngoài ra, The Link City còn tọa lạc tại khu vực có nhiều khu công nghiệp lớn, mang đến sự thuận tiện cho công việc hằng ngày của cư dân.</p>
<p>Một ưu điểm nổi bật khác của The Link City được chú trọng đầu tư 7,1ha mảng xanh phân bố xuyên suốt dự án. Nổi bật là 10 công viên chủ đề tạo thành hành lang xanh bao quanh dự án như những “lá chắn sinh thái” giúp thanh lọc không khí, giảm tiếng ồn, giúp cải thiện chất lượng sống cho cư dân. Ngoài ra, dự án được phát triển theo tiêu chuẩn công trình xanh EDGE giúp tiết kiệm 20% lượng điện, nước tiêu thụ và giảm 20% hàm lượng carbon trong vật liệu, hướng đến phát triển bền vững và thân thiện với môi trường.</p>
<p>Không chỉ nhà phố mà các căn hộ K-Home Apartment cũng được Surbana Jurong thiết kế tỉ mỉ, tinh tế, tối ưu công năng sử dụng cũng như đảm bảo đón ánh sáng và gió tự nhiên tốt nhất. Nội thất căn hộ được bố trí gọn gàng, phân tách rõ ràng theo từng chức năng sử dụng, giúp thuận tiện trong sinh hoạt và phát huy hiệu quả nhất từng không gian chức năng.</p>
<figure class="wp-caption aligncenter" style="width: 1920px"><img decoding="async" class="wp-image-2705 size-full" src="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4.jpg" alt="" width="1920" height="1067" srcset="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4.jpg 1920w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4-720x400.jpg 720w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4-1400x778.jpg 1400w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4-768x427.jpg 768w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-4-1536x854.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /><figcaption class="wp-caption-text">Căn hộ K-Home Apartment được thiết kế tối ưu công năng sử dụng, luôn thoáng mát và ngập tràn ánh sáng tự nhiên</figcaption></figure>
<p>Đặc biệt, The Link City mang đến cho cư dân hệ tiện ích “All in One” hiện đại gồm 10 công viên, 4 hồ bơi, trường mầm non, trường liên cấp chuẩn quốc tế Elite School, khu vui chơi trẻ em, tổ hợp thể thao ngoài trời (sân pickleball, sân tennis, sân bóng đá), clubhouse, phố thương mại – ẩm thực, trung tâm y tế – văn hóa, khu BBQ, vườn thiền… Tất cả đáp ứng mọi nhu cầu sống hằng ngày của từng nhóm cư dân khác nhau.</p>
<figure class="wp-caption aligncenter" style="width: 1920px"><img decoding="async" class="wp-image-2706 size-full" src="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2.jpg" alt="" width="1920" height="1080" srcset="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2.jpg 1920w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2-711x400.jpg 711w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2-1400x788.jpg 1400w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2-768x432.jpg 768w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-2-1536x864.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /><figcaption class="wp-caption-text">Tổ hợp thể thao ngoài trời kết hợp clubhouse, quán cà phê tại The Link City</figcaption></figure>
<h2>Chất lượng được bảo chứng bởi những thương hiệu hàng đầu</h2>
<p>Không chỉ được đầu tư bài bản về mặt quy hoạch, thiết kế, The Link City còn đảm bảo tiến độ và chất lượng xây dựng bởi các nhà thầu hàng đầu thị trường như Coteccons, Handong, COSACO, An Phong, An Phước Bình Dương… Dự kiến, các phân khu thấp tầng sẽ bắt đầu bàn giao từ cuối năm 2025.</p>
<p>Riêng khu căn hộ K-Home Apartment do Coteccons làm tổng thầu được sử dụng những công nghệ xây dựng tiên tiến nhất hiện nay. Đây là minh chứng rõ nét cho năng lực triển khai và cam kết của Kim Oanh Land, đồng thời cũng là nền tảng vững chắc đảm bảo K-Home Apartment sẽ về đích và bắt đầu bàn giao căn hộ cho khách hàng từ quý 2/2027.</p>
<figure class="wp-caption aligncenter" style="width: 1430px"><img decoding="async" class="wp-image-2707 size-full" src="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-1.jpg" alt="" width="1430" height="804" srcset="https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-1.jpg 1430w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-1-711x400.jpg 711w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-1-1400x787.jpg 1400w, https://k-homenewcity.vn/wp-content/uploads/2025/07/chuan-singapore-dinh-hinh-gia-tri-can-ho-k-home-apartment-1-768x432.jpg 768w" sizes="(max-width: 1430px) 100vw, 1430px" /><figcaption class="wp-caption-text">Tiện ích hồ bơi tại công viên Vườn Nhiệt Đới và trường liên cấp chuẩn quốc tế Elite School đã hoàn thiện, sẵn sàng phục vụ cư dân ngay khi bàn giao sản phẩm thấp tầng vào cuối năm 2025</figcaption></figure>
<p>Đại diện Kim Oanh Land còn cho biết, dù chính sách giá bán ưu đãi hỗ trợ người lao động an cư chỉ từ 778 triệu đồng/căn (bao gồm nội thất) nhưng danh mục vật liệu xây dựng và nội thất bàn giao của K-Home Apartment được công ty chọn lựa từ những thương hiệu danh tiếng như An Cường, Hảo Cảnh, Poli-FSL, Varmora Granito, J.Lilen… mang đến những căn hộ chất lượng, đúng chuẩn phong cách xanh Singapore.</p>
<p>Giới kinh doanh bất động sản nhận xét, sự xuất hiện của dự án đô thị The Link City nói chung, khu căn hộ K-Home Apartment nói riêng đã thổi một luồng gió mới cho thị trường. Bởi từ trước đến nay, các dự án nhà ở xã hội trong mắt nhiều người thường nằm ở những khu vực ít cư dân sinh sống, giao thông thiếu kết nối, thiết kế chưa được chăm chút và đặc biệt là tiện ích nội khu rất hạn chế. Trong khi đó, không chỉ sở hữu vị trí “vàng”, The Link City cũng như K-Home Apartment còn được kiến tạo từ sự tổng hòa giữa các yếu tố về quy hoạch, thiết kế chuẩn Singapore, hệ tiện ích “All in One” theo hướng phát triển bền vững cùng với chất lượng thi công vượt trội.</p>
<p>Đó cũng là lý do chính mà chỉ sau một thời gian ngắn, gần như toàn bộ sản phẩm thấp tầng của dự án đã tìm được chủ sở hữu. Riêng căn hộ K-Home Apartment đã được hơn 500 khách hàng đặt chỗ thành công chỉ sau một tháng giới thiệu ra thị trường.</p>
HTML;

    // Build post array
    $postarr = [
        'post_title' => '‘Chuẩn Singapore’ định hình giá trị căn hộ K-Home Apartment',
        'post_name' => $slug,
        'post_content' => $content,
        'post_status' => 'publish',
        'post_type' => 'post',
    ];

    // Ensure category "Tin dự án" exists and get its ID (avoid admin-only helpers)
    $cat_id = 0;
    $term = get_term_by('slug', 'tin-du-an', 'category');
    if ($term && !is_wp_error($term)) {
        $cat_id = (int) $term->term_id;
    } else {
        $created = wp_insert_term('Tin dự án', 'category', ['slug' => 'tin-du-an']);
        if (!is_wp_error($created) && isset($created['term_id'])) {
            $cat_id = (int) $created['term_id'];
        }
    }

    if ($cat_id) {
        $postarr['post_category'] = [$cat_id];
    }

    // Insert post
    wp_insert_post($postarr);
}
add_action('after_switch_theme', 'link_city_activate_sample_post');

/*
 * Disable Contact Form 7 auto paragraph wrapping
 */
add_filter('wpcf7_autop_or_not', '__return_false');

// Thêm trường video_url vào bài viết khi là bài thuộc category video
function add_video_url_custom_field($post) {
    if (has_term('video', 'category', $post)) {
        $video_url = get_post_meta($post->ID, 'video_url', true);
        ?>
        <div class="video-url-field">
            <label for="video_url"><?php _e('Video URL', 'textdomain'); ?></label>
            <input type="text" name="video_url" id="video_url" value="<?php echo esc_url($video_url); ?>" class="widefat" />
        </div>
        <?php
    }
}
add_action('edit_form_after_title', 'add_video_url_custom_field');

// Lưu giá trị video_url khi bài viết được lưu
function save_video_url_custom_field($post_id) {
    if (isset($_POST['video_url'])) {
        // Lưu giá trị video_url vào post meta
        update_post_meta($post_id, 'video_url', sanitize_text_field($_POST['video_url']));
    }
}
add_action('save_post', 'save_video_url_custom_field');

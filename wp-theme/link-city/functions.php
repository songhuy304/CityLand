<?php
/**
 * Link City Theme Functions
 *
 * @package Link_City
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function link_city_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'link_city_setup');

/**
 * Enqueue scripts and styles
 */
function link_city_scripts() {
    // Deregister WordPress default jQuery and load from CDN
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', false);
    wp_enqueue_script('jquery');
    
    // Enqueue main stylesheet
    wp_enqueue_style('link-city-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue theme CSS files
    wp_enqueue_style('link-city-core', get_template_directory_uri() . '/assets/css/core.css', array(), '1.0.0');
    wp_enqueue_style('link-city-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');
    
    // Enqueue external CSS
    wp_enqueue_style('fullpage-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.37/fullpage.min.css', array(), '4.0.37');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    
    // Enqueue external JavaScript
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '2.3.1', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0.0', true);
    wp_enqueue_script('fullpage-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.37/fullpage.min.js', array('jquery'), '4.0.37', true);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('link-city-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
    
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
 * Customizer additions
 */
function link_city_customize_register($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('link_city_contact', array(
        'title'    => __('Thông tin liên hệ', 'link-city'),
        'priority' => 30,
    ));
    
    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default'           => '0937961212',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('phone_number', array(
        'label'   => __('Số điện thoại', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'text',
    ));
    
    // Zalo Link
    $wp_customize->add_setting('zalo_link', array(
        'default'           => 'https://zalo.me/3783004274492024975',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('zalo_link', array(
        'label'   => __('Link Zalo', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'url',
    ));
    
    // TikTok Link
    $wp_customize->add_setting('tiktok_link', array(
        'default'           => 'https://www.tiktok.com/@thelinkcity.net',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('tiktok_link', array(
        'label'   => __('Link TikTok', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'url',
    ));
    
    // Messenger Link
    $wp_customize->add_setting('messenger_link', array(
        'default'           => 'https://www.facebook.com/khomenewcityofficial',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('messenger_link', array(
        'label'   => __('Link Messenger', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'url',
    ));
    
    // Google Map Link
    $wp_customize->add_setting('google_map_link', array(
        'default'           => 'https://maps.app.goo.gl/nHH9dRpE6nq9rAGz9',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('google_map_link', array(
        'label'   => __('Link Google Map', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'url',
    ));
    
    // Email Address
    $wp_customize->add_setting('email_address', array(
        'default'           => 'info@kimoanhgroup.vn',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('email_address', array(
        'label'   => __('Địa chỉ email', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'email',
    ));
    
    // Copyright Text
    $wp_customize->add_setting('copyright_text', array(
        'default'           => '© 2024 K-Home New City. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('copyright_text', array(
        'label'   => __('Copyright', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'text',
    ));
    
    // reCAPTCHA Site Key
    $wp_customize->add_setting('recaptcha_site_key', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('recaptcha_site_key', array(
        'label'   => __('reCAPTCHA Site Key', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'text',
    ));
    
    // reCAPTCHA Secret Key
    $wp_customize->add_setting('recaptcha_secret_key', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('recaptcha_secret_key', array(
        'label'   => __('reCAPTCHA Secret Key', 'link-city'),
        'section' => 'link_city_contact',
        'type'    => 'password',
    ));
}
add_action('customize_register', 'link_city_customize_register');

/**
 * Auto-install Contact Form 7 plugin
 */
function link_city_auto_install_cf7() {
    // Check if Contact Form 7 is not already installed
    if (!is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
        // Include the plugin installer
        require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
        require_once ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php';
        
        // Install Contact Form 7
        $plugin = 'contact-form-7/wp-contact-form-7.php';
        $api = plugins_api('plugin_information', array('slug' => 'contact-form-7'));
        
        if (!is_wp_error($api)) {
            $upgrader = new Plugin_Upgrader(new WP_Ajax_Upgrader_Skin());
            $upgrader->install($api->download_link);
            activate_plugin($plugin);
        }
    }
}
add_action('after_switch_theme', 'link_city_auto_install_cf7');

/**
 * Create default Contact Form 7 form
 */
function link_city_create_default_cf7_form() {
    // Check if Contact Form 7 is active
    if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
        // Check if default form doesn't already exist
        $existing_form = get_page_by_title('Liên hệ mặc định', OBJECT, 'wpcf7_contact_form');
        
        if (!$existing_form) {
            $form_content = '[contact-form-7 id="default" title="Liên hệ mặc định"]
[text* your-name placeholder "Họ và tên *"]
[email* your-email placeholder "Email *"]
[tel your-phone placeholder "Số điện thoại"]
[textarea your-message placeholder "Nội dung tin nhắn *"]
[submit "Gửi tin nhắn"]';
            
            $form_id = wp_insert_post(array(
                'post_title'   => 'Liên hệ mặc định',
                'post_content' => $form_content,
                'post_status'  => 'publish',
                'post_type'    => 'wpcf7_contact_form',
            ));
            
            if ($form_id) {
                update_post_meta($form_id, '_form', $form_content);
            }
        }
    }
}
add_action('after_switch_theme', 'link_city_create_default_cf7_form');

/**
 * Add custom body classes
 */
function link_city_body_classes($classes) {
    // Add custom body classes based on page
    if (is_front_page()) {
        $classes[] = 'is-light-section';
    }
    
    return $classes;
}
add_filter('body_class', 'link_city_body_classes');

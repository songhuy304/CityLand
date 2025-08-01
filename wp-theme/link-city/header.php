<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load jQuery first to ensure $ is available -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>window.$ = window.jQuery;</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper" id="wrapper">
    <!-- ============================ HEADER ============================ -->
    <header id="header">
        <div class="header-wrapper">
            <div id="masthead" class="header-main">
                <div class="header-left">
                    <ul class="header-nav header-nav-main nav nav-left nav-uppercase">
                        <li class="nav-icon has-icon">
                            <a href="#" class="header-nav-icon" aria-label="Menu">
                                <span class="hamburger">
                                    <span></span><span></span><span></span>
                                </span>
                                <span class="menu-text hide-for-small">MENU</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="logo-wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_theme_mod('logo_image', get_template_directory_uri() . '/assets/images/logo.svg'); ?>" 
                             class="header_logo header-logo" 
                             alt="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_theme_mod('logo_dark_image', get_template_directory_uri() . '/assets/images/logo-dark.svg'); ?>" 
                             class="header_logo header-logo-dark" 
                             alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right nav-uppercase">
                        <li class="header-search header-search-lightbox has-icon">
                            <a href="#search-lightbox" aria-label="Search" data-open="#search-lightbox" 
                               data-focus="input.search-field" class="is-small" data-target="#search-lightbox">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7055 20L16.9712 16.3056M19.6385 9.97222C19.6385 14.9274 15.5781 18.9444 10.5692 18.9444C5.56044 18.9444 1.5 14.9274 1.5 9.97222C1.5 5.017 5.56044 1 10.5692 1C15.5781 1 19.6385 5.017 19.6385 9.97222Z" 
                                          stroke="white" stroke-width="1.5" stroke-linecap="square"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="html header-button-1">
                            <a href="tel:<?php echo get_theme_mod('phone_number', '0937961212'); ?>" target="_self">
                                <span class="icon">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" 
                                              d="M43.63 39.3891C39.3223 44.9042 32.6101 48.4499 25.0698 48.4499C12.0706 48.4499 1.53271 37.912 1.53271 24.9128C1.53271 11.9136 12.0706 1.37573 25.0698 1.37573C33.0542 1.37573 40.1101 5.35141 44.3658 11.4312L45.5987 11.4677C41.2145 4.78728 33.6573 0.375732 25.0698 0.375732C11.5183 0.375732 0.532715 11.3614 0.532715 24.9128C0.532715 38.4643 11.5183 49.4499 25.0698 49.4499C33.1911 49.4499 40.391 45.5043 44.8569 39.4255L43.63 39.3891Z" 
                                              fill="white"></path>
                                    </svg>
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5149 14.8525L17.1239 12.9706C16.8946 12.8719 16.6443 12.8322 16.3957 12.855C16.1472 12.8779 15.9083 12.9626 15.7009 13.1014L13.3531 14.6664C11.9182 13.9685 10.7568 12.8123 10.0526 11.3805L10.0528 11.3803L11.6123 8.99734C11.748 8.79047 11.8304 8.55318 11.852 8.30669C11.8736 8.0602 11.8338 7.8122 11.7361 7.58487L9.85248 3.19006C9.72426 2.89174 9.50286 2.64298 9.22143 2.48103C8.94 2.31907 8.61367 2.25263 8.29132 2.29166C7.02463 2.45452 5.86056 3.07296 5.01656 4.03144C4.17256 4.98992 3.70637 6.22289 3.70508 7.5C3.70508 14.944 9.76111 21 17.2051 21C18.4822 20.9987 19.7152 20.5325 20.6737 19.6885C21.6321 18.8445 22.2506 17.6804 22.4134 16.4137C22.4523 16.0913 22.3858 15.765 22.2239 15.4836C22.0619 15.2022 21.8132 14.9808 21.5149 14.8525Z" 
                                              fill="#F26A23"></path>
                                    </svg>
                                </span>
                                <span class="hotline ts-04"><?php echo get_theme_mod('phone_display', '09.222.222.56'); ?></span>
                            </a>
                        </li>
                        <li class="header-divider"></li>
                        <li class="html header-button-2">
                            <a href="tel:<?php echo get_theme_mod('phone_number_2', '1900633968'); ?>" target="_self">
                                <span class="hotline ts-04"><?php echo get_theme_mod('phone_display_2', '09.222.222.56'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- header-right mobile -->
                <div class="flex-right show-for-medium">
                    <ul class="header-nav nav nav-right">
                        <li class="header-search header-search-lightbox has-icon">
                            <a aria-label="Search" class="is-small" data-open="#search-lightbox" 
                               data-focus="input.search-field" data-target="#search-lightbox">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7055 20L16.9712 16.3056M19.6385 9.97222C19.6385 14.9274 15.5781 18.9444 10.5692 18.9444C5.56044 18.9444 1.5 14.9274 1.5 9.97222C1.5 5.017 5.56044 1 10.5692 1C15.5781 1 19.6385 5.017 19.6385 9.97222Z" 
                                          stroke="white" stroke-width="1.5" stroke-linecap="square"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="html header-button-1">
                            <a href="tel:<?php echo get_theme_mod('phone_number', '0937961212'); ?>" target="_self">
                                <span class="icon">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" 
                                              d="M43.63 39.3891C39.3223 44.9042 32.6101 48.4499 25.0698 48.4499C12.0706 48.4499 1.53271 37.912 1.53271 24.9128C1.53271 11.9136 12.0706 1.37573 25.0698 1.37573C33.0542 1.37573 40.1101 5.35141 44.3658 11.4312L45.5987 11.4677C41.2145 4.78728 33.6573 0.375732 25.0698 0.375732C11.5183 0.375732 0.532715 11.3614 0.532715 24.9128C0.532715 38.4643 11.5183 49.4499 25.0698 49.4499C33.1911 49.4499 40.391 45.5043 44.8569 39.4255L43.63 39.3891Z" 
                                              fill="white"></path>
                                    </svg>
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5149 14.8525L17.1239 12.9706C16.8946 12.8719 16.6443 12.8322 16.3957 12.855C16.1472 12.8779 15.9083 12.9626 15.7009 13.1014L13.3531 14.6664C11.9182 13.9685 10.7568 12.8123 10.0526 11.3805L10.0528 11.3803L11.6123 8.99734C11.748 8.79047 11.8304 8.55318 11.852 8.30669C11.8736 8.0602 11.8338 7.8122 11.7361 7.58487L9.85248 3.19006C9.72426 2.89174 9.50286 2.64298 9.22143 2.48103C8.94 2.31907 8.61367 2.25263 8.29132 2.29166C7.02463 2.45452 5.86056 3.07296 5.01656 4.03144C4.17256 4.98992 3.70637 6.22289 3.70508 7.5C3.70508 14.944 9.76111 21 17.2051 21C18.4822 20.9987 19.7152 20.5325 20.6737 19.6885C21.6321 18.8445 22.2506 17.6804 22.4134 16.4137C22.4523 16.0913 22.3858 15.765 22.2239 15.4836C22.0619 15.2022 21.8132 14.9808 21.5149 14.8525Z" 
                                              fill="#F26A23"></path>
                                    </svg>
                                </span>
                                <span class="hotline ts-04"><?php echo get_theme_mod('phone_display', '09.222.222.56'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-bg-container fill">
                <div class="header-bg-image fill"></div>
                <div class="header-bg-color fill"></div>
            </div>
        </div>
    </header>

    <!-- MENU LEFT -->
    <div id="nk-main-menu" class="flex-box flex-col jus-center rocket-lazyload lazyloaded" 
         style="background-image: url('<?php echo get_theme_mod('header_bg_image', get_template_directory_uri() . '/assets/images/header-bg-min.jpg'); ?>');">
        <div class="main-menu-inner">
            <div class="grid-container flex-box al-center">
                <div class="main-menu bdrs-20 overflow-y">
                    <ul id="menu-main" class="ls-none m-0 main-nav">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-309 current_page_item menu-item-349">
                            <a href="<?php echo esc_url(home_url('/')); ?>" aria-current="page">Trang chủ</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-673">
                            <a href="<?php echo esc_url(home_url('/thiet-ke-k-home/')); ?>">Thiết kế</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722">
                            <a href="<?php echo esc_url(home_url('/tien-ich/')); ?>">Tiện ích</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-671">
                            <a href="<?php echo esc_url(home_url('/vi-tri-du-an/')); ?>">Vị trí</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-672">
                            <a href="<?php echo esc_url(home_url('/trai-nghiem/')); ?>">Trải nghiệm</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721">
                            <a href="<?php echo esc_url(home_url('/san-pham/')); ?>">Sản phẩm</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2356">
                            <a href="<?php echo esc_url(home_url('/can-ho/')); ?>">Căn hộ K-Home Apartment</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-674">
                            <a href="<?php echo esc_url(home_url('/tien-do-du-an/')); ?>">Tiến độ dự án</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2674">
                            <a href="<?php echo esc_url(home_url('/category/tin-du-an/')); ?>">Tin tức</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1164">
                            <a href="<?php echo esc_url(home_url('/#doi-tac')); ?>" aria-current="page">Đối tác</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-566">
                            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>">Liên hệ</a>
                        </li>
                    </ul>
                    
                    <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
                        <div class="flex-row relative">
                            <div class="input-container">
                                <input class="search-field mb-0" name="s" value="<?php echo get_search_query(); ?>" 
                                       id="s" placeholder="Tìm kiếm">
                            </div>
                            <div class="flex-col">
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
                
                <div class="menu-logo text-center">
                    <!-- Logo SVG will be included here -->
                </div>
            </div>
        </div>
    </div>
    <!-- MENU LEFT -->
    <!-- ============================ END HEADER ============================ -->
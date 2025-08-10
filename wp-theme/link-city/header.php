<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS files are loaded via functions.php -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="wrapper" id="wrapper">
        <!-- ============================ HEADER ============================ -->

        <!-- Them class="header-mobile" o trang chi tiet -->

        <header id="header" <?php echo !is_front_page() ? ' class="header-single"' : ''; ?>>
            <div class="header-wrapper">
                <div id="masthead" class="header-main">
                    <div class="header-left">
                        <ul class="header-nav header-nav-main nav nav-left nav-uppercase">
                            <li class="nav-icon has-icon">
                                <a href="#" class="header-nav-icon" aria-label="Menu">
                                    <span class="hamburger">
                                        <span></span><span></span><span></span></span>
                                    <span class="menu-text hide-for-small">MENU</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-wrapper">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.svg" class="header_logo header-logo" alt="<?php bloginfo('name'); ?>" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.svg" class="header_logo header-logo-dark" alt="<?php bloginfo('name'); ?>" />
                        </a>
                    </div>

                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="header-nav header-nav-main nav nav-right nav-uppercase">
                            <li class="header-search header-search-lightbox has-icon">
                                <a href="#search-lightbox" aria-label="Search" data-open="#search-lightbox" data-focus="input.search-field" class="is-small" data-target="#search-lightbox">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.7055 20L16.9712 16.3056M19.6385 9.97222C19.6385 14.9274 15.5781 18.9444 10.5692 18.9444C5.56044 18.9444 1.5 14.9274 1.5 9.97222C1.5 5.017 5.56044 1 10.5692 1C15.5781 1 19.6385 5.017 19.6385 9.97222Z" stroke="white" stroke-width="1.5" stroke-linecap="square"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="html header-button-1">
                                <a href="tel:0922222256" target="_self">
                                    <span class="icon">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.63 39.3891C39.3223 44.9042 32.6101 48.4499 25.0698 48.4499C12.0706 48.4499 1.53271 37.912 1.53271 24.9128C1.53271 11.9136 12.0706 1.37573 25.0698 1.37573C33.0542 1.37573 40.1101 5.35141 44.3658 11.4312L45.5987 11.4677C41.2145 4.78728 33.6573 0.375732 25.0698 0.375732C11.5183 0.375732 0.532715 11.3614 0.532715 24.9128C0.532715 38.4643 11.5183 49.4499 25.0698 49.4499C33.1911 49.4499 40.391 45.5043 44.8569 39.4255L43.63 39.3891Z" fill="white"></path>
                                        </svg>
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5149 14.8525L17.1239 12.9706C16.8946 12.8719 16.6443 12.8322 16.3957 12.855C16.1472 12.8779 15.9083 12.9626 15.7009 13.1014L13.3531 14.6664C11.9182 13.9685 10.7568 12.8123 10.0526 11.3805L10.0528 11.3803L11.6123 8.99734C11.748 8.79047 11.8304 8.55318 11.852 8.30669C11.8736 8.0602 11.8338 7.8122 11.7361 7.58487L9.85248 3.19006C9.72426 2.89174 9.50286 2.64298 9.22143 2.48103C8.94 2.31907 8.61367 2.25263 8.29132 2.29166C7.02463 2.45452 5.86056 3.07296 5.01656 4.03144C4.17256 4.98992 3.70637 6.22289 3.70508 7.5C3.70508 14.944 9.76111 21 17.2051 21C18.4822 20.9987 19.7152 20.5325 20.6737 19.6885C21.6321 18.8445 22.2506 17.6804 22.4134 16.4137C22.4523 16.0913 22.3858 15.765 22.2239 15.4836C22.0619 15.2022 21.8132 14.9808 21.5149 14.8525Z" fill="#F26A23"></path>
                                        </svg>
                                    </span>
                                    <span class="hotline ts-04">09.222.222.56</span>
                                </a>
                            </li>
                            <!-- <li class="header-divider"></li> -->
                            <!-- <li class="html header-button-2">
                                <a href="tel:1900633968" target="_self">
                                    <span class="hotline ts-04">09.222.222.56</span>
                                </a>
                            </li> -->
                        </ul>
                    </div>

                    <!-- header-right mobile -->

                    <div class="flex-right show-for-medium">
                        <ul class="header-nav nav nav-right">
                            <li class="header-search header-search-lightbox has-icon">
                                <a aria-label="Search" class="is-small" data-open="#search-lightbox" data-focus="input.search-field" data-target="#search-lightbox">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.7055 20L16.9712 16.3056M19.6385 9.97222C19.6385 14.9274 15.5781 18.9444 10.5692 18.9444C5.56044 18.9444 1.5 14.9274 1.5 9.97222C1.5 5.017 5.56044 1 10.5692 1C15.5781 1 19.6385 5.017 19.6385 9.97222Z" stroke="white" stroke-width="1.5" stroke-linecap="square"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="html header-button-1">
                                <a href="tel:0922222256" target="_self">
                                    <span class="icon">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.63 39.3891C39.3223 44.9042 32.6101 48.4499 25.0698 48.4499C12.0706 48.4499 1.53271 37.912 1.53271 24.9128C1.53271 11.9136 12.0706 1.37573 25.0698 1.37573C33.0542 1.37573 40.1101 5.35141 44.3658 11.4312L45.5987 11.4677C41.2145 4.78728 33.6573 0.375732 25.0698 0.375732C11.5183 0.375732 0.532715 11.3614 0.532715 24.9128C0.532715 38.4643 11.5183 49.4499 25.0698 49.4499C33.1911 49.4499 40.391 45.5043 44.8569 39.4255L43.63 39.3891Z" fill="white"></path>
                                        </svg>
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5149 14.8525L17.1239 12.9706C16.8946 12.8719 16.6443 12.8322 16.3957 12.855C16.1472 12.8779 15.9083 12.9626 15.7009 13.1014L13.3531 14.6664C11.9182 13.9685 10.7568 12.8123 10.0526 11.3805L10.0528 11.3803L11.6123 8.99734C11.748 8.79047 11.8304 8.55318 11.852 8.30669C11.8736 8.0602 11.8338 7.8122 11.7361 7.58487L9.85248 3.19006C9.72426 2.89174 9.50286 2.64298 9.22143 2.48103C8.94 2.31907 8.61367 2.25263 8.29132 2.29166C7.02463 2.45452 5.86056 3.07296 5.01656 4.03144C4.17256 4.98992 3.70637 6.22289 3.70508 7.5C3.70508 14.944 9.76111 21 17.2051 21C18.4822 20.9987 19.7152 20.5325 20.6737 19.6885C21.6321 18.8445 22.2506 17.6804 22.4134 16.4137C22.4523 16.0913 22.3858 15.765 22.2239 15.4836C22.0619 15.2022 21.8132 14.9808 21.5149 14.8525Z" fill="#F26A23"></path>
                                        </svg>
                                    </span>
                                    <span class="hotline ts-04">09.222.222.56</span>
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
        <div id="nk-main-menu" class="flex-box flex-col jus-center rocket-lazyload lazyloaded" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-bg-min.jpg');" data-ll-status="loaded">
            <div class="main-menu-inner">
                <div class="grid-container flex-box al-center">
                    <div class="main-menu bdrs-20 overflow-y">
                        <ul id="menu-main" class="ls-none m-0 main-nav">
                            <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-309 current_page_item menu-item-349">
                                <a href="<?php echo home_url(); ?>" aria-current="page">Trang chủ</a>
                            </li>
                            <li id="menu-item-673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-673">
                                <a href="/#thiet-ke">Thiết kế</a>
                            </li>
                            <li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722">
                                <a href="/#tong-quan">Tổng quan</a>
                            </li>
                            <li id="menu-item-671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-671">
                                <a href="/#vi-tri">Vị trí</a>
                            </li>
                            <li id="menu-item-672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-672">
                                <a href="/#noi-khu">Nội khu</a>
                            </li>
                            <li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721">
                                <a href="/#ngoai-khu">Ngoại khu</a>
                            </li>
                            <li id="menu-item-2356" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2356">
                                <a href="/#mat-bang">Mặt bằng</a>
                            </li>
                            <li id="menu-item-674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-674">
                                <a href="/#tien-do">Tiến độ dự án</a>
                            </li>
                            <li id="menu-item-2674" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2674">
                                <a href="/category/tin-du-an">Tin tức</a>
                            </li>
                            <li id="menu-item-1164" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1164">
                                <a href="/#doi-tac" aria-current="page">Đối tác</a>
                            </li>
                            <li id="menu-item-566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-566">
                                <a href="/#footer">Liên hệ</a>
                            </li>
                        </ul>
                        <form method="get" class="searchform" action="https://k-homenewcity.vn/" role="search">
                            <div class="flex-row relative">
                                <div class="input-container">
                                    <input class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm" />
                                </div>
                                <div class="flex-col">
                                    <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Nộp">
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1406 22.6565C18.396 22.6565 22.6562 18.3962 22.6562 13.1409C22.6562 7.88553 18.396 3.62524 13.1406 3.62524C7.88529 3.62524 3.625 7.88553 3.625 13.1409C3.625 18.3962 7.88529 22.6565 13.1406 22.6565Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M19.8687 19.8698L25.3742 25.3753" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                    <div class="menu-logo text-center">
                        <svg class="draw-svg" xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 418 180" width="450" height="194">
                            <path class="path-white" d="m20.2 166.4q-1.5-1-2.3-2.7-0.7-1.6-0.7-3.5 0-1.9 0.7-3.5 0.8-1.7 2.3-2.7 1.6-1 3.7-1 1.9 0 3.2 0.7 1.3 0.7 2 1.8 0.7 1.1 0.9 2.4h-2.2q-0.3-1.2-1.2-2-1-0.9-2.7-0.9-1.4 0-2.4 0.7-1 0.8-1.6 2-0.5 1.1-0.5 2.5 0 1.3 0.5 2.5 0.6 1.2 1.6 1.9 1 0.8 2.4 0.8 1.7 0 2.7-0.9 0.9-0.8 1.2-2h2.2q-0.2 1.3-0.9 2.4-0.7 1.1-2 1.8-1.3 0.7-3.2 0.7-2.1 0-3.7-1z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m33.9 166.7q-1.2-0.7-1.8-1.9-0.6-1.2-0.6-2.6 0-1.4 0.6-2.6 0.6-1.2 1.8-1.9 1.1-0.7 2.7-0.7 1.6 0 2.7 0.7 1.2 0.7 1.8 1.9 0.6 1.2 0.6 2.6 0 1.4-0.6 2.6-0.6 1.2-1.8 1.9-1.1 0.7-2.7 0.7-1.6 0-2.7-0.7zm1.3-10.9h-1.9l2.4-3.3h1.8l2.3 3.3h-1.8l-1.4-2zm2.9 9.3q0.7-0.5 1-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-1-1.2-0.6-0.5-1.5-0.5-0.9 0-1.6 0.5-0.6 0.4-1 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.4 0.7 1 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5zm-2.5 6.2q-0.4-0.4-0.4-1 0-0.5 0.4-0.9 0.4-0.4 1-0.4 0.5 0 0.9 0.4 0.4 0.4 0.4 0.9 0 0.6-0.4 1-0.4 0.4-0.9 0.4-0.6 0-1-0.4z"></path>
                            <path class="path-white" d="m43.5 167.2v-10h2.1v1.4h0.1q0.4-0.6 1-1.1 0.7-0.5 1.9-0.5 1.1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m55.6 170.2q-1.2-0.9-1.4-2.3h2.1q0.2 0.6 0.8 1.1 0.6 0.4 1.7 0.4 1.4 0 2.1-0.8 0.6-0.7 0.6-2v-1.1h-0.1q-0.3 0.7-1.1 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.8-1-0.7-1.5-1.8-0.6-1.2-0.6-2.5 0-1.4 0.6-2.5 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5 0.8 0.5 1.1 1.1h0.1v-1.4h2.2v9.4q0 2.1-1.3 3.4-1.2 1.2-3.5 1.2-2.2 0-3.3-1zm4.7-5.3q0.6-0.5 0.9-1.2 0.3-0.8 0.3-1.6 0-0.9-0.3-1.7-0.3-0.7-0.9-1.2-0.7-0.4-1.5-0.4-0.9 0-1.6 0.4-0.6 0.5-0.9 1.2-0.4 0.8-0.4 1.7 0 0.8 0.4 1.6 0.3 0.7 0.9 1.2 0.7 0.5 1.6 0.5 0.8 0 1.5-0.5z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m80.9 154.6v1.5h-1.7v11.1h-2.2v-1.5h-0.1q-0.4 0.7-1.1 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.7-1-0.8-1.5-2-0.6-1.2-0.6-2.5 0-1.4 0.6-2.6 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5 0.7 0.5 1.1 1.2h0.1v-2.6h-2.6v-1.5h2.6v-1.8h2.2v1.8zm-5.1 10.5q0.6-0.5 0.9-1.2 0.4-0.8 0.4-1.7 0-0.9-0.4-1.7-0.3-0.8-0.9-1.2-0.6-0.5-1.5-0.5-0.9 0-1.6 0.5-0.6 0.4-0.9 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.3 0.7 0.9 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m83.8 166.7q-1.2-0.7-1.8-1.9-0.6-1.2-0.6-2.6 0-1.4 0.6-2.6 0.6-1.2 1.8-1.9 1.1-0.7 2.7-0.7 1.6 0 2.7 0.7 1.2 0.7 1.8 1.9 0.6 1.2 0.6 2.6 0 1.4-0.6 2.6-0.6 1.2-1.8 1.9-1.1 0.7-2.7 0.7-1.6 0-2.7-0.7zm1.3-10.9h-1.9l2.4-2.9h1.8l2.3 2.9h-1.8l-1.4-1.7zm2.9 9.3q0.7-0.5 1-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-1-1.2-0.6-0.5-1.5-0.5-0.9 0-1.6 0.5-0.6 0.4-1 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.4 0.7 1 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5zm2.9-11.8h-1.8l-2-3.4h2.2z"></path>
                            <path class="path-white" d="m93.4 167.2v-10h2.1v1.4h0.1q0.4-0.6 1-1.1 0.7-0.5 1.9-0.5 1.1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m105.5 170.2q-1.2-0.9-1.4-2.3h2.1q0.2 0.6 0.8 1.1 0.6 0.4 1.7 0.4 1.4 0 2.1-0.8 0.6-0.7 0.6-2v-1.1h-0.1q-0.3 0.7-1.1 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.8-1-0.7-1.5-1.8-0.6-1.2-0.6-2.5 0-1.4 0.6-2.5 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5 0.8 0.5 1.1 1.1h0.1v-1.4h2.2v9.4q0 2.1-1.3 3.4-1.2 1.2-3.5 1.2-2.2 0-3.3-1zm4.7-5.3q0.6-0.5 0.9-1.2 0.3-0.8 0.3-1.6 0-0.9-0.3-1.7-0.3-0.7-0.9-1.2-0.7-0.4-1.5-0.4-0.9 0-1.6 0.4-0.6 0.5-0.9 1.2-0.4 0.8-0.4 1.7 0 0.8 0.4 1.6 0.3 0.7 0.9 1.2 0.7 0.5 1.6 0.5 0.8 0 1.5-0.5z"></path>
                            <path class="path-white" d="m119.5 167.2v-14.4h2.2v5.8h0.1q0.3-0.6 1-1.1 0.6-0.5 1.8-0.5 1.1 0 1.9 0.5 0.7 0.5 1.1 1.3 0.4 0.9 0.4 1.9v6.5h-2.1v-6.2q0-1-0.6-1.6-0.5-0.6-1.4-0.6-1.1 0-1.7 0.8-0.5 0.8-0.5 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m136.4 157.5q0.7 0.5 1.1 1.2h0.1v-1.5h2.2v10h-2.2v-1.5h-0.1q-0.4 0.7-1.1 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.7-1-0.8-1.5-2-0.5-1.2-0.5-2.5 0-1.4 0.5-2.6 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5zm-3.1 1.8q-0.6 0.4-0.9 1.2-0.4 0.8-0.4 1.7 0 0.9 0.4 1.7 0.3 0.7 0.9 1.2 0.7 0.5 1.5 0.5 0.9 0 1.6-0.5 0.6-0.5 0.9-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-0.9-1.2-0.7-0.5-1.6-0.5-0.8 0-1.5 0.5zm0.7 12q-0.4-0.4-0.4-1 0-0.5 0.4-0.9 0.4-0.4 0.9-0.4 0.6 0 1 0.4 0.4 0.4 0.4 0.9 0 0.6-0.4 1-0.4 0.4-1 0.4-0.5 0-0.9-0.4z"></path>
                            <path class="path-white" d="m141.8 167.2v-10h2.2v1.4h0.1q0.3-0.6 1-1.1 0.7-0.5 1.8-0.5 1.1 0 1.9 0.5 0.7 0.5 1.1 1.3 0.4 0.9 0.4 1.9v6.5h-2.1v-6.2q0-1-0.5-1.6-0.6-0.6-1.5-0.6-1.1 0-1.7 0.8-0.5 0.8-0.5 1.9v5.7z"></path>
                            <path class="path-white" d="m152.5 167.2v-14.4h2.1v5.8h0.1q0.4-0.6 1-1.1 0.7-0.5 1.9-0.5 1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m166.9 170.9v-13.7h2.1v1.5h0.2q0.3-0.7 1.1-1.2 0.8-0.5 2-0.5 1.5 0 2.5 0.7 1 0.7 1.5 1.9 0.5 1.2 0.5 2.6 0 1.3-0.5 2.5-0.5 1.2-1.5 2-1 0.7-2.5 0.7-1.2 0-2-0.5-0.7-0.5-1.1-1.2h-0.2v5.2zm2.5-7q0.3 0.7 1 1.2 0.6 0.5 1.5 0.5 0.9 0 1.5-0.5 0.7-0.5 1-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-1-1.2-0.6-0.5-1.5-0.5-0.9 0-1.5 0.5-0.7 0.4-1 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7z"></path>
                            <path class="path-white" d="m178.8 167.2v-14.4h2.1v5.8h0.1q0.4-0.6 1-1.1 0.7-0.5 1.9-0.5 1.1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" d="m190.3 166.5q-0.8-1-0.8-2.6v-6.7h2.1v6.5q0 0.9 0.5 1.4 0.5 0.5 1.3 0.5 1.1 0 1.7-0.8 0.6-0.9 0.6-2.1v-5.5h2.1v10h-2.1v-1.4h-0.1q-0.4 0.6-1.1 1.1-0.6 0.5-1.8 0.5-1.5 0-2.4-0.9zm6.2-14.3l-2 3.5h-1.8l1.6-3.5z"></path>
                            <path class="path-white" d="m202 166.7q-1.1-0.8-1.7-2-0.6-1.2-0.6-2.5 0-1.4 0.6-2.6 0.6-1.2 1.7-1.9 1.2-0.7 2.8-0.7 2 0 3.2 1 1.1 1.1 1.3 2.7h-2q-0.2-0.8-0.8-1.4-0.7-0.5-1.7-0.5-0.9 0-1.6 0.4-0.7 0.5-1 1.3-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.3 0.8 1 1.2 0.7 0.5 1.6 0.5 1 0 1.7-0.5 0.6-0.6 0.8-1.4h2q-0.2 1.6-1.3 2.6-1.2 1.1-3.2 1.1-1.6 0-2.8-0.7z"></path>
                            <path class="path-white" d="m222.9 162.2h-7.1v-1.8h7.1z"></path>
                            <path class="path-white" d="m238.7 163.3v-10.1h2.2v14h-2l-6.9-10v10h-2.2v-14h2z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m249.4 157.5q0.8 0.5 1.2 1.2h0.1v-1.5h2.2v10h-2.2v-1.5h-0.1q-0.4 0.7-1.2 1.2-0.7 0.5-2 0.5-1.4 0-2.4-0.7-1-0.8-1.6-2-0.5-1.2-0.5-2.5 0-1.4 0.5-2.6 0.5-1.2 1.6-1.9 1-0.7 2.4-0.7 1.3 0 2 0.5zm-2.8-1.7h-1.8l2.3-3.3h1.8l2.3 3.3h-1.8l-1.4-2zm-0.2 3.4q-0.7 0.5-1 1.3-0.3 0.8-0.3 1.7 0 0.9 0.3 1.6 0.3 0.8 1 1.3 0.6 0.5 1.5 0.5 0.9 0 1.5-0.5 0.7-0.5 1-1.3 0.3-0.7 0.3-1.6 0-0.9-0.3-1.7-0.3-0.8-1-1.3-0.6-0.4-1.5-0.4-0.9 0-1.5 0.4z"></path>
                            <path class="path-white" d="m254.9 167.2v-10h2.1v1.4h0.2q0.3-0.6 1-1.1 0.6-0.5 1.8-0.5 1.1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m267 170.2q-1.2-0.9-1.4-2.3h2.1q0.2 0.6 0.8 1.1 0.7 0.4 1.8 0.4 1.3 0 2-0.8 0.7-0.7 0.7-2v-1.1h-0.1q-0.4 0.7-1.2 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.8-1-0.7-1.5-1.8-0.5-1.2-0.5-2.5 0-1.4 0.5-2.5 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5 0.8 0.5 1.2 1.1h0.1v-1.4h2.1v9.4q0 2.1-1.2 3.4-1.3 1.2-3.6 1.2-2.1 0-3.3-1zm4.7-5.3q0.6-0.5 0.9-1.2 0.4-0.8 0.4-1.6 0-0.9-0.4-1.7-0.3-0.7-0.9-1.2-0.6-0.4-1.5-0.4-0.9 0-1.6 0.4-0.6 0.5-0.9 1.2-0.3 0.8-0.3 1.7 0 0.8 0.3 1.6 0.3 0.7 0.9 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5z"></path>
                            <path class="path-white" d="m286.8 165.5v1.8q-0.8 0.1-1.6 0.1-1.7 0-2.4-0.9-0.8-0.9-0.8-2.3v-5.3h-1.8v-1.7h1.8v-2.6h2.1v2.6h2.4v1.7h-2.4v5.3q0 1.4 1.6 1.4 0.5 0 1.1-0.1z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m294.8 157.5q0.8 0.5 1.2 1.2h0.1v-1.5h2.2v10h-2.2v-1.5h-0.1q-0.4 0.7-1.1 1.2-0.8 0.5-2.1 0.5-1.4 0-2.4-0.7-1-0.8-1.6-2-0.5-1.2-0.5-2.5 0-1.4 0.5-2.6 0.6-1.2 1.6-1.9 1-0.7 2.4-0.7 1.3 0 2 0.5zm-2.8-1.7h-1.8l2.3-2.9h1.8l2.4 2.9h-1.9l-1.4-1.7zm-0.2 3.5q-0.6 0.4-1 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.4 0.7 1 1.2 0.6 0.5 1.5 0.5 0.9 0 1.5-0.5 0.7-0.5 1-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-1-1.2-0.6-0.5-1.5-0.5-0.9 0-1.5 0.5zm6-6h-1.7l-2-3.4h2.1z"></path>
                            <path class="path-white" d="m313.9 158q0.9 1.1 0.9 2.7v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.4-0.6-1 0-1.6 0.8-0.5 0.8-0.5 1.9v5.7h-2.2v-6.2q0-1-0.4-1.6-0.5-0.6-1.4-0.6-1.1 0-1.6 0.8-0.5 0.8-0.5 1.9v5.7h-2.2v-10h2.2v1.4q0.4-0.7 1-1.2 0.7-0.4 1.8-0.4 1.1 0 1.9 0.5 0.7 0.5 1.1 1.4 0.5-0.9 1.2-1.4 0.8-0.5 2-0.5 1.5 0 2.4 1z"></path>
                            <path class="path-white" d="m321.4 166.5q-1.1-1-1.3-2.4h2.2q0.1 0.7 0.6 1.1 0.5 0.5 1.5 0.5 0.8 0 1.3-0.4 0.4-0.4 0.4-0.9 0-0.5-0.3-0.8-0.4-0.3-1.1-0.4l-1.3-0.3q-1.4-0.3-2.2-1-0.9-0.7-0.9-1.9 0-0.9 0.5-1.6 0.4-0.7 1.3-1 0.8-0.4 1.9-0.4 1.7 0 2.7 0.8 1 0.9 1.2 2.1h-2.1q-0.1-0.5-0.5-0.9-0.5-0.3-1.3-0.3-0.8 0-1.2 0.3-0.4 0.4-0.4 0.9 0 0.8 1.3 1.1l1.4 0.3q3.1 0.6 3.1 3 0 0.9-0.5 1.6-0.5 0.7-1.3 1.1-0.9 0.4-2.1 0.4-1.9 0-2.9-0.9z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m331.9 166.7q-1.1-0.7-1.7-1.9-0.6-1.2-0.6-2.6 0-1.4 0.6-2.6 0.6-1.2 1.7-1.9 1.2-0.7 2.8-0.7 1.6 0 2.7 0.7 1.2 0.7 1.7 1.9 0.6 1.2 0.6 2.6 0 1.4-0.6 2.6-0.5 1.2-1.7 1.9-1.1 0.7-2.7 0.7-1.6 0-2.8-0.7zm1.4-10.9h-1.9l2.4-2.9h1.8l2.3 2.9h-1.8l-1.4-1.7zm2.9 9.3q0.7-0.5 1-1.2 0.3-0.8 0.3-1.7 0-0.9-0.3-1.7-0.3-0.8-1-1.2-0.6-0.5-1.5-0.5-0.9 0-1.6 0.5-0.6 0.4-1 1.2-0.3 0.8-0.3 1.7 0 0.9 0.3 1.7 0.4 0.7 1 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5zm4.4-15.2l-2 3.4h-1.7l1.6-3.4z"></path>
                            <path class="path-white" d="m341.6 167.2v-10h2.1v1.4h0.1q0.4-0.6 1-1.1 0.7-0.5 1.9-0.5 1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m353.7 170.2q-1.2-0.9-1.4-2.3h2.1q0.2 0.6 0.8 1.1 0.6 0.4 1.7 0.4 1.4 0 2.1-0.8 0.6-0.7 0.6-2v-1.1h-0.1q-0.4 0.7-1.1 1.2-0.8 0.5-2.1 0.5-1.4 0-2.4-0.8-1-0.7-1.6-1.8-0.5-1.2-0.5-2.5 0-1.4 0.5-2.5 0.6-1.2 1.6-1.9 1-0.7 2.4-0.7 1.3 0 2.1 0.5 0.7 0.5 1.1 1.1h0.1v-1.4h2.2v9.4q0 2.1-1.3 3.4-1.2 1.2-3.5 1.2-2.2 0-3.3-1zm4.7-5.3q0.6-0.5 0.9-1.2 0.3-0.8 0.3-1.6 0-0.9-0.3-1.7-0.3-0.7-0.9-1.2-0.7-0.4-1.6-0.4-0.9 0-1.5 0.4-0.6 0.5-0.9 1.2-0.4 0.8-0.4 1.7 0 0.8 0.4 1.6 0.3 0.7 0.9 1.2 0.6 0.5 1.5 0.5 0.9 0 1.6-0.5z"></path>
                            <path class="path-white" d="m369.3 167.2h-2.3l3.2-5-3.2-5h2.3l2.4 3.7 2.4-3.7h2.3l-3.3 5 3.3 5h-2.3l-2.4-3.7z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m384.2 157.5q0.7 0.5 1.1 1.2h0.2v-1.5h2.1v10h-2.1v-1.5h-0.2q-0.4 0.7-1.1 1.2-0.8 0.5-2 0.5-1.5 0-2.5-0.7-1-0.8-1.5-2-0.5-1.2-0.5-2.5 0-1.4 0.5-2.6 0.5-1.2 1.5-1.9 1-0.7 2.5-0.7 1.2 0 2 0.5zm-3.1 1.8q-0.6 0.4-0.9 1.2-0.4 0.8-0.4 1.7 0 0.9 0.4 1.7 0.3 0.7 0.9 1.2 0.7 0.5 1.6 0.5 0.9 0 1.5-0.5 0.6-0.5 0.9-1.2 0.3-0.8 0.4-1.7-0.1-0.9-0.4-1.7-0.3-0.8-0.9-1.2-0.6-0.5-1.5-0.5-0.9 0-1.6 0.5z"></path>
                            <path class="path-white" d="m389.5 167.2v-10h2.2v1.4h0.1q0.3-0.6 1-1.1 0.7-0.5 1.8-0.5 1.1 0 1.9 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.7 0.8-0.5 0.8-0.5 1.9v5.7z"></path>
                            <path class="path-white" d="m400.2 167.2v-14.4h2.1v5.8h0.2q0.3-0.6 0.9-1.1 0.7-0.5 1.9-0.5 1.1 0 1.8 0.5 0.8 0.5 1.2 1.3 0.4 0.9 0.4 1.9v6.5h-2.2v-6.2q0-1-0.5-1.6-0.5-0.6-1.5-0.6-1.1 0-1.6 0.8-0.6 0.8-0.6 1.9v5.7z"></path>
                            <path class="path-white" d="m90.6 43.7v12h20.4v-12z"></path>
                            <path class="path-white" d="m15.9 13.7h15.4v37l34.5-37h18.6l-26 29.4 34.5 39.9h-17.3l-26-29.9-18.3 19v10.9h-15.4z"></path>
                            <path class="path-white" d="m123.5 13.7h15.4l0.1 30h30.9l-0.1-30h15.4v69.3h-15.3v-27.3h-30.9v27.3h-15.4z"></path>
                            <path class="path-white" fill-rule="evenodd" d="m192.6 48.9c0-20 15.6-35.1 36.2-35.1 20.7 0 36 15.4 36 35.1 0 19.8-15.3 34.9-36 35.1-20.6 0.2-36.2-15.2-36.2-35.1zm36 23.1c13.5-0.1 20.9-10.9 20.9-23.1 0-12.2-7.4-23.2-20.9-23.2-12.9 0-20.6 10.9-20.6 23.3 0 12.3 7.7 23.1 20.6 23z"></path>
                            <path class="path-white" d="m272.5 13.7h14.5l24.9 29.3 20.9-29.3h14.7v69.3h-15.3v-46l-20.3 27.5-24-27.5v46h-15.4z"></path>
                            <path class="path-white" d="m355 13.7h53.3v13.8h-37.5v15.6h30.4v12.2h-30.4v13.8h37.5v13.9h-53.3z"></path>
                            <path class="path-secondary" d="m77.4 98.5h3.9l25.5 27.9v-27.9h4.3v34.6h-3.9l-25.5-27.8v27.8h-4.3z"></path>
                            <path class="path-secondary" d="m115 98.5h27.1v3.9h-22.8v12.1h18.9v3.5h-18.9v11.1h22.8v4h-27.1z"></path>
                            <path class="path-secondary" d="m145.9 98.5h4.4l12.3 28.8 12.2-28.8h3.8l11.8 28.8 12.6-28.8h4.5l-15.2 34.6h-3.8l-11.9-28.4-12 28.4h-3.9z"></path>
                            <path class="path-secondary" d="m221.4 115.8c0-10 7.7-17.9 18.5-17.8 9.1 0 15.5 5.2 17.7 12.6h-4.5c-1.8-5.3-6.3-9-13.3-9.1-8.6-0.1-14 6.5-14 14.3 0 7.9 5.4 14.3 14 14.3 7-0.1 11.6-3.9 13.4-9.3h4.5c-2.1 7.5-8.6 12.7-17.8 12.8-10.8 0.1-18.5-7.8-18.5-17.8z"></path>
                            <path class="path-secondary" d="m261.5 98.5h4.4v34.6h-4.4z"></path>
                            <path class="path-secondary" d="m284.5 102h-14.8v-3.5h34v3.5h-14.8v31.1h-4.4z"></path>
                            <path class="path-secondary" d="m325.6 118.4l-18-19.9h4.8l15.3 16.7 14.3-16.7h4.8l-16.8 19.9v14.7h-4.4z"></path>
                            <path class="path-secondary" d="m15.9 115.8h55.1"></path>
                            <path class="path-secondary" d="m71 116.3h-55.1v-4.4h55.1z"></path>
                            <path class="path-secondary" d="m350.5 112.4h57.8"></path>
                            <path class="path-secondary" d="m408.3 116.3h-57.8v-4.4h57.8z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- MENU LEFT -->

        <!-- ============================ END HEADER ============================ -->
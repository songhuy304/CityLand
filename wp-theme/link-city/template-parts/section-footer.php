<?php
/**
 * Footer contact section for inner pages.
 */
?>

<section id="footer" class="section footer-wrapper section-light add-pt relative site-footer">
    <div class="grid-container add-pt">
        <div class="sec-title text-primary"> <span>LIÊN HỆ</span> CHÚNG TÔI </div>

        <div class="flex-box flex-wrap">
            <div class="col-4 tablet-col-6 mobile-col-12">
                <div class="group-content">
                    <div class="footer-title text-primary fs-20 lh-28 fw700">SALES GALLERY</div>
                    <div class="footer-content">
                        <div class="flex-box al-start">
                            <img width="21" height="21" src="<?php echo get_template_directory_uri(); ?>/assets/images/MapPin.svg" alt="" />
                            <span class="text">Khu đô thị K-Home New City, đường Lê Lai, phường Bình Dương, TP.HCM</span>
                        </div>
                        <div class="flex-box al-start">
                            <img width="21" height="21" src="<?php echo get_template_directory_uri(); ?>/assets/images/Phone.svg" alt="" />
                            <span class="text"><?php echo esc_html(get_theme_mod('phone_number', '0937961212')); ?> – 09.222.222.56</span>
                        </div>
                    </div>
                </div>

                <div class="group-content">
                    <div class="footer-title text-primary fs-20 lh-28 fw700">Phát triển dự án KIM OANH LAND (Thành viên Kim Oanh Group)</div>
                    <div class="footer-content">
                        <div class="flex-box al-start">
                            <img width="21" height="21" src="<?php echo get_template_directory_uri(); ?>/assets/images/MapPin.svg" alt="" />
                            <span class="text">219 - 221 Xô Viết Nghệ Tĩnh, P. 17, Quận Bình Thạnh, TP. HCM</span>
                        </div>
                        <div class="flex-box al-start">
                            <img width="21" height="21" src="<?php echo get_template_directory_uri(); ?>/assets/images/Phone.svg" alt="" />
                            <span class="text"><?php echo esc_html(get_theme_mod('phone_number', '0937961212')); ?> – 0988.12.12.12</span>
                        </div>
                        <div class="flex-box al-start">
                            <img width="21" height="21" src="<?php echo get_template_directory_uri(); ?>/assets/images/Envelope.svg" alt="" />
                            <span class="text"><?php echo esc_html(get_theme_mod('email_address', 'info@kimoanhgroup.vn')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="group-content google-map-button">
                    <a class="text-primary" href="<?php echo esc_url(get_theme_mod('google_map_link', 'https://maps.app.goo.gl/nHH9dRpE6nq9rAGz9')); ?>" target="_blank" title="Xem bản đồ">
                        <span class="text">Xem bản đồ</span>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8014 6.21801L3.89731 2.09731C3.6978 2.02824 3.48288 2.0167 3.27713 2.06402C3.07137 2.11134 2.88308 2.21561 2.73379 2.3649C2.5845 2.51419 2.48024 2.70247 2.43292 2.90823C2.3856 3.11399 2.39713 3.32891 2.46621 3.52842L6.58683 15.4326C6.66103 15.6548 6.80377 15.8478 6.99453 15.9838C7.18529 16.1198 7.41426 16.1918 7.64853 16.1895C7.65546 16.1895 7.66253 16.1895 7.66947 16.1893C7.90734 16.1878 8.13841 16.1098 8.32852 15.9668C8.51863 15.8238 8.65771 15.6235 8.72519 15.3954L10.3814 10.0126L15.7643 8.35636C15.9911 8.28657 16.19 8.14689 16.3325 7.95727C16.4751 7.76766 16.5541 7.53783 16.5582 7.30063C16.5623 7.06342 16.4914 6.83099 16.3554 6.63655C16.2195 6.44211 16.0256 6.29562 15.8014 6.21801H15.8014Z" fill="#326768"></path>
                        </svg>
                    </a>
                </div>

                <div class="group-content">
                    <div class="footer-title text-primary fs-20 lh-28 fw700">THEO DÕI CHÚNG TÔI</div>
                    <div class="footer-socials flex-box al-center flex-wrap">
                        <a href="<?php echo esc_url(get_theme_mod('messenger_link', 'https://www.facebook.com/khomenewcityofficial')); ?>" target="_blank" title="Facebook" class="flex-box">
                            <img width="38" height="39" src="<?php echo get_template_directory_uri(); ?>/assets/images/Facebook.svg" alt="Facebook" />
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('zalo_link', 'https://zalo.me/3783004274492024975')); ?>" target="_blank" title="Zalo" class="flex-box">
                            <img width="38" height="39" src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram.svg" alt="Zalo" />
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('tiktok_link', 'https://www.tiktok.com/@thelinkcity.net')); ?>" target="_blank" title="Tiktok" class="flex-box">
                            <img width="39" height="39" src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok-circel.png" alt="Tiktok" />
                        </a>
                    </div>
                </div>

                <div class="copyright fs-12 lh-20 fw400 text-3">
                    <?php echo esc_html(get_theme_mod('copyright_text', '© 2024 K-Home New City. All rights reserved.')); ?>
                </div>
            </div>

            <div class="col-3 tablet-col-6 mobile-col-12">
                <div class="footer-title text-primary fs-20 lh-28 fw700">ĐĂNG KÍ NHẬN THÔNG TIN</div>
                <!-- Placeholder for a contact form or newsletter subscription -->
                <div class="fs-12 lh-20 fw400 text-3" style="margin-top: 12px">
                    (*) Chúng tôi đặc biệt cẩn trọng trong việc chuẩn bị nội dung trên website này. Các thông tin/ hình ảnh/ bản vẽ chỉ thể hiện thông số kỹ thuật, tính thẩm mỹ và sự sáng tạo tại thời điểm được đăng tải và mang tính chất tham khảo.
                </div>
            </div>
        </div>
    </div>
</section>
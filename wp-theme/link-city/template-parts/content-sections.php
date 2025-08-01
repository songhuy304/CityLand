<?php
/**
 * Template part for displaying main content sections
 *
 * @package Link_City
 */

// Section 1 - Trang chủ
?>
<section class="section section-trangchu section-dark fp-section fp-table" 
         data-title="Trang chủ" data-anchors="trang-chu" data-anchor="trang-chu">
</section>

<?php
// Section 2 - Thiết kế
?>
<section class="section section-dark section-home-1 fp-section fp-table" 
         data-title="Thiết kế" data-anchors="thiet-ke" data-anchor="thiet-ke">
    <div class="section-bg bg-zoom-slow"></div>
    <div class="grid-container add-pt z-5 relative flex-box jus-between">
        <div class="col-4 mobile-col-12 mobile-text-center tablet-col-6">
            <h2 class="sec-title text-white" data-aos="fade-right" data-aos-delay="100">
                ĐÔ THỊ NHÀ Ở XÃ HỘI<br />
                <span>CHUẨN SINGAPORE</span>
            </h2>
            <div class="content-wrapper text-white" data-aos="fade-right" data-aos-delay="300">
                <p>
                    Mang trong mình khát vọng nhân sinh, Kim Oanh Land – thành viên Kim Oanh Group, 
                    cùng đối tác chiến lược Surbana Jurong (Singapore) đã dành nhiều tâm huyết phát triển 
                    K-Home New City trở thành Đô thị nhà ở xã hội chuẩn Singapore đầu tiên tại Việt Nam 
                    và là dự án nhà ở xã hội đầu tiên tại Bình Dương được phát triển theo tiêu chuẩn 
                    công trình xanh EDGE.
                </p>
            </div>
        </div>

        <div class="col-5 mobile-col-12 video-col mobile-text-center tablet-col-6">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1" 
                    autoplay muted loop style="width: 100%; height: 100%"></iframe>
        </div>
    </div>
</section>

<?php
// Section 3 - Tổng quan
?>
<section class="section section-dark home-sec-2 fp-section fp-table" 
         data-title="Tổng quan" data-anchors="tong-quan" data-anchor="tong-quan">
    <div class="section-bg bg-zoom-slow"></div>
    <div class="grid-container add-pt h-full z-5 relative" style="width: 100%">
        <div class="flex-box jus-center al-center h-full add-pt">
            <div class="col-6 text-center tablet-col-10 mobile-col-12" 
                 data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h2 class="sec-title text-white" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    THÔNG TIN <br /><span>TỔNG QUAN</span>
                </h2>
                <div class="content-wrapper text-white cont-style-li aos-init aos-animate" 
                     data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                    <ul>
                        <li>
                            <strong>Vị trí</strong>: Ba mặt tiền đường Lê Lai – Nguyễn Văn Linh – đường số 8 KCN VSIP 2, 
                            phường Bình Dương, TP.HCM
                        </li>
                        <li>
                            <strong>Phát triển dự án</strong>: Kim Oanh Land (thành viên Kim Oanh Group)
                        </li>
                        <li>
                            <strong>Tư vấn thiết kế</strong>: Surbana Jurong (Singapore)
                        </li>
                        <li>
                            <strong>Quy mô:</strong> 26,69ha gồm 5 phân khu Bằng Lăng, Lát Hoa, Ngọc Lan, Hoàng Lan, Giáng Hương
                        </li>
                        <li><strong>Tổng số sản phẩm</strong>: 3.310 sản phẩm</li>
                        <li>
                            <strong>Loại hình sản phẩm</strong>: nhà ở thương mại, nhà ở xã hội liên kế, căn hộ cao tầng
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Section 4 - Vị trí
?>
<section class="section section-dark position-sec fp-section fp-table" 
         data-title="Vị trí" data-anchors="vi-tri" data-anchor="vi-tri">
    <div class="grid-container add-pt">
        <div class="flex-box al-end h-full">
            <div class="left-col pl-cont" data-aos="fade-right">
                <h2 class="sec-title text-white">
                    TÂM XANH <br /><span>THÀNH PHỐ MỚI BÌNH DƯƠNG</span>
                </h2>

                <div class="content-wrapper text-white overflow-y">
                    <p>
                        <span style="font-weight: 400">
                            K-Home New City xứng tầm trở thành tâm điểm giao thương khi tọa lạc ngay lõi trung tâm 
                            thành phố mới Bình Dương, đồng thời sở hữu hệ thống giao thông hiện đại kết nối thông suốt 
                            đến các thành phố lớn của miền Nam như TPHCM, Thuận An, Dĩ An, Biên Hòa…
                        </span>
                    </p>
                </div>

                <div>
                    <a class="text-white" href="<?php echo get_theme_mod('google_map_link', 'https://maps.app.goo.gl/nHH9dRpE6nq9rAGz9'); ?>" 
                       target="_blank" title="Xem bản đồ">
                        <span class="text">Xem bản đồ</span>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8014 6.21801L3.89731 2.09731C3.6978 2.02824 3.48288 2.0167 3.27713 2.06402C3.07137 2.11134 2.88308 2.21561 2.73379 2.3649C2.5845 2.51419 2.48024 2.70247 2.43292 2.90823C2.3856 3.11399 2.39713 3.32891 2.46621 3.52842L6.58683 15.4326C6.66103 15.6548 6.80377 15.8478 6.99453 15.9838C7.18529 16.1198 7.41426 16.1918 7.64853 16.1895C7.65546 16.1895 7.66253 16.1895 7.66947 16.1893C7.90734 16.1878 8.13841 16.1098 8.32852 15.9668C8.51863 15.8238 8.65771 15.6235 8.72519 15.3954L10.3814 10.0126L15.7643 8.35636C15.9911 8.28657 16.19 8.14689 16.3325 7.95727C16.4751 7.76766 16.5541 7.53783 16.5582 7.30063C16.5623 7.06342 16.4914 6.83099 16.3554 6.63655C16.2195 6.44211 16.0256 6.29562 15.8014 6.21801H15.8014Z" 
                                  fill="#FFF"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Section 5 - Nội khu
?>
<section class="section section-dark position-sec fp-section fp-table" 
         data-title="Nội khu" data-anchors="noi-khu" data-anchor="noi-khu">
    <div class="flex-box al-end h-full">
        <div class="left-col pl-cont" data-aos="fade-right">
            <h2 class="sec-title text-white">
                NỘI KHU <br /><span>K-HOME NEW CITY</span>
            </h2>
        </div>
    </div>
</section>

<?php
// Section 6 - Ngoại khu
?>
<section class="section section-light overflow-hidden utilities-3 fp-section fp-table" 
         data-title="Ngoại khu" data-anchors="ngoai-khu" data-anchor="ngoai-khu">
    <div class="fp-tableCell">
        <div class="grid-container add-pt">
            <div class="title-group text-center">
                <h2 class="sec-title text-primary aos-init aos-animate" 
                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                    <span>TRUNG TÂM KẾT NỐI</span> ĐA TIỆN ÍCH
                </h2>
                <div class="content-wrapper aos-init aos-animate" 
                     data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <p>
                        K-Home New City mang đến sự cân bằng hoàn hảo cho cuộc sống hiện đại khi chỉ một bước chân 
                        là chạm đến khu lõi trung tâm sôi động và một bước chân để trở về tổ ấm an yên cùng những 
                        người thân yêu.
                    </p>
                </div>
            </div>

            <div class="utilities-swiper-2-wrap" 
                 data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                <!-- Swiper content will be loaded via JavaScript -->
                <div class="swiper utilities-swiper-2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-e989e7ed3f914969" aria-live="off">
                        <!-- Swiper slides will be populated by JavaScript -->
                    </div>
                </div>
                
                <div class="swiper-arrow-2 style-3 prev swiper-button-disabled swiper-button-lock" 
                     tabindex="-1" role="button" aria-label="Previous slide" 
                     aria-controls="swiper-wrapper-e989e7ed3f914969" aria-disabled="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 4.5L7.5 12L15 19.5" stroke="#326768" stroke-width="1.5" 
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="swiper-arrow-2 style-3 next swiper-button-disabled swiper-button-lock" 
                     tabindex="-1" role="button" aria-label="Next slide" 
                     aria-controls="swiper-wrapper-e989e7ed3f914969" aria-disabled="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.5L16.5 12L9 19.5" stroke="#326768" stroke-width="1.5" 
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>

                <div style="margin-top: 1.042rem" data-aos="fade-up" data-aos-delay="700" data-aos-duration="500" 
                     class="aos-init aos-animate">
                    <a href="<?php echo esc_url(home_url('/tien-ich/#ngoai-khu')); ?>" 
                       title="<?php echo esc_url(home_url('/tien-ich/')); ?>" class="btn btn-primary mx-auto">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="arrow-right" />
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Section 7 - Mặt bằng
?>
<section class="section section-dark position-sec fp-section fp-table" 
         data-title="Mặt bằng" data-anchors="mat-bang" data-anchor="mat-bang">
    <div class="grid-container add-pt">
        <div class="flex-box al-end h-full">
            <div class="left-col pl-cont" data-aos="fade-right">
                <h2 class="sec-title text-white">
                    NỘI KHU <br /><span>K-HOME NEW CITY</span>
                </h2>
            </div>
        </div>
    </div>
</section>

<?php
// Section 8 - View 360
?>
<section class="section section-dark overflow-hidden utilities-3 fp-section fp-table" 
         data-title="View 360" data-anchors="view-360" data-anchor="view-360">
    <div class="fp-tableCell"></div>
</section>

<?php
// Section 9 - Tin tức
?>
<section class="section section-light overflow-hidden utilities-3 fp-section fp-table" 
         data-title="tin tức" data-anchors="tin-tuc" data-anchor="tin-tuc">
    <div class="fp-tableCell"></div>
</section>

<?php
// Section 10 - Tiến độ
?>
<section class="section progress-page section-light overflow-hidden fp-section fp-table" 
         data-title="Tiến độ" data-anchors="tien-do" data-anchor="tien-do">
    <div class="fp-tableCell">
        <div class="grid-container add-pt">
            <div class="flex-box tablet-flex-col">
                <div class="col-4 tablet-col-12 tablet-text-center aos-init aos-animate" 
                     data-aos="fade-right" data-aos-delay="300" data-aos-duration="5000">
                    <h2 class="sec-title text-primary">
                        <span>TIẾN ĐỘ DỰ ÁN</span>
                    </h2>
                    <div class="content-wrapper">
                        <p>
                            Cập nhật tiến độ thực tế mới nhất của dự án<br />
                            K-Home New City.
                        </p>
                    </div>
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url(home_url('/tien-do-du-an/')); ?>" 
                           title="<?php echo esc_url(home_url('/tien-do-du-an/')); ?>" class="btn btn-primary tablet-mx-auto">
                            <span>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="arrow-right" />
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-8 tablet-col-12" 
                     data-aos="fade-left" data-aos-delay="500" data-aos-duration="500">
                    <div class="select">
                        <select id="" class="custom-sl select-hidden" style="display: none">
                            <option value="0">Tháng 7 - 2025</option>
                            <option value="1">Tháng 06 - 2025</option>
                            <option value="2">Tháng 04 - 2025</option>
                        </select>
                    </div>
                    <div class="tab-gallery tab-0 active">
                        <div class="flex-box mobile-col-reverse">
                            <div class="swiper progress-thumb swiper-initialized swiper-pointer-events swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-13c8dba54834c741" aria-live="polite">
                                    <!-- Progress thumbnails will be loaded via JavaScript -->
                                </div>
                                <div class="prev ts-04 arrow" tabindex="0" role="button" aria-label="Previous slide" 
                                     aria-controls="swiper-wrapper-bd5fc510bcfb1dd50" aria-disabled="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 15L12 7.5L4.5 15" stroke="white" stroke-width="1.5" 
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="next arrow ts-04" tabindex="0" role="button" aria-label="Next slide" 
                                     aria-controls="swiper-wrapper-bd5fc510bcfb1dd50" aria-disabled="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 9L12 16.5L4.5 9" stroke="white" stroke-width="1.5" 
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper progress-swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-id="0">
                                <div class="swiper-wrapper" id="swiper-wrapper-bd5fc510bcfb1dd50" aria-live="off">
                                    <!-- Progress images will be loaded via JavaScript -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
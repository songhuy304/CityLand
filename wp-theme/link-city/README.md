# Link City WordPress Theme

## Mô tả
WordPress theme cho dự án K-Home New City, được phát triển bởi 1227 Team.

## Tính năng chính

### 1. Giao diện
- Giao diện fullpage với các section tương tác
- Menu tĩnh từ HTML gốc
- Responsive design cho mobile và tablet
- Loading screen với animation
- Popup search functionality

### 2. Tùy chỉnh qua Customizer
- **Thông tin liên hệ:**
  - Số điện thoại
  - Link Zalo
  - Link TikTok  
  - Link Messenger
  - Link Google Map
  - Email address
  - Copyright text
  - reCAPTCHA keys

- **Hình ảnh:**
  - Logo chính
  - Logo tối
  - Ảnh nền header
  - Icon điện thoại
  - Icon Zalo
  - Icon Messenger

### 3. Plugin tích hợp
- **Contact Form 7:** Tự động cài đặt và tạo form mặc định
- **reCAPTCHA:** Hỗ trợ bảo mật form

## Cài đặt

### 1. Upload theme
1. Copy thư mục `link-city` vào `/wp-content/themes/`
2. Vào WordPress Admin > Appearance > Themes
3. Kích hoạt theme "Link City"

### 2. Cấu hình Customizer
1. Vào Appearance > Customize
2. Cấu hình các thông tin liên hệ trong section "Thông tin liên hệ"
3. Upload các hình ảnh cần thiết trong section "Hình ảnh"

### 3. Tạo trang
1. Tạo trang "Trang chủ" và set làm front page
2. Tạo các trang con như: Thiết kế, Tiện ích, Vị trí, v.v.

## Cấu trúc thư mục

```
link-city/
├── style.css                 # Theme stylesheet
├── index.php                 # Main template
├── header.php                # Header template
├── footer.php                # Footer template
├── functions.php             # Theme functions
├── page.php                  # Page template
├── template-parts/
│   └── content-sections.php  # Main content sections
├── assets/
│   ├── css/
│   │   ├── styles.css        # Main styles
│   │   └── core.css          # Core styles
│   ├── js/
│   │   └── app.js           # Main JavaScript
│   └── images/              # Theme images
└── README.md                # This file
```

## Dependencies

### CSS Libraries
- FullPage.js CSS
- AOS (Animate On Scroll) CSS

### JavaScript Libraries
- jQuery
- FullPage.js
- Swiper.js
- AOS (Animate On Scroll)

## Tùy chỉnh

### Thêm section mới
1. Thêm section vào `template-parts/content-sections.php`
2. Cập nhật JavaScript trong `assets/js/app.js` nếu cần

### Thay đổi style
1. Chỉnh sửa `assets/css/styles.css`
2. Hoặc thêm CSS custom trong Customizer

### Thêm tính năng mới
1. Thêm function vào `functions.php`
2. Tạo template part mới trong `template-parts/`

## Hỗ trợ

- **Tác giả:** 1227 Team
- **Phiên bản:** 1.0
- **WordPress:** 5.0+
- **PHP:** 7.4+

## Changelog

### Version 1.0
- Initial release
- Fullpage layout
- Customizer integration
- Contact Form 7 auto-install
- Responsive design 
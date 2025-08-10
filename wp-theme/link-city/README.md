# Link City WordPress Theme

## Mô tả

Link City là một WordPress theme được thiết kế đặc biệt cho dự án The Link City. Theme này được xây dựng với các tính năng hiện đại và tối ưu hóa cho trải nghiệm người dùng.

## Tính năng chính

### 🎨 **Giao diện hiện đại**

- Thiết kế responsive, tương thích với mọi thiết bị
- Sử dụng FullPage.js cho trải nghiệm cuộn mượt mà
- Animation với AOS (Animate On Scroll)
- Slider với Swiper.js

### ⚙️ **Tùy chỉnh dễ dàng**

- WordPress Customizer tích hợp
- 10+ options có thể tùy chỉnh qua admin
- Quản lý thông tin liên hệ, mạng xã hội
- Tùy chỉnh reCAPTCHA

### 📱 **Tối ưu hóa**

- Scripts được load qua WordPress enqueue system
- SVG files được tối ưu hóa
- CSS và JS được minify
- Tương thích với Contact Form 7

## Cài đặt

### Bước 1: Upload theme

1. Upload thư mục `link-city` vào `/wp-content/themes/`
2. Kích hoạt theme trong WordPress Admin

### Bước 2: Cấu hình Customizer

1. Vào **Appearance > Customize**
2. Tìm section **"Thông tin liên hệ"**
3. Cập nhật các thông tin:
    - Số điện thoại
    - Email
    - Link mạng xã hội
    - Copyright text

### Bước 3: Cài đặt Contact Form 7

Theme sẽ tự động cài đặt Contact Form 7 plugin khi được kích hoạt.

## Cấu trúc thư mục

```
link-city/
├── assets/
│   ├── css/
│   │   ├── core.css
│   │   └── styles.css
│   ├── js/
│   │   └── app.js
│   └── images/
│       ├── logo.svg
│       ├── Mask-group.svg
│       ├── Group-18811.svg
│       ├── Vector.svg
│       ├── Envelope.svg
│       ├── Facebook.svg
│       ├── Instagram.svg
│       └── tiktok.svg
├── template-parts/
│   └── content-sections.php
├── functions.php
├── header.php
├── footer.php
├── index.php
├── style.css
├── .gitignore
└── README.md
```

## Customizer Options

### Thông tin liên hệ

- **Số điện thoại**: `phone_number`
- **Hiển thị số điện thoại**: `phone_display`
- **Email**: `email_address`
- **Copyright**: `copyright_text`

### Mạng xã hội

- **Link Zalo**: `zalo_link`
- **Link TikTok**: `tiktok_link`
- **Link Messenger**: `messenger_link`
- **Link Google Map**: `google_map_link`

### reCAPTCHA

- **Site Key**: `recaptcha_site_key`
- **Secret Key**: `recaptcha_secret_key`

## Scripts được sử dụng

### CSS Libraries

- FullPage.js CSS
- AOS (Animate On Scroll) CSS
- Swiper.js CSS

### JavaScript Libraries

- jQuery 3.7.1
- FullPage.js
- AOS (Animate On Scroll)
- Swiper.js

## Tùy chỉnh

### Thêm section mới

1. Mở file `template-parts/content-sections.php`
2. Thêm section mới với cấu trúc:

```html
<section class="section section-dark fp-section fp-table" data-anchor="ten-section">
    <div class="section-bg bg-zoom-slow"></div>
    <div class="grid-container">
        <!-- Nội dung section -->
    </div>
</section>
```

### Thêm menu item

1. Mở file `header.php`
2. Thêm item vào menu:

```html
<li><a href="#ten-section">Tên menu</a></li>
```

## Hỗ trợ

Nếu bạn gặp vấn đề hoặc cần hỗ trợ, vui lòng liên hệ:

- Email: thelinkcitykimoanh@gmail.com
- Hotline: 09.222.222.56

## Phiên bản

- **Version**: 1.0
- **Author**: 1227 Team
- **Last Updated**: 2024

## License

© 2024 The Link City. All rights reserved.

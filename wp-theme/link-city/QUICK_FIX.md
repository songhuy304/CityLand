# Quick Fix Guide - Link City Theme

## Lỗi jQuery - $ is not a function

### Cách sửa nhanh:

1. **Đảm bảo file app.js gốc được copy:**
   ```bash
   cp /path/to/original/app.js wp-content/themes/link-city/assets/js/app.js
   ```

2. **Kiểm tra functions.php có đúng:**
   ```php
   // Deregister WordPress default jQuery and load from CDN
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', false);
   wp_enqueue_script('jquery');
   ```

3. **Kiểm tra header.php có jQuery:**
   ```html
   <!-- Load jQuery first to ensure $ is available -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script>window.$ = window.jQuery;</script>
   ```

4. **Test jQuery:**
   - Truy cập: `your-site.com/wp-content/themes/link-city/test-jquery.php`
   - Kiểm tra console

## Lỗi 404 - File không tìm thấy

### Cách sửa nhanh:

1. **Tạo file còn thiếu:**
   ```bash
   # Tạo file CSS
   touch wp-content/themes/link-city/assets/css/styles.css
   touch wp-content/themes/link-city/assets/css/core.css
   
   # Tạo file JS
   touch wp-content/themes/link-city/assets/js/app.js
   
   # Tạo file images
   touch wp-content/themes/link-city/assets/images/logo.svg
   touch wp-content/themes/link-city/assets/images/Mask-group.svg
   touch wp-content/themes/link-city/assets/images/Vector.svg
   touch wp-content/themes/link-city/assets/images/Group-18811.svg
   ```

2. **Copy file gốc:**
   ```bash
   cp /path/to/original/styles.css wp-content/themes/link-city/assets/css/
   cp /path/to/original/core.css wp-content/themes/link-city/assets/css/
   cp /path/to/original/app.js wp-content/themes/link-city/assets/js/
   cp /path/to/original/assets/*.svg wp-content/themes/link-city/assets/images/
   ```

3. **Set permissions:**
   ```bash
   chmod 644 wp-content/themes/link-city/assets/css/*
   chmod 644 wp-content/themes/link-city/assets/js/*
   chmod 644 wp-content/themes/link-city/assets/images/*
   ```

## Kiểm tra nhanh

1. **Kiểm tra file tồn tại:**
   ```bash
   ls -la wp-content/themes/link-city/assets/
   ```

2. **Kiểm tra jQuery:**
   - Mở Developer Tools (F12)
   - Vào Console
   - Gõ: `console.log($)`
   - Nếu hiện function thì OK, nếu undefined thì có lỗi

3. **Kiểm tra Network:**
   - Mở Developer Tools (F12)
   - Vào Network tab
   - Refresh trang
   - Kiểm tra các file bị lỗi 404

## Nếu vẫn lỗi

1. **Xem file debug.php:**
   - Truy cập: `your-site.com/wp-content/themes/link-city/debug.php`

2. **Xem file TROUBLESHOOTING.md:**
   - Đọc chi tiết cách sửa từng lỗi

3. **Liên hệ hỗ trợ:**
   - Gửi thông tin lỗi cho 1227 Team 
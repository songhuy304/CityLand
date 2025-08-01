# Link City Theme - Troubleshooting Guide

## Lỗi thường gặp và cách khắc phục

### 1. Lỗi 404 - File không tìm thấy

**Lỗi:**
```
Failed to load resource: the server responded with a status of 404 ()
logo.svg:1 Failed to load resource
core.css:1 Failed to load resource
styles.css:1 Failed to load resource
```

**Nguyên nhân:**
- File không tồn tại trong thư mục assets
- Đường dẫn không đúng
- Permissions không đúng

**Cách khắc phục:**

1. **Kiểm tra file tồn tại:**
   ```bash
   ls -la wp-content/themes/link-city/assets/
   ls -la wp-content/themes/link-city/assets/css/
   ls -la wp-content/themes/link-city/assets/js/
   ls -la wp-content/themes/link-city/assets/images/
   ```

2. **Tạo file còn thiếu:**
   ```bash
   # Nếu thiếu file CSS
   touch wp-content/themes/link-city/assets/css/styles.css
   touch wp-content/themes/link-city/assets/css/core.css
   
   # Nếu thiếu file JS
   touch wp-content/themes/link-city/assets/js/app.js
   
   # Nếu thiếu file images
   touch wp-content/themes/link-city/assets/images/logo.svg
   touch wp-content/themes/link-city/assets/images/Mask-group.svg
   touch wp-content/themes/link-city/assets/images/Vector.svg
   touch wp-content/themes/link-city/assets/images/Group-18811.svg
   ```

3. **Set permissions:**
   ```bash
   chmod 644 wp-content/themes/link-city/assets/css/*
   chmod 644 wp-content/themes/link-city/assets/js/*
   chmod 644 wp-content/themes/link-city/assets/images/*
   ```

### 2. Lỗi JavaScript - $ is not a function

**Lỗi:**
```
app.js?ver=1.0.0:1 Uncaught TypeError: $ is not a function
```

**Nguyên nhân:**
- jQuery chưa được load
- Conflict với jQuery khác
- Script load trước jQuery
- WordPress jQuery conflict

**Cách khắc phục:**

1. **Kiểm tra jQuery trong functions.php:**
   ```php
   // Deregister WordPress default jQuery and load from CDN
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', false);
   wp_enqueue_script('jquery');
   ```

2. **Thêm jQuery vào header.php:**
   ```html
   <!-- Load jQuery first to ensure $ is available -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script>window.$ = window.jQuery;</script>
   ```

3. **Kiểm tra thứ tự load script:**
   ```php
   wp_enqueue_script('link-city-app', 
       get_template_directory_uri() . '/assets/js/app.js', 
       array('jquery'), '1.0.0', true);
   ```

4. **Test jQuery với file test-jquery.php:**
   - Upload file `test-jquery.php` vào theme
   - Truy cập: `your-site.com/wp-content/themes/link-city/test-jquery.php`
   - Kiểm tra console để xem jQuery status

### 3. Lỗi CSS không load

**Lỗi:**
```
styles.css:1 Failed to load resource
core.css:1 Failed to load resource
```

**Cách khắc phục:**

1. **Kiểm tra import trong style.css:**
   ```css
   @import url("assets/css/styles.css");
   @import url("assets/css/core.css");
   ```

2. **Kiểm tra file tồn tại:**
   ```bash
   file wp-content/themes/link-city/assets/css/styles.css
   file wp-content/themes/link-city/assets/css/core.css
   ```

3. **Copy file từ gốc:**
   ```bash
   cp /path/to/original/styles.css wp-content/themes/link-city/assets/css/
   cp /path/to/original/core.css wp-content/themes/link-city/assets/css/
   ```

### 4. Lỗi Images không hiển thị

**Lỗi:**
```
Mask-group.svg:1 Failed to load resource
Vector.svg:1 Failed to load resource
Group-18811.svg:1 Failed to load resource
```

**Cách khắc phục:**

1. **Tạo file SVG placeholder:**
   ```bash
   # Tạo file Mask-group.svg
   echo '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.7055 20L16.9712 16.3056M19.6385 9.97222C19.6385 14.9274 15.5781 18.9444 10.5692 18.9444C5.56044 18.9444 1.5 14.9274 1.5 9.97222C1.5 5.017 5.56044 1 10.5692 1C15.5781 1 19.6385 5.017 19.6385 9.97222Z" stroke="white" stroke-width="1.5" stroke-linecap="square"/></svg>' > wp-content/themes/link-city/assets/images/Mask-group.svg
   ```

2. **Copy từ thư mục gốc:**
   ```bash
   cp /path/to/original/assets/*.svg wp-content/themes/link-city/assets/images/
   ```

### 5. Debug Theme

**Sử dụng file debug.php:**
1. Upload file `debug.php` vào thư mục theme
2. Truy cập: `your-site.com/wp-content/themes/link-city/debug.php`
3. Kiểm tra thông tin hiển thị

**Kiểm tra Console:**
1. Mở Developer Tools (F12)
2. Vào tab Console
3. Kiểm tra các lỗi JavaScript

**Kiểm tra Network:**
1. Mở Developer Tools (F12)
2. Vào tab Network
3. Refresh trang
4. Kiểm tra các request bị lỗi 404

### 6. Cấu hình WordPress

**Kiểm tra:**
1. Permalink Settings: Settings > Permalinks
2. Theme Activation: Appearance > Themes
3. Plugin Conflicts: Deactivate plugins một cách từ từ

**Tạo trang test:**
1. Tạo trang "Trang chủ"
2. Set làm front page: Settings > Reading
3. Kiểm tra hiển thị

### 7. Server Configuration

**Apache (.htaccess):**
```apache
# Enable CORS for assets
<FilesMatch "\.(css|js|png|jpg|jpeg|gif|svg|ico)$">
    Header set Access-Control-Allow-Origin "*"
</FilesMatch>
```

**Nginx:**
```nginx
location ~* \.(css|js|png|jpg|jpeg|gif|svg|ico)$ {
    expires 1y;
    add_header Cache-Control "public, immutable";
}
```

## Liên hệ hỗ trợ

Nếu vẫn gặp vấn đề, hãy:
1. Kiểm tra file `debug.php`
2. Chụp screenshot lỗi
3. Gửi thông tin cho 1227 Team 
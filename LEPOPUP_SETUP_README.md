# Hướng dẫn Setup Lepopup Form

## Tổng quan

Lepopup form đã được tích hợp để xử lý đăng ký tìm hiểu thông tin dự án và gửi email thông báo đến admin.

## Các file đã được cập nhật

### 1. `wp-theme/link-city/functions.php`

- Thêm function `handle_lepopup_form_submission()` để xử lý form submit
- Thêm function `add_lepopup_ajax_url()` để cung cấp AJAX URL và nonce
- Sử dụng WordPress AJAX hooks để xử lý request

### 2. `wp-theme/link-city/footer.php`

- Cập nhật form HTML với các trường name mới
- Thêm các trường ẩn cần thiết cho xử lý form
- Thay đổi từ link thành button submit

### 3. `wp-theme/link-city/assets/js/app.js`

- Thêm event handler cho form submit
- Xử lý AJAX request và response
- Hiển thị thông báo thành công/lỗi
- Tự động đóng popup sau khi submit thành công

### 4. `app.js` (file gốc)

- Cập nhật tương tự như file trong theme

### 5. `index.html`

- Cập nhật form HTML tương tự như footer.php

## Cách hoạt động

### 1. Form Structure

```html
<form class="lepopup-form" id="lepopup-contact-form">
    <input type="text" name="lepopup_name" placeholder="Tên của bạn" required />
    <input type="tel" name="lepopup_phone" placeholder="Số điện thoại" required />
    <input type="email" name="lepopup_email" placeholder="Email của bạn" required />

    <!-- Hidden fields -->
    <input type="hidden" name="lepopup_form_submit" value="yes" />
    <input
        type="hidden"
        name="lepopup_nonce"
        value="<?php echo wp_create_nonce('lepopup_form_nonce'); ?>"
    />

    <button type="submit">GỬI THÔNG TIN</button>
</form>
```

### 2. JavaScript Processing

- Form submit được intercept bằng jQuery
- Dữ liệu được gửi qua AJAX đến WordPress
- Sử dụng SweetAlert2 để hiển thị thông báo
- Tự động đóng popup và reset form sau khi thành công

### 3. PHP Backend

- Xác thực nonce để bảo mật
- Validate dữ liệu đầu vào
- Gửi email HTML đến admin
- Trả về JSON response

## Email Template

Email được gửi đến admin sẽ có format HTML với:

- Thông tin khách hàng (tên, số điện thoại, email)
- Thời gian gửi form
- Ghi chú về nguồn form

## Bảo mật

- Sử dụng WordPress nonce để chống CSRF
- Sanitize và validate tất cả input
- Chỉ xử lý request có action đúng

## Testing

File `test-lepopup.html` được tạo để test form mà không cần WordPress:

- Mở file trong browser
- Click "Mở Form Đăng Ký"
- Điền thông tin và submit
- Kiểm tra console để xem dữ liệu

## Troubleshooting

### Form không submit

- Kiểm tra console để xem lỗi JavaScript
- Đảm bảo jQuery đã được load
- Kiểm tra ID form có đúng không

### Email không được gửi

- Kiểm tra WordPress mail configuration
- Kiểm tra admin email trong WordPress settings
- Kiểm tra server mail logs

### AJAX không hoạt động

- Đảm bảo `lepopup_ajax_url` được định nghĩa
- Kiểm tra WordPress AJAX hooks
- Kiểm tra nonce có hợp lệ không

## Customization

### Thay đổi email template

Chỉnh sửa function `handle_lepopup_form_submit()` trong `functions.php`

### Thay đổi thông báo

Chỉnh sửa text trong JavaScript và PHP

### Thêm validation

Thêm logic validation trong PHP function

### Thay đổi styling

Chỉnh sửa CSS trong `styles.css`

## Dependencies

- WordPress 5.0+
- jQuery 3.7+
- SweetAlert2 (đã được include trong theme)
- PHP mail function enabled

## Notes

- Form sẽ tự động hiển thị khi load trang (nếu không có banner)
- Có thể đóng bằng cách click nút X hoặc click bên ngoài
- Form sẽ được reset sau khi submit thành công
- Tất cả trường đều bắt buộc (required)

# Archive Templates cho Link City WordPress Theme

## Tổng quan

Bộ template archive này được tạo dựa trên thiết kế từ file `category.html` gốc và được tối ưu hóa cho WordPress theme Link City.

## Các Template đã tạo

### 1. `archive.php`

- Template chính cho tất cả các trang archive
- Xử lý category, tag, author, date archives
- Hiển thị menu categories
- Hỗ trợ pagination và load more button

### 2. `category.php`

- Template riêng cho category pages
- Hiển thị tên category trong tiêu đề
- Menu categories với highlight category hiện tại
- Load more button với AJAX support

### 3. `tag.php`

- Template cho tag pages
- Hiển thị tên tag trong tiêu đề
- Layout tương tự category nhưng đơn giản hơn

### 4. `author.php`

- Template cho author archive pages
- Hiển thị tên tác giả
- Danh sách bài viết của tác giả

### 5. `date.php`

- Template cho date archives (năm, tháng, ngày)
- Tự động hiển thị định dạng ngày phù hợp
- Hỗ trợ year, month, day archives

### 6. `search.php`

- Template cho search results
- Hiển thị từ khóa tìm kiếm
- Thêm excerpt cho mỗi bài viết
- Gợi ý tìm kiếm khi không có kết quả

### 7. `404.php`

- Template cho trang lỗi 404
- Giao diện thân thiện với người dùng
- Hiển thị bài viết gần đây để giữ chân người dùng
- Nút quay về trang chủ và tìm kiếm

## Tính năng chính

### Responsive Design

- Grid layout: 3 cột trên desktop, 2 cột trên tablet và mobile
- CSS classes tương thích với theme hiện tại

### Pagination

- WordPress native pagination
- Load more button cho AJAX pagination
- Hỗ trợ custom post types

### SEO Friendly

- Proper heading hierarchy
- Meta information (date, author)
- Alt text cho images
- Semantic HTML structure

### Performance

- Lazy loading cho images
- Optimized database queries
- Minimal JavaScript dependencies

## Cách sử dụng

### 1. Cài đặt

Các template này sẽ tự động được WordPress sử dụng dựa trên URL và context:

- `/category/tin-du-an/` → `category.php`
- `/tag/du-an/` → `tag.php`
- `/author/admin/` → `author.php`
- `/2024/01/` → `date.php`
- `/?s=keyword` → `search.php`
- Trang không tồn tại → `404.php`

### 2. Customization

Để tùy chỉnh template:

```php
// Thay đổi số bài viết mỗi trang
add_filter('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_archive()) {
            $query->set('posts_per_page', 12);
        }
    }
});

// Thay đổi image size
set_post_thumbnail_size(400, 300, true);
add_image_size('archive-thumb', 400, 300, true);
```

### 3. Styling

Các template sử dụng CSS classes có sẵn từ theme:

- `.grid-container` - Container chính
- `.grid-box` - Grid layout
- `.post-item` - Item bài viết
- `.btn`, `.btn-primary` - Buttons
- `.pagination` - Pagination styles

## Hỗ trợ AJAX Load More

Template hỗ trợ AJAX load more với data attributes:

```html
<div
    class="btn btn-primary mx-auto load-more-posts"
    data-page="2"
    data-max="4"
    data-limit="9"
    data-tax="category"
    data-term="86"
    data-target="post-grid"
    data-post-type="post"
></div>
```

## Tương thích

- WordPress 5.0+
- PHP 7.4+
- Theme Link City
- Responsive design
- SEO optimized
- Accessibility ready

## Ghi chú

- Tất cả template đều sử dụng `get_header()` và `get_footer()`
- Hỗ trợ đa ngôn ngữ với `__()` function
- Escape output với `esc_html()`, `esc_url()`
- Responsive images với `the_post_thumbnail()`
- Proper pagination với `get_the_posts_pagination()`

## Hỗ trợ

Nếu cần hỗ trợ hoặc có vấn đề gì, vui lòng liên hệ team phát triển.

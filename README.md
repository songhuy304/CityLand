# Clone The Link City Project

## 📋 Mô tả

Dự án clone website The Link City với WordPress theme tùy chỉnh. Project này bao gồm cả static HTML và WordPress theme hoàn chỉnh.

## 🏗️ Cấu trúc dự án

```
clone-khome/
├── index.html              # Static HTML version
├── app.js                  # Main JavaScript
├── core.css               # Core styles
├── styles.css             # Main styles
├── assets/                # Static assets
│   ├── images/
│   ├── arrow-right.svg
│   ├── search-icon.svg
│   ├── tiktok-circel.png
│   └── tiktok.svg
├── wp-theme/              # WordPress theme
│   └── link-city/
│       ├── functions.php
│       ├── header.php
│       ├── footer.php
│       ├── index.php
│       ├── style.css
│       ├── template-parts/
│       │   └── content-sections.php
│       ├── assets/
│       │   ├── css/
│       │   ├── js/
│       │   └── images/
│       └── README.md
├── .prettierrc           # Prettier configuration
├── .prettierignore       # Prettier ignore rules
├── .eslintrc.json        # ESLint configuration
├── package.json          # NPM scripts
└── README.md            # This file
```

## 🚀 Cài đặt và sử dụng

### 1. Cài đặt dependencies

```bash
npm install
```

### 2. Format code

```bash
# Format toàn bộ project (Web + PHP)
npm run format

# Format riêng từng loại
npm run format:web          # Format tất cả web files (JS, CSS, HTML, MD)
npm run format:js           # Format JavaScript files
npm run format:css          # Format CSS/SCSS files
npm run format:html         # Format HTML files
npm run format:md           # Format Markdown files
npm run format:json         # Format JSON files
npm run format:php          # Format PHP code + HTML trong PHP
npm run format:php-code     # Format chỉ PHP code
npm run format:php-html     # Format chỉ HTML trong PHP files

# Format theme WordPress
npm run format:theme        # Format toàn bộ theme
npm run format:theme:web    # Format web files trong theme
npm run format:theme:php    # Format PHP files trong theme

# Kiểm tra format
npm run format:check
```

### 3. Lint JavaScript

```bash
# Lint toàn bộ project
npm run lint
npm run lint:fix

# Lint chỉ theme WordPress
npm run lint:theme
npm run lint:theme:fix
```

## 🎨 Code Formatting

### Prettier Configuration

Project đã được cấu hình Prettier và PHP-CS-Fixer với các settings tối ưu:

#### Prettier (cho JS, CSS, JSON, MD):

- **Print Width**: 100 chars
- **Tab Width**: 4 spaces
- **Use Tabs**: false
- **Semi**: true
- **Single Quote**: false
- **Trailing Comma**: ES5
- **Bracket Spacing**: true
- **Arrow Parens**: always
- **End of Line**: LF

#### PHP-CS-Fixer (cho PHP):

- **PSR-12**: Tuân thủ chuẩn PSR-12
- **Array Syntax**: Short syntax `[]`
- **Single Quote**: true
- **Binary Operator Spaces**: true
- **Concat Space**: one space
- **Indentation**: 4 spaces

#### HTML-Beautify (cho HTML trong PHP):

- **Indentation**: 4 spaces
- **Line Length**: Không giới hạn
- **Attribute Wrapping**: Tự động
- **Script Indentation**: Normal

### Format Rules

- **PHP Files**: 120 chars width, strict HTML formatting
- **JavaScript**: 100 chars width, ES5 trailing commas
- **CSS/SCSS**: 100 chars width, no trailing commas
- **HTML**: 120 chars width, strict whitespace
- **Markdown**: 100 chars width, preserve prose wrap

### IDE Integration

Để sử dụng với VS Code:

1. Cài đặt Prettier extension
2. Thêm vào settings.json:

```json
{
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "editor.formatOnSave": true,
    "editor.codeActionsOnSave": {
        "source.fixAll.eslint": true
    }
}
```

## 📁 WordPress Theme

### Git Configuration

Project đã được cấu hình với `.gitignore` toàn diện:

- **Node.js**: `node_modules/`, `npm-debug.log*`, `.npm`
- **PHP**: `vendor/`, `composer.phar`, `*.php~`, `.php-cs-fixer.cache`
- **WordPress**: `wp-config.php`, `wp-content/uploads/`, `wp-content/cache/`
- **IDE**: `.vscode/`, `.idea/`, `*.swp`, `*.swo`
- **OS**: `.DS_Store`, `Thumbs.db`, `ehthumbs.db`
- **Build**: `build/`, `dist/`, `out/`, `*.log`
- **Cache**: `.cache/`, `.eslintcache`, `.prettier-cache`

### Cài đặt theme

1. Copy thư mục `wp-theme/link-city` vào `/wp-content/themes/`
2. Kích hoạt theme trong WordPress Admin

### Customizer Options

Theme có 10+ options có thể tùy chỉnh qua WordPress Customizer:

- **Thông tin liên hệ**: Số điện thoại, email, copyright
- **Mạng xã hội**: Zalo, TikTok, Messenger, Google Maps
- **reCAPTCHA**: Site key và secret key

### Tính năng chính

- ✅ Fullpage scrolling với FullPage.js
- ✅ Animation với AOS (Animate On Scroll)
- ✅ Slider với Swiper.js
- ✅ Responsive design
- ✅ Contact Form 7 integration
- ✅ Social media integration
- ✅ Google Maps integration

## 🛠️ Development

### Static HTML Version

- File `index.html` - Phiên bản static hoàn chỉnh
- File `app.js` - JavaScript chính
- File `core.css` và `styles.css` - Styles

### WordPress Theme Version

- Thư mục `wp-theme/link-city/` - Theme WordPress hoàn chỉnh
- Tích hợp WordPress Customizer
- Auto-install Contact Form 7
- Tối ưu hóa performance

## 📞 Hỗ trợ

Nếu bạn gặp vấn đề hoặc cần hỗ trợ, vui lòng liên hệ:

- Email: thelinkcitykimoanh@gmail.com
- Hotline: 09.222.222.56

## 📄 Phiên bản

- **Version**: 1.0
- **Author**: 1227 Team
- **Last Updated**: 2024

## 📜 License

© 2024 The Link City. All rights reserved.

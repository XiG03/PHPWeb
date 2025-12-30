# Hướng dẫn cài đặt Fonts

## Font UTM Avo (cho các text thông thường)

Font UTM Avo được sử dụng cho tất cả các text thông thường (navigation, body text, buttons, etc.)

### Cách tải và cài đặt:

1. **Tải font UTM Avo:**
   - Truy cập: https://vietnamesefonts.com/fonts/utm-avo-regular
   - Hoặc: https://exfont.com/utm-avo.font
   - Tải file font (thường là file `.ttf` hoặc `.otf`)

2. **Đặt file font vào thư mục:**
   - Đặt file `UTM Avo Regular.ttf` (hoặc `.otf`) vào thư mục `public/fonts/`
   - Nếu có các weight khác (Bold, Italic), cũng đặt vào thư mục này

3. **File font sẽ được tự động load** qua `@font-face` trong `resources/css/app.css`

## Logo Font (THE WANDERING ROSE Ba Vì)

Logo trong Figma được hiển thị ở dạng vector/logo. Có 2 cách xử lý:

### Cách 1: Export logo từ Figma (Khuyến nghị)
1. Mở file Figma
2. Chọn logo component
3. Export dưới dạng SVG hoặc PNG (transparent background)
4. Đặt file vào `public/images/logo.svg` (hoặc `.png`)
5. Sử dụng `<img>` tag trong header thay vì text

### Cách 2: Sử dụng font tương tự
- "THE WANDERING ROSE": Đang dùng `Playfair Display` (decorative serif)
- "Ba Vì": Đang dùng script font tương tự
- Có thể thay đổi trong `resources/views/partials/header.blade.php`

## Font hiện tại:
- **Logo**: Playfair Display (serif) cho "THE WANDERING ROSE"
- **Body/Navigation**: UTM Avo (sans-serif) - cần tải file font
- **Headings**: Playfair Display (serif)


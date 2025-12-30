# Hướng dẫn xem Preview HTML tĩnh

## ✅ File đã tạo

File `public/preview.html` đã được tạo để bạn xem nhanh mà không cần Laravel server.

## 🚀 Cách xem

### Cách 1: Mở trực tiếp trong browser
1. Mở file `public/preview.html` bằng trình duyệt (double-click hoặc right-click > Open with > Browser)
2. Hoặc kéo thả file vào trình duyệt

### Cách 2: Dùng Live Server (nếu có extension)
- Nếu bạn có VS Code với Live Server extension, right-click vào `preview.html` > "Open with Live Server"

### Cách 3: Dùng Python simple server (nếu có Python)
```bash
cd public
python -m http.server 8080
```
Sau đó mở: `http://localhost:8080/preview.html`

## ⚠️ Lưu ý quan trọng

### File này KHÔNG ảnh hưởng đến code chính:
- ✅ File `preview.html` chỉ để **xem nhanh/preview**
- ✅ Code thực tế vẫn nằm trong các file Blade (`resources/views/*.blade.php`)
- ✅ Khi deploy hoặc chạy Laravel, sẽ dùng các file Blade, KHÔNG dùng `preview.html`
- ✅ Bạn có thể xóa file `preview.html` bất cứ lúc nào mà không ảnh hưởng gì

### Sự khác biệt:
- `preview.html`: HTML tĩnh, dùng Tailwind CDN, chỉ để xem
- `*.blade.php`: Template Laravel thực tế, dùng Vite, sẽ được dùng trong production

## 📝 Nếu muốn xem đầy đủ với Laravel

Khi có PHP và Laravel server chạy:
1. Chạy: `php artisan serve`
2. Mở: `http://localhost:8000`

File Blade sẽ được render đầy đủ với tất cả tính năng Laravel.



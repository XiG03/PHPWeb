# Villa Management System
# UEF_QLDAPM_B03E_G03
Hệ thống quản lý Villa - Dự án Laravel MVC với Code-First approach

## 📋 Mô tả

Ứng dụng quản lý Villa cho phép:
- Quản lý loại phòng và phòng vật lý
- Quản lý hoạt động (Events & Tours)
- Quản lý giỏ hàng và đơn hàng
- Quản lý đặt phòng và thanh toán

## 🛠️ Yêu cầu hệ thống

- **PHP**: >= 8.1
- **Composer**: >= 2.0
- **MySQL**: >= 5.7 hoặc MariaDB >= 10.3
- **Node.js**: >= 16.x (cho frontend assets)
- **XAMPP/WAMP/Laragon** (khuyến nghị XAMPP)

## 📦 Cài đặt môi trường

### 1. Cài đặt XAMPP

1. Tải XAMPP từ: https://www.apachefriends.org/download.html
   - Chọn phiên bản có PHP 8.1.25 trở lên
2. Cài đặt XAMPP (mặc định: `C:\xampp`)
3. Khởi động Apache và MySQL từ XAMPP Control Panel

### 2. Cài đặt Composer

1. Tải Composer-Setup.exe từ: https://getcomposer.org/download/
2. Chạy installer và chọn đường dẫn PHP (ví dụ: `C:\xampp\php\php.exe`)
3. Để installer tự động thêm Composer vào PATH

### 3. Kiểm tra cài đặt

Mở PowerShell và kiểm tra:

```powershell
php -v          # Phải hiển thị PHP 8.1.x trở lên
composer --version  # Phải hiển thị Composer version
```

## 🚀 Hướng dẫn cấu hình dự án lần đầu

### Bước 1: Clone dự án

```bash
git clone <repository-url>
cd UEF_QLDAPM_B03E_G03
```

### Bước 2: Cài đặt dependencies

Mở VS Code Terminal và chạy:

```powershell
cd FinalprojectWeb
composer install
```

### Bước 3: Tạo file cấu hình `.env`

File `.env` đã được tạo tự động. Nếu chưa có, tạo từ `.env.example`:

```powershell
copy .env.example .env
```

Hoặc tạo thủ công file `.env` với nội dung:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=villa_management_db
DB_USERNAME=root
DB_PASSWORD=

# ... các cấu hình khác
```

**Lưu ý**: Điều chỉnh `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` theo cấu hình MySQL của bạn.

### Bước 4: Tạo Database

Mở phpMyAdmin (`http://localhost/phpmyadmin`) hoặc MySQL CLI và tạo database:

```sql
CREATE DATABASE villa_management_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Hoặc dùng lệnh MySQL:

```powershell
mysql -u root -e "CREATE DATABASE IF NOT EXISTS villa_management_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

### Bước 5: Generate Application Key

```powershell
php artisan key:generate
```

Lệnh này sẽ tự động điền `APP_KEY` vào file `.env`.

### Bước 6: Chạy Migrations

Tạo tất cả các bảng trong database:

```powershell
php artisan migrate
```

Nếu thành công, bạn sẽ thấy các bảng được tạo:
- `users`
- `room_types`
- `rooms`
- `activities`
- `carts`
- `cart_items`
- `orders`
- `order_items`
- `room_bookings`
- `payments`

### Bước 7: (Tùy chọn) Cài đặt Frontend Dependencies

Nếu dự án có frontend assets:

```powershell
npm install
npm run dev
```

Giữ terminal này chạy để build assets trong quá trình development.

### Bước 8: Chạy Development Server

```powershell
php artisan serve
```

Server sẽ chạy tại: **http://127.0.0.1:8000**

Mở trình duyệt và truy cập để kiểm tra ứng dụng.

## 📁 Cấu trúc dự án

```
FinalprojectWeb/
├── app/
│   ├── Models/          # Eloquent Models
│   │   ├── User.php
│   │   ├── RoomType.php
│   │   ├── Room.php
│   │   ├── Activity.php
│   │   ├── Cart.php
│   │   ├── CartItem.php
│   │   ├── Order.php
│   │   ├── OrderItem.php
│   │   ├── RoomBooking.php
│   │   └── Payment.php
│   ├── Http/
│   │   └── Controllers/ # Controllers
│   └── ...
├── database/
│   └── migrations/      # Database Migrations
│       └── 2025_01_01_000000_create_villa_management_schema.php
├── config/             # Configuration files
├── routes/             # Route definitions
├── resources/          # Views, CSS, JS
└── public/             # Public assets
```

## 🗄️ Database Schema

Dự án sử dụng Code-First approach với Laravel Migrations. Schema bao gồm:

- **Users**: Quản lý người dùng
- **Room_Types**: Loại phòng (Villa, Suite, etc.)
- **Rooms**: Phòng vật lý cụ thể
- **Activities**: Hoạt động/Tour
- **Carts**: Giỏ hàng (hỗ trợ guest và authenticated users)
- **Cart_Items**: Chi tiết giỏ hàng
- **Orders**: Đơn hàng
- **Order_Items**: Chi tiết đơn hàng
- **Room_Bookings**: Lịch đặt phòng
- **Payments**: Thanh toán

## 🔧 VS Code Extensions (Khuyến nghị)

Để tối ưu hóa việc phát triển Laravel trong VS Code, cài đặt các extensions sau:

1. **Laravel Artisan** - Chạy Artisan commands từ VS Code
2. **Laravel Blade Snippet** - Snippets cho Blade templates
3. **Laravel Blade Spacer** - Format Blade templates
4. **Laravel Goto View** - Navigate đến Blade views
5. **Laravel Extra Intellisense** - IntelliSense cho Laravel

Video hướng dẫn: https://www.youtube.com/watch?v=iSsFV9hmxDk

## 📝 Các lệnh hữu ích

```powershell
# Chạy migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Reset database và chạy lại migrations
php artisan migrate:fresh

# Format code với Laravel Pint
composer format

# Kiểm tra code style
composer lint

# Tạo model mới
php artisan make:model ModelName

# Tạo controller mới
php artisan make:controller ControllerName

# Xem danh sách routes
php artisan route:list

# Xóa cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 🐛 Troubleshooting

### Lỗi: "php is not recognized"

- Đảm bảo PHP đã được thêm vào PATH
- Đóng và mở lại VS Code sau khi cài đặt PHP
- Kiểm tra PATH: `$env:Path -split ';' | Select-String -Pattern 'php'`

### Lỗi: "composer is not recognized"

- Đảm bảo Composer đã được cài đặt và thêm vào PATH
- Đóng và mở lại VS Code

### Lỗi kết nối database

- Kiểm tra MySQL đã khởi động trong XAMPP
- Kiểm tra thông tin trong file `.env`
- Kiểm tra database đã được tạo chưa

### Lỗi migration

- Đảm bảo database đã được tạo
- Kiểm tra quyền truy cập database
- Xóa và tạo lại database nếu cần: `php artisan migrate:fresh`

## 📚 Tài liệu tham khảo

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Eloquent ORM](https://laravel.com/docs/eloquent)

## 📄 License

MIT License

---

**Lưu ý**: Đảm bảo đã cài đặt đầy đủ các yêu cầu hệ thống trước khi bắt đầu cấu hình dự án.

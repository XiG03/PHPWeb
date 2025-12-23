IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = 'VillaManagementDB')
BEGIN
    CREATE DATABASE VillaManagementDB;
END
GO

USE VillaManagementDB;
GO

DROP TABLE IF EXISTS Payments;
DROP TABLE IF EXISTS Room_Bookings;
DROP TABLE IF EXISTS Order_Items;
DROP TABLE IF EXISTS Orders;
DROP TABLE IF EXISTS Cart_Items;
DROP TABLE IF EXISTS Carts;
DROP TABLE IF EXISTS Activities;
DROP TABLE IF EXISTS Rooms;
DROP TABLE IF EXISTS Room_Types;
DROP TABLE IF EXISTS Users;
GO

-- 1. BẢNG NGƯỜI DÙNG
CREATE TABLE Users (
    user_id INT IDENTITY(1,1) PRIMARY KEY,
    email NVARCHAR(255) NOT NULL UNIQUE,
    password_hash NVARCHAR(255) NOT NULL,
    full_name NVARCHAR(100) NOT NULL,
    phone_number NVARCHAR(20),
    created_at DATETIME2 DEFAULT GETDATE()
);
GO

-- 2. BẢNG LOẠI PHÒNG (DANH MỤC)
CREATE TABLE Room_Types (
    room_type_id INT IDENTITY(1,1) PRIMARY KEY,
    type_name NVARCHAR(100) NOT NULL,
    description NVARCHAR(MAX),
    base_price DECIMAL(18, 2) NOT NULL, -- SQL Server thường dùng DECIMAL(18,2) cho tiền tệ
    max_occupancy INT NOT NULL,
    thumbnail_url NVARCHAR(255)
);
GO

-- 3. BẢNG PHÒNG VẬT LÝ (KHO HÀNG PHÒNG)
CREATE TABLE Rooms (
    room_id INT IDENTITY(1,1) PRIMARY KEY,
    room_type_id INT NOT NULL,
    room_number NVARCHAR(20) NOT NULL UNIQUE, -- Ví dụ: 101, Villa A
    status NVARCHAR(20) DEFAULT 'Active',
    
    -- Khóa ngoại
    CONSTRAINT FK_Rooms_RoomTypes FOREIGN KEY (room_type_id) REFERENCES Room_Types(room_type_id),
    
    -- Giả lập ENUM bằng Check Constraint
    CONSTRAINT CHK_RoomStatus CHECK (status IN ('Active', 'Maintenance'))
);
GO

-- 4. BẢNG HOẠT ĐỘNG (EVENT & TOUR)
CREATE TABLE Activities (
    activity_id INT IDENTITY(1,1) PRIMARY KEY,
    activity_type NVARCHAR(20) NOT NULL,
    name NVARCHAR(150) NOT NULL,
    start_datetime DATETIME2 NOT NULL,
    duration_mins INT NOT NULL,
    capacity INT NOT NULL, -- Tổng số vé
    price DECIMAL(18, 2) NOT NULL,

    CONSTRAINT CHK_ActivityType CHECK (activity_type IN ('Event', 'Tour'))
);
GO

-- 5. BẢNG GIỎ HÀNG (PHIÊN LÀM VIỆC)
CREATE TABLE Carts (
    cart_id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NULL, -- Cho phép NULL nếu khách chưa đăng nhập
    session_token NVARCHAR(255) NOT NULL, -- Định danh khách vãng lai (Cookie/Session ID)
    created_at DATETIME2 DEFAULT GETDATE(),

    CONSTRAINT FK_Carts_Users FOREIGN KEY (user_id) REFERENCES Users(user_id)
);
GO

-- 6. BẢNG CHI TIẾT GIỎ HÀNG (HỖN HỢP)
CREATE TABLE Cart_Items (
    cart_item_id INT IDENTITY(1,1) PRIMARY KEY,
    cart_id INT NOT NULL,
    service_type NVARCHAR(20) NOT NULL,
    
    -- Cột khóa ngoại cho Phòng (Nullable)
    room_type_id INT NULL, 
    check_in_date DATE NULL,
    check_out_date DATE NULL,
    
    -- Cột khóa ngoại cho Hoạt động (Nullable)
    activity_id INT NULL,
    
    -- Thông tin chung
    quantity INT DEFAULT 1,
    snapshot_price DECIMAL(18, 2) NOT NULL,

    CONSTRAINT FK_CartItems_Carts FOREIGN KEY (cart_id) REFERENCES Carts(cart_id) ON DELETE CASCADE,
    CONSTRAINT FK_CartItems_RoomTypes FOREIGN KEY (room_type_id) REFERENCES Room_Types(room_type_id),
    CONSTRAINT FK_CartItems_Activities FOREIGN KEY (activity_id) REFERENCES Activities(activity_id),
    
    CONSTRAINT CHK_CartServiceType CHECK (service_type IN ('Room', 'Activity'))
);
GO

-- 7. BẢNG ĐƠN HÀNG (GIAO DỊCH TỔNG)
CREATE TABLE Orders (
    order_id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    total_amount DECIMAL(18, 2) NOT NULL,
    order_status NVARCHAR(20) DEFAULT 'Pending',
    created_at DATETIME2 DEFAULT GETDATE(),

    CONSTRAINT FK_Orders_Users FOREIGN KEY (user_id) REFERENCES Users(user_id),
    CONSTRAINT CHK_OrderStatus CHECK (order_status IN ('Pending', 'Confirmed', 'Cancelled'))
);
GO

-- 8. BẢNG CHI TIẾT ĐƠN HÀNG
CREATE TABLE Order_Items (
    order_item_id INT IDENTITY(1,1) PRIMARY KEY,
    order_id INT NOT NULL,
    service_type NVARCHAR(20) NOT NULL,
    room_type_id INT NULL,
    activity_id INT NULL,
    quantity INT NOT NULL,
    price_per_unit DECIMAL(18, 2) NOT NULL,
    total_line_price DECIMAL(18, 2) NOT NULL,

    CONSTRAINT FK_OrderItems_Orders FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    CONSTRAINT CHK_OrderItemServiceType CHECK (service_type IN ('Room', 'Activity'))
);
GO

-- 9. BẢNG LỊCH ĐẶT PHÒNG (QUẢN LÝ TỒN KHO THỰC TẾ)
CREATE TABLE Room_Bookings (
    booking_id INT IDENTITY(1,1) PRIMARY KEY,
    order_item_id INT NOT NULL, -- Liên kết ngược về chi tiết đơn hàng
    room_id INT NOT NULL, -- Phòng vật lý cụ thể (VD: Phòng 101)
    check_in_date DATE NOT NULL,
    check_out_date DATE NOT NULL,

    CONSTRAINT FK_Bookings_OrderItems FOREIGN KEY (order_item_id) REFERENCES Order_Items(order_item_id),
    CONSTRAINT FK_Bookings_Rooms FOREIGN KEY (room_id) REFERENCES Rooms(room_id),
    
    -- Ràng buộc logic: Ngày đi phải sau ngày đến
    CONSTRAINT CHK_DateValid CHECK (check_out_date > check_in_date)
);
GO

-- 10. BẢNG THANH TOÁN
CREATE TABLE Payments (
    payment_id INT IDENTITY(1,1) PRIMARY KEY,
    order_id INT NOT NULL,
    amount DECIMAL(18, 2) NOT NULL,
    payment_method NVARCHAR(50) NOT NULL,
    transaction_ref NVARCHAR(255) NOT NULL, -- Mã từ cổng thanh toán
    payment_status NVARCHAR(20) NOT NULL,
    payment_date DATETIME2 DEFAULT GETDATE(),

    CONSTRAINT FK_Payments_Orders FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    CONSTRAINT CHK_PaymentStatus CHECK (payment_status IN ('Success', 'Failed'))
);
GO

-- Tạo Index để tối ưu hóa tìm kiếm phòng trống
CREATE NONCLUSTERED INDEX IDX_RoomBookings_Dates 
ON Room_Bookings (room_id, check_in_date, check_out_date);
GO

CREATE NONCLUSTERED INDEX IDX_Rooms_Type 
ON Rooms (room_type_id, status);
GO
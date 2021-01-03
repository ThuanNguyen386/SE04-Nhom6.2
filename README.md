# Kiến trúc hệ thống Yii2
## Các ứng dụng Yii được tổ chức dựa theo mẫu thiết kế MVC. Models chứa nghiệp vụ logic, truy xuất database và định nghĩa các quy tắc xác thực dữ liệu; views đảm nhận việc hiển thị thông tin của model và controllers có nhiệm vụ điều hướng các yêu cầu và chuyển các tương tác giữa models và views
## common			Dùng chung cho frontend và backend
###    config/              Cấu hình được chia sẻ 
###    mail/                Các files cho email
###    models/              Các models
###    tests/               Các test cho các class

## console			Dùng cho ứng dụng giao diện bảng điều khiển
###    config/              Cấu hình bảng điều khiển
###    controllers/         Bộ điều khiển giao diện sử dụng lệnh
###    migrations/          Database migrations
###    models/              Các lớp riêng cho bảng điều khiển
###    runtime/             Các file trong thời gian chạy

## backend			Thư mục dùng cho admin
###    assets/              Các đường dẫn đến file JavaScript và CSS
###    config/              Cấu hình backend
###    controllers/         Chứa các class controller
###    models/              Chứa các lớp model
###    runtime/             Chứa các file được sinh ra trong quá trình chạy
###    tests/               Các test cho các class
###    views/               Chứa các files về view
###    web/                 Thư mục gốc ứng dụng web

## frontend			Thư mục dùng cho người dùng
###    assets/              Các đường dẫn đến file JavaScript và CSS
###    config/              Cấu hình backend
###    controllers/         Chứa các class controller
###    models/              Chứa các lớp model
###    runtime/             Chứa các file được sinh ra trong quá trình chạy
###    tests/               Các test cho các class
###    views/               Chứa các files về view
###    web/                 Thư mục gốc ứng dụng web

### vendor/                  Chứa các thư viện mở rộng của bên thứ ba

### environments/            Chứa các môi trường được ghi đè(bao gồm dev và product)


# Mobile Outfitters 

## 1. Mục tiêu, định hướng và kết quả cần đạt
### Xây dựng trang web thương mại điện tử:
#### - Quảng bá và bán các sản phẩm điện thoại thông minh
#### - Phần mềm ứng dụng cho máy tính cá nhân
#### - Cho phép khách hàng tạo tài khoản và sử dụng để đặt mua hàng trên trang web dù ở bất cứ đâu

## 2. Các công cụ và công nghệ được sử dụng
### 2.1 Công nghệ:
#### - PHP (with Yii2 framework)
#### - HTML, CSS, Bootstrap, JavaScript
### 2.2 Công cụ:
#### - phpMyAdmin
#### - MySQL
#### - IDE: PHPStorm

## 3. Một số mô tả về trang web
#### - Gồm các mục tìm kiếm sản phẩm theo: giá thành, thương hiệu, hệ điều hành
#### - Khách hàng có thể xem chi tiết thông tin về từng sản phẩm ngay trên web
#### - Có mục hướng dẫn khách hàng về chính sách bảo hành, đổi trả và trả góp
#### - Các ưu đãi lớn và những sản phẩm bán chạy nhất sẽ được đưa ra giới thiệu ngay tại trang chính

## 4. Các chức năng chính
### 4.1 Admin (quản lí trang web thông qua giao diện backend của Yii2) 
#### - Thêm hoặc gỡ bỏ các thương hiệu mà web hợp tác bán sản phẩm
#### - Thêm/sửa/xóa thông tin của các sản phẩm 
#### - Kiểm tra lịch sử đặt hàng của khách  
### 4.2 Customer (khách hàng)
#### - Đăng kí tài khoản và đăng nhập vào website để mua hàng
#### - Dễ dàng tìm kiếm điện thoại cần mua theo tên hãng, giá cả hoặc hệ điều hành
#### - Có thể xem chi tiết thông tin về từng sản phẩm
#### - Thêm các sản phẩm muốn mua vào giỏ hàng được tạo tự động
#### - Đặt hàng nhanh chóng chỉ qua vài bước xác minh danh tính

## 5. Cách sử dụng
https://github.com/ThuanNguyen386/SE04-Nhom6.2/wiki

## 6. Các thành viên của nhóm xây dựng trang web
#### - Nguyễn Anh Duy
#### - Phạm Tấn Dũng
#### - Nguyễn Đình Thuận
#### - Nguyễn Ngọc Vũ Hưng
#### - Đàm Quang Toàn



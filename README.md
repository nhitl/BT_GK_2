Bài tập kiểm tra giữa kỳ - Bài 2
Tên : Trần Linh Nhi
MSV: 20010811


Câu 2: Trình bầy bài toán security cho bài tập cuối kỳ
Vấn đề an ninh (security)
Giải pháp an ninh (security), liệt kê giải pháp và code cho các vấn đề an ninh (áp dụng cho bài tập cuối kỳ)

Bài tập cuối kỳ  : xây dựng một website giới thiệu khách sạn và đặt phòng trực tuyến

Khi xây dựng một website giới thiệu khách sạn và đặt phòng trực tuyến, cần chú ý đến các vấn đề an ninh sau:

•	Tấn công Cross-Site Scripting (XSS)
•	Tấn công Cross-Site Request Forgery (CSRF)
•	Bảo mật xác thực (Authentication Security)
•	Bảo vệ SQL Injection
•	Bảo mật thông tin người dùng
•	Bảo mật kết nối mạng (SSL/TLS)
Giải pháp An ninh
1. Ngăn chặn tấn công XSS
Tấn công XSS xảy ra khi kẻ tấn công chèn mã độc vào trang web, thường thông qua các trường nhập liệu. Để ngăn chặn XSS, cần đảm bảo rằng tất cả các dữ liệu đầu vào đều được kiểm tra và mã hóa trước khi hiển thị lại trên trang web.
Giải pháp:
Sử dụng các hàm mã hóa đầu vào (input encoding).
Sử dụng các thư viện bảo mật như DOMPurify để làm sạch dữ liệu trước khi hiển thị.

2. Ngăn chặn tấn công CSRF
CSRF xảy ra khi kẻ tấn công lừa người dùng gửi yêu cầu đến một trang web mà người dùng đã xác thực mà không biết.
Giải pháp:
Sử dụng các token CSRF để xác minh rằng yêu cầu được gửi từ người dùng thực.

3. Bảo mật xác thực (Authentication Security)
Bảo mật xác thực bao gồm bảo vệ quá trình đăng nhập, lưu trữ mật khẩu an toàn, và xác thực người dùng đúng cách.
Giải pháp:
Sử dụng HTTPS để mã hóa thông tin đăng nhập.
Lưu trữ mật khẩu dưới dạng hash và sử dụng salt.
Sử dụng các thư viện như Passport.js cho Node.js để quản lý xác thực.

4. Bảo vệ SQL Injection
SQL Injection xảy ra khi kẻ tấn công chèn mã SQL độc hại vào các truy vấn cơ sở dữ liệu.
Giải pháp:
Sử dụng các prepared statements (câu lệnh chuẩn bị sẵn) để ngăn chặn SQL Injection.
Sử dụng ORM (Object-Relational Mapping) như Sequelize cho Node.js.

5. Bảo mật thông tin người dùng
Bảo mật thông tin người dùng là quan trọng để đảm bảo dữ liệu cá nhân không bị lộ ra ngoài.
Giải pháp:
Mã hóa dữ liệu nhạy cảm.
Sử dụng HTTPS để bảo vệ dữ liệu khi truyền tải.

6. Bảo mật kết nối mạng (SSL/TLS)
Sử dụng SSL/TLS để mã hóa tất cả dữ liệu truyền tải giữa máy khách và máy chủ.
Giải pháp:
Mua và cài đặt chứng chỉ SSL từ các nhà cung cấp uy tín.
Cấu hình máy chủ web để sử dụng HTTPS.


Tóm tắt các file và nội dung:
Ngăn chặn tấn công XSS:
sanitize_output.php

Ngăn chặn tấn công CSRF:
form.php
process.php

Bảo mật xác thực (Authentication Security):
hash_password.php

Bảo vệ SQL Injection:
db_connect.php
sql_injection_protection.php

Bảo mật thông tin người dùng:
encrypt_data.php


Bảo mật kết nối mạng (SSL/TLS):
httpd.conf hoặc ssl.conf (Cấu hình Apache)

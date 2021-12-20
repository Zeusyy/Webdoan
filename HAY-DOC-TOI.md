TRƯỚC KHI START WEB

clone git

composer install - tạo ra tập tin vendor chứa các thư viện

(tạo file env dựa theo file env.example có sẵn và cấu hình thông tin database theo máy) - tập tin cấu hình môi trường (database, mail ..)

php artisan key:generate - tạo key mới trong file .env

php artisan config:cache - cập nhật thông tin env mới

(tạo db trắng trong mysql tên fngo)

php artisan migrate - tạo bảng

php artisan db:seed - tạo dữ liệu mẫu

php artisan serve - start server



test account:

admin: admin@gmail.com
pwd: 123456


employee: employee@gmail.com
pwd: 123456

user: user@gmail.com
pwd: 123456


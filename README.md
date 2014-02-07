## Laravel 4 - 2S Team

-----

## Yêu Cầu

- PHP 5.3.7 or later
- MCrypt PHP Extension

-----

## Hướng dẫn cài đặt

### Video Hướng Dẫn

##### #1) Hướng dẫn cài đặt Wamp Server -> http://bit.ly/1fMC3Et
##### #2) Hướng dẫn tải xuống
##### - 2.1) Hướng dẫn cài đặt GIT -> http://bit.ly/1lENGT9

-----

### 1) Tải Xuống
#### 1.1) Clone the Repository

	git clone https://github.com/hoangbaovu/2S-Team.git your-folder

#### 1.2) Tải trực tiếp từ Github

	https://github.com/hoangbaovu/2S-Team/archive/master.zip

-----

### 2) Cài đặt qua Composer
##### 2.1) Nếu bạn chưa cài đặt composer

	cd your-folder
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

##### 2.2) Cài đặt Composer

	cd your-folder
	composer install

-----

### 3) Thiết lập Database

`app/config/database.php`.

Tìm và sửa lại cho đúng thông số kết nối

```
'mysql' => array(
	'host'      => '127.0.0.1',
	'database'  => 'baovu_db', 			// Tên Database
	'username'  => 'baovu.name.vn', 	// Tài khoản Database
	'password'  => 'Neo@123', 			// Mật khẩu Database
),
```
-----

### 4)

Cách 1: Sử dụng CMD( Windows+R) để cài đặt mới.

Sử dụng lệnh sau để tạo ra người dùng mặc định, nhóm người sử dụng của bạn và các dịch vụ khác.
	
	php artisan app:install

-----

### 5) Truy cập Administration

Vào `http://your-host/public/admin` 

-----

Phát triển dựa trên Laravel 4 Starter Kit (http://github.com/brunogaspar/laravel4-starter-kit)

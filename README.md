## Laravel 4 - 2S Team

-----

## Yêu Cầu

- PHP 5.3.7 or later
- MCrypt PHP Extension

-----

## Hướng dẫn cài đặt

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

-----

### 4) Sử dụng CMD( Windows+R) để cài đặt mới.

Sử dụng lệnh sau để tạo ra người dùng mặc định, nhóm người sử dụng của bạn và các dịch vụ khác.
	
	php artisan app:install

-----

### 5) Truy cập Administration

Vào `http://your-host/public/admin` 

-----

Phát triển dựa trên Laravel 4 Starter Kit (http://github.com/brunogaspar/laravel4-starter-kit)

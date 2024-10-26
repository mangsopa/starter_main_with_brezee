<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Installation

 - Download source code, extract file & masuk ke directory project
 - Jalankan perintah berikut pada terminal :
 - install package laravel, pastikan di komputer kamu sudah terinstall composer

```php
- composer install
```
- install dependencies & build, pastikan di komputer kamu sudah terinstall node js
  
```php
- npm install && npm run build
```
- Buat file .env dengan cara copy file .env.example atau bisa menggunakan terminal
  
```php
- cp .env.example .env
```
- Generate key
  
```php
- php artisan key:generate
```
- Generate key
  
```php
- php artisan key:generate
```

"Sesuaikan settingan database pada .env"
- ubah .env dari mulai DB_CONNECTION sampai DB_PASSWORD sesuaikan dengan configurasi masing-masing
  
```php
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
```
- kemudian jalankan perintah ini untuk membuat database & data dari seeder
  
```php
  php artisan migrate
  php artisan db:seed
```
"Copy folder vendor dari template arfa pada folder dist/vendor dan paste ke project ini pada folder public"

```php
  php artisan serve
```

## Project selesai diinisialisasi, Selamat Belajar

## Screenshoot

 - Dashboard

![image](https://github.com/user-attachments/assets/8e901937-9420-40ec-89c8-5ae6b1eef738)

 - Menu Management

![image](https://github.com/user-attachments/assets/c72507ee-ac2f-4422-97e5-fa1228bb9cd8)

 - Manage Menu Items

![image](https://github.com/user-attachments/assets/b2e1d18f-3004-4f28-ab61-ca8f23ac8d7e)

 - Role MAnagement

![image](https://github.com/user-attachments/assets/dea0b732-46d1-4dfa-8e15-aa62a8821956)

 - Permission Management

![image](https://github.com/user-attachments/assets/3d98f6d2-1bc3-42bc-b26f-3f4dbc94811b)

 - Route Management

![image](https://github.com/user-attachments/assets/dab408a4-0f9e-4d7b-a9b7-56884e4c8c77)

 - User Management

![image](https://github.com/user-attachments/assets/6dcbe85b-9b41-4522-a67a-175eed80e8b6)

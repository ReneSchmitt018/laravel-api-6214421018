<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
## How to install

วิธีการติดตั้ง Project Backend laravel :

- git clone [https://github.com/ReneSchmitt018/laravel-api-6214421018](https://github.com/it-csit-rbru/651-ws-project-term-ReneSchmitt018.git)
- composer update
- สร้าง Database ใน PHP MyAdmin 1 DB หรือ ดาวโหลด SQL Database ที่ :: https://drive.google.com/file/d/1qgJ2InCttyAzusLtTbgtQ7dW9f13mroO/view?usp=sharing
- แก้ไขไฟล์ .env.example เป็น .env
- แก้ข้อมูล DB_DATABASE = (ชื่อ Database)
- php artisan serv

ติดตั้งข้อมูลลง Database ในกรณีสร้าง DB มาไหม่:
- php artisan migrate
- php artisan db:seed
- php artisan serv

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

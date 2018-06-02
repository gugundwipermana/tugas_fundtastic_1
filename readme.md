# Gugun Dwi Permana
gugundwipermana@gmail.com

Tugas technical assessment **Fischer and Partners Indonesia**
Project sederhana berbasis **Laravel** yang berisi implementasi dari Auth, REST API, Migration, Queue, Factory, Seeder dan Unit Test.

---

- [Installation](#Installation)
- [Authentication](#Authentication)
- [Migration](#Migration)
- [Seeder & Factory](#Seeder)
- [Queue](#Queue)
- [Unit Testing](#Testing)

## Installation

##### Laravel
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/00_Installation_01_Laravel.png)
##### MySQL
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/00_Installation_02_MySQL.png)

## Authentication

Untuk Autentication saya menggunakan **API Autehntication (Passport)**. Laravel membuat authentikasi API menjadi mudah menggunakan Laravel Passport, yang menyediakan implementasi server OAuth2.

[https://laravel.com/docs/5.6/passport](https://laravel.com/docs/5.6/passport)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/00_Installation_03_Passport.png)

#### Register
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/02_Auth_01_Register.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/02_Auth_02_Register.png)

#### Login
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/02_Auth_03_Login.png)

## Migration

Untuk implementasi migration saya membuat sample untuk table **Post**.

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/03_Migration_01.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/03_Migration_02.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/03_Migration_03.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/03_READ.png)

## Seeder

Implementasi dari Seeder yang saya buat adalah untuk memasukan data *dummy* pada table **Post**.

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/04_Seeder_01.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/04_Seeder_Factory_03.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/04_Seeder_Factory_04.png)

Untuk menjalankan seeder tresebut kita gunakan perintah berikut:

```
php artisan db:seed –class=PostSeeder
```
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/04_Seeder_Factory_05.png)

## Queue

Untuk implementasi Queue saya mencoba membuat proses pengiriman email.

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_01.png)

Buat table queue dan jobs

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_03.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_04.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_05.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_06.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/05_Queue_07.png)


## Testing

Pada implementasi Unti Testing, saya coba melakukan test pada prose Insert, Update dan Delete pada table **Post**.

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/06_Testing_01.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/06_Testing_02.png)
![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/06_Testing_03.png)

![alt text](https://raw.githubusercontent.com/gugundwipermana/tugas_fundtastic_1/v0.2/public/img/06_Testing_04.png)

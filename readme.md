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
![alt text](https://photos-4.dropbox.com/t/2/AABYpiF2ppnBwE1YnRx3mdrxiDGqCCljY2e3hM_AzGPrTQ/12/275268354/png/32x32/3/1527948000/0/2/00_Installation_01_Laravel.png/EOvio4YCGJ4kIAIoAg/nLyh1c7A70CewOq-gXnA82rhYzwpkI9xqW74qyeYFWs?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
##### MySQL
![alt text](https://photos-4.dropbox.com/t/2/AACwkbGpB5hsOQVDvsJ3p2uK3ilSDNwgU5K-E3ErF0PS8Q/12/275268354/png/32x32/3/1527948000/0/2/00_Installation_02_MySQL.png/EOvio4YCGJ4kIAIoAg/KuDKp3F5SPloY0-kQ1wruPb21eLdux_s4LZfMSxwNlo?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

## Authentication

Untuk Autentication saya menggunakan **API Autehntication (Passport)**. Laravel membuat authentikasi API menjadi mudah menggunakan Laravel Passport, yang menyediakan implementasi server OAuth2.

[https://laravel.com/docs/5.6/passport](https://laravel.com/docs/5.6/passport)

![alt text](https://photos-4.dropbox.com/t/2/AAD-wPxRv_w_J9g4Hf3pXmZ1c9CEB-I1ZJHNTzaEjb6Uig/12/275268354/png/32x32/3/1527948000/0/2/00_Installation_03_Passport.png/EOvio4YCGJ4kIAIoAg/vr4qSE0x4g5Nj37HM1Gc2dtzBusEcDrbJPeOGfWtUfM?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

#### Register
![alt text](https://photos-1.dropbox.com/t/2/AAAgibNdslaw-Y2aJpgKV2yYf7uZ_irpWWURK20n54ZJZg/12/275268354/png/32x32/3/1527951600/0/2/02_Auth_01_Register.png/EOvio4YCGJ4kIAIoAg/xGDX79OglcuAP0jRzuniNSXj9KyUsf22zbs-q9MNCKg?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-3.dropbox.com/t/2/AABcxG51HNH3aVl4ONh1Cit_uJScf0YrPkXWYRW5huLN6A/12/275268354/png/32x32/3/1527951600/0/2/02_Auth_02_Register.png/EOvio4YCGJ4kIAIoAg/YBgH0699Y4Hx952xMUO6lng2wvuPUaaupKsDBEvyc1Q?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

#### Login
![alt text](https://photos-5.dropbox.com/t/2/AAC1eVns1ycfbwPUlhV4AOnrx_2ij-blwIRhwJGcWtcltA/12/275268354/png/32x32/3/1527951600/0/2/02_Auth_03_Login.png/EOvio4YCGJ4kIAIoAg/v5Nc2GfrXGLlD8z-KInuNz-5yg_tjeQ2_aTwFKU-MaQ?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

## Migration

Untuk implementasi migration saya membuat sample untuk table **Post**.

![alt text](https://photos-1.dropbox.com/t/2/AAAwwzbPuJrKb9Qo96TFtWldLYwo-cDSo2yWLHXBJIj_bw/12/275268354/png/32x32/3/1527951600/0/2/03_Migration_01.png/EOvio4YCGJ4kIAIoAg/-Vyl2Heq7lga7xO0qwoIigjzsGNXiBECiN_6VbDDfp0?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-2.dropbox.com/t/2/AADOm54pEfZLIxT-2-RHsCKabzIjCC2nskzZD0eoz_plrQ/12/275268354/png/32x32/3/1527951600/0/2/03_Migration_02.png/EOvio4YCGJ4kIAIoAg/deH4VVWRKdS9Rk642zsHQ4Z1BJppxwuvud4kVyIRtVE?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-3.dropbox.com/t/2/AAASQJZUhHIVSxLUZubw3rCEANe4zscRZJeW6iizCHd4ng/12/275268354/png/32x32/3/1527951600/0/2/03_Migration_03.png/EOvio4YCGJ4kIAIoAg/6dbXRcWc5Xi-Q89WOiDQ55GJBwZ16BXtEfaUJKksjvE?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-5.dropbox.com/t/2/AABDn9y0gcy2R3qh3vS7sge02256JDWMxqPjdcWTMO7plg/12/275268354/png/32x32/3/1527951600/0/2/03_READ.png/EOvio4YCGJ4kIAIoAg/Npfq71AKfru47fOjSksBoEKVkW0QqCCE1w0gSoB9inI?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

## Seeder

Implementasi dari Seeder yang saya buat adalah untuk memasukan data *dummy* pada table **Post**.

![alt text](https://photos-6.dropbox.com/t/2/AAAp5VnzjSrh2OQ0FC6IBB-VG5J0OCejKpXNhNLBWEMtng/12/275268354/png/32x32/3/1527951600/0/2/04_Seeder_01.png/EOvio4YCGJ4kIAIoAg/SzRtAp3LbVeNA7gSbGSfeMYm6XCMhtUoM83_xFmkGzQ?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-1.dropbox.com/t/2/AADvrmYCk3jF7dR7dy3j86UtUawRhlfHeKWMp2VL0fLoSg/12/275268354/png/32x32/3/1527951600/0/2/04_Seeder_Factory_03.png/EOvio4YCGJ4kIAIoAg/ja2_EL9Ehqr6UXb3yk7vgzkEMU6-9OXQ91oITrp3Cjs?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-5.dropbox.com/t/2/AABV0hnvIEfu6_L93p8rM6VT3XsVIkI0qUCc0_7STqltXw/12/275268354/png/32x32/3/1527951600/0/2/04_Seeder_Factory_04.png/EOvio4YCGJ4kIAIoAg/I0rme52lAxKpvdYoktAXdOG3ocrXouRRneLA1kX_hzM?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

Untuk menjalankan seeder tresebut kita gunakan perintah berikut:

```
php artisan db:seed –class=PostSeeder
```
![alt text](https://photos-3.dropbox.com/t/2/AAAQLWzuxvBp-z7r6L-QnrdC1ye01xV2l8eJ5gGEcG7TDg/12/275268354/png/32x32/3/1527951600/0/2/04_Seeder_Factory_05.png/EOvio4YCGJ4kIAIoAg/TV3VSoHkUUyMdHBjkHu1Og6VZAzmHV5Pl2aWLrpGDQo?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

## Queue

Untuk implementasi Queue saya mencoba membuat proses pengiriman email.

![alt text](https://photos-2.dropbox.com/t/2/AAA6M75nDjTFFXLwpM3Mj1lHP_xRIC-kBG3BCdtv6I4h1Q/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_01.png/EOvio4YCGJ4kIAIoAg/B_NEKqpyNZs4IVOzkZ-7_RcnxccdUH4Ne7KQL_L-GbM?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

Buat table queue dan jobs

![alt text](https://photos-4.dropbox.com/t/2/AAA65VcmLdxOGvZFqzGF9o8NuLQwEbFhh-4l5n-1Occb0g/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_03.png/EOvio4YCGJ4kIAIoAg/HS0QlL5JP3Swfjjb2zS1B_j7M5ND1YlyNq-nTc5MjsU?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-4.dropbox.com/t/2/AABm2gPNWZJIHRAbxEVMCrB5HDw77xsPM5DMvUgM_QXf7g/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_04.png/EOvio4YCGJ4kIAIoAg/CL70QLk778q0EGG_d7kVdHxlFt3pA4voYliHgPyvS8E?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-2.dropbox.com/t/2/AAAuYtL9aOnQ0VWm9AQbhghRfarcGdI3Ab4eJfoJ26zYOg/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_05.png/EOvio4YCGJ4kIAIoAg/PKzxZgkXhJ1hyP4tYPvWuhy9qrTKi5kYMP4SJ21qYG0?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-1.dropbox.com/t/2/AAB9Yq2XRfdgjv5K4tfIRQ2nM7x_0pl-DlZ-yZRPsl_yRw/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_06.png/EOvio4YCGJ4kIAIoAg/I6Qh9e7Fdos_l9SV0rmjp_KtlIuYdCsqxX74seKAIJg?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-4.dropbox.com/t/2/AABmxgMFtN6qTdgy-Sz9i06wjzpC786R4fdUW7nOW8841w/12/275268354/png/32x32/3/1527951600/0/2/05_Queue_07.png/EOvio4YCGJ4kIAIoAg/hrOvYHKgbbtDlsmnqZ87Vt8Ky9EOrFcsWgy-7csUmgo?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)


## Testing

Pada implementasi Unti Testing, saya coba melakukan test pada prose Insert, Update dan Delete pada table **Post**.

![alt text](https://photos-3.dropbox.com/t/2/AABZMQ9BK1Wz4nH5-yXT65_Vyy1QF89nM__RT3UHxLc2Aw/12/275268354/png/32x32/3/1527951600/0/2/06_Testing_01.png/EOvio4YCGJ4kIAIoAg/GpxI9iQsd5FxqoL5oWLlsqjkIPuxs2lsw1HMLqvJgXE?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-5.dropbox.com/t/2/AACh9beh79GIxok9UzUodvHC_zWWWaP5UNZoTHeuhF3bsQ/12/275268354/png/32x32/3/1527951600/0/2/06_Testing_02.png/EOvio4YCGJ4kIAIoAg/BNuogbb9jkFlGn4618Rq038PjM_JpFvKpZfQsTrSFUw?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)
![alt text](https://photos-5.dropbox.com/t/2/AABIn1V56CkxNOTQryX_F18DQFqbxnTKLlU13VPhzvuoYQ/12/275268354/png/32x32/3/1527951600/0/2/06_Testing_03.png/EOvio4YCGJ4kIAIoAg/E_hTPRuqcDDZVgDrPf-Nsz14SPWRiQlIpTq9O4xcpJQ?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

![alt text](https://photos-4.dropbox.com/t/2/AAAhXn12UtgnN16aNX3EQ6kI4QDkp2aAkhPx6RV-GsPZjw/12/275268354/png/32x32/3/1527951600/0/2/06_Testing_04.png/EOvio4YCGJ4kIAIoAg/cJGugl8himYJ3RK-rBLOgr00pEOj8vRdW2SVOok6P7E?dl=0&preserve_transparency=1&size=1280x960&size_mode=3)

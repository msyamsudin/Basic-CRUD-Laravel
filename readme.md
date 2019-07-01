<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Tentang Simple CRUD Laravel

Ini merupakan sebuah aplikasi dasar yang memiliki fungsi CRUD (Create, Read, Update dan Delete), aplikasi ini dibangun menggunakan framework Laravel versi 5.7 yang didalamnya juga terdapat dukungan dari Bootstrap 4.1.3, Fontawesome 5.0.5 dan jQuery 3.3.1 agar aplikasi ini dapat berjalan dengan baik.

Aplikasi diatas adalah aplikasi pencatatan data siswa yang terdiri dari input, nis (nomor induk siswa), nama, alamat, jenis kelamin, tempat dan tanggal lahir, agama dan nomor telepon.

<p align="center"><img src="https://i1026.photobucket.com/albums/y329/muchammad_syam/Screenshot%20from%202018-11-22%2011-21-51_zps4pa2nqvb.png"></p>

**Note:**
Alasan kenapa **NISN hanya 10 digit.**
NISN menggunakan format seperti ini **aaaxxxyyyy**

- aaa : Tiga digit tahun lahir
- xxxyyyy : Tujuh digit nomor urut yang dibagi dalam 2 bagian, yaitu:
- xxx : Tiga digit pengelompokan, dan
- yyyy : Empat digit nomor urut dalam pengelompokan xxx.

Karena aturan diatas, saya menyesuaikan aplikasi ini agar user hanya memasukkan 10 digit angka pada kolom NIS aplikasi.

<b>Demo : https://syam.web.id/laravela/siswa</b>

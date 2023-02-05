## Tentang Aplikasi

Aplikasi ini merupakan project Sistem Pendukung Keputusan menggunakan metode Multi-Objective Optimization on the basis of Ratio Analysis. Aplikasi ini dirancang untuk memenuhi pembelajaran Peminatan Program Skripsi di [STMIK Triguna Dharma](https://www.trigunadharma.ac.id). Aplikasi ini dapat diunduh secara bebas, digunakan, dan dimodifikasi sesuai kebutuhan siapapun dengan ketentuan untuk **TIDAK MEMPERJUAL-BELIKAN** dalam bentuk apapun.

-   [STMIK Triguna Dharma](https://www.trigunadharma.ac.id).
-   [Laravel](https://laravel.com).
-   [Tailwindcss](https://tailwindcss.com/).

## Disclaimer

> Aplikasi ini tidak disertakan fitur validasi input, disain tampilan halaman yang sesuai studi kasus, ataupun fitur ubah data user. Mahasiswa dituntut untuk dapat mempelajari sendiri dan menerapkan fitur tersebut sesuai dengan kebutuhan skripsinya.

## Instalasi

> Tonton video berikut sebagai panduan instalasi: [Youtube Video](https://www.youtube.com/watch?v=2KX-QOIenZM). Video ini bukan dari saya dan langkah-langkahnya tidak sama persis, tetapi cukup jelas untuk dijadikan panduan tahapan instalasi yang disebutkan di bawah.

1. Download aplikasi local server yang mendukung PHP versi 8.1 seperti [XAMPP](https://www.apachefriends.org/download.html) atau [WAMP Server](https://www.wampserver.com/en/download-wampserver-64bits/) untuk sistem operasi Windows.
2. Download dan install [Composer](https://getcomposer.org/Composer-Setup.exe).
3. Download dan install [Node JS](https://nodejs.org/en/download/).
4. Restart komputer.
5. Jalankan aplikasi **XAMPP Control Panel**, klik tombol `RUN` untuk Apache dan MySQL.
6. Download dan install [Visual Studio Code](https://code.visualstudio.com/Download).
7. Download dan ekstrak project ini pada drive D komputer, rename folder hasil ekstrak menjadi `spk-moora`.
8. Jalankan aplikasi **Visual Studio Code**, pilih menu `File` -> `Open Folder` lalu pilih folder `spk-moora` hasil tahap sebelumnya.
9. Pilih menu `Terminal` -> `New Terminal` pada aplikasi **Visual Studio Code** lalu ketik perintah berikut satu-persatu untuk melakukan instalasi paket-paket yang dibutuhkan:

```
composer install
npm install
npm run build
```

10. Buka **Google Chrome**, ketikkan alamat [http://localhost/phpmyadmin](http://localhost/phpmyadmin) lalu buat database baru dengan nama `spk-moora`.
11. Buka kembali aplikasi **Visual Studio Code**. Ubah nama (_rename_) file `.env.example` menjadi `.env` lalu edit bagian database seperti berikut:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="spk-moora"
DB_USERNAME=root
DB_PASSWORD=
```

12. Ketik perintah berikut satu-persatu pada terminal **Visual Studio Code** untuk membuat app key, melakukan migrasi tabel menuju database, dan menjalankan local server:

```
php artisan key:generate
php artisan migrate
php artisan serve
```

13. Ketik alamat url ([http://127.0.0.1:8000/register](http://127.0.0.1:8000/register)) pada web browser **Google Chrome** untuk melihat melakukan registrasi akun admin.

## Author

Aplikasi ini dirancang dan dibangun oleh [Khairi Ibnutama, S.Kom., M.Kom](https://kaitama.dev), dosen tetap Yayasan Bina Keluarga Sejahtera, [STMIK Triguna Dharma](https://www.trigunadharma.ac.id).

## Framework

Aplikasi ini dibangun menggunakan framework PHP [Laravel](https://laravel.com).

## Security Vulnerabilitas

Jika anda menemukan bug, error, atau kesalahan perhitungan saat penggunaan aplikasi, mohon untuk menghubungi author di alamat email [mr.ibnutama@gmail.com](mailto:mr.ibnutama@gmail.com).

## License

Aplikasi ini berlisensi "open-sourced software" dibawah [MIT license](https://opensource.org/licenses/MIT).

# Kumpulan Coding Interview

[![Build Status](https://github.com/ianriizky/coding-interview/workflows/tests/badge.svg)](https://github.com/ianriizky/coding-interview/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/ianriizky/coding-interview.svg?style=flat)](https://scrutinizer-ci.com/g/ianriizky/coding-interview)
[![Coverage Status](https://coveralls.io/repos/github/ianriizky/coding-interview/badge.svg)](https://coveralls.io/github/ianriizky/coding-interview)
[![Latest Stable Version](https://poser.pugx.org/ianriizky/coding-interview/v/stable.svg)](https://packagist.org/packages/ianriizky/coding-interview)
[![Total Downloads](https://poser.pugx.org/ianriizky/coding-interview/d/total.svg)](https://packagist.org/packages/ianriizky/coding-interview)
[![Software License](https://poser.pugx.org/ianriizky/coding-interview/license.svg)](https://packagist.org/packages/ianriizky/coding-interview)

Projek ini berisi kumpulan _source code_ dari pertanyaan atau studi kasus yang sering diberikan oleh pewawancara kepada calon karyawan saat mengikuti proses _coding interview_ di perusahaan.

Source code ini dibuat menggunakan bahasa pemrograman PHP dan sudah dilengkapi dengan _unit test_ menggunakan [phpunit](https://phpunit.de).

## Prasyarat

-   PHP ^8.0
-   Composer ^2.0

## Instalasi

Untuk menginstal repository ini di lokal anda, jalankan perintah di bawah ini melalui terminal.

```bash
composer create-project ianriizky/coding-interview
```

Packagist: https://packagist.org/packages/ianriizky/coding-interview

## Testing

Jalankan perintah di bawah ini untuk menjalankan _test script_ melalui [phpunit](https://phpunit.de/).

```bash
./vendor/bin/phpunit
## atau
composer test
```

## Daftar Studi Kasus yang Tersedia

-   [x] [Fizz Buzz](src/FizzBuzz/README.md)
-   [x] [Palindrome](src/Palindrome/README.md)
-   [x] [Data Set](src/DataSet/README.md)
-   [x] [Factorial](src/Factorial/README.md)

Anda bisa membantu kami untuk menambah daftar studi kasus di atas dengan ikut berkontribusi pada _repository_ ini. Lihat [`contributing.md`](CONTRIBUTING.md) untuk informasi selanjutnya.

## _Changelog_

Lihat [`changelog.md`](CHANGELOG.md) untuk informasi lebih lanjut mengenai perubahan yang terjadi pada _repository_ ini.

## Licensi

_Repository_ ini menggunakan lisensi MIT License (MIT). Lihat [`license.md`](LICENSE.md) untuk informasi selanjutnya.

## Kreator

-   [@ianriizky](https://github.com/ianriizky)

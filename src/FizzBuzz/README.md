# Fizz Buzz

Fizz Buzz adalah permainan pengelompokan kata pada anak untuk mengajarkan mereka tentang pembagian. Pemain mengambil giliran untuk behitung secara bertingkat, dengan ketentuan bahwa setiap angka dengan kelipatan tiga akan diganti dengan kata "fizz", setiap angka dengan kelipatan lima akan diganti dengan kata "buzz", dan angka dengan kelipatan tiga dan limat akan diganti dengan kata "fizz buzz". Studi kasus ini sering digunakan oleh pewawancara untuk menyeleksi calon karyawan saat mengikuti *coding interview* di perusahaan dengan meminta mereka untuk menulis kode program tertentu untuk menghasilkan 100 Fizz Buzz pertama<sup id="pg1">[1](#fn1)</sup>.

Berikut ini adalah contoh *source code* dari studi kasus Fizz Buzz menggunakan bahasa pemrograman PHP<sup id="pg2">[2](#fn2)</sup>. Detail lengkapnya bisa dilihat [di sini](FizzBuzz.php).
```php
return array_map(function ($number) {
    switch (true) {
        case $number % 3 === 0 && $number % 5 === 0:
            return 'Fizz Buzz';

        case $number % 3 === 0:
            return 'Fizz';

        case $number % 5 === 0:
            return 'Buzz';

        default:
            return $number;
    }
}, range(1, 100, 1));
```

---
### Catatan Kaki:

<strong id="fn1">1</strong> [Fizz buzz, Wikipedia](https://en.wikipedia.org/wiki/Fizz_buzz). [↩](#pg1)
<br>
<strong id="fn2">2</strong> [Programmer Zaman Now - Coding Interview Fizz Buzz](https://www.youtube.com/watch?v=FKHV-i7UUvI). [↩](#pg2)
<br>

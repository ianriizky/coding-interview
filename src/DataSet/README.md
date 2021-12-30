# Data Set

Dataset adalah sebuah kumpulan data yang berasal dari informasi-informasi pada masa lalu dan siap untuk dikelola menjadi sebuah informasi baru<sup id="pg1">[1](#fn1)</sup>. Di sini kita akan membuat sebuah dataset menggunakan class yang memiliki fungsi add() dan remove(), di mana setiap data baru yang dimasukkan ke dalam class tidak boleh bersifat duplikat. Untuk menampung data yang masuk, maka cara paling mudah yang dapat digunakan adalah dengan menggunakan array. Dengan menggunakan array, maka kapasitas penyimpanan data dapat berubah secara dinamis mengikuti banyaknya data yang masuk. Tapi pada kasus kali ini kita menggunakan objek `\SplFixedArray` dari PHP, agar *behaviour* dari array-nya bisa mirip dengan bahasa pemrograman Java. Di mana kapasitas atau panjang dari array itu sendiri sudah diset secara tetap sejak awal dan tidak bisa diubah di tengah jalan.

Contoh *source code* dari studi kasus Dataset menggunakan bahasa pemrograman PHP<sup id="pg2">[2](#fn2)</sup> bisa dilihat [di sini](DataSet.php).

---
### Catatan Kaki:

<strong id="fn1">1</strong> [Pengertian Dataset dan Jenis-jenisnya, Kumparan](https://kumparan.com/kabar-harian/pengertian-dataset-dan-jenis-jenisnya-1wtM6xNlkpQ/2). [↩](#pg1)
<br>
<strong id="fn2">2</strong> [Programmer Zaman Now - Coding Interview Struktur Data Set](https://www.youtube.com/watch?v=OWm1vSHrC_A). [↩](#pg2)
<br>

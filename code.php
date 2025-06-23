<?php
// Mengatur detail koneksi database
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root'; // Ganti dengan username MySQL Anda
$DATABASE_PASS = ''; // Ganti dengan password MySQL Anda
$DATABASE_NAME = 'phplogin';

// Mencoba menghubungkan menggunakan informasi di atas
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Memastikan tidak ada kesalahan koneksi
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL!');
}
?>

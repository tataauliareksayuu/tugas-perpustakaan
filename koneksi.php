<!---
Nama: TATA AULIA REKSA AYU
NIM: 250202062
Kelas: TI2B-->

<?php
mysqli_report(MYSQLI_REPORT_OFF);
$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";
$koneksi = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);
if (!$koneksi) {
    die("Koneksi gagal: " .
        htmlspecialchars(mysqli_connect_error()));
}
mysqli_set_charset($koneksi, "utf8mb4");

<!---
Nama: TATA AULIA REKSA AYU
NIM: 250202062
Kelas: TI2B-->

<?php
require_once "koneksi.php";
$versi_server = mysqli_get_server_info($koneksi);
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tes Koneksi Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            color: #1f3864;
        }

        .sukses {
            background: #e6f4ea;
            border-left: 5px solid #2e7d32;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>Tes Koneksi Database</h1>

    <p class="sukses">
        Koneksi ke MySQL berhasil.
    </p>

    <p>Host: <?php echo htmlspecialchars($host); ?></p>

    <p>Database: <?php echo htmlspecialchars($database); ?></p>

    <p>Versi Server:
        <?php echo htmlspecialchars($versi_server); ?>
    </p>

</body>
</html>

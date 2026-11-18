<!---
Nama: TATA AULIA REKSA AYU
NIM: 250202062
Kelas: TI2B-->

<?php
$status = isset($_GET["status"]) ? $_GET["status"] : "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Anggota Perpustakaan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            margin: 40px;
        }

        .container {
            background: white;
            width: 450px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            color: #1f3864;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #1f3864;
            color: white;
            border: none;
            cursor: pointer;
        }

        .sukses {
            background: #e6f4ea;
            border-left: 5px solid #2e7d32;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Pendaftaran Anggota Perpustakaan</h1>

    <?php if ($status === "sukses") { ?>
        <p class="sukses">
            Data anggota berhasil disimpan.
        </p>
    <?php } ?>

    <form action="proses_anggota.php" method="post">

        <label for="no_anggota">Nomor Anggota</label>
        <input type="text" id="no_anggota"
               name="no_anggota">

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap"
               name="nama_lengkap">

        <label for="email">Email</label>
        <input type="text" id="email"
               name="email">

        <label for="no_hp">Nomor HP</label>
        <input type="text" id="no_hp"
               name="no_hp">

        <label for="jenis_anggota">Jenis Anggota</label>
        <select id="jenis_anggota" name="jenis_anggota">
            <option value="">-- Pilih Jenis Anggota --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Tenaga Kependidikan">
                Tenaga Kependidikan
            </option>
        </select>

        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat"
                  rows="4"></textarea>

        <button type="submit">Daftar Anggota</button>

    </form>

</div>

</body>
</html>

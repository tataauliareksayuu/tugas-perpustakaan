<!---
Nama: TATA AULIA REKSA AYU
NIM: 250202062
Kelas: TI2B-->
<?php
require_once "koneksi.php";
$sql = "SELECT * FROM anggota ORDER BY id DESC";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
    die("Query gagal: " . mysqli_error($koneksi));
}
$jumlah = mysqli_num_rows($hasil);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #333;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h2 {
            color: #1e3a8a;
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            margin-bottom: 25px;
        }

        .info {
            background-color: #dbeafe;
            color: #1e40af;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #1e3a8a;
            color: white;
            padding: 14px;
            text-align: center;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        tr:hover {
            background-color: #e0f2fe;
        }

        .aksi form {
            display: inline;
        }

        .btn-detail,
        .btn-hapus {
            display: inline-block;
            text-decoration: none;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            margin: 2px;
            color: white;
        }

        .btn-detail {
            background-color: #2563eb;
        }

        .btn-hapus {
            background-color: #dc2626;
        }

        .btn-detail:hover {
            background-color: #1d4ed8;
        }

        .btn-hapus:hover {
            background-color: #b91c1c;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 15px;
            }

            th,
            td {
                padding: 9px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Anggota Perpustakaan</h2>
        <p class="subtitle">
            Daftar Seluruh Anggota Perpustakaan Kampus
        </p>
        <div class="info">
            Jumlah Anggota:
            <strong><?php echo $jumlah; ?></strong>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO ANGGOTA</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Jenis Anggota</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    if ($jumlah > 0) {
                        while ($baris = mysqli_fetch_assoc($hasil)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($baris["no_anggota"]); ?></td>
                        <td><?php echo htmlspecialchars($baris["nama_lengkap"]); ?></td>
                        <td><?php echo htmlspecialchars($baris["email"]); ?></td>
                        <td><?php echo htmlspecialchars($baris["no_hp"]); ?></td>
                        <td><?php echo htmlspecialchars($baris["jenis_anggota"]); ?></td>
                        <td><?php echo htmlspecialchars($baris["alamat"]); ?></td>
                        <td class="aksi">
                            <a class="btn-detail"href="detail.php?id=<?php echo (int) $baris["id"]; ?>">Detail</a>
                            <form action="hapus.php" method="post"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                <input type="hidden" name="id"
                                    value="<?php echo (int) $baris["id"]; ?>">
                                <button type="submit" class="btn-hapus">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                    ?>
                    <tr><td colspan="8">Belum ada data anggota.</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



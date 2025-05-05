<?php
include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.Nama AS NamaProdi 
          FROM mahasiswa 
          LEFT JOIN prodi ON mahasiswa.Id = prodi.Id";
$data = ambildata($query);

// Cek status dari parameter URL
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f; /* Dark background */
            color: #f5f5f5; /* Light text color */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #ffcc00; /* Highlighted title color */
        }

        .notification {
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            border-radius: 4px;
            font-weight: bold;
        }

        .success {
            background-color: #4CAF50; /* Green background */
            color: white;
        }

        .error {
            background-color: #f44336; /* Red background */
            color: white;
        }

        a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Table Styles */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #2e2e3e; /* Dark table background */
            color: #f5f5f5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #3e3e5e; /* Header background */
            color: #ffcc00; /* Header text color */
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #2a2a3a; /* Alternate row color */
        }

        tr:hover {
            background-color: #44445a; /* Row hover effect */
        }

        td {
            font-size: 14px;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            background-color: #ffcc00;
            color: #1e1e2f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }

        .btn:hover {
            background-color: #e6b800;
        }

        .btn-container {
            text-align: center;
            margin: 20px 0;
        }
    </style>
    <script>
        // Konfirmasi sebelum menghapus data
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }
    </script>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <!-- Notifikasi -->
    <?php if ($status == 'updated') : ?>
        <div class="notification success">Data berhasil diperbarui!</div>
    <?php elseif ($status == 'error') : ?>
        <div class="notification error">Terjadi kesalahan saat memperbarui data.</div>
    <?php endif; ?>

    <div class="btn-container">
        <a href="TambahMahasiswa.php" class="btn">Tambah Data</a>
    </div>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Nama Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1; 
            foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["NIM"] ?></td>
                <td><?php echo $d["Nama"] ?></td>
                <td><?php echo $d["Tanggal_lahir"] ?></td>
                <td><?php echo $d["Telp"] ?></td>
                <td><?php echo $d["Gmail"] ?></td>
                <td><?php echo $d["NamaProdi"] ?></td>
                <td>
                    <a href="EditMahasiswa.php?NIM=<?php echo $d['NIM']; ?>" class="btn">Edit</a>
                    <a href="HapusMahasiswa.php?NIM=<?php echo $d['NIM']; ?>" class="btn" onclick="return confirmDelete()">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
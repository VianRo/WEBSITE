<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

// Cek status dari parameter URL
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
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

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #2e2e3e; /* Form background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            margin: 0 auto;
        }

        td {
            padding: 10px;
            font-size: 14px;
        }

        input[type="text"], input[type="email"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #3e3e5e;
            color: #f5f5f5;
        }

        input[type="submit"], a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            background-color: #ffcc00;
            color: #1e1e2f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
        }

        input[type="submit"]:hover, a:hover {
            background-color: #e6b800;
        }

        .btn-container {
            text-align: center;
        }

        a {
            color: #1e1e2f;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <!-- Notifikasi -->
    <?php if ($status == 'success') : ?>
        <div class="notification success">Data berhasil ditambahkan!</div>
    <?php elseif ($status == 'error') : ?>
        <div class="notification error">Terjadi kesalahan saat menambahkan data.</div>
    <?php endif; ?>

    <form action="TambahAksiMahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="NIM" placeholder="Masukkan NIM"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="Nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="Tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Telp :</td>
                <td><input type="text" name="Telp" placeholder="Masukkan Nomor Telepon"></td>
            </tr>
            <tr>
                <td>Gmail :</td>
                <td><input type="email" name="Gmail" placeholder="Masukkan Email"></td>
            </tr>
            <tr>
                <td>Prodi :</td>
                <td>
                    <select name="Id">
                        <?php foreach ($data as $d) : ?>
                            <option value="<?php echo $d["Id"]; ?>"><?php echo $d["Nama"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="btn-container">
            <a href="Index.php">Kembali</a>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
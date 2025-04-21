<?php

include "koneksi.php";

$NIM = $_GET['NIM'];

$query = "SELECT * FROM mahasiswa WHERE NIM='$NIM'";
$data = ambildata($query);

$prodiQuery = "SELECT * FROM prodi";
$prodi = ambildata($prodiQuery);

if (empty($data)) {
    header("Location: Index.php");
    exit;
}

$mahasiswa = $data[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f; 
            color: #f5f5f5; 
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #ffcc00; 
        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #2e2e3e; 
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
    <h1>Edit Data Mahasiswa</h1>
    <form action="EditAksiMahasiswa.php" method="post">
        <input type="hidden" name="NIM" value="<?php echo $mahasiswa['NIM']; ?>">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="Nama" value="<?php echo $mahasiswa['Nama']; ?>" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="Tanggal_lahir" value="<?php echo $mahasiswa['Tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Telp :</td>
                <td><input type="text" name="Telp" value="<?php echo $mahasiswa['Telp']; ?>" placeholder="Masukkan Nomor Telepon"></td>
            </tr>
            <tr>
                <td>Gmail :</td>
                <td><input type="email" name="Gmail" value="<?php echo $mahasiswa['Gmail']; ?>" placeholder="Masukkan Email"></td>
            </tr>
            <tr>
                <td>Prodi :</td>
                <td>
                    <select name="Id">
                        <?php foreach ($prodi as $p) : ?>
                            <option value="<?php echo $p['Id']; ?>" <?php echo $p['Id'] == $mahasiswa['Id'] ? 'selected' : ''; ?>>
                                <?php echo $p['Nama']; ?>
                            </option>
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
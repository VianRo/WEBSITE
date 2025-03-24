<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <br>
    <a href="TambahMahasiswa.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>ID Prodi</th>
        </thead>
        <tbody>
            <?php
            $i=1; 
            foreach($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["NIM"] ?></td>
                <td><?php echo $d["Nama"] ?></td>
                <td><?php echo $d["Tanggal_lahir"] ?></td>
                <td><?php echo $d["Telp"] ?></td>
                <td><?php echo $d["Gmail"] ?></td>
                <td><?php echo $d["Id"] ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>
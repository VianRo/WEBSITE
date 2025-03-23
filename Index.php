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
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["tanggal_lahir"] ?></td>
                <td><?php echo $d["nomor_telepon"] ?></td>
                <td><?php echo $d["email"] ?></td>
                <td><?php echo $d["id_prodi"] ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>
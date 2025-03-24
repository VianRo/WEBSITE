<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
        <h1>Tambah Data Mahasiswa</h1>
        <form action="TambahAksiMahasiswa.php" method="post">
            <table>
                <tr>
                    <td>NIM :</td>
                    <td><input type="text" name="NIM"></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir :</td>
                    <td><input type="Date" name="Tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Telp :</td>
                    <td><input type="text" name="Telp"></td>
                </tr>
                <tr>
                    <td>Gmail :</td>
                    <td><input type="email" name="Gmail"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><select name="Id">
                        <?php foreach($data as $d) : ?>
                        <option value="<?php echo $d["Id"] ?>"><?php echo $d["Nama"] ?></option>
                        <?php endforeach; ?>
                    </select></td>
                </tr>
            </table>
            <a href="Index.php">Kembali</a>
            <input type="submit" value="Simpan">
        </form>
</body>
</html>
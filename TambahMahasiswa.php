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
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir :</td>
                    <td><input type="Date"></td>
                </tr>
                <tr>
                    <td>Telp :</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Gmail :</td>
                    <td><input type="email"></td>
                </tr>
                <tr>
                    <td>Id :</td>
                    <td><select name="" id="">
                    <option value="1">Manajemen Informatika</option>
                    <option value="2">Digital Marketing</option>
                    </select></td>
                </tr>
            </table>
            <a href="Index.php">Tambah</a>
            <input type="submit" value="Simpan">
            <button type="reset" value="Batal">
        </form>
</body>
</html>
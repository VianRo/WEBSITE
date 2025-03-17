<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "4a";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($conn, $query);

// Periksa apakah query berhasil
if (!$hasil) {
    die("Query gagal: " . mysqli_error($conn));
}

// Mengambil semua data mahasiswa
$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

// Debugging output
echo "<pre>";
print_r($data);
echo "</pre>";

// Bebaskan hasil query dan tutup koneksi
mysqli_free_result($hasil);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" class="Dark" style="color-scheme: dark;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    </head>
<tbody>
    <h1>DATA MEHASISWA</h1>
    <br>
    <table border="1"
        <thead>
            <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            </tr>
        </thead>
</tbody>
            <tr>
                <td>1</td>
                <td>E020323102</td>
                <td>Raditya Oktaviano</td>
            </tr>
            <tr>
                <td>2</td>
                <td>E020323101</td>
                <td>Muhammad Satrio</td>
            </tr>
            <tr>
                <td>3</td>
                <td>JMK0203532</td>
                <td>Amba Tungkang</td>
            </tr>
</html>

<?php
include "koneksi.php";

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$Telp = $_POST['Telp'];
$Gmail = $_POST['Gmail'];
$Id = $_POST['Id'];

$query = "INSERT INTO mahasiswa (NIM, Nama, Tanggal_lahir, Telp, Gmail, Id) VALUES ('$NIM', '$Nama', '$Tanggal_lahir', '$Telp', '$Gmail', '$Id')";

if (mysqli_query($conn, $query)) {
    // Redirect ke TambahMahasiswa.php dengan status sukses
    header("Location: TambahMahasiswa.php?status=success");
} else {
    // Redirect ke TambahMahasiswa.php dengan status error
    header("Location: TambahMahasiswa.php?status=error");
}
?>
<?php
include "koneksi.php";
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$Telp = $_POST['Telp'];
$Gmail = $_POST['Gmail'];
$Id = $_POST['Id'];

$query = "INSERT INTO mahasiswa (NIM, Nama, Tanggal_lahir, Telp, Gmail, Id) VALUES ('$NIM', '$Nama', '$Tanggal_lahir', '$Telp', '$Gmail', '$Id')";

mysqli_query($conn, $query);

header("location:Index.php");
?>
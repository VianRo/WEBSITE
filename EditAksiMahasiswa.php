<?php
// filepath: c:\xampp\htdocs\4A\EditAksiMahasiswa.php
include "koneksi.php";

// Ambil data dari form
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$Telp = $_POST['Telp'];
$Gmail = $_POST['Gmail'];
$Id = $_POST['Id'];

// Query untuk memperbarui data mahasiswa
$query = "UPDATE mahasiswa 
          SET Nama = '$Nama', 
              Tanggal_lahir = '$Tanggal_lahir', 
              Telp = '$Telp', 
              Gmail = '$Gmail', 
              Id = '$Id' 
          WHERE NIM = '$NIM'";

if (mysqli_query($conn, $query)) {
    // Redirect ke Index.php dengan status sukses
    header("Location: Index.php?status=updated");
} else {
    // Redirect ke Index.php dengan status error
    header("Location: Index.php?status=error");
}
?>
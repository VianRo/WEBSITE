<?php
// filepath: c:\xampp\htdocs\4A\HapusMahasiswa.php
include "koneksi.php";

// Ambil NIM dari parameter URL
$NIM = $_GET['NIM'];

// Query untuk menghapus data mahasiswa
$query = "DELETE FROM mahasiswa WHERE NIM = '$NIM'";

if (mysqli_query($conn, $query)) {
    // Redirect ke Index.php dengan status sukses
    header("Location: Index.php?status=deleted");
} else {
    // Redirect ke Index.php dengan status error
    header("Location: Index.php?status=error");
}
?>
<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Tambahkan Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .notification {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .notification.success {
            background-color: #d4edda;
            color: #155724;
        }
        .notification.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
<?php
$query = "SELECT mahasiswa.*, prodi.Nama AS NamaProdi 
          FROM mahasiswa 
          LEFT JOIN prodi ON mahasiswa.Id = prodi.Id";
$data = ambildata($query);

// Cek status dari parameter URL
$status = isset($_GET['status']) ? $_GET['status'] : '';

include "template/header.php";
include "template/sidebar.php";
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Data Mahasiswa</h1>

    <!-- Notifikasi -->
    <?php if ($status == 'updated') : ?>
        <div class="notification success">Data berhasil diperbarui!</div>
    <?php elseif ($status == 'error') : ?>
        <div class="notification error">Terjadi kesalahan saat memperbarui data.</div>
    <?php endif; ?>

    <div class="d-flex justify-content-end mb-3">
        <a href="TambahMahasiswa.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Daftar Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Nama Prodi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1; 
                    foreach ($data as $d) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $d["NIM"] ?></td>
                        <td><?php echo $d["Nama"] ?></td>
                        <td><?php echo $d["Tanggal_lahir"] ?></td>
                        <td><?php echo $d["Telp"] ?></td>
                        <td><?php echo $d["Gmail"] ?></td>
                        <td><?php echo $d["NamaProdi"] ?></td>
                        <td>
                            <a href="EditMahasiswa.php?NIM=<?php echo $d['NIM']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="HapusMahasiswa.php?NIM=<?php echo $d['NIM']; ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include "template/footer.php";
?>
<!-- Tambahkan Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }
</script>
</body>
</html>
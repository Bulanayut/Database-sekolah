<?php
// Koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk memperbarui data
    $query = "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE kd_kelas='$kd_kelas'";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil memperbarui data
    header("Location: index.php");
    exit();
}

// Ambil data siswa berdasarkan Kd Kelas
$kd_kelas = $_GET['kd_kelas'];
$query = "SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($conn, $query);
$kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">Kd Kelas:</label>
                <select class="form-control" id="kd_kelas" name="kd_kelas">
                        <option value="10" <?php if ($kelas['kd_kelas'] == '10') echo 'selected'; ?>>10</option>
                        <option value="11" <?php if ($kelas['kd_kelas'] == '11') echo 'selected'; ?>>11</option>
                        <option value="12" <?php if ($kelas['kd_kelas'] == '12') echo 'selected'; ?>>12</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas:</label>
                    <select class="form-control" id="nama_kelas" name="nama_kelas">
                        <option value="Sepuluh" <?php if ($kelas['nama_kelas'] == 'Sepuluh') echo 'selected'; ?>>Sepuluh</option>
                        <option value="Sebelas" <?php if ($kelas['nama_kelas'] == 'Sebelas') echo 'selected'; ?>>Sebelas</option>
                        <option value="Dua belas" <?php if ($kelas['nama_kelas'] == 'Dua belas') echo 'selected'; ?>>Dua belas</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
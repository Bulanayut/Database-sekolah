<?php
// Koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk menyimpan data baru
    $query = "INSERT INTO kelas (kd_kelas, nama_kelas) VALUES ('$kd_kelas', '$nama_kelas')";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil membuat data baru
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">Kd Kelas:</label>
                <select class="form-control" id="kd_kelas" name="kd_kelas">
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas:</label>
                    <select class="form-control" id="nama_kelas" name="nama_kelas">
                        <option value="Sepuluh">Sepuluh</option>
                        <option value="Sebelas">Sebelas</option>
                        <option value="Dua belas">Dua belas</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
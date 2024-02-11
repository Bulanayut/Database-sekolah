<?php
// Koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    // Query untuk memperbarui data
    $query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE kd_jurusan='$kd_jurusan'";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil memperbarui data
    header("Location: index.php");
    exit();
}

// Ambil data siswa berdasarkan Kd Kelas
$kd_jurusan = $_GET['kd_jurusan'];
$query = "SELECT * FROM jurusan WHERE kd_jurusan='$kd_jurusan'";
$result = mysqli_query($conn, $query);
$jurusan = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">Kd Jurusan:</label>
                <select class="form-control" id="kd_jurusan" name="kd_jurusan">
                        <option value="1" <?php if ($jurusan['kd_jurusan'] == '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($jurusan['kd_jurusan'] == '2') echo 'selected'; ?>>2</option>
                        <option value="3" <?php if ($jurusan['kd_jurusan'] == '3') echo 'selected'; ?>>3</option>
                        <option value="4" <?php if ($jurusan['kd_jurusan'] == '4') echo 'selected'; ?>>4</option>
                        <option value="5" <?php if ($jurusan['kd_jurusan'] == '5') echo 'selected'; ?>>5</option>
                        <option value="6" <?php if ($jurusan['kd_jurusan'] == '6') echo 'selected'; ?>>6</option>
                        <option value="7" <?php if ($jurusan['kd_jurusan'] == '7') echo 'selected'; ?>>7</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan:</label>
                    <select class="form-control" id="nama_jurusan" name="nama_jurusan">
                        <option value="akl" <?php if ($jurusan['nama_jurusan'] == 'akl') echo 'selected'; ?>>AKL</option>
                        <option value="ps" <?php if ($jurusan['nama_jurusan'] == 'ps') echo 'selected'; ?>>PS</option>
                        <option value="pm" <?php if ($jurusan['nama_jurusan'] == 'pm') echo 'selected'; ?>>PM</option>
                        <option value="otkp" <?php if ($jurusan['nama_jurusan'] == 'otkp') echo 'selected'; ?>>OTKP</option>
                        <option value="tkj" <?php if ($jurusan['nama_jurusan'] == 'tkj') echo 'selected'; ?>>TKJ</option>
                        <option value="mm" <?php if ($jurusan['nama_jurusan'] == 'mm') echo 'selected'; ?>>MM</option>
                        <option value="pspt" <?php if ($jurusan['nama_jurusan'] == 'pspt') echo 'selected'; ?>>PSPT</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Hapus Postingan</title>
    <!-- Include Bootstrap CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
include "koneksi.php";
$id = $_GET["id"];

if (isset($_GET['id'])) {
    $id = $_GET["id"]; }
    // Mendapatkan data yang akan diupdate
    // $nama = $_POST["nama"];
    // $komentar = $_POST["komentar"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "DELETE from komentar WHERE id='$id'";
        $result = mysqli_query($koneksi,$sql);

        if ($result) {
            echo "<div class='alert alert-success''>Anda Berhasil menghapus komentar <a href='index.php'>Kembali ke menu utama </a> </div> ";
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
}
?>

<div class="container mt-5">
    <form method="post" action="kom_delete.php?id=<?php echo $id; ?>">
        <h2>Hapus Postingan</h2>
        <div class="form-group">
            <label for="komentar">Apakah anda yakin menghapus postingan?</label>
        </div>
        <button type="submit" class="btn btn-primary">YA</button>
        <button type="button" class="btn btn-secondary">
        <a href="index.php" class='text-light' >Tidak</a>
        </button>
        
    </form>
</div>
</body>
</html>

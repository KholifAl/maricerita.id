
<!DOCTYPE html>
<html>
 
<head>
    <title>Data Pendaftaran</title>
    <!-- Sertakan Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<a href="index.php"><h2>KEMBALI</h2></a>
    <?php
    session_start();
    if (!isset($_SESSION['uname'])) {
        echo "<div class='alert alert-success'>Silahkan login terlebih dahulu <a href='login.php'>Login</a> </div> ";
        }

    //process
    include "koneksi.php";

    // Memeriksa apakah formulir telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_SESSION['uname'])) {
            $nama = $_SESSION['uname'];
        }
        else {
            $nama = "Anonim";
        }
        $komentar = $_POST["komentar"];
        $errors = array();

        if (empty($komentar)) {
            array_push($errors,"Semua data harus terisi");
        }
        if (count($errors)>0) {
            foreach ($errors as $errors) {
                // echo "<div class='alert alert-success'>Hahayukkk</div> ";
                echo "<div class='alert alert-danger'>$errors</div>";
            }}

        else {

            // require_once $koneksi;
            $sql = "INSERT INTO pendaftaran (nama, komentar, created_at, updated_at) VALUES ('$nama', '$komentar', NOW(), NOW())";
            if (mysqli_query($koneksi, $sql)) {
                echo "Data telah disimpan. <a href='index.php'>Lihat Data</a>";
            } else {
                echo "Terjadi kesalahan: " . mysqli_error($koneksi);
            }
        }
    }
    ?>


    <div class="container mt-5">

        <form method="POST" action="kom_create.php">
            <h2>FORMULIR PENDAFTARAN</h2>
            <div class="form-group">
            <h5>
            <?php

            if (isset($_SESSION['uname'])) {
            echo "Anda Berkomentar sebagai " . $_SESSION['uname'] ." !";
            } else {
            echo "Anda Berkomentar Sebagai Anonim!";

            }?>

            </h5></div>
            
            <div class="form-group">
                <label for="komentar">Tinggalkan Komentar:</label>
                <textarea class="form-control" name="komentar" rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="var4">Send</button>
            <button type="reset" class="btn btn-secondary" name="var5">Clear</button>
        </form>
    </div>
    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
    <!-- Sertakan Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
    include "koneksi.php";
    
    $id = $_GET["id"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $komentar = $_POST["komentar"];
        $sqlu = "UPDATE komentar SET komentar='$komentar', updated_at = NOW() WHERE id='$id'";
    
        if (mysqli_query($koneksi, $sqlu)) {
            echo "<div class='alert alert-success''>Anda Berhasil mengedit komentar <a href='index.php'>Kembali ke menu utama </a> </div> ";
        } else {
            header("location: index.php");
        }
    }

    session_start();
    if (!isset($_SESSION['uname'])) {
        header("location: index.php");
        }

    $sql = "SELECT * FROM komentar WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>

    <a href="index.php">KEMBALI</a>
    <div class="container mt-5">

        <form method="POST" action="kom_update.php?id=<?php echo $id; ?>">
            <h2>FORMULIR PENDAFTARAN</h2>
            <div class="form-group">

            <h5>
            <?php

            if (isset($_SESSION['uname'])) {
                echo "Anda Berkomentar sebagai " . $_SESSION['uname'] ." !";
            } 

            if ($row['nama'] == "Anonim") {
                $_SESSION['alert'] = 'Komentar Anonim tidak bisa diedit'; 
                header("location: error.php");
            } 

            // else {
            //     echo "Terjadi kesalahan: " . mysqli_error($koneksi);
            // }
            ?>

            </h5>

            </div>
            <div class="form-group">
                <label for="komentar">Tinggalkan Komentar:</label>
                <textarea class="form-control" name="komentar" rows="6"><?php echo $row['komentar']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-secondary" name="var5">Clear</button>
        </form>
    </div>
    </body>
</html>

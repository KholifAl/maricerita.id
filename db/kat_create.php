
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
    //process
    include "koneksi.php";

    // membuat ya tidak siswa

    // Memeriksa apakah formulir telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $kata = $_POST["kata"];
        $errors = array();

        if (empty($kata)) {
            array_push($errors,"Semua data harus terisi");
        }
        if (count($errors)>0) {
            foreach ($errors as $errors) {
                // echo "<div class='alert alert-success'>Hahayukkk</div> ";
                echo "<div class='alert alert-danger'>$errors</div>";
            }}
        else {

            // require_once $koneksi;
            $sql = "INSERT INTO kata (kata, created_at) VALUES ('$kata', NOW())";
            if (mysqli_query($koneksi, $sql)) {
                echo "Data telah disimpan. <a href='index.php'>Lihat Data</a>";
            } else {
                echo "Terjadi kesalahan: " . mysqli_error($koneksi);
            }
        }
    }
    ?>


    <div class="container mt-5">

        <form method="POST" action="kat_create.php">
            <h2>1 Kata untuk hari ini</h2>
            <div class="form-group">
            <h5>

            </h5></div>
            
            <div class="form-group">
                <label for="kata">Berikan 1 Quotes singkat untuk hari ini:</label>
                <textarea class="form-control" name="kata" maxlength="20"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="var4">Send</button>
            <button type="reset" class="btn btn-secondary" name="var5">Clear</button>
        </form>
    </div>
    </body>
</html>
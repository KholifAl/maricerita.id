<?php
    session_start();
    //process
    include "koneksi.php";

    // membuat ya tidak siswa

    // Memeriksa apakah formulir telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $kata = $_POST["kata"];
        $errors = array();
        
        if (isset($_SESSION['loguname'])) {
            $nama = $_SESSION['loguname'];
        } else {
            $nama = "Anonim";
        }

        if (empty($kata)) {
            array_push($errors,"Semua data harus terisi");
        }
        if (count($errors)>0) {
            foreach ($errors as $errors) {
                // echo "<div class='alert alert-success'>Hahayukkk</div> ";
                // echo "<div class='alert alert-danger'>$errors</div>";
                echo "<script>alert('$errors');</script>";
                header('Location: ../db/');
                
            }}
            else {

            // require_once $koneksi;
            $sql = "INSERT INTO kata (nama, kata, created_at) VALUES ('$nama', '$kata', NOW())";
            if (mysqli_query($koneksi, $sql)) {
                header('Location: ../db/');
            } else {
                echo "Terjadi kesalahan: " . mysqli_error($koneksi);
            }
        }
    }
    ?>
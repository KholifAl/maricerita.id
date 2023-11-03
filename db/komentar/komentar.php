<?php

include "../koneksi.php";
session_start();
$message = '';
// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['alias'])) {
        
        $nama = $_SESSION['loguname'];
        $komentar = $_POST["komen"];
        $anon = "Anonim";

        if ($_POST['alias'] === "anonim") {
            $sql = "INSERT INTO komentar (nama, komentar, created_at, updated_at) VALUES ('$anon', '$komentar', NOW(), NOW())";
        }

        else {
            $sql = "INSERT INTO komentar (nama, komentar, created_at, updated_at) VALUES ('$nama', '$komentar', NOW(), NOW())";
        };

        if (mysqli_query($koneksi, $sql)) {
            unset($_SESSION['komentar']);
            header('Location: kom-berh.php');
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
    
        // if (empty($komentar)) {
        //     header("Location:index.php");
        // }
    
        // else {
        //     $sql = "INSERT INTO komentar (nama, komentar, created_at, updated_at) VALUES ('$nama', '$komentar', NOW(), NOW())";
        //     if (mysqli_query($koneksi, $sql)) {
        //         echo "Data telah disimpan. <a href='index.php'>Lihat Data</a>";
        //     } else {
        //         echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        //     }}

    }
        else {
            echo "Data Tidak Benar";
        }           

}
    
   
else {
    echo "Form Belum di Submit";
}


?>
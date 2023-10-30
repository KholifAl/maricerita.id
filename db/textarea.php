<?php

include "koneksi.php";
session_start();
$message = '';
// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['uname'])) {

        $nama = $_SESSION['uname'];
        $komentar = $_POST["komentar"];
    
        if (empty($komentar)) {
            header("Location:index.php");
        }
    
        else {
            $sql = "INSERT INTO komentar (nama, komentar, created_at, updated_at) VALUES ('$nama', '$komentar', NOW(), NOW())";
            if (mysqli_query($koneksi, $sql)) {
                echo "Data telah disimpan. <a href='index.php'>Lihat Data</a>";
            } else {
                echo   "Terjadi kesalahan: " . mysqli_error($koneksi);
            }}
        }}
    
        
    else {
        header("location: kat_create.php");
    }


?>
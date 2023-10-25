<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "maricerita"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>



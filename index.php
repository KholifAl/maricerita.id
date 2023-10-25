<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    
     
<?php
    unset($_SESSION['alert']);
    session_start();

    if (isset($_SESSION['uname'])) {
    echo "Selamat Datang " . $_SESSION['uname'] ." !";
    } else {
    echo "Anda Belum Login";
    }
    ?>

    <div class="container mt-5">
        
    <h2>A Word For Today</h2>
        <a href='kat_create.php'>Buat Kata hari ini</a><br>
        <a href='kom_create.php'>Buat Komentar</a><br>
        <a href='login.php'>Login yuk</a><br>
        <a href='logout.php' >Logout Akun</a>
        <?php
        // Membuka koneksi ke database
        include "koneksi.php";
        
        //KATA SECTION
        echo " <br><br><h2> --- 1 KATA HARI INI --- </h2>";
        $kat_sql = "SELECT * FROM kata ORDER BY created_at DESC";
        $kat_result = mysqli_query($koneksi, $kat_sql);

        if (mysqli_num_rows($kat_result) > 0) { 
            while ($kat = mysqli_fetch_assoc($kat_result)) { ?>
                <div class='cek'>
                <h3> Quotes <?php echo $kat["id"] ?> : <?php echo $kat["kata"] ?> </h3>
                
                </div><hr>
            <?php
             }
        } else {
            echo "<h3>Belum ada yang memberikan Quotes Hari ini.</h3> <br>";
        }

        // KOMENTAR SECTION
        echo " <br><h2> --- KOMENTAR ---</h2>";
        $kom_sql = "SELECT * FROM komentar ORDER BY created_at DESC";
        $result = mysqli_query($koneksi, $kom_sql);

        if (mysqli_num_rows($result) > 0) { 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class='cek'>
                <h3> Nama : <?php echo $row["nama"] ?> </h3>
                <h3> Komentar : <?php echo $row["komentar"] ?> </h3>
                
                <div class=actions> 
                    <a href='kom_update.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='kom_delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </div>
                </div><hr>
            <?php
             }
        } else {
            echo "<h3>Tidak ada Komentar yang tersimpan.<h3> <br>";
        }
        // Menutup koneksi
        mysqli_close($koneksi);
        ?>

    </div>
</body>
</html>    
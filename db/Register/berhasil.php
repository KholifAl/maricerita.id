<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles4.css">
    <title>Buat Cerita</title>
</head>
<body>
    
<?php
session_start();
$regname = $_SESSION['loguname'];
?>

<div class='signup-container'>
  <div class='right-container'>
    <header>
      <h1>Halo <?php echo $regname?></h1>
      <h2 class="t" >Selamat datang di Srawung</h2>
      <br>
      
    </header>

    <div class="conbtn">
        <a id="back" href="../index.php" id='back'>Kembali ke Halaman Utama</a>
    </div>

      
  </div>
</div>


</body>
</html>

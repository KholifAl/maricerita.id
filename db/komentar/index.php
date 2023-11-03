<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Buat Cerita</title>
</head>
<body>
    
<?php
session_start();
$komentar = $_SESSION['komentar'];
$nama = $_SESSION['loguname'];
unset($_SESSION['komentar']);
?>

<div class='signup-container'>
  <div class='left-container'>
    <h1>
      Srawung
    </h1>
    <h4>
      Mulai Ceritamu!
    </h4>
    <div class='puppy'>
      <!-- <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'> -->
    </div>
  </div>
  <div class='right-container'>
    <header>
      <h1>Halo <?php echo $nama ?> ! </h1>
      <h2 class="t" >Silahkan Tuliskan Ceritamu! </h2>
      <br>

    <form action="komentar.php" method="post">
    <div class='col-area'>
          <textarea class='custom-area' name="komen" placeholder="Mulai Kisahmu.." type='text'><?php echo $komentar ?></textarea>
    </div>
    <div class='set'>
        <div class='pets-gender'>
          <div class='radio-container'>
                <input class="q" checked='' id='=female' name='alias' type='radio' value='nama'>
            <label class="q" for='=female'><?php echo $nama ?></label>
                <input class="w" id='=male' name='alias' type='radio' value='anonim'>
            <label class="w" for='=male'>Anonim</label>
          </div>
        </div>

      </div>
      
    </header>
    <footer>
      <div class='set'>
        <div>
          <a class="btna" href="../" >Kembali</a></div>
        <!-- <button type="button" href="../index.php" id='back'>Kembali</button> -->
        <button type="submit" id='next'>Kirim</button>
      </div>
    </footer>
    </form>
      
  </div>
</div>

<?php
  unset($_SESSION['komentar']); ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Buat Cerita</title>
</head>
<body>
    
<?php
session_start();

$name = $_SESSION['name'];
// Check if the form on this page has been submitted
?>

<div class='signup-container'>
  <div class='right-container'>
    <header>

      <h1>Halo <?php echo $name ?> , Silahkan Upload Foto Profil</h1>
      <!-- <h2 class="t" >Silahkan Tuliskan Ceritamu! </h2> -->
      <!-- <br> -->
      <div id="image" class="insert">
        <img id="preview-image" src="" />
      </div>
      <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
      <?php endif ?>
        <form action="upfun.php" method="post" enctype="multipart/form-data">

        <!-- <input type="file" name="my_image"> -->

        <input type="file" id="file-upload" name="my_image" style="display: none;" >

        <div id="label" class="custom-file-upload">
          <!-- <button onclick="document.getElementById('file-upload').click()">Pilih Foto</button> -->
          <label for="file-upload" >Pilih Foto</label>
      </div>

                      
        <div class="conbtn">
          <button id='back'>Kembali</button>
          <button id='next' type="submit" name="submit" value="Upload"></button>
        </div>          
        </form>
    </header>
    <footer>        
        
    </footer>
      
    <script>
      const fileUpload = document.querySelector('#file-upload');

      fileUpload.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file.type !== 'image/jpeg' && file.type !== 'image/png' && file.type !== 'image/jpg') {
        alert('Please select a JPG/JPEG or PNG image.');
        return;

      }else {
        var image = document.getElementById('image');
        image.classList.toggle('active');
        var label = document.getElementById('label');
        label.classList.toggle('active');
        var next = document.getElementById('next');
        next.classList.toggle('active');
      }

  // Upload the file
    });

    const previewImage = document.querySelector('#preview-image');

    fileUpload.addEventListener('change', (event) => {
      const file = event.target.files[0];

      const reader = new FileReader();
      reader.onload = () => {
        previewImage.src = reader.result;

      };


      reader.readAsDataURL(file);
    });

// function toggle(){
//   var blur = document.getElementById('blur');
//   blur.classList.toggle('active');
//   var popup = document.getElementById('popup');
//   popup.classList.toggle('active');
// }
    </script>
  </div>
</div>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>
<body>

    <?php 
    session_start();
    if (isset($_SESSION['alert'])) {
    $error_msg = $_SESSION['alert'];
} ?>

<h2><a href="index.php">KEMBALI</a><br> ERROR : <?php echo $error_msg ?> </h2>

<?php 

?>

</body>
</html>
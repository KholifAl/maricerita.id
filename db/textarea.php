

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $_SESSION['komentar'] = $_POST['komentar'];
      // Redirect to the second page
      header('Location: komentar/');
      exit;
  }
  ?>
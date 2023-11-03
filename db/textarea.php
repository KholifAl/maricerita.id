

<?php
// session_start();

    if (!isset($_SESSION["loguname"])) {
    header("location: login/");
    }

    else {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['komentar'] = $_POST['komentar'];
            // Redirect to the second page
            header('Location: komentar/');
            exit;
        }

    }
    ?>

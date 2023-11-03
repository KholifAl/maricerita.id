<?php
        include "../koneksi.php";
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
                require_once "../koneksi.php";
                $sql = "SELECT * FROM user WHERE email = '$email'";
                $log_result = mysqli_query($koneksi, $sql);
                $user = mysqli_fetch_array($log_result, MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($pass, $user["password"])) {
                        echo "Logged In!";
                        session_start();           
                        // // $_SESSION['email'] = $row['email'];
                        $_SESSION['loguname'] = $user['user_name'];
                        // $_SESSION['id'] = $row['id'];
                        // $_SESSION['name'] = "yes";   
                        header("Location: ../index.php");
                        exit(); }
                    else {
                        echo "<div class='alert alert-danger'>Password salah</div>";
                    }}
                else {
                    echo "<div class='alert alert-danger'>Email tidak ditemukan</div>";
                }
        } 
    ?>
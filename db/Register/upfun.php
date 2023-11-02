<?php 

session_start();



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
	$passhash = password_hash($pass, PASSWORD_DEFAULT);


if (isset($_POST['submit'])) {
	include "../koneksi.php";

	if (isset($_FILES['my_image']) && $_FILES['my_image']['error'] == UPLOAD_ERR_OK) {
		
		echo "<pre>";
		print_r($_FILES['my_image']);
		echo "</pre>";

		$img_name = $_FILES['my_image']['name'];
		$img_size = $_FILES['my_image']['size'];
		$tmp_name = $_FILES['my_image']['tmp_name'];
		$error = $_FILES['my_image']['error'];

		if ($error === 0) {
			if ($img_size > 125000) {
				$em = "Sorry, your file is too large.";
				header("Location: index-img.php?error=$em");
			}else {
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);

				$allowed_exs = array("jpg", "jpeg", "png"); 

				if (in_array($img_ex_lc, $allowed_exs)) {
					$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
					$img_upload_path = 'uploads/'.$new_img_name;
					move_uploaded_file($tmp_name, $img_upload_path);

					// Insert into Database
					$sql = "INSERT INTO user(email, user_name, password, profile) VALUES('$email', '$name', '$passhash', '$new_img_name')";
					mysqli_query($koneksi, $sql);
					$_SESSION['loguname'] = $_SESSION['name'];
					unset($_SESSION['email']);
					unset($_SESSION['pass']);
					header("Location: berhasil.php");
				}else {
					$em = "You can't upload files of this type";
					header("Location: index-img.php?error=$em");
				}
			}
		}else {
			$em = "Gagal Bro";
			header("Location: index-img.php?error=$em");
		}

			}
	else {

		$sql = "INSERT INTO user (email, user_name, password, profile) VALUES( '$email', '$name', '$passhash', 'base.png')";
		mysqli_query($koneksi, $sql);


		$_SESSION['loguname'] = $_SESSION['name'];
		unset($_SESSION['email']);
		unset($_SESSION['pass']);
		header("Location: berhasil.php");
	}

}else {
	header("Location: index-img.php");
}


?>

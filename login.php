<?php 
session_start();
include 'koneksi.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($koneksi, "SELECT username FROM admin WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}
	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<!-- Tambahkan link CSS untuk Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- Tambahkan script untuk jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Tambahkan script untuk JavaScript Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center">Halaman Login</h1>
			<?php if( isset($error) ) : ?>
				<div class="alert alert-danger">
					Username atau Password salah!
				</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username :</label>
					<input type="text" class="form-control" name="username" id="username" required>
				</div>
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="password" class="form-control" name="password" id="password" required>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember" id="remember"> Remember me
					</label>
				</div>
				<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
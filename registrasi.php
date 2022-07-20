<?php 
require 'functions.php';

if ( isset($_POST["register"]) ) {

	if(registrasi($_POST) > 0 ){
		echo "<script>
				alert('user baru berhasil di tambahkan!');
				</script>";
	}
	else{
		echo mysqli_error($conn);
	}
 } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>
	<style>
		label{
			display: block;
		}
		input {
			margin-left: 30px;
		}
		.pass2 {
			margin-left: -80px;
		}
		button {
			margin-left: 5px;
		}
	</style>
</head>
<body background="swirl_pattern.webp" align="center">
<h1>Form Registrasi</h1>
<br>

<form action="" method="post">

	<ul>
		
			<div>
				<label for="username">Username :<input type="text" name="username" id="username" required=""></label>
			</div>
			<br>

			<div>
				<label for="password">Password :<input type="password" name="password" id="password" required=""></label>
			</div>
			<br>
		
			<div>
				<label class="pass2" for="password2">Konfirmasi Password :<input type="password" name="password2" id="password2" required=""><br></label>
			</div>
			<br>
		
			<button type="submit" name="register">Register</button>
		
	</ul>

</form>
</body>
</html>
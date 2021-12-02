<?php

include '../config/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/body_background.css">
	<link rel="stylesheet" type="text/css" href="css/content-wrapper.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">

	<title>Login Form - Pure Coding</title>
</head>
<style>
	.header-wrapper {
		display: flex;
		background-color: #082E72;
		padding-top: 35px;
		padding-bottom: 35px;
		padding-left: 15px;
		padding-right: 15px;
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		border-radius: 0px 0px 5px 5px;
		overflow: hidden;
		align-items: center;
		justify-content: space-between;
	}

	.nav-bar {
		display: flex;
	}

	.logo-title {
		font-family: CocoSharp_ExtraBold;
		font-size: 30px;
		color: white;
		padding-left: 10px;
		padding-right: 20px;
		float: left;
	}

	.userlogin-wrapper {
		display: inherit;
		flex-wrap: wrap;
		justify-content: space-between;


	}

	.nav-link {
		font-family: CocoSharp_Light, sans-serif;
		font-weight: bold;
		color: white;
		padding-left: 10px;
		padding-right: 10px;
		text-decoration: none;

	}
</style>

<body>
	<div class="header-wrapper">
		<a href="index.php"> <span class="logo-title">MOTOWORLD</span></a>
	</div>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="user_register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>
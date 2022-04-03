<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: insertcompany.php");
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
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
	<div class="login-box">
		<h2>Login</h2>
		<form action="" method="POST">
			<div class="user-box">
				<input type="email" name="email" value="<?php echo $email; ?>" required>
				<label>Email</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
				<label>Password</label>
			</div>
			<div class="user-box">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register</a></p>
		</form>
	</div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>

	<title>Admin LogIn</title>
	<?php include('../all.php');
	include('../validation.php');
	?>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<style>
		body {
			overflow: hidden;
		}
	</style>
</head>

<body>
	<div class="bg"> </div>

	<div class='heading'>University Campus Placement System </div><br /> <br />
	<h1 style="position: absolute;top: 25%; left: 50%; font-family: 'Lobster', cursive;
    color: #fff;">Admin Login</h1>

	< <div class="header">

		</div><br>
		<form class="login" method='post' style="background-color: #323232; padding: 50px;padding-bottom: 200px;">
			<input type="email" placeholder="Email" name="email" required><br><br />
			<input type="password" placeholder="password" name="password" required><br><br />
			<input type="submit" value="Login" name='btn' style="background-color: #007bff;color: #fff; width: 150px;margin-left: 50px;">
		</form>

</body>

</html>

<?php

include('../db.php');
if (isset($_POST['btn'])) {
	$result = mysqli_query($con, "select * from admin_login");

	while ($r = mysqli_fetch_assoc($result)) {
		if ($r['email'] == $_POST['email'] && $r['password'] == $_POST['password']) {

			session_start();
			$_SESSION['admin'] = $r['email'];
			$_SESSION['admin_name'] = $r['name'];
			header('location:dashboard.php');
		}
	}

	echo "<script>" . "alert('Email/Password seems wrong')" . "</script>";
}
?>
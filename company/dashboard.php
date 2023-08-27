<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<style>
		body {
			background-color: whitesmoke;
			overflow: hidden;
		}
	</style>
</head>

<body>
	<?php
	include 'menu.php';
	include 'header.php';
	?>
	<div style="background-color: whitesmoke; width:1200px;height: 1200px; margin-left: 230px">
		<div style="padding: 70px;">
			<h1 style="text-align: center;font-family: 'Lobster', cursive; color:#333; margin-top: 80px;">Welcome <?php echo $_SESSION['company_name']; ?></h1>
			<h4 style="text-align: center; margin-top: 30px;">Post the jobs and Get The best workforce </h4>
		</div>


		<div style="margin-left: 50px;">
			<?php
			include('../db.php');
			$res = mysqli_query($con, "select * from jobs where company_id ='" . $_SESSION['company'] . "'");
			$data = mysqli_fetch_assoc($res);
			?>
			<div class="card" style="width: 25rem;">
				<div class="card-body">
					<h5 class="card-title">Total Number Of Job Applications</h5>
					<p class="card-text"><?php echo mysqli_num_rows($res); ?></p>
					<a href="my-jobs.php" class="btn btn-primary">View</a>
				</div>
			</div>
		</div>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
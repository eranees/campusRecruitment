

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My details</title>
  <meta charset="utf-8">	
</head>
<body>
<div class='container-fluid'>
 <?php  require_once('header.php') ?>
	<div class='row' style='margin-top: 70px;'>
		<div  style='float: left'>
			<?php require_once('menu.php') ?>
		 </div>
		<div  style='width:80%;height: auto; float: right; '>
				  <div id="main_div" >
				  	     <?php  
				  	      require_once('../db.php');
                           $res=mysqli_query($con, "select * from company_login where id='".$_SESSION['company']."'");
                           $r=mysqli_fetch_assoc($res);
				  	      ?>

							<form class="" method="POST">
		                      <div>  <h1 style=' color: black;text-align: center;'> My Details  </h1></div>  

									<div class="form-group">
										<label> Name</label>
										<input type="text" name="name" class="form-control "  value="<?php echo $r['name']; ?>" placeholder="Name">			
									</div>
							      <div class="form-group">
										<label>Email</label>
										<input type="text" name="email" class="form-control " value="<?php echo $r['email']; ?>" placeholder="Email">			
									</div>

									<div class="form-group">
										<label>Phone</label>
										<input type="text" name="phone" class="form-control " value="<?php echo $r['phone']; ?>" placeholder="Email">			
									</div>

									
							 	 <div class="form-group">
										<label>About</label>
										<textarea class="form-control" rows="6"  name="about"><?php echo $r['about']; ?> </textarea>			
								</div>
								 <div class="form-group">
										<label>Password</label>
										<input type="text" name="password" class="form-control " value="<?php echo $r['password']; ?>">			
									</div>

									<input type="submit" name="btn" value=" Update" class="btn btn-info form-control btn-block">	
							</form>
						<?php
							if(isset($_POST["btn"]))
							{
							    require_once "../db.php";
							   
							        mysqli_query($con,"update company_login set name='".$_POST['name']."', email='".$_POST['email']."',phone='".$_POST['phone']."',about='".$_POST['about']."',password='".$_POST['password']."' where id='".$_SESSION['company']."'");
							            echo "<div class='alert alert-success'>Updated </div>";
							             

							}
						?>
				
				</div>
		   </div>
	   </div>
    </div>
</body>
</html>




<style>
#main_div
{
height: auto;
width: 80%;
border-radius: 0px 10px ;
background-color: #fff;
color: #777;
margin-top: 75px;
padding: 20px;
margin: 10px auto;
opacity: .9;
}
</style>



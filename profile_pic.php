<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  require_once('header.php');
		if(!isset($_SESSION['userLogin']))
		{
		  header('location:index.php');
		} 
	   require_once('db.php');
      $res=mysqli_query($con, "select profile from users where id = '".$_SESSION['userLogin']."'");
      $r=mysqli_fetch_assoc($res);

      echo "<div class='container' style='padding-top:70px; min-height:400px; '>";
       echo "<form method='post' enctype='multipart/form-data'>";
                echo "<div class='form-group'>";
	         	    echo "<input type='file' required class='form-control' name='file'>";
	         	echo "</div>";
	            
	            echo "<div class='form-group'>";
	              echo "<input type='submit' class='btn btn-success' value='Upload Profile pic' name='btn'>";
	            echo "</div>";
	        echo "</form>";   
	      if(empty($r['profile']))
	      {
	      	 echo "<label class='alert alert-warning'> You have Not uploaded the Profile pic yet! </label>";
	      	 echo "<br>";
	      	    	    
	      }
	       else {
	       	echo "<label class='alert alert-success'> You have already uploaded the Profile pic! </label>";
	      	 echo "<br>";
	       	echo "<img src='$r[profile]' class='img img-rounded' width='300px'>";

	       }
	       if(isset($_POST['btn']))
	       {
	       	$res1=mysqli_query($con, "SELECT profile FROM users where id = '".$_SESSION['userLogin']."' ");
		       $r1=mysqli_fetch_assoc($res1);
		        $name=$r1['profile'];
			     unlink( $name);
	       	   	    $n=$_FILES['file']['name'];
	       	   	    $destination='img/'. rand(). time().$n;
	       	   	    $source= $_FILES['file']['tmp_name'];
                    move_uploaded_file($source, $destination);
                    mysqli_query($con, "update users set profile='$destination' where id = '".$_SESSION['userLogin']."' ");
	       	     	echo "<div class='alert alert-success'>"."Profile Pic Uploaded Sucessfully"."</div>";
	       	     	header("refresh:0");

	       	  
	       }
	echo "</div>";       
       
    ?>  

	<?php  require_once('footer.php')?>

</body>
</html>


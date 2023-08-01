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
      $res=mysqli_query($con, "select resume from users where id = '".$_SESSION['userLogin']."'");
      $r=mysqli_fetch_assoc($res);

      echo "<div class='container' style='padding-top:70px; min-height:400px; '>";
	      if(empty($r['resume']))
	      {
	      	 echo "<label class='alert alert-warning'> You have Not uploaded the resume yet! </label>";
	      	 echo "<br>";
	      	 echo "<form method='post' enctype='multipart/form-data'>";
                echo "<div class='form-group'>";
	         	    echo "<input type='file' required class='form-control' name='file'>";
	         	echo "</div>";
	            
	            echo "<div class='form-group'>";
	              echo "<input type='submit' class='btn btn-success' value='Upload resume' name='btn'>";
	            echo "</div>";
	        echo "</form>";       	    
	      }
	       else {
	       	echo "<label class='alert alert-success'> You have already uploaded the resume! </label>";
	      	 echo "<br>";
	       	echo "<a href='$r[resume]' class='btn btn-primary'> Download Resume </a>";

	       }
	       if(isset($_POST['btn']))
	       {
	       	   $ext=pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	       	   if($ext=='pdf' || $ext=='docx')
	       	   {
	       	   	    $n=$_FILES['file']['name'];
	       	   	    $destination='resumes/'. rand(). time().$n;
	       	   	    $source= $_FILES['file']['tmp_name'];
                    move_uploaded_file($source, $destination);
                    mysqli_query($con, "update users set resume='$destination' where id = '".$_SESSION['userLogin']."' ");
	       	     	echo "<div class='alert alert-success'>"."Resume Uploaded Sucessfully"."</div>";

	       	   }
	       	     else {
	       	     	echo "<div class='alert alert-danger'>"."Please upload Pdf or doc files only"."</div>";
	       	     }
	       }
	echo "</div>";       
       
    ?>  

	<?php  require_once('footer.php')?>

</body>
</html>


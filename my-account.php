<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  include('header.php');


if(!isset($_SESSION['userLogin']))
{
header('location:index.php');
} 
	include('db.php');
     $res=mysqli_query($con, "select * from applications where user_id = '".$_SESSION['userLogin']."'");



?>   <div style="margin-left: 50%; margin-top: 50px;font-size: 22px;color:#ff0000">
	      <a  class="btn btn-danger" href="my-details.php"> My details</a>   
	      <a href="upload.php" class="btn btn-info">Upload Resume</a>
	       <a href="profile_pic.php" class="btn btn-warning">Upload Profile Pic</a>
	       <a href="write_review.php" class="btn btn-primary">Write Review</a>
	  </div>
     <div class='container-fluid' style="margin-top: 30px; margin-bottom: 80px; min-height: 300px">
     <?php  
      
       echo "<div style='text-align:center; font-size:29px;color:#09c'>"."Welcome " .$_SESSION['userName']. "</div>";
       echo "<div style='text-align:center; font-size:20px;'>"." You applied for these jobs "."</div>";
     while($r=mysqli_fetch_assoc($res))
     {
     	   echo "<br/>";
      $res2=mysqli_query($con, "select * from jobs where id = '".$r['job_id']."'");

        echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
				    echo "<tr class='info'>";
				    echo "<td> Job Title</td>";
				    echo "<td> Job Location </td>";
				    echo "<td> Job Type </td>";
				     echo "<td>  Skills Required</td>";
				     echo "<td>  Salaray </td>";
				     echo "<td>  Job Description</td>";
				     echo "<td>  Applied on </td>";
				     echo "<td> Company Name </td>";
				     echo "<td> Job details </td>";
				   echo "<td> Company Details </td>";
				    echo "</tr>";

				    while($record=mysqli_fetch_assoc($res2))
				    {
				    	 $res3=mysqli_query($con, "select * from company_login where id = '".$record['company_id']."'");
				    	 $record2=mysqli_fetch_assoc($res3);
				                echo "<tr>";
				               
				                echo "<td> ".  $record["title"] ."</td>";
				                echo "<td>" .$record['location']."</td>";
				                echo "<td>" .$record["job_type"]."</td>";
				                echo "<td>" .$record["skills"]."</td>";
				                 echo "<td>" .$record["salary"]."</td>";
				                echo "<td>" .$record["description"]."</td>";
				                echo "<td>" .$r["applied_on"]."</td>";
				                  echo "<td>" .$record2["name"]."</td>";
				                  
				                  echo "<td>"."<a href='job-details.php?id=".$record['id']."'>  Details</a>"."</td>";
				                   echo "<td>"."<a href='company-details1.php?id=".$record2['id']."'>  Details</a>"."</td>";
				                echo "</tr>";
				              }
				    echo "</table>";

}
      ?>
</div>
	<?php  include('footer.php')?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  include('header.php');
	include('db.php');

 echo "<div style='text-align:center; font-size:29px;color:#09c; margin-top:50px;'>"." ALL REGISTERD COMPANIES "."</div>";


?>
     <div class='container' style="padding: 50px; background-color: white">
     <?php  

      $res=mysqli_query($con, "select * from company_login where status ='Confirm'");



        echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
				    echo "<tr class='info'>";
				    echo "<td> Company Name</td>";
				   
				   echo "<td> Company Details </td>";
				    echo "</tr>";

				  while($record=mysqli_fetch_assoc($res))       
                 {
				  	echo "<tr>";
				       
				                echo "<td> ".  $record["name"] ."</td>";
				               
				                   echo "<td>"."<a href='company-details1.php?id=".$record['id']."'>  Details</a>"."</td>";
				                echo "</tr>";
				   }
				    echo "</table>";


      ?>
</div>
	<?php  include('footer.php')?>

</body>
</html>

<style>
	
	body {
		background-color: whitesmoke;
	}
</style>
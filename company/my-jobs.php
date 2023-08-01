<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	  include 'menu.php';
	  include 'header.php';
	?>
	<div style="background-color: whitesmoke; width:1200px;height: 1200px; margin-left: 230px"> 
		<div style="padding: 70px;">
			<div style="height: 120px;"></div>
			<h1 style="text-align: center; font-family: 'Lobster', cursive; color: #333"> Job Posts</h1><br/>
			<?php 
              include ('../db.php');
              $res=mysqli_query($con,"select * from jobs where company_id ='".$_SESSION['company']."'");


              echo "<table class='table  table-striped table-bordered' '/>";
             
                       echo "<tr class='info'>";
                      echo "<th>"."Job Title"."</th>";
                      echo "<th>"."Location"."</th>";
                      echo "<th>"."job_type"."</th>";
                      echo "<th>"."skills"."</th>";
                      echo "<th>"."qualification"."</th>";
                      echo "<th>"."experience"."</th>";
                      echo "<th>"."description"."</th>";
                      echo "<th>"."Date Of Post"."</th>";
                      echo "<th>"."Approved By Admin"."</th>";
                       echo "<th>"."Applications Submitted"."</th>";
                      

                      echo "</tr>";

                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<tr>";
                        echo "<td>". $row['title']."</td>";
                        echo "<td>". $row['location']."</td>";
                        echo "<td>". $row['job_type']."</td>";
                        echo "<td>". $row['skills']."</td>";
                        echo "<td>". $row['qualification']."</td>";
                        echo "<td>". $row['experience']."</td>";
                        echo "<td>". $row['description']."</td>";
                        echo "<td>". $row['dop']."</td>";
                        echo "<td>". $row['approved']."</td>";
                        
                         echo "<td>". "<a href='applications.php?id=".$row['id']."'> Apllications</a>"."</td>"; 

                        
                    
              	                   
                    
                      echo "</tr>";
                  }
                        
                      

                      echo "</table>";

           ?>
			
			
			
		</div>

	</div>

</body>
</html>
<style >
	body 
	{
		background-color: whitesmoke;
		text-transform: capitalize;
	}
</style>
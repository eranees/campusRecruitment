<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include ('header.php');
     include('db.php');
     

       $res=mysqli_query($con,"select * from company_login where id='".$_GET["id"]."'");
        $r=mysqli_fetch_assoc($res);

 ?>


 <div class="container" style="background-color: white; height: auto; padding: 20px;padding-bottom: 70px;">
  	<br/>
       <h1 style="text-align: center;font-family: 'Lobster', cursive; color:#17a2b8"> Company Details</h1>
           <div style="padding: 60px;">
           	
           	<?php  
                     echo "<span style='color:#296196; font-weight:600;font-size:16px;'>". "Company Name"."</span>". "<br/>";
                     echo "<span class='s_name' style='color:  #cd4237;line-height:35px; font-size:19px;'>" . $r["name"]." </span>"."<br/>";
                      
?>
                     <br/> <br/><span style="color: #333;font-weight: 400;font-size:18px;">Company Profile/ Description</span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['about']; ?></p>

                      


                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Email  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['email'] ?></p>


                     <br/><span style="color: #333;font-weight: 400;font-size:18px;"> Contact </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['phone'] ?></p>
           </div>



     <div class='container' style="padding: 50px; padding-top: 10px; background-color: white">
     	<h2 style="text-align: center;font-family: 'Lobster', cursive; color:#17a2b8"> <?php echo $r["name"]; ?> Jobs</h2>
     <?php  
 
      $res=mysqli_query($con, "select * from jobs where company_id = '".$_GET['id']."' and approved ='Posted'");



        echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
				    echo "<tr class='info'>";
				    echo "<td> Job title</td>";
				   
				   echo "<td> Details Details </td>";
				    echo "</tr>";

				  while($record=mysqli_fetch_assoc($res))       
                 {
				  	echo "<tr>";
				       
				                echo "<td> ".  $record["title"] ."</td>";
				               
				                   echo "<td>"."<a href='job-details.php?id=".$record['id']."'>  Details</a>"."</td>";
				                echo "</tr>";
				   }
				    echo "</table>";


      ?>
</div>

<br/>
<br/>
           
  </div>

  <?php include ('footer.php');
 ?>

 <style type="text/css">
 	body {
 		 background-image: url(img/2.jpg);
background-size: 100%;
background-repeat: no-repeat;
background-attachment: fixed;;
 	}
 </style>
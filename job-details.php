<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include ('header.php');
     include('db.php');
      $res=mysqli_query($con,"select * from jobs where id='".$_GET['id']."'");
      $r=mysqli_fetch_assoc($res);

       $res2=mysqli_query($con,"select * from company_login where id='".$r["company_id"]."'");
        $r2=mysqli_fetch_assoc($res2);

 ?>

  <div class="container" style="background-color: white; height: auto; padding: 20px;padding-bottom: 70px;">
  	<br/>
       <h1 style="text-align: center;font-family: 'Lobster', cursive; color:#17a2b8"> Job Details</h1>
           <div style="padding: 60px;">
           	
           	<?php  
                     echo "<span style='color:#296196; font-weight:600;font-size:16px;'>". "Job"."</span>". "<br/>";
                     echo "<span class='s_name' style='color:  #cd4237;line-height:35px; font-size:19px;'>" . $r["title"]." </span>"."<br/>";
                      echo "<span class='s_name' style='color:  #666666; '>"."Location: &nbsp;" . $r["location"]." </span>";?>

                     <br/> <br/><span style="color: #333;font-weight: 400;font-size:18px;">Job Description</span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['description'] ?></p>


                   <br/><span style="color: #333;font-weight: 400;font-size:18px;">Name</span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r2['name'] ?></p>
                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">About Company</span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r2['about'] ?></p>

                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Skills </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['skills'] ?></p>


                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Job Type </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['job_type'] ?></p>


                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Industry  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['industry'] ?></p>


                     <br/><span style="color: #333;font-weight: 400;font-size:18px;"> Role </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['role'] ?></p>

                      
                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Qualification  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['qualification'] ?></p>

                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Experience  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['experience'] ?></p>


                      <br/><br/><span style="color: #333;font-weight: 400;font-size:18px;">Posts  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['posts'] ?></p>
                         

                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Salary </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['salary'] ?></p>

                       <br/><span style="color: #333;font-weight: 400;font-size:18px;">Min. Graduation % </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['grd_marks'] ?></p>


                      <br/><span style="color: #333;font-weight: 400;font-size:18px;">Date  </span><br/>
                      <p style="color: #666666;text-align: justify;"> <?php echo $r['dop'] ?></p>
                             <div style="height: 70px;"></div>


                             <?php 
                             if(isset($_SESSION['userLogin']))
                             {
                                    
                                       $res5=mysqli_query($con,"select * from applications where job_id='".$_GET['id']."' && user_id = '".$_SESSION['userLogin']."'");
                               $j=mysqli_num_rows($res5);

                              if($j==0)
                              {
                                  echo "<a href='apply.php?id=".$_GET['id']."' id='apply'> Apply </a>" ;
                                } else {
                                  echo "<p style='color:red'> You have already applied for this job!</p>";
                                }
                             
                           
                           }
                            else {
                              echo "<p style='color:red'> Please Login/Sign Up to Apply for Latest Jobs!</p>";
                            }
                            
                            ?>
                             

                                                       


           </div>
  </div>

 <?php include ('footer.php');
 ?>

</body>
<style >
	body {
		/*background-color: whitesmoke;*/
     background-image: url(img/3.jpg);
background-size: 100%;


	}
	span {
  line-height: 30px;
  /*font-family: 'Lato', sans-serif;*/
     font-family: Raleway;
}
p {
	font-size: 13px;
	/*font-family: 'Lato', sans-serif;*/
     font-family: Raleway;
}
#apply 
{
	   
	    background-color: #09c;
	    color: #fff;
	    height: 40px;
	    font-size: 17px;
	    font-weight: 500;
	    padding: 10px 40px;
	    text-decoration: none;;
	   
}
#apply:hover
{
	background-color: #08c;
}
</style>
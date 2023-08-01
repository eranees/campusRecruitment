<link rel="stylesheet" type="text/css" href="css/menu.css">

<div id="menu_bar" style="background-image: linear-gradient( to right bottom,  #42275a , #734b6d);"><br /><br />
  <span id="welcome">Welcome</span><br />
  <?php
  session_start();
  if (!isset($_SESSION['admin'])) {
    header('location:login.php');
  }
  include('../db.php');
  $res7 = mysqli_query($con, "select * from company_login where status='Pending'");
  $cr = mysqli_num_rows($res7);
  echo "<span id='span_user_name'>" . $_SESSION["admin_name"] . "</span>";
  ?><br /><br />
  <ul>
    <li> <a href="dashboard.php" class="links"> Dashboard </a> </li><br />
    <li> <a href="companies.php" class="links"> Companies </a> </li><br />
    <li> <a href="jobs.php" class="links"> All Jobs </a> </li><br />


    <li style="padding-bottom: 30px;"> <a href="company-request.php" class="links">
        Company Requests <span class="badge badge-light"> <?php echo               $cr;  ?></span>



      </a>
    </li><br />



    <li> <a href="applicants.php" class="links">Registered Applicants </a> </li><br />
    <li> <a href="job_category.php" class="links"> Job Categories/Industries </a> </li><br />

    <li> <a href="student-block.php" class="links">Block Student </a> </li> <br />
    <li> <a href="blocked.php" class="links">Blocked Student </a> </li> <br />

    <li> <a href="blocked_com.php" class="links">Blocked Companies </a> </li> <br />
  </ul>
</div>
<div id="right_div">

</div>
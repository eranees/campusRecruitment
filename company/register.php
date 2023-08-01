<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Company Login</title>
  <?php 
    require_once('../all.php');
    require_once('../validation.php');
    
  ?>



  
      <link rel="stylesheet" href="css/register.css"> 
</head>

<body  >
<div class="title">
  <h1>Company Registration</h1><span>Get the best workforce  </span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="form"  >
    <h2>Create an account</h2>
    <form method='post' >
      <input type="text" placeholder="Company Name" name='name' required  id='inputTextBox'/>
      <input type="email" placeholder="Email Address" name='email' required/>
      <input type="tel" placeholder="Phone Number" name='phone' id='Number' required minlength="10" maxlength="12" />
      <textarea placeholder="About company" name='about' required></textarea>
      <input type="password" placeholder="Password" name='password' required/>
     
      

      <button type='submit' name='btn'>Register With Us</button>
    </form>
  </div>
  <div class="cta">Do Have a account?<a href="login.php"> Login Now</a></div>
</div>
  

</body>
</html>

<?php
require_once('../db.php');
  if(isset($_POST['btn'])) {

    mysqli_query($con,"insert into company_login (name,email,phone,about,password) values('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['about']."','".$_POST['password']."')");
      echo "<script>". "alert('Thanks for the registration.You will be able to login & post jobs after your account is approved')"."</script>";
  }
?>

<?php
session_start();
ob_start();
if (isset($_SESSION["userLogin"])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <?php
  require_once('all.php');
  require_once('validation.php');
  require_once('captcha.php');
  ?>
  <script type="text/javascript">
    function Cap() {
      Captcha();
      Captcha1();
    }
  </script>

</head>

<body onload="Cap()">
  <div id="login" style="width:50%;margin:0 auto;margin-top:5%;" class=" panel panel-primary">
    <div class="login_txt panel-heading" style="font-weight: 700;font-size: 18px;"> Login </div> <br />

    <div class="mail-text" style="text-transform: capitalize;text-align:center;">Login using email and password.</div>

    <div class='panel-body'>
      <form method="POST" name="login" onsubmit="return ValidCaptcha()">

        <div class="txt_login"> Email . </div>
        <input name="email" required type="email" class="input_all_login form-control" placeholder="Email" /><br />

        <div class="txt_login">Password. </div>
        <input name="password" required type="password" class="input_all_login form-control" placeholder=" Password" />
        <br />
        <div id="wrapper-cap">
          <label id='mainCaptcha'></label>
          <input required type="text" name="" id='txtInput'>
          <button type="button" id="refresh" onclick="Captcha();">
            <i class="fa fa-sync-alt"></i>
          </button>
          <div id="cap" class=""> Invalid capcta</div>
        </div>
        <input type="submit" class=" form-control btn btn-success login-acc" value="Login" name="login_acc" style="    font-size: 15px; background-color:#09c">

      </form>
    </div>
    <div style="text-align: center;font-size: 14px;">Not a memeber as yet? <a href="register.php">Register Now</a>
    </div><br />


  </div>
</body>

</html>
<?php

if (isset($_POST["login_acc"])) {
  require_once 'db.php';
  $res = mysqli_query($con, "select * from users where password='" . $_POST['password'] . "' AND email='" . $_POST['email'] . "'  AND status ='1' ");
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    session_start();
    $_SESSION["exp"] = $row['experience'];
    $_SESSION["userLogin"] = $row['id'];
    $_SESSION['userName'] = $row['name'];
    header('location:index.php');
  } else {
    echo '<script language="javascript">';
    echo 'alert("Email address or Password seems wrong! Please try again.")';
    echo '</script>';
  }
}
?>
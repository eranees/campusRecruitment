<!DOCTYPE html>
<html>

<head>
  <title>Student Registration</title>

 <?php require_once('captcha_addition.php'); 
       require_once('header.php');
       require_once('validation.php');
       require_once('all.php'); ?>
</head>


<script type="text/javascript">
  function Cap() {
    Captcha();
    Captcha1();
  }
</script>

</head>

<body onload="Captcha1()">

  <div class='container' style="background-color: whitesmoke;">

    <h3 class='one'> Student Registration</h3>
    <div class='hr'> </div>
    <h4 style="text-align:center;font-weight: 600; color: #c60; font-size: 18px; margin-left: 30px">Fill Out The Following Details</h4>
    <div class='hr'> </div>
    <form method="post" onsubmit="return ValidCaptcha1()">
      <table cellpadding="5" cellspacing="0">

        <tr>
          <td> <label> Name <span class='must'>* </span></label> </td>
          <td><input type="text" name="name" placeholder="Name" required id='inputTextBox'></td>
        </tr>

        <tr>
          <td> <label>Email <span class='must'>* </span></label> </td>
          <td><input type="email" name="email" placeholder="Email" required></td>
        </tr>




        <tr>
          <td> <label> Mobile Number </span></label> <span class='must'>* </span></td>
          <td><input type="text" name="mobile" placeholder="Mobile Number" required minlength="10" maxlength="12" id='Number'> </td>
        </tr>


        <tr>
          <td> <label>Job industry <span class='must'>* </span></label> </td>
          <td><select name='industry' class='select' required id='in'>
              <?php
              include('../db.php');
              $res = mysqli_query($con, "select * from category");
              echo "<option>---Select---</option>";
              while ($record = mysqli_fetch_assoc($res)) {
                echo "<option value='{$record['id']}'>" . $record["name"] . "</option>";
              }
              ?>
            </select> </td>
        </tr>
        <tr>
          <td> <label>Experience <span class='must'>* </span></label> </td>
          <td><select name='experience' class='select' required id='ex'>
              <option value=''>---Select---</option>
              <option value='1'>Fresher</option>
              <option value='2'>1 yrs</option>
              <option value='3'>2 yrs</option>
              <option value='4'>3 yrs</option>
              <option value='5'>4 yrs</option>
              <option value='6'>4 or above yrs</option>
            </select> </td>
        </tr>




        <tr>
          <td> <label>Current Address <span class='must'>* </span></label> </td>
          <td><textarea name="address" class='ta' placeholder="Your Address" style="height: 100px;" required></textarea> </td>

        </tr>

        <tr>
          <td> <label>About Your Self <span class='must'>* </span></label> </td>
          <td><textarea name="about" class='ta' placeholder="About Your Self " style="height: 160px;" required></textarea> </td>

        <tr>
          <td> <label> Password </span></label> <span class='must'>* </span></td>
          <td><input type="password" name="password" placeholder="Password" required> </td>
        </tr>

        <tr>
          <td><label id='mainCaptcha1'></label> </td>
          <td><input required type="text" name="" id='txtInput1'>
            <button type="button" id="refresh1" onclick="Captcha1();">
              <i class="fa fa-sync-alt"></i>
            </button>
          <td>
        </tr>

        <tr>
          <td> </td>
          <td>
            <div id='cap1' class=""> Invalid capcta</div>
          </td>
        </tr>




      </table>
      <div class='hr'> </div>

      <input type="submit" class='bt_sb' name="btn_sbmt" value="Register  " id='submit_address' onclick="return Validate()">
      <div style="text-align: center;font-size: 14px;">if you are already registred? <a href="login.php">Login now</a>
      </div>
      <div class='hr'> </div>


    </form>


  </div>

  <!-- <?php require_once('footer.php'); ?> -->

</body>

</html>

<script>
  function Validate() {
    var inn = document.getElementById("in");
    if (inn.value == "") {
      //If the "Please Select" option is selected display error.
      alert("Please select industry!");
      return false;
    }
    var ex = document.getElementById("ex");
    if (ex.value == "") {
      //If the "Please Select" option is selected display error.
      alert("Please select an option!");
      return false;
    }
    return true;
  }
</script>

<?php

if (isset($_POST['btn_sbmt'])) {
  include 'db.php';

  $res = mysqli_query($con, "select * from users where mobile='" . $_POST['mobile'] . "' ||  email='" . $_POST['email'] . "'");

  if (mysqli_num_rows($res) <= 0) {

    // $_SESSION['userName'] = $_POST['name'];
    //  $_SESSION['userEmail'] = $_POST['email'];
    //  $_SESSION['userPhone'] = $_POST['mobile'];
    //  $_SESSION['otp'] = $otp;
    mysqli_query($con, "insert into users(name, email, mobile,industry,experience,address,about,password) values ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['industry'] . "','" . $_POST['experience'] . "','" . $_POST['address'] . "','" . $_POST['about'] . "','" . $_POST['password'] . "')");
    header('location:thanku.php');
  } else {

    header('location:already.php');
  }
}


?>




<style>

  body {
    background-color: lightblue;
    font-family: 'Roboto', sans-serif;
  }
   .one {
    text-align: center;
    letter-spacing: 2px;
    font-size: 40px;
    color: #323232;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: bold;
/*    text-transform: capitalize;*/
    line-height: 40px;
    font-family: 'Charmonman', cursive;
  }
  .container{
    width: 70%;

  }


  input[type=text],
  input[type=email],
  .select,
  .ta,
  input[type=password] {
    height: 42px;
    width: 400px;
    padding: 9px;
    text-indent: 12px;
    outline: none;
    font-size: 15px;
    border-radius: 2px;
    border: 1px solid #cecece;
    margin-top: 9px;


  }

  input[type=text]:hover {

    border: 1px #eb641b solid;

  }

  label {
    margin-left: 200px;
    margin-top: 9px;
    font-size: 15px;

  }



  #submit_address {
    height: 45px;
    padding: 3px;
    width: 230px;
    padding-right: 12px;
    background: #27A7D4;
    color: #fff;
    font-size: 15px;
    border-radius: 2px;
    border: none;
    outline: none;
    cursor: pointer;

    margin: 20px;
    margin-left: 40%;

    text-transform: uppercase;

  }

  #submit_address:hover {
    box-shadow: 0 1px 2px 0 rgba(2, 1, 1, 2);

  }

  .hr {

    margin-bottom: 15px;
    margin-top: 15px;
    border-top: 1px #cecece solid;
  }

  .must {
    color: red;
    font-size: 16px;
  }
</style>
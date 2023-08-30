<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Send Mail</title>
  <?php
  require_once('../all.php');
  require_once('../validation.php');

  ?>
  <link rel="stylesheet" href="css/register.css">
</head>

<body>
  <div class="title">
    <h1>Send Mail</h1>
  </div>
  <!-- Form Module-->
  <div class="module form-module">
    <div class="form">
      <h2>Send Mail To</h2>
      <form method='post'>
        <input readonly type="text" value="<?php echo $_GET['email'] ?>" name='name' required id='to' />
        <input type="text" placeholder="Subject" name="subject">
        <textarea placeholder="Write Message" name='body' required></textarea>
        <input type='submit' name='sendmail' value="Send">
      </form>
    </div>
  </div>
</body>

</html>

<?php
require_once('../db.php');
if (isset($_POST['sendmail'])) {
  $to = $_GET["email"];
  $subject = $_POST["subject"];
  $message = $_POST["body"];
  // $headers = "From: placementofficer332@gmail.com";
  $headers = "From: sender\'s email";
  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "
    <script>
      alert('Email Sent Successfully');
      window.location.href = 'my-jobs.php';
    </script>
  ";
  } else {
    echo
    "
      <script>
        alert('Error! While Sending The Email. Please Check The Email');
      </script>
    ";
  }
}
?>
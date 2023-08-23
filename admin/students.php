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
  <div style="background-color: whitesmoke; width:1200px;height: 1000px;margin-left: 230px;">
    <div style=" padding:90px;">
      <h1 style="text-align: center;font-family: 'Lobster', cursive;color: #333"> Companies </h1><br />
      <?php
      include('../db.php');
      $res = mysqli_query($con, "select * from users");
      if (mysqli_num_rows($res) > 0) {
        echo "<table class='table table-striped table-bordered'>";
        echo "<tr class='success'>";
        echo "<th>" . "Name" . "</th>";
        echo "<th>" . "Email Id" . "</th>";
        echo "<th>" . "Mobile" . "</th>";
        echo "<th>" . "Experience" . "</th>";
        echo "<th>" . "Address" . "</th>";
        echo "<th>" . "About" . "</th>";
        echo "<th>" . "Action" . "</th>";
        echo "</tr>";
        while ($r = mysqli_fetch_assoc($res)) {
          echo "<tr>";
          echo "<td>" . $r['name'] . "</td>";
          echo "<td>" . $r['email'] . "</td>";
          echo "<td>" . $r['mobile'] . "</td>";
          echo "<td>" . $r['experience'] . "</td>";
          echo "<td>" . $r['address'] . "</td>";
          echo "<td>" . $r['about'] . "</td>";
          if ($r['status'] == 1) {
            echo "<td>" . "<a class='btn btn-danger' href='block_std.php?id=" . $r['id'] . "'> Block Student</a>" . "</td>";
          } else {
            echo "<td>" . "<a class='btn btn-info' href='unblock_std.php?id=" . $r['id'] . "'>Un-Block Student</a>" . "</td>";
          }



          echo "</tr>";
        }
        echo "</table>";
      }


      ?>
    </div>

  </div>

</body>

</html>
<style>
  body {
    background-color: whitesmoke;
  }
</style>
<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <?php include('header.php');
  include('db.php');
  $res = mysqli_query($con, "select * from jobs  where approved ='Posted' && industry='" . $_GET['c'] . "' ");
  ?>
  <div class='jobs' style='margin-top: 30px; margin-bottom: 30px;'> <br />
    <h1 style="text-align: center;font-family: 'Lobster', cursive; color:#17a2b8"> All Job openings</h1>

    <div class="container" style="background-color: whitesmoke">
      <div style="height:auto; margin-left:6%; margin-top:30px; ">
        <div class="row div_products">
          <?php
          while ($r = mysqli_fetch_assoc($res)) {
            echo "<a class='all_details' style='width:45%; display:inline-block: vertical-align:top ; text-decoration:none; ' href='job-details.php?id=" . $r['id'] . "' >";
            echo "<span style='color:#296196; font-weight:600;font-size:16px;'>" . "Job" . "</span>" . "<br/>";
            echo "<span class='s_name' style='color:  #cd4237;line-height:35px; font-size:19px;'>" . $r["title"] . " </span>" . "<br/>";
            echo "<span class='s_name' style='color:  #666666;'>" . "Location: &nbsp;" . $r["location"] . " </span>";

            echo "<span class='s_name' style='color:  #666666;'>" . "&nbsp;&nbsp;&nbsp;&nbsp;Experience:&nbsp; " . $r["experience"] . " </span>" . "<br/>";

            echo "<span class='s_name' style='color:  #666666;'>" . "Role: &nbsp;" . $r["role"] . " </span>";

            echo "<span class='s_name' style='color:  #666666;'>" . "&nbsp;&nbsp;Posted On:&nbsp; " . $r["dop"] . " </span>" . "<br/>";
            echo "<span class='s_name' style='color:  #666666;'>" . "Key Skills >&nbsp; " . "<span style='color:#0d8cd5'>" . $r["skills"] . "</span>" . " </span>";
            echo "</a>";
          } ?>
        </div>
      </div>
    </div>
  </div>


  <?php include('footer.php');
  ?>
</body>

</html>

<style>
  .all_details {

    display: inline-block;
    height: auto;
    width: 250px;
    vertical-align: top;
    margin-right: 25px;
    margin-top: 15px;
    margin-bottom: 50px;
    border: solid #eeeded 1.5px;
    background: #fff;
    padding-top: 20px;
    padding-left: 20px;
    padding-bottom: 20px;

  }

  #div_products {
    height: auto;
    margin-left: 35px;
    margin-top: 30px;
    border-top: 5px solid #eaeaea;

  }

  span {
    line-height: 30px;
  }
</style>
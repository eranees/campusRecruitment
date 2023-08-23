<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
</head>

<body>
  <?php include('header.php');
  include('db.php');
  $res = mysqli_query($con, "select * from jobs where approved ='Posted' limit 8  ");
  ?>
  <div style="margin-top: -30px; z-index: -1" id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div style="background-image: url(img/6.jpg);background-size: 100%; height: 700px;">
          <div style="" class='title-wrap'>
            <marquee behavior="alternate" direction='left'>
              <h1 class='all_titles' style="color: #C743AC">Choose a job you love</h1>
            </marquee>
          </div>
        </div>
      </div>

      <div class="item">
        <div style="background-image: url(img/22.jpg);background-size: 100%; height: 700px;">
          <div class='title-wrap'>
            <h1 class='all_titles' style="color: #C743AC; ">The home of your dream job</h1>
          </div>
        </div>
      </div>
      <div class="item">
        <div style="background-image: url(img/8.jpg);background-size: 100%; height: 700px;">
          <div style="" class='title-wrap'>
            <h1 class='all_titles' style="color: #C743AC;">Exceed your potential… come join us!</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->

  </div>
  <div class='jobs' style='margin-top: 30px; margin-bottom: 30px;'> <br />
    <h1 style="text-align: center; color:#e80a89"> Find latest job openings</h1>
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
  <div class='jobs' style='margin-top: 30px; margin-bottom: 30px;'> <br />
    <h1 style="text-align: center;color:#e80a89">Companies Registered with Us </h1> <br /><br />
    <div class="container" style="background-color: whitesmoke">
      <div style="height:auto; margin-left:6%; margin-top:30px; ">
        <div class="row div_products">
          <?php
          $res = mysqli_query($con, "select * from company_login where status ='Confirm' limit 6  ");
          while ($r = mysqli_fetch_assoc($res)) {
            echo "<a class='all_details1' style='width:45%; display:inline-block: vertical-align:top ; text-decoration:none; ' href='company-details1.php?id=" . $r['id'] . "' >";
            echo "<span style='color:#296196; font-weight:600;font-size:16px;'>" . "Company Name" . "</span>" . "<br/>";
            echo "<span class='s_name' style='color:  #f05a28 ;line-height:35px; font-size:19px;'>" . $r["name"] . " </span>" . "<br/>" . "<br/>";

            echo "<span class='s_name' style='color:  #666666;'>" . "Info: &nbsp;" . $r["about"] . " </span>";

            echo "</a>";
          } ?>
        </div>
      </div>
    </div>
  </div>
  <div style="height:120px"></div>
  <h1 style="text-align: center;color:#e80a89">Job Seekers Reviews </h1>
  <?php require_once('reviews.php'); ?>
  <div style="height: 120px"></div>
  <h1 style="text-align: center;color:#e80a89">Job Industries </h1>
  <div class="container">
    <?php
    $res = mysqli_query($con, "select * from category");
    while ($r = mysqli_fetch_assoc($res)) {
      echo "<a href='jobs-cat.php?c=$r[name]' id='cat_btn'>" . $r['name'] . "</a>";
    }
    ?>
  </div>
  <div style="height: 60px"></div>
  <?php include('footer.php');
  ?>
</body>

</html>
<style>
  body {
    background-color: grey;
  }

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

  .all_details1 {

    display: inline-block;
    height: 230px;
    width: 230px;
    vertical-align: top;
    margin-right: 25px;
    margin-top: 15px;
    margin-bottom: 50px;
    border: solid #eeeded 1.5px;
    background: #fff;
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
  }

  #div_products {
    height: auto;
    margin-left: 35px;
    margin-top: 30px;
    border-top: 5px solid #eaeaea;
  }

  .span {
    line-height: 30px;
  }

  .title-wrap {
    width: 70%;
    margin-left: auto;
    margin-right: auto;
  }

  .all_titles {
    font-size: 45px;
    line-height: 65px;
    font-weight: 700;
    /*color: white;*/
    font-family: Raleway;
    text-transform: capitalize;
    padding-top: 25%;
    text-align: center;
  }

  #cat_btn {
    background-color: white;
    color: #222;
    border: 1px solid #222;
    text-align: center;
    border-radius: 4px;
    font-size: 17px;
    margin-top: 30px;
    /*width: 200px;*/
    padding: 6px 13px;
    cursor: pointer;
    font-family: 'Raleway', sans-serif;
    display: inline-block;
    text-decoration: none;
    transition: all .4s;
    margin-left: 30px !important;
    text-transform: capitalize;
  }

  #cat_btn:hover {
    background-color: #222;
    color: white;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <div id="outer_wrapper">
    <ul id="slider">
      <?php
      $reviews = mysqli_query($con, "select * from reviews join users on reviews.user_id= users.id limit 6 ");
      while ($rev = mysqli_fetch_assoc($reviews)) {
      ?>
        <li>
          <div class="slider_inner text-center">
            <span><?php echo $rev['name']; ?> </span><br>
            <?php
            echo "<img src='$rev[profile]' style='width:80px; height:80px;border-radius:50%;'>";
            ?>

            <?php $i = 0;
            $rat = $rev['rating'];
            echo "<br>";
            while ($i < $rat) {
              echo '<span><i class="fa fa-star" style="color: #fb641b"></i></span>';
              $i++;
            }
            while ($i < 5) {
              echo '<span><i class="fa fa-star" style="color:whitesmoke"></i></span>';
              $i++;
            }
            ?>
            <p class="text-center"><?php echo $rev['review']; ?> </p>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>



  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Source+Sans+Pro:ital@1&display=swap');

    #outer_wrapper {
      width: 690px;
      background-color: whitesmoke;
      margin: 0 auto;
    }

    #slider:focus {
      outline: none;
    }

    #slider {
      list-style-type: none;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .slick-slide {
      outline: none
    }

    .slider_inner p {
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 22px;
      line-height: 32px;
      color: #000000;
      padding: 20px 0;
    }

    .slider_inner h4,
    .slider_inner h6 {
      font-family: 'Lora', serif;
    }

    .slider_inner h4,
    .slider_inner h6,
    .slider_inner p {
      text-align: center;
      margin: 0;
    }

    .slider_inner h4 {
      font-family: 'Lora', serif;
      font-size: 30px;
      line-height: 32px;
      color: #191919;
    }

    .slider_inner h6 {
      font-family: 'Lora', serif;
      font-size: 18px;
      line-height: 32px;
      color: #191919;
    }

    .slick-dots li.slick-active button:before,
    .slick-dots li button:focus:before,
    .slick-dots li button:hover:before {
      /* color: #FF0000;
    opacity: 1; */
      opacity: 0;
    }

    .slick-dots li button:before {
      font-size: 15px;
      opacity: 0;
      text-align: left;
      width: 14px;
      height: 15px;
    }

    .slick-dots {
      bottom: -100px;
    }

    .slick-dots li button {
      width: 15px;
      height: 15px;
      /* padding: 5px; */
      /* cursor: pointer; */
      color: transparent;
      border: 0;
      outline: 0;
      background: 0 0;
      border: 1px solid #e80a89;
      border-radius: 50px;
      display: flex;
      align-items: center;
      text-align: center;
      background-color: #fff;
    }

    .slick-active button {
      background-color: #e80a89 !important;
    }
  </style>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    // jQuery(document).ready(function() {
    //   $('#slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: true,
    //     arrows: false,
    //     autoplay: true,
    //     infinite: true,
    //     autoplaySpeed: 4000
    //   });
    // });
  </script>

</body>

</html>
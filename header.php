<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <?php
    require_once('all.php');
    ?>
</head>

<body>
    <div class='' style="background-color:lightblue;color:#fff;text-align: center;padding:3px;">
        <form class="navbar-form " action="search.php">
            <div class="input-group">
                <input type="text" class="form-control" name='query' placeholder="Search Jobs on name, qualification, skills, experience, location, industry etc" style="width: 600px;">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class='header2'>
        <div class="both">
            <a class="title" style="margin-left:370px; font-size:30px;" href="index.php">University Campus Placement System </a> <br>
        </div>
        <div class="both">
            <ul class="all_link">
                <!-- <li><a href="index.php">Home</a> </li> -->
                <li><a href="jobs.php">Jobs</a>
                    <ul id="submenu">
                        <?php require_once "db.php";
                        $res = mysqli_query($con, "select * from category");
                        while ($record = mysqli_fetch_assoc($res)) {
                            echo "<li>" . "<a href='jobs-cat.php?c=$record[id]'>" . $record["name"] . "</a>" . "</li>";
                        }
                        ?>
                    </ul>
                </li>
                <?php
                if (!isset($_SESSION["userLogin"])) { ?>
                    <li><a href="companies.php">Companies</a>
                        <ul id="submenu">
                            <?php require_once "db.php";
                            $res = mysqli_query($con, "select * from company_login where status ='Confirm'");
                            while ($record = mysqli_fetch_assoc($res)) {

                                echo "<li>" . "<a href='company-details1.php?id=$record[id]'>" . $record["name"] . "</a>" . "</li>";
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="company/login.php">Companies Login</a> </li>
                    <li><a href="company/register.php">Companies Registration</a> </li>
                <?php } ?>

                <?php
                // session_start();     
                if (isset($_SESSION["userLogin"])) { ?>
                    <li><a href="my-account.php">Profile</a> </li>
                    <li><a href="notifications.php">Notifications</a> </li>
                    <li><a href="logout.php">Logout</a> </li>

                <?php } else { ?>

                    <li><a id='btnsignin' style="cursor: pointer;" href="login.php">Student Login</a> </li>
                    <li><a href="register.php">Student Registeration</a> </li>
                    <li><a href="admin/login.php">Admin Login</a> </li>
                <?php } ?>

            </ul>
        </div>
    </div>







</body>

</html>

<!-- <script>
    $("#login").fadeOut(0);

    $("#btnsignin").click(function() {
        $("#login").fadeToggle(0);


    });
</script>


 -->

<?php
/*
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
}*/
?>
<style>
    body {
        font-family: 'Raleway', sans-serif !important;
        /*text-transform: capitalize;*/
    }

    .input_all_login {
        font-size: 15px;
        text-indent: 7px;
        margin-top: 3px;

    }

    .new {
        text-align: center;
        color: #2874f0;
        margin-top: -10px;
        margin-bottom: 20px;
        font-size: 15px;
        cursor: pointer;

    }

    #submenu {
        background-color: white;
        margin: 0;
        padding: 0;
        position: absolute;
        visibility: hidden;
        width: 400px;
        z-index: 876878979;
    }

    #submenu>li {
        margin: 0;
        list-style: none;
        padding: 7px 50px;

    }

    #submenu>li>a {
        text-decoration: none;
        color: #34495e !important;
        font-size: 15px;
    }

    .all_link>li:hover #submenu {
        visibility: visible;
    }
</style>
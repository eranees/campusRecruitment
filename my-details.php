<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php include('header.php');
    include 'db.php';
    $res = mysqli_query($con, "select * from my_details where userid='" . $_SESSION['userLogin'] . "'");
    if (mysqli_num_rows($res) == 0) {
    ?>
        <div class='container' style="background-color: white">


            <h3 class='one' style="color: #ff1122;">Let the top employers of your industry reach you. The home of your dream
                job</h3><br />
            <div class='hr'> </div>
            <h4 style="text-align:center;font-weight: 600; color: #c60; font-size: 18px; margin-left: 30px">Fill Out Your
                qualification details Following Details</h4>
            <div class='hr'> </div>
            <form method="post">
                <table cellpadding="5" cellspacing="0">



                    <tr>
                        <td> <label>Bachelors Details <span class='must'>* </span></label> </td>
                        <td><select name='grad' class='select' required id='grad'>
                                <option value=''>---Select---</option>
                                <option value='BCA'>BCA</option>
                                <option value='BSC-IT'>BSC-IT</option>
                                <option value='BBA'>BBA</option>
                                <option value='BSC'>BSC</option>
                                <option value='BA'>BA</option>
                                <option value='Other'>Other</option>
                            </select> </td>
                    </tr>

                    <!--    <tr>            
            <td> <label>Collage /University <span  class='must'>* </span></label> </td>         
            <td><input type="text"  name="college" placeholder="Collage /University Name" required id='inputTextBox'></td>
       </tr> -->


                    <tr>
                        <td> <label>Collage /University <span class='must'>* </span></label> </td>
                        <td><select name='college' class='select' required id='cl'>
                                <option value=''>---Select---</option>
                                <option value='IITM'>IITM</option>
                                <option value='WOMENS COLLEGE MA ROAD'>WOMENS COLLEGE MA ROAD</option>
                                <option value='WOMENS COLLEGE NAWAKADIL'>WOMENS COLLEGE NAWAKADIL</option>
                                <option value='ISLAMIA COLLEGE'>ISLAMIA COLLEGE</option>
                                <option value='WOMENS COLLEGE PULWAMA'>WOMENS COLLEGE PULWAMA</option>
                                <option value='BOYS DEFREE COLLEGE PULWAMA'>BOYS DEFREE COLLEGE PULWAMA</option>
                                <option value='WOMENS COLLEGE BARAMULLA'>WOMENS COLLEGE BARAMULLA</option>
                                <option value='BOYS DEFREE COLLEGE BARAMULLA'>BOYS DEFREE COLLEGE BARAMULLA</option>
                                <option value='AMAR SINGH COLLEGE'>AMAR SINGH COLLEGE</option>
                                <option value='SP COLLEGE'>SP COLLEGE</option>
                                <option value='BEMINA DEGREE COLLEGE'>BEMINA DEGREE COLLEGE</option>
                                <option value='BOYS DEFREE COLLEGE KULGAM'>BOYS DEFREE COLLEGE KULGAM</option>
                                <option value='BOYS DEFREE COLLEGE SHOPAIN'>BOYS DEFREE COLLEGE SHOPAIN</option>
                                <option value='WOMENS COLLEGE KULGAM'>WOMENS COLLEGE KULGAM</option>
                                <option value='WOMENS COLLEGE SHOPAIN'>WOMENS COLLEGE SHOPAIN</option>
                                <option value='BABA GHULAM SHAH BADSHAH UNIVERSITY RAJOURI'>BABA GHULAM SHAH BADSHAH
                                    UNIVERSITY RAJOURI/option>
                                <option value='KASHMIR UNIVERSITY SRINAGAR'>KASHMIR UNIVERSITY SRINAGAR</option>
                                <option value=' OTHER'>OTHER</option>
                            </select> </td>
                    </tr>


                    <tr>
                        <td> <label> Percentage % <span class='must'>* </span></label> </td>
                        <td><input type="text" name="per_grad" placeholder="%" required id='Number' minlength="2" maxlength="3"></td>
                    </tr>




                    <tr>
                        <td> <label>Maters Details <span class='must'>* </span></label> </td>
                        <td><select name='pg' class='select' required id='pg'>
                                <option value=''>---Select---</option>
                                <option value='MCA'>MCA</option>
                                <option value='MSC-IT'>MSC-IT</option>
                                <option value='MBA'>MBA</option>
                                <option value='MSC'>MSC</option>
                                <option value='MA'>MA</option>
                                <option value='Other'>Other</option>
                                <option value='No'> Masters Not done</option>
                            </select> </td>
                    </tr>

                    <!-- <tr>            
            <td> <label>University <span  class='must'>* </span></label> </td>         
            <td><input type="text"  name="un" placeholder="University Name" required id='inputTextBox2'></td>
       </tr> -->

                    <tr>
                        <td> <label>Collage /University <span class='must'>* </span></label> </td>
                        <td><select name='un' class='select' required id='cl'>
                                <option value=''>---Select---</option>
                                <option value='KASHMIR UNIVERSITY'>KASHMIR UNIVERSITY</option>
                                <option value='IUST'>IUST</option>
                                <option value='CENTRAL UNIVERSITY'>CENTRAL UNIVERSITY</option>
                                <option value='IGNOU'>IGNOU</option>
                                <option value='OTHER'>OTHER</option>
                            </select> </td>
                    </tr>


                    <tr>
                        <td> <label> Percentage % <span class='must'>* </span></label> </td>
                        <td><input type="text" name="per_pg" placeholder="%" required id='Number' minlength="2" maxlength="3"></td>
                    </tr>




                    <tr>
                        <td> <label>Other higher Qualification/Diploma<span class='must'>* </span></label> </td>
                        <td><textarea name="other" class='ta' placeholder="Other higher Qualification/Diploma Please Write in detail " style="height: 100px;" required></textarea> </td>




                    </tr>




                </table>
                <div class='hr'> </div>

                <input type="submit" class='bt_sb' name="btn_sbmt" value="Submit" id='submit_address' onclick="return Validate()">
                <div class='hr'> </div>
            </form>

        </div>

    <?php include('footer.php');
    } else {

        $record = mysqli_fetch_assoc($res);
    ?>
        <div class='container' style="background-color: white">

            <div style='margin-top:100px;' class='hr'> </div>
            <h4 style="text-align:center;font-weight: 600; color: #ee0011; font-size: 24px; margin-left: 30px">
                <?php echo  $_SESSION['userName']; ?> qualification details </h4>
            <div class='hr'> </div> <?php
                                    echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
                                    echo "<tr class='info'>";
                                    echo "<td> Bachlors Degree</td>";

                                    echo "<td> Collage/University Name </td>";
                                    echo "<td> Bachlors Percentage </td>";
                                    echo "</tr>";

                                    echo "<tr>";
                                    echo "<td> " .  $record["grad"] . "</td>";
                                    echo "<td> " .  $record["college"] . "</td>";
                                    echo "<td> " .  $record["per_grad"] . "</td>"; ?>
            </tr>
            </table><br /><br /><br />

            <?php
            echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Masters Degree</td>";
            echo "<td> University /Collage Name </td>";
            echo "<td> Masters Percentage </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> " .  $record["pg"] . "</td>";
            echo "<td> " .  $record["un"] . "</td>";
            echo "<td> " .  $record["per_pg"] . "</td>"; ?>
            </tr>
            </table><br /><br /><br />


            <?php
            echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Other Qualifications with details</td>";


            echo "<tr>";
            echo "<td> " .  $record["other"] . "</td>";
            ?>
            </tr>
            </table><br /><br /><br />





            <?php
            echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Experience</td>";


            echo "<tr>";
            echo "<td> " .   $_SESSION["exp"] . "</td>";
            ?>
            </tr>
            </table><br /><br /><br />


        </div>

    <?php  }
    include('footer.php'); ?>

    ?>

</body>

</html>

<script>
    function Validate() {
        var inn = document.getElementById("grad");
        if (inn.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select bacholors Degree!");
            return false;
        }
        var inn = document.getElementById("pg");
        if (inn.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select masters Degree!");
            return false;
        }
        var inn = document.getElementById("cl");
        if (inn.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select college");
            return false;
        }
    }
</script>

<?php

if (isset($_POST['btn_sbmt'])) {
    include 'db.php';

    mysqli_query($con, "insert into my_details(userid, grad, college,per_grad,pg,un,per_pg,other) values ('" . $_SESSION['userLogin'] . "','" . $_POST['grad'] . "','" . $_POST['college'] . "','" . $_POST['per_grad'] . "','" . $_POST['pg'] . "','" . $_POST['un'] . "','" . $_POST['per_pg'] . "','" . $_POST['other'] . "')");

    // echo '<script language="javascript">';
    // echo 'alert("Thank you for registration! Please Login to Apply for latest jobs.")';
    // echo '</script>';
    // echo "<script>"."alert('Thank you for registration! Please Login to Apply for latest jobs.')"."</script>";
    header('location:my-details.php');
}


?>




<style>
    .one {

        text-align: center;
        color: #007bff;
        padding-top: 50px;
        padding-bottom: 20px;
        font-weight: 600;
        text-transform: capitalize;
        font-family: 'Roboto', sans-serif;
        line-height: 40px;
    }

    body {
        background-color: whitesmoke;
        font-family: 'Roboto', sans-serif;
    }


    input[type=text],
    input[type=email],
    .select,
    .ta,
    input[type=password] {
        height: 42px;
        width: 530px;
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
<?php
ob_start();
?>
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
   <div style="background-color: whitesmoke; width:1200px;height: 1200px; margin-left: 230px">
      <div style="padding: 70px;">
         <h1 style="text-align: center; font-family: 'Lobster', cursive; color: #333">Add New Job Posting</h1><br />
         <h4 style="font-weight: 600; color: #c60; font-size: 17pt; text-align: center;">Please Fill Job Details
         </h4>
         <form method="post" class='job'>
            <table>
               <tr>
                  <td> <label>Job Title <span class='must'>* </span></label> </td>
                  <td><input type="text" required name="title" placeholder="Job Title" id='inputTextBox'></td>
               </tr>

               <tr>
                  <td> <label>Job Location <span class='must'>* </span></label> </td>
                  <td><input type="text" required name="location" placeholder="Job Location"></td>
               </tr>

               <tr>
                  <td> <label>Employment type <span class='must'>* </span></label> </td>
                  <td><select name='job_type'>
                        <option>---Select---</option>
                        <option>Permanent Job, Full Time</option>
                        <option>Not Permanent Job, Full Time</option>
                        <option>Part Time</option>
                     </select> </td>
               </tr>


               <tr>
                  <td> <label> Key Skills</label> <span class='must'> * </span> </td>
                  <td><input type="text" required name="skills" placeholder='Key skills'></td>
               </tr>

               <tr>
                  <td> <label>Salary <span class='must'>* </span></label> </td>
                  <td><input type="text" id='city' required name="salary" placeholder="Salary"></td>
               </tr>

               <tr>
                  <td> <label>industry <span class='must'>* </span></label> </td>
                  <td><select name='industry'>
                        <?php
                        include('../db.php');
                        $res = mysqli_query($con, "select * from category ");
                        echo "<option>Select Industry</option>";
                        while ($record = mysqli_fetch_assoc($res)) {
                           echo "<option value='{$record['id']}'>" . $record["name"] . "</option>";
                        }
                        ?>
                     </select> </td>
               </tr>

               <tr>
                  <td> <label> Role </span></label> <span class='must'>* </span></td>
                  <td><input type="text" required name="role" placeholder="Role"> </td>
               </tr>

               <tr>
                  <td> <label>Qualification Requirement <span class='must'>* </span></label> </td>
                  <td><input type="text" required name="qualification" placeholder="Qualification Requirement"> </td>
               </tr>

               <tr>
                  <td> <label>Min % in Graduation <span class='must'>* </span></label> </td>
                  <td><input type="text" required name="grd_marks" placeholder="%" maxlength="2" minlength="2" id=''> </td>
               </tr>
               <tr>
                  <td> <label>Experience Requirement <span class='must'>* </span></label> </td>
                  <td><select name='experience'>
                        <option>---Select---</option>
                        <option>Fresher</option>
                        <option>1 yrs</option>
                        <option>2 yrs</option>
                        <option>3 yrs</option>
                        <option>4 yrs</option>
                        <option>4 or above yrs</option>
                     </select> </td>

               </tr>

               <tr>
                  <td> <label>Job Description <span class='must'>* </span></label> </td>
                  <td><textarea style='height:100px;' name="description" required placeholder="Job Description"></textarea> </td>
               </tr>

               <tr>
                  <td> <label> Number of posts</label> <span class='must'> * </span> </td>
                  <td><input type="text" required name="posts" placeholder='Post' id='Number'></td>
               </tr>




            </table>


            <input type="submit" class='add' name="btn_sbmt" value="POST JOB" id='submit_address'>

         </form>
      </div>

   </div>

</body>

</html>


<?php

if (isset($_POST['btn_sbmt'])) {
   include('../db.php');
   mysqli_query($con, "insert into jobs(company_id,title,location,job_type,skills,salary,industry,role,qualification,experience,description,posts, grd_marks) values ('" . $_SESSION['company'] . "','" . $_POST['title'] . "','" . $_POST['location'] . "','" . $_POST['job_type'] . "','" . $_POST['skills'] . "','" . $_POST['salary'] . "','" . $_POST['industry'] . "','" . $_POST['role'] . "','" . $_POST['qualification'] . "','" . $_POST['experience'] . "','" . $_POST['description'] . "','" . $_POST['posts'] . "', '" . $_POST['grd_marks'] . "')");

   header('location:my-jobs.php');
}
?>

<style>
   body {
      background-color: whitesmoke;
   }

   .job input[type=text],
   textarea,
   select {
      height: 35px;
      width: 450px;
      padding: 6px;
      text-indent: 12px;
      outline: none;
      font-size: 13px;
      border-radius: 2px;
      border: 1px solid #cecece;
      margin-top: 9px;
      margin-left: 30%
   }

   .job input[type=text]:hover {

      border: 1px #eb641b solid;

   }


   .job label {
      margin-left: 140px;
      margin-top: 9px;
      font-size: 15px;


   }



   .add {
      height: 45px;
      padding: 3px;
      /*width:230px;*/
      padding-right: 15px;
      background: #fb641b;
      color: #fff;
      font-size: 15px;
      border-radius: 2px;
      border: none;
      outline: none;
      cursor: pointer;
      padding-left: 15px;
      width: 300PX;
      margin: 50px;
      margin-left: 385px;

      text-transform: uppercase;

   }

   .add:hover {
      box-shadow: 0 1px 2px 0 rgba(2, 1, 1, 2);

   }

   .must {
      color: red;
   }
</style>
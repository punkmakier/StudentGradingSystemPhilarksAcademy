
<style>
  .card-custom{
    width: 300px;
    height: 100px;
    background-color: rgba(230,230,230,0.2);
    border-radius: 10px;
    padding: 10px;
    position: relative;
    border-left: 2px solid #4266e9;
    display: inline-block;
    margin: 10px;
  }
</style>
<?php
global $mydb;

$reg = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE student_status = 'Regular'";
$stmt = mysqli_query($mydb->conn, $reg);

$reg1 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE student_status = 'Irregular'";
$stmt1 = mysqli_query($mydb->conn, $reg1);


$reg2 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE student_status = 'New'";
$stmt2 = mysqli_query($mydb->conn, $reg2);


$reg3 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE student_status = 'Transferee'";
$stmt3 = mysqli_query($mydb->conn, $reg3);


$reg5 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE SEX = 'Male'";
$stmt5 = mysqli_query($mydb->conn, $reg5);

$reg4 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE SEX = 'Female'";
$stmt4 = mysqli_query($mydb->conn, $reg4);

$reg6 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE NewEnrollees = 1";
$stmt6 = mysqli_query($mydb->conn, $reg6);


$reg7 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE NewEnrollees = 1 AND student_status = 'Regular'";
$stmt7 = mysqli_query($mydb->conn, $reg7);


$reg8 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE NewEnrollees = 1 AND student_status = 'Transferee'";
$stmt8 = mysqli_query($mydb->conn, $reg8);
?>


<div class="row">
         <div class="col-lg-14">
            <h1 class="page-header">Welcome to the <?php echo $_SESSION['ACCOUNT_TYPE'] ?> Panel</h1>
          </div>

          <div class="card-custom">
            Total Count of Regular
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; "><?php
              while($res = mysqli_fetch_array($stmt)){
                echo $res['enrollees'];
              }
            ?></strong>
          </div>
          <div class="card-custom">
            Total Count of Irregular
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt1)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

          <div class="card-custom">
            Total Count of New
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt2)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

          <div class="card-custom">
            Total Count of Transferees
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt3)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>
          <div class="card-custom">
            Total Count of Girl Students
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt4)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>
          <div class="card-custom">
            Total Count of Boy Students
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt5)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

          <div class="card-custom">
            Total Count of New Enrollees
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt6)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

          <div class="card-custom">
            Total Count of Old Enrollees
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt7)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

          <div class="card-custom">
            Total Count of Transferee Enrollees
            <strong style="position: absolute; right: 20%; bottom: 30%; font-size: 2rem; color: #4266e9; ">
            <?php
              while($res = mysqli_fetch_array($stmt8)){
                echo $res['enrollees'];
              }
            ?>
          </strong>
          </div>

 </div>
 
   
   
  